<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
//bringing in the post model

use DB;
// using just SQL queries, bring in DB library

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //fetching all the model in this table

        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        //fetch by order, 'asc' = ascending, 'desc' = descending
        //$posts = Post::orderBy('title', 'desc')->get();

        //$post = post::where('title', 'Post Two')->get();

       //$posts = DB::select('SELECT * FROM posts');
       //using the SQL DB with  use DB

       $posts = Post::orderBy('created_at', 'desc')->paginate(10);
       //pagination, dividing a document into discrete page when reaches 10 posts

        return view('posts.index') ->with('posts', $posts);
        // index.blade.php file
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        //in post folder and create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
            /* to make sure these fields are filled */
        ]);

        // to create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        // saving the inputs

        return redirect('/posts')->with('success', 'Posts Created');
        // return with 'success' message and showing own custom message -> 'Posts Created'
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show') ->with('post', $post);
        //find and show the post by id from DB
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
