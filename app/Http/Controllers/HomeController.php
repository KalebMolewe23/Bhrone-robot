<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data berita dengan status published dan kategori 1
        $berita = Post::where('id_category', 1)->where('status', 'published')->get();
        $pengumuman = Post::where('id_category', 2)->where('status', 'published')->get();
        $information = DB::table('information')->get();
        $post = DB::table('posts')->where('id_category', 1)->where('status', "published")->orderBy('id', 'asc')->limit(4)->get();
        
        return view('dashboard', compact('berita', 'pengumuman', 'information', 'post'));
    }

    public function history(){
        return view('history');
    }

    public function visi(){
        return view('visi');
    }
}
