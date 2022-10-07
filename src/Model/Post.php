<?php

namespace App\Model;

use \PDO;

class Post {

    public $fluent = false;

    public function __construct() {
        $pdo = new PDO('mysql:dbname=BlogOC', 'root', 'root');
        $this->fluent = new \Envms\FluentPDO\Query($pdo);
    }

    public function list() {
        $posts = $this->fluent->from('posts');
        return $posts;
    }
}