<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function create()
    {
        return view('designs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_design' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'code_design' => 'required|string|max:255',
            'pembuat_design' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Mengambil semua data yang dikirim dari form
        $data = $request->all();

        // Memeriksa apakah ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Membuat nama file gambar unik dengan timestamp
            $imageName = time().'.'.$request->gambar->extension();

            // Memindahkan file gambar ke direktori public/images
            $request->gambar->move(public_path('images'), $imageName);

            // Menyimpan path gambar ke array $data
            $data['gambar'] = 'images/' . $imageName;
        }

        // Menyimpan data ke database
        Design::create($data);

        return redirect()->route('designs.index')->with('success', 'Design berhasil ditambahkan');
    }

    public function index()
    {
        // Mengambil semua data design dari database
        $designs = Design::all();
        
        // Menampilkan halaman index dengan data design
        return view('designs.index', compact('designs'));
    }
}
