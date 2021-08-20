<?php


namespace engine\Core;

use engine\inc\DB;
use engine\inc\Mail;

abstract class Model {
    public $db;

    public function __construct() {
        $this->db = new DB();

    }

}