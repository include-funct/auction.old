<?php

namespace engine\Models;

use engine\Core\Model;

class Admin extends Model {

    public $error;

    public function loginValidate($post) {
        $config = require 'engine/data/admin.php';
        if ($config['login'] != $post['login'] or $config['password'] != $post['password']){
            $this->error = 'Логин или пароль указан неверно';
            return false;
        }


       return true;
    }


}