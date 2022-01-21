<?php

namespace App\Http\Controllers;
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            return view('site.page-show', ['page' => $page] , ['related' => $related] );
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
        $roles = User::where('role_id','2')->get();
        $tags = Tag::pluck('name' , 'id');
        $page_tags = DB::table('page_tag')->where('page_id' , $page->id)->pluck('tag_id')->toArray();
     //dd(  $page_tags);
        return view('admin.page-edit',compact('page' , 'roles' , 'page_tags' , 'tags'));

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
       $tag_list = array_filter($request['tag'] ,'strlen');
        $page->tags()->sync($tag_list);
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
