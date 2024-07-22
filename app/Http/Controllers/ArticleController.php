<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use DataTables;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(){
        return view('admin.articles.index');
    }

    public function dataPost(){
        $posts = Article::all();
        return DataTables::of($posts)->make(true);
    }

    public function create()
    {
        $categories = Article::all();
        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required|in:draft,published',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            if ($thumbnail->isValid() && $thumbnail->getClientOriginalExtension()) {
                // Simpan gambar dengan nama unik di folder 'public/assets/image/post'
                $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
                $thumbnail->move(public_path('assets/image/artikel'), $thumbnailName);

                // Set path gambar untuk disimpan di basis data
                $thumbnailPath = 'assets/image/artikel/' . $thumbnailName;
            } else {
                return back()->withErrors(['msg' => 'File yang Anda upload bukan file gambar!']);
            }
        }

        $post = new Article();
        $post->user_id = auth()->id();
        $post->thumbnail = $thumbnailPath; // Simpan path gambar di basis data
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $post = Article::findOrFail($id);
        return view('admin.articles.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required|in:draft,published',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            if ($thumbnail->isValid() && $thumbnail->getClientOriginalExtension()) {
                // Simpan gambar dengan nama unik di folder 'public/assets/image/post'
                $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
                $thumbnail->move(public_path('assets/image/post'), $thumbnailName);

                // Set path gambar untuk disimpan di basis data
                $thumbnailPath = 'assets/image/post/' . $thumbnailName;
            } else {
                return back()->withErrors(['msg' => 'File yang Anda upload bukan file gambar!']);
            }
        }

        $post = Article::findOrFail($id);
        $post->thumbnail = $thumbnailPath;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;

        $post->save();

        return redirect()->route('admin.articles.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Article::findOrFail($id);
        $post->delete();
        
        return response()->json(['success' => true]);
    }
}
