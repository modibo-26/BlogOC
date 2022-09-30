<?php


require __DIR__ .  '/../models/postModel.php';

class postController {
    public $postModel = false;

    public function __construct() {
        $this->postModel = new postModel();
    }

    public function list() {
       $posts = $this->postModel->list();
       return $posts;
    }
}