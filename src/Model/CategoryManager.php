<?php

namespace App\Model;

class Category extends PostManager
{
    public function __construct() {
        parent::__construct();

    }
    public function list() {
        $categories = $this->fluent->from('Category');
        return $categories;
    }
}