<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Penggunas;

class HaloController extends Controller
{
    public function index()
    {
        $Pengguna = Pengguna::all();
        return view(
            'halo',
            ['namaUser' => $Pengguna]
        );
    }
    public function about()
    {
        $semuaPost = Post::all();
        return view('about', ['semuaPost' => $semuaPost]);
    }
    public function simpan(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        // Simpan data ke database
        Post::create([
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/about')->with('success', 'Post berhasil disimpan!');
    }

    public function hapus($id)
    {
        // Cari post berdasarkan ID
        $post = Post::find($id);

        // Hapus post dari database
        $post->delete();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/about')->with('success', 'Post berhasil dihapus!');
    }

    public function edit($id)
    {
        // Cari post berdasarkan ID
        $post = Post::find($id);

        // Tampilkan form edit dengan data post
        return view('edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        // Cari post berdasarkan ID
        $post = Post::find($id);

        // Update data post
        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->save();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/about')->with('success', 'Post berhasil diperbarui!');
    }
}
