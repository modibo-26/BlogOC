<?php

namespace App\Controller;

use App\Model\Post;

class PostController {
    public $postModel = false;

    public function __construct() {
        $this->postModel = new Post();
    }

    public function list() {
       $posts = $this->postModel->list();
       return $posts;
    }
}