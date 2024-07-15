<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Note;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function cms()
    {
        $headerImages = DB::table('information')->get();
        
        return view('admin.cms.index', compact('headerImages'));
    }

    public function update(Request $request, $id)
{
    // Validasi input jika diperlukan
    $validatedData = $request->validate([
        'id' => 'required|exists:header_image,id',
        'title' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // tambahkan validasi sesuai kebutuhan
    ]);

    // Ambil data header_image berdasarkan ID
    $header = DB::table('information')->where('id', $id)->first();

    // Proses upload gambar baru jika ada
    if ($request->hasFile('image')) {
        // Hapus gambar lama (jika ada) sebelum mengupload yang baru
        if ($header->image) {
            // Hapus dari direktori public
            $oldImagePath = public_path('assets/image/header/') . $header->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Simpan gambar baru dengan store() untuk mengelola penyimpanan oleh Laravel
        $imagePath = $request->file('image')->store('assets/image/header', 'public');

        // Ambil nama file dari path
        $fileName = basename($imagePath);

        // Pindahkan file ke direktori yang ditentukan di dalam public
        $request->file('image')->move(public_path('assets/image/header'), $fileName);

        // Update record dengan gambar baru
        DB::table('information')
            ->where('id', $id)
            ->update([
                'image' => $fileName,
                'description' => $request->input('description'),
                'title' => $request->input('title'),
                // Update kolom lain jika perlu
            ]);
    } else {
        // Update record tanpa mengubah gambar
        DB::table('information')
            ->where('id', $id)
            ->update([
                'description' => $request->input('description'),
                'title' => $request->input('title'),
                // Update kolom lain jika perlu
            ]);
    }

    // Redirect ke halaman yang sesuai
    return redirect()->route('admin.cms')->with('success', 'Header image updated successfully');
}



}
