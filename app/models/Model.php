<?php

namespace app\models;

abstract class Model {

    protected $connection;

    public function __construct() {
        $this->connection = Connection::connect();
    }

    public function all() {

    }

    public function find() {

    }

    public function delete() {

    }
    
}