<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post =  Post::all();
        return view('home', compact('post'));
    }

    public function show($id){
        $post = Post::find($id);
        $this->authorize('updatePost',$post);
        return view('update',compact('post'));
    }
    public function update(Request $request, $id){
        $post = Post::find($id);
        $this->authorize('updatePost',$post);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('home');
    }
}
