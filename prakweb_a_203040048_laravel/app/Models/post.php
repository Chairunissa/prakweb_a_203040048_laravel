<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Chairunissa",
            "body" => "Lorem ipsum, dolor sit amet consectetur 
            adipisicing elit. Hic dolorum debitis minus
            asperiores sint, voluptate suscipit consequuntur possimus esse tempore repudiandae? Consequuntur aperiam exercitationem sit molestiae autem, velit id iure numquam, consectetur labore in nemo? Rerum reiciendis, corrupti animi tempora maxime dignissimos fuga neque incidunt, magnam ut perspiciatis soluta, fugit commodi. Quas non laborum, nulla eveniet rem, distinctio blanditiis nihil ducimus repellat dicta unde possimus aperiam numquam aut ullam. Ab quam nostrum, dolore quis earum
            iusto magnam consequatur laboriosam nemo."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ompong",
            "body" => "La suscipit nobis consectetur non voluptas praesentium quod explicabo dignissimos nisi ea quas aspernatur saepe aperiam sed nesciunt molestias repudiandae iste? Earum id, harum nulla voluptatibus saepe dolore repudiandae dicta temporibus inventore accusamus distinctio soluta modi, eius ratione placeat assumenda eos! Officiis, laboriosam, quod, dignissimos temporibus natus aperiam animi odio commodi accusamus minima eius illum. Tempore pariatur voluptates vel impedit a explicabo necessitatibus aliquam, repellendus natus libero eligendi quia fuga iure beatae aut omnis odio illum qui amet quos soluta sit quisquam. Excepturi officia numquam est? 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, alias est beatae optio adipis i officia numquam est?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
