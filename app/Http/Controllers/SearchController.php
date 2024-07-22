<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari artikel berdasarkan judul
        $articles = Article::where('title', 'LIKE', "%$query%")
                           ->select('id', 'title', 'thumbnail', \DB::raw("'article' as type"))
                           ->get();

        // Cari post berdasarkan judul
        $posts = Post::where('title', 'LIKE', "%$query%")
                     ->select('id', 'title', 'id_category', \DB::raw("'post' as type"))
                     ->get();

        $results = $articles->merge($posts); // Gabungkan hasil artikel dan post

        return view('admin.search', compact('results', 'query'));
    }
}
