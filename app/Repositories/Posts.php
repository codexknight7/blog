<?php

namespace App\Repositories;

use App\Models\Post;


class Posts{

    public function all(){
        // return all posts
        return Post::all();
    }


}