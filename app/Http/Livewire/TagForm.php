<?php

namespace App\Http\Livewire;
use \Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\Tag;
use Livewire\Component;

class TagForm extends Component
{
    public $name , $slug , $tag_id;
    public $updateMode = false;

    protected $rules = [
        'name' => 'required',
    ];
    protected $messages = [
        'name.required' => 'وارد کردن این بخش الزامی میباشد' ,
    ];


    protected function updated($input) {

        $this->validateOnly($input);

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
      $tag = Tag::find($id);
      $tag ->pages()->detach();
      $tag->delete();
       $this->resetInputFields();
       $this->alert('warning', 'برچسب مورد نظر حذف شد', [
        'position' => 'center'
    ]);

   }

   public function generateSlug()
   {
       $this->slug = SlugService::createSlug(Tag::class, 'slug', $this->name);
   }

   public function edit($id)
   {
       $this->updateMode = true;
       $this->resetValidation();
       $tag = Tag::where('id',$id)->first();
       $this->tag_id = $id;
       $this->name = $tag->name;
       $this->slug = $tag->slug;
   }

   public function store() {
    $this->validate();
    $tag = new Tag();
    $tag->name = $this->name;
    $tag->slug = $this->slug;
    $tag->save();
    $this->alert('success', 'ثبت نام با موفقیت انجام شد .', [
        'position' => 'center'
    ]);
    $this->resetInputFields();
 }

 public function update()
    {
            $tag = Tag::find($this->tag_id);
                $tag->update([
                    'name' => $this->name,
                ]);

            $this->updateMode = false;
            $this->alert('success', 'تغییرات با موفقیت ثبت شد', [
                'position' => 'center'
            ]);
            $this->resetInputFields();


    }


   private function resetInputFields(){
    $this->name = '';
}
    public function render()
    {
        return view('livewire.tags.tag-form' , [
            'tags' => Tag::all(),
        ]);
    }
}
