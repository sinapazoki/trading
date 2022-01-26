<?php

namespace App\Http\Livewire;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Category;
use Livewire\Component;

class CategoryForm extends Component
{
    public $name , $slug , $category_id;
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
      $category = Category::find($id);
      $category ->pages()->detach();
      $category->delete();
       $this->resetInputFields();
       $this->alert('warning', 'دسته بندی مورد نظر حذف شد', [
        'position' => 'center'
    ]);

   }

   public function generateSlug()
   {
       $this->slug = SlugService::createSlug(Category::class, 'slug', $this->name);
   }

   public function edit($id)
   {
       $this->updateMode = true;
       $this->resetValidation();
       $category = Category::where('id',$id)->first();
       $this->category_id = $id;
       $this->name = $category->name;
       $this->slug = $category->slug;
   }

   public function store() {
    $this->validate();
    $category = new Category();
    $category->name = $this->name;
    $category->slug = $this->slug;
    $category->save();
    $this->alert('success', 'دسته بندی جدید اضافه شد', [
        'position' => 'center'
    ]);
    $this->resetInputFields();
 }

 public function update()
    {
            $category = Category::find($this->category_id);
                $category->update([
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
        return view('livewire.category.category-form' , [
            'cats' => Category::all(),
        ]);    }
}
