<?php

namespace App\Controller;

use App\Model\Post;

class HomeController {
    public $postModel = false;

    public function __construct() {
        $this->postModel = new Post();
    }

    public function index() {
        var_dump("ok");
    }

    public function test() {
        var_dump("test");
    }

    public function list() {
        $posts = $this->postModel->list();
        return $posts;
    }
}