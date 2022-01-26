<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Page;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page');
    }

    public function mainpage()
    {
        $pages = Page::where('status' , '1')->get();
        return view('site.page-main', ['pages' => $pages] );
    }

    public function category(Category $category)
    {
        $pages= $category->pages()->paginate(2);
        return view('site.page-cat', ['pages' => $pages] , ['category' => $category] );

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function search(Request $request)
    {
        if($request->ajax())
        {
        $output="";
        $pages = Page::where('name','LIKE','%'.$request->search."%")->get();
            if($pages)
                {
                foreach ($pages as $key => $page) {
                    $url = url('pages/'.$page->slug);
                    $img = url($page->image);
                    $output.='<div class="search-item">'.
                    "<img src='{$img}'></img>".
                    "<a href='{$url}'>".$page->name."</a>".
                    '</div>';
                    }
                return Response($output);
                }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($page)
    {
        $page = Page::where('slug', $page)->firstOrFail();
        $related = Page::whereHas('tags', function ($q) use ($page) {
            return $q->whereIn('name', $page->tags->pluck('name'));
        })
        ->where('id', '!=', $page->id)
        ->get();
        if($page->status == 1)
        {

            return view('site.page-trade', ['page' => $page] , ['related' => $related] );
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
       // $roles = User::where('role_id','2')->get();
        $tags = Tag::pluck('name' , 'id');
        $cats = Category::pluck('name' , 'id');
        $page_tags = DB::table('page_tag')->where('page_id' , $page->id)->pluck('tag_id')->toArray();
        $page_cats = DB::table('category_page')->where('page_id' , $page->id)->pluck('category_id')->toArray();

     //dd(  $page_tags);
        return view('admin.page-edit',compact('page' , 'page_tags' , 'tags' , 'cats' , 'page_cats'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'tag' => 'required',
            'seo_title' => 'required',
        ]);
        $page->update($request->all());

                    // چک کردن دسته بندی های اضافه شده جدید

        if($request['category'])
        {
            $list_cat = $request['category'];
          foreach( $list_cat as $k => $v)
          {
            if(!Category::where('id', $v)->first())
            {
               // dd($v);
                $categories = new Category();
                $categories->name = $v;
                $categories->save();
                $new_cat[] = $categories->id;
            }
            else{
                $old_cat[] = $v ;
            }
        }
        }
        if(isset($new_cat) && isset($old_cat))
        {
            $data_cat = array_merge($new_cat, $old_cat);
        }
        elseif(isset($new_cat))
        {
            $data_cat = $new_cat;
        }
        else{
            $data_cat = $old_cat;
        }

            // چک کردن تگ های اضافه شده جدید

        if($request['tag'])
        {
            $list_tag = $request['tag'];
          foreach( $list_tag as $k => $v)
          {
            if(!Tag::where('id', $v)->first())
            {
               // dd($v);
                $tags = new Tag();
                $tags->name = $v;
                $tags->save();
                $new_tag[] = $tags->id;
            }
            else{
                $old_tag[] = $v ;
            }
        }
        }
        if(isset($new_tag) && isset($old_tag))
        {
            $data_tag = array_merge($new_tag, $old_tag);
        }
        elseif(isset($new_tag))
        {
            $data_tag = $new_tag;
        }
        else{
            $data_tag = $old_tag;
        }


       $tag_list = array_filter( $data_tag ,'strlen');
       $cat_list = array_filter($data_cat ,'strlen');
        $page->tags()->sync($tag_list);
        $page->categories()->sync($cat_list);
        return redirect()->route('admin.page.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
