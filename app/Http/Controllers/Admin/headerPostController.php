<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderPost;
use App\Models\Post;
use Illuminate\Http\Request;

class headerPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = HeaderPost::first();
        $post1 = Post::where('id', $posts->post1)->first(['id', 'title', 'image']);
        $post2 = Post::where('id', $posts->post2)->first(['id', 'title', 'image']);
        $post3 = Post::where('id', $posts->post3)->first(['id', 'title', 'image']);
        $post4 = Post::where('id', $posts->post4)->first(['id', 'title', 'image']);
        $post5 = Post::where('id', $posts->post5)->first(['id', 'title', 'image']);
        
        return view('admin.headerpost.index', [
            'posts' => $posts,
            'post1' => $post1,
            'post2' => $post2,
            'post3' => $post3,
            'post4' => $post4,
            'post5' => $post5,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::where('status', '=', 'Active')->get();
        $post = new Post();
        return view('admin.headerpost.create', ['posts' => $posts, 'post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new HeaderPost();
        $post->create($request->all());
        return redirect()->route('headerposts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::where('status', '=', 'Active')->get();
        $headerpost = HeaderPost::find($id);
        return view('admin.headerpost.edit', ['posts' => $posts, 'headerpost' => $headerpost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $headerpost = HeaderPost::find($id);
        $headerpost->update($request->all());
        return redirect()->route('headerposts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
