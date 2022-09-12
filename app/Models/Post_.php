<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_
{
    private static $blog_posts = [
        [
            "title" => "Kamar Mandi",
            "slug" => "fas-kamar-mandi",
            "body" => "Kamar Mandi tiap didalam kamar sehingga memungkinkan mempunyai ruang tersendiri",
        ],

        [
            "title" => "Tempat Tidur",
            "slug" => "fas-tempat-tidur",
            "body" => "Dipan dan kasur serta bantal, guling (termasuk seprei) sudah disediakan"
        ],

        [
            "title" => "Dapur",
            "slug" => "fas-dapur",
            "body" => "Tiap Kamar mempunyai space yang bisa dijadikan dapur serta disediakan wastafel"
        ],

        [
            "title" => "Wi-fi",
            "slug" => "fas-wifi",
            "body" => " Dilengkapi dengan fasilitas Wi-Fi agar dapat melakukan hal produktivitas"
        ],

        [
            "title" => "Listrik Prabayar",
            "slug" => "fas-listrik",
            "body" => "Listrik menggunakan sistem pra-bayar dan patungan dengan penghuni kos yang lain"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $fas =  static::all();
        // $post = [];
        // foreach ($fas as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $fas->firstWhere('slug', $slug);
    }
}
