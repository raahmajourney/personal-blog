<?php 

namespace App\Models;

class Post 
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Rahma',    
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus excepturi doloremque, nihil eos accusantium tempore error quos repudiandae, amet asperiores ipsa neque dolorum in vel temporibus dolore? Rem, eaque. Vero.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Rahma',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, enim accusantium voluptatibus, explicabo quaerat iste excepturi, distinctio earum fugiat consequatur harum ex dolor animi? Adipisci quam impedit corporis debitis iusto!'
            ]
    
            ];
    }
}


?>