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
        $image1 = DB::table('information')->where('id', 1)->first();
        $image2 = DB::table('information')->where('id', 2)->first();
        $image3 = DB::table('information')->where('id', 3)->first();
        $image4 = DB::table('information')->where('id', 4)->first();
        $image5 = DB::table('information')->where('id', 5)->first();
        $post = DB::table('posts')->where('id_category', 1)->where('status', "published")->orderBy('id', 'asc')->limit(4)->get();
        $announcement = DB::table('posts')->where('id_category', 2)->where('status', "published")->orderBy('id', 'asc')->limit(4)->get();
        
        return view('dashboard', compact('berita', 'pengumuman', 'image1', 'image2', 'image3', 'image4', 'image5', 'post', 'announcement'));
    }

    public function history(){
        return view('history');
    }

    public function visi(){
        return view('visi');
    }
}
