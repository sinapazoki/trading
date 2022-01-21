<?php

namespace App\Http\Livewire;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Page;
use App\Models\Role;
use App\Models\Tag;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Component;

class PageForm extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $name , $image , $user_id, $imageupdated , $description  , $video , $slug , $page_id , $tag = [] , $seo_title , $seo_description;
    public $updateMode = false;
    public $isDisabled = 'disabled';
    public $isUpdating = 'بروزرسانی ...';

    public function resetInputFields(){
        $this->name = '';
        $this->image = '';
        $this->imageupdated = '';
        $this->description = '';
        $this->user_id = '';
        $this->video = '';
        $this->tag = '';
        $this->seo_title = '';
        $this->seo_description = '';

    }

    protected $rules = [
        'name' => 'required|max:40',
        'user_id' => 'required',
        'video' => 'required',
        'image' => 'required',
        'description' => 'nullable',
        'tag' => 'nullable',
        'seo_title' => 'nullable',
        'seo_description' => 'nullable',
    ];
    protected $messages = [
        'name.required' => 'وارد کردن این بخش الزامی میباشد' ,
        'user_id.required' => 'وارد کردن این بخش الزامی میباشد' ,
        'video.required' => 'وارد کردن این بخش الزامی میباشد' ,
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
       $page =  Page::find($id);
       $page ->tags()->detach();
       $page ->delete();
       $this->resetInputFields();
       $this->alert('warning', 'دوره مورد نظر حذف شد', [
        'position' => 'center'
    ]);

   }

   public function status($id)
   {


       $page = Page::find($id);

       if($page->status == 1){
           $page->status = '0';
       }
           elseif ($page->status == 0)
           {
           $page->status = '1';
           }

       $page->save();
      }

   public function generateSlug()
   {
       $this->slug = SlugService::createSlug(Page::class, 'slug', $this->name);
   }

   public function updatedName($value)
   {
      $this->seo_title =  $this->name . " | تریدینگ ورلد ";
   }

   public function edit($id)
   {
       $this->updateMode = true;
       $this->resetValidation();
       $page = Page::where('id',$id)->first();
       $this->page_id = $id;
       $this->name = $page->name;
       $this->email = $page->email;
       $this->description = $page->description;
       $this->video = $page->video;
       $this->user_id = $page->user->id;
       $this->image = $page->image;


   }

   public function store() {
    $this->validate();
    $pages = new Page();
    $pages->image = $this->image;
    $pages->name = $this->name;
    $pages->description = $this->description;
    $pages->user_id = $this->user_id;
    $pages->video = $this->video;
    $pages->slug = $this->slug;
    $pages->seo_title = $this->seo_title;
    if($this->tag)
    {
        $list_tag = $this->tag;
      foreach( $list_tag as $k => $v)
      {
        if(!Tag::where('id', $v)->first())
        {
           // dd($v);
            $sina = new Tag();
            $sina->name = $v;
            $sina->save();
            $new[] = $sina->id;
        }
        else{
            $old[] = $v ;
        }
    }
    }
    if(isset($new) && isset($old))
    {
        $data = array_merge($new, $old);
    }
    elseif(isset($new))
    {
        $data = $new;
    }
    else{
        $data = $old;
    }
    $pages->save();
    $pages->tags()->attach( $data);

    $this->alert('success', 'دوره جدید با موفقیت اضافه شد.', [
        'position' => 'center'
    ]);
    $this->resetInputFields();
    $this->dispatchBrowserEvent('close-modal');
    $this->emit('productStore');

    }

      public function render()
    {
        if (!empty($this->description) && !empty($this->name) && !empty($this->user_id) && !empty($this->image) && !empty($this->video)) {
            $this->isDisabled = '';
            $this->isUpdating = 'انتشار مطلب';
         }
        return view('livewire.pages.page-form' , [
            'pages' => Page::orderBy('id', 'ASC')->paginate(4),
            'roles' => User::where('role_id' , '2')->get(),
            'tags' => Tag::all(),
        ]);
       }


}
