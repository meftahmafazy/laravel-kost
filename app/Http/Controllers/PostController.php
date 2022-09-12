<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        return view('fasilitas', [
            "judul" => "Fasilitas",
            "posts" => Post::all()
        ]);
    }

    public function show($id)
    {
        return view('detail', [
            "judul" => "Detail",
            "post" => Post::find($id)
        ]);
    }
}
