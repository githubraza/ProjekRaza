<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
        [
            "title" => "judul post Raza",
            "slug" => "judul-post-pertama",
            "author" => "M Raza A N",
            "body" => " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto illum illo ullam eaque, libero magni nam temporibus facere porro labore reiciendis nobis numquam at hic eos magnam inventore harum provident ipsum, minus veniam in! Deleniti, pariatur fugiat? Sint molestias reprehenderit sapiente harum sequi excepturi voluptate, vero facere pariatur quis laboriosam eaque suscipit distinctio ullam vitae, iusto culpa maxime eum nisi atque ex? Provident totam illo ipsum consequuntur harum consequatur, officiis aspernatur veritatis ut quis, nostrum asperiores! Blanditiis suscipit voluptatem omnis!"
        ],
    
        [
            "title" => "judul post Dimas",
            "slug" => "judul-post-kedua",
            "author" => "M Dimas",
            "body" => " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto illum illo ullam eaque, libero magni nam temporibus facere porro labore reiciendis nobis numquam at hic eos magnam inventore harum provident ipsum, minus veniam in! Deleniti, pariatur fugiat? Sint molestias reprehenderit sapiente harum sequi excepturi voluptate, vero facere pariatur quis laboriosam eaque suscipit distinctio ullam vitae, iusto culpa maxime eum nisi atque ex? Provident totam illo ipsum consequuntur harum consequatur, officiis aspernatur veritatis ut quis, nostrum asperiores! Blanditiis suscipit voluptatem omnis!"
        ],
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
            $posts = static::all();          
        return $posts ->firstWhere('slug', $slug);

    }
}
