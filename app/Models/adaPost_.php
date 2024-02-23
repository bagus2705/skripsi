<?php

namespace App\Models;

class Posts 
{
   private static $blog_posts= [
        [
            "title" => "judul post 1",
            "" =>"judul-post-1",
            "author" => "bagus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ipsa iusto accusamus praesentium accusantium perspiciatis, recusandae id iste dolore corporis, minima dolorum eaque esse nisi deleniti eligendi, quis illum expedita quasi?"
        ],
        [
            "title" => "judul post 2",
            "" => "judul-post-2",
            "author" => "danang",
            "body" => "Lorem asada czasa sit azcusantium perspiciatis, recusandae id iste dolore corporis, minima dolorum eaque esse nisi deleniti eligendi, quis illum expedita quasi?"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }
        public static function find($)
        {
        $posts=static::all();
        return $posts->firstWhere('',$);
        }       
}
