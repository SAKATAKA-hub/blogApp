<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //モデルの利用
use App\Http\Requests\PostRequest;


class PostController extends Controller
{

    #1 ブログ一覧の表示
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    #2 ブログ記事の表示
    public function show(Post $post) //Implicit Bindingの利用
    {
        return view('posts.show')
            ->with(['post' => $post]);
    }

    #3 新規投稿ページの表示
    public function create(Post $post)
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('posts.index');
    }

    #4 投稿内容編集ページの表示
    public function edit(Post $post) //Implicit Bindingの利用
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        // $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('posts.show',$post);
    }

    #5 投稿削除
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }




}
