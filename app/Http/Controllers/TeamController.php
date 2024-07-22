<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use DataTables;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index(){
        return view('admin.teams.index');
    }

    public function dataPost(){
        $posts = Team::all();
        return DataTables::of($posts)->make(true);
    }

    public function create()
    {
        $categories = Team::all();
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'roles' => 'required|in:lecturer,student',
            'body' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            if ($thumbnail->isValid() && $thumbnail->getClientOriginalExtension()) {
                // Simpan gambar dengan nama unik di folder 'public/assets/image/post'
                $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
                $thumbnail->move(public_path('assets/image/teams'), $thumbnailName);

                // Set path gambar untuk disimpan di basis data
                $thumbnailPath = 'assets/image/teams/' . $thumbnailName;
            } else {
                return back()->withErrors(['msg' => 'File yang Anda upload bukan file gambar!']);
            }
        }

        $post = new Team();
        $post->user_id = auth()->id();
        $post->thumbnail = $thumbnailPath; // Simpan path gambar di basis data
        $post->title = $request->title;
        $post->roles = $request->roles;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

        return redirect()->route('admin.teams.index')->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $post = Team::findOrFail($id);
        return view('admin.teams.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'roles' => 'required|in:lecturer,student',
            'body' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            if ($thumbnail->isValid() && $thumbnail->getClientOriginalExtension()) {
                // Simpan gambar dengan nama unik di folder 'public/assets/image/post'
                $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
                $thumbnail->move(public_path('assets/image/teams'), $thumbnailName);

                // Set path gambar untuk disimpan di basis data
                $thumbnailPath = 'assets/image/teams/' . $thumbnailName;
            } else {
                return back()->withErrors(['msg' => 'File yang Anda upload bukan file gambar!']);
            }
        }

        $post = Team::findOrFail($id);
        $post->thumbnail = $thumbnailPath;
        $post->title = $request->title;
        $post->roles = $request->roles;
        $post->body = $request->body;
        $post->status = $request->status;

        $post->save();

        return redirect()->route('admin.teams.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Team::findOrFail($id);
        $post->delete();
        
        return response()->json(['success' => true]);
    }
}
