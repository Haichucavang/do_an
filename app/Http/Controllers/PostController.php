<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use File;
use Stogare;
use App\Http\Resources\Category;
use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('category')->orderBy('id','DESC')->paginate(4);
        return view('layouts.post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPost::all();
        return view('layouts.post.create')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->post_date = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $post->title = $request->title;
        $post->views = $request->views;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_category_id =$request->post_category_id;

        if($request['image']){
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,FacadesFile::get($image));
            $post->image = $name;
         }else{
            $post->image = 'default.jpg';
         }
        $post->save();
        return redirect()->route('post.index')->with('success', 'Post Insert Successful');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show( $post)
    {
        $post = Post::find($post);
        $category = CategoryPost::all();
        return view('layouts.post.show')->with(compact('category','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $post)
    {
        $post = Post::find($post);
        $post->post_date = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $post->title = $request->title;
        $post->views = $request->views;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_category_id =$request->post_category_id;

        if($request['image']){
            unlink('public/uploads/'.$post->image);
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,FacadesFile::get($image));
            $post->image = $name;

         }
        $post->save();
        return redirect()->route('post.index')->with('success', 'Post Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $post)
    {
        $path = 'public/uploads/';
        $post = Post::find($post);
        unlink($path.$post->image);
        $post->delete();
        return redirect()->back();
    }
}
