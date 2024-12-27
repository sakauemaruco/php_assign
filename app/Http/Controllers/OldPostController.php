<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts=Post::all();
        // $posts=Post::with('user')->get();
        // $posts=Post::where('user_id', auth()->id())->get();
        // $posts=Post::where('user_id', '!=', auth()->id())->get();
        // $posts=Post::whereDate('created_at', '>=', '2024-12-19')->get();
        // $posts=Post::where('user_id', 1)->whereDate('created_at',  '>=', '2024-12-19')->get();
        return view('post.index', compact('posts'));
    }

    public function show ($id) {
        $post=Post::find($id);
        return view('post.show', compact('post'));
    }

    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        Gate::authorize('test');

        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();

        $post = Post::create($validated);
        return back()->with('message', '保存しました');
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();

        $post->update($validated);

        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Post $post) {
        $post->delete();
        $request->session()->flash('message', '削除しました');
        return redirect('post');
    }
}
