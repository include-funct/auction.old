<?php
namespace engine\Models;

use engine\Core\Model;
use engine\inc\Mail;


class Account extends Model {
    public function validate($input, $post){
        $rules = [
            'login' => [
                'pattern' => '#^[a-z0-9]{5,15}$#',
                'message' => 'Логин должен содержать литинские буквы и цифры, длина от 5 до 15 символов'
            ],
            'email' => [
                'pattern' => '#^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$#',
                'message' => 'E-mail указан неверно'
            ],
            'phone' => [
                'pattern' => '#^\+\d{2}\(\d{3}\)\d{3}-\d{2}-\d{2}$#',
                'message' => 'Телефон указан неверно'
            ],
            'password' => [
                'pattern' => '#^[a-z0-9]{5,15}$#',
                'message' => 'Пароль должен содержать литинские буквы и цифры, длина от 5 до 15 символов'
            ],
        ];
        foreach ($input as $item){
            if (!isset($_POST[$item]) or empty($_POST[$item]) and !preg_match($rules[$item]['pattern'], $post[$item])){
                $this->error = $rules[$item]['message'];
                return false;
            }
        }
        return true;
    }

    public function checkEmail($email){
        if($this->db->getColumn("SELECT id FROM `users` WHERE email = ?", [$email])){
            $this->error = 'Этот E-mail уже занят';
            return false;
        }
        return true;
    }

    public function checkLogin($login){
        if($this->db->getColumn("SELECT id FROM `users` WHERE login = ?", [$login])){
            $this->error = 'Этот логин уже занят';
            return false;
        }
        return true;
    }

    public function checkData($login, $password) {
        $hash = $this->db->getValue("SELECT password FROM `users` WHERE login = ?", [$login]);
        if (!$hash or !password_verify($password, $hash)) {
            return false;
        }
        return true;
    }

    public function login($login) {
        $data = $this->db->getRows("SELECT * FROM `users` WHERE login = ?",  [$login]);
        $_SESSION['account'] = $data[0];
    }

//    public function checkToken($token) {
//        $params = [
//            'token' => $token,
//        ];
//        return $this->db->getColumn("SELECT id FROM accounts WHERE token = :token", $params);
//    }
//
//    public function createToken(){
//        return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 27)),0,23);
//    }


    public function register($post){
        //$token = $this->createToken();
        $query = "INSERT INTO `users` (
          `email`,
          `name`,
          `login`,
          `password`,
          `phone`
          )
        VALUES (
          :email,
          :namee,
          :login,
          :password,
          :phone
        )";
        $args = [
            'email' => $post["email"],
            'namee' => $post["name"],
            'login' => $post["login"],
            'password' => password_hash($post["password"],PASSWORD_BCRYPT),
            'phone' => $post["phone"]
        ];

        $this->db->sql($query, $args);
        $mail = new Mail();
        $mail->from('noreplay@auction.cc', 'ИМЯ_ОТПРАВИТЕЛЯ');
        $mail->to('$post["email"]', '$post["name"]');
        $mail->subject = 'Регистрация аккаунта на сайте Auction';
        $mail->body = '
            <h1>Здравствуйте!</h1>
            <p>Вы успешно зарегистрированы</p>
            
        ';
        $mail->send();

    }

    function getExtension($filename) {
        return array_pop(explode(".", $filename));
    }

    function getCat(){
        return $result = $this->db->query("SELECT `id`,`cat`,`sub_cat` FROM `categories`");
    }

    function getCity(){
        return $result = $this->db->query("SELECT `id`,`city`,`country` FROM `countries`");
    }


    public function auctionValidate($post, $type) {
        $productLen = iconv_strlen($post['product']);
        $productdescLen = iconv_strlen($post['productdesc']);
        $minpriceLen = iconv_strlen($post['minprice']);
        $optimalpriceLen = iconv_strlen($post['optimalprice']);
        $blitzpriceLen = iconv_strlen($post['blitzprice']);
        if ($productLen < 10 or $productLen > 100) {
            $this->error = 'Название должно содержать от 10 до 100 символов';
            return false;
        } elseif ($productdescLen < 30 or $productdescLen > 600) {
            $this->error = 'Описание должно содержать от 30 до 600 символов';
            return false;
        } elseif ($minpriceLen < 1 or $minpriceLen > 5000) {
            $this->error = 'Текст должнен содержать от 10 до 5000 символов';
            return false;
        } elseif ($optimalpriceLen < 1 or $optimalpriceLen > 5000) {
            $this->error = 'Текст должнен содержать от 10 до 5000 символов';
            return false;
        } elseif ($blitzpriceLen < 1 or $blitzpriceLen > 5000) {
            $this->error = 'Текст должнен содержать от 10 до 5000 символов';
            return false;
        }
//        if (empty($_FILES['loadfile']['tmp_name']) and $type == 'add') {
//            $this->error = 'Изображение не выбрано';
//            return false;
//        }
        return true;
    }

    public function addAuction($post) {
        if(isset($_FILES) && $_FILES['loadfile']['error'] == 0) {
            $dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $_FILES['loadfile']['name'];
            if (move_uploaded_file($_FILES['loadfile']['tmp_name'], $dir)) {
                $img = "INSERT INTO `images` ( `name`,`path`) 
                VALUES ('".$_FILES['loadfile']['name']."','".'/uploads/'.$_FILES['loadfile']['name']."')";
                $this->db->query($img);
            }
        }
        $temp = $this->db->lastInsertId();
        $query = "INSERT INTO `auctions` (
        `product`,
        `product_desc`,
        `categories_id`,
        `countries_id`,
        `create_date`,
        `end_date`,
        `min_price`,
        `optimal_price`,
        `blitz_price`,
        `users_id`,
        `images_id`
        )
        VALUES (
        '".$post["product"]."',
        '".$post["productdesc"]."',
        '".$post["categories"]."',
        '".$post["countries"]."',
        '".date( "Y-m-d H:i:s")."',
        '".$post["enddate"]."',
        '".$post["minprice"]."',
        '".$post["optimalprice"]."',
        '".$post["blitzprice"]."',
        '".$_SESSION['account']['id']."',
        '".$temp."'
        )";

        $this->db->query($query);
    }



    public function buyBlitz($post){
        if(isset($_POST) && $_POST['gobuyblitz']['error'] == 0) {
            echo "огонь";
        } echo "666";
    }
}