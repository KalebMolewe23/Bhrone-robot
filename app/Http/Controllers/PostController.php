<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'id_category' => 'required|exists:categories,id',
            'body' => 'required',
            'status' => 'required|in:draft,published',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'nullable|unique:posts,slug',
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

        $post = new Post();
        $post->user_id = auth()->id();
        $post->thumbnail = $thumbnailPath; // Simpan path gambar di basis data
        $post->title = $request->title;
        $post->slug = $request->slug ?: Str::slug($request->title);
        $post->id_category = $request->id_category;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }


    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }
    
/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Periksa apakah post ditemukan
        if ($post) {
            // Hapus post
            $post->delete();

            // Redirect ke halaman tertentu atau tampilkan pesan sukses
            return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dihapus');
        } else {
            // Redirect atau tampilkan pesan error jika post tidak ditemukan
            return redirect()->route('admin.posts.index')->with('error', 'Post tidak ditemukan');
        }
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'id_category' => 'required|exists:categories,id',
            'body' => 'required',
            'status' => 'required|in:draft,published',
            'new_thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'nullable|unique:posts,slug,' . $id,
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->slug = $request->slug ?: Str::slug($request->title);
        $post->id_category = $request->id_category;
        $post->body = $request->body;
        $post->status = $request->status;

        // Upload thumbnail if a new one is provided
        if ($request->hasFile('new_thumbnail')) {
            $thumbnailPath = $request->file('new_thumbnail')->store('thumbnails', 'public');
            $post->thumbnail = $thumbnailPath;
        }

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->with('user', 'category')->firstOrFail();
        return view('posts.show', compact('post'));
    }
}
