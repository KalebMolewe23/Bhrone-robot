<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Note;


class DashboardController extends Controller
{
    public function index()
    {
        // Ambil 2 postingan terbaru
        $latestPosts = Post::latest()->take(2)->with('user', 'category')->get();
        $postCount = Post::count();
        $userCount = User::count();
        $noteCount = Note::count();
        $notes = Note::paginate(5);

        return view('admin.dashboard', compact('latestPosts', 'postCount', 'userCount', 'noteCount', 'notes'));
    }
}
