<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']);
    }
    
    public function index()
    {
        $posts = Post::all();

        return view('home')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('post-img')){
            $path = $request->file('post-img')->store('posts-img', 'public');
        }

        $newPost = Post::create([
            'author_id'=>$request->author,
            'title'=>$request->title,
            'content'=>$request->content,
            'path_to_image'=>$path
        ]);
        
        return redirect()->route('post.get', $newPost->id);
        
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.post')->with(compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if($request->hasFile('post-img')){
            $post->path_to_image = $request->file('post-img')->store('posts-img', 'public');
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('post.get', $id)->with('updateMessage', 'post atualizado com sucesso');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('user.dashboard')->with('deleteMessage', 'o post foi apagado com sucesso');
    }
}
