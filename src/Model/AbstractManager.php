<?php

namespace App\Model;

use \PDO;

class Manager
{
    public $fluent;

    public function __construct() {
        $pdo = new PDO('mysql:dbname=BlogOC', 'root', 'root');
        $this->fluent = new \Envms\FluentPDO\Query($pdo);
    }
}