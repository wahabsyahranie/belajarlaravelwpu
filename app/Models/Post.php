<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post
{
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Wahab Syahranie',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta expedita harum culpa eius sunt laborum vitae architecto laboriosam, quae id quo delectus ducimus provident est ipsam maxime quidem quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta expedita harum culpa eius sunt laborum vitae architecto laboriosam, quae id quo delectus ducimus provident est ipsam maxime quidem quam.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Sri Evandayani',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis non ea tenetur reprehenderit animi enim maiores recusandae iusto quis ut ratione eveniet optio vel, commodi, sit sunt laborum consectetur voluptatum.'
            ]
        ];
    }

    public static function find($slug): array {

        //Teknik fungsi Callback
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        //Teknik arrow function
        // return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        //Perbaikan jika user mengirim url yang salah
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
