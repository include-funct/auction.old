<?php
namespace engine\Controllers;

use engine\Core\Controller;

class AccountController extends Controller {

    public function loginAction() {
        if (!empty($_POST)) {
            if (!$this->model->validate(['login', 'password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            } elseif (!$this->model->checkData($_POST['login'], $_POST['password'])) {
                $this->view->message('error', 'Логин или пароль указан неверно');
            }
            $this->model->login($_POST['login']);
           // debug( $_SESSION['account']);
            $this->view->messageRedirect('account/profile');
        }
        $this->view->render('Вход');
    }

    public function registerAction(){
        if (!empty($_POST)){
            if (!$this->model->validate(['phone', 'email', 'login', 'password'], $_POST)){
                $this->view->message('error', $this->model->error);
            }elseif (!$this->model->checkEmail($_POST['email'])){
                $this->view->message('error', $this->model->error);
            }elseif (!$this->model->checkLogin($_POST['login'])) {
                $this->view->message('error', $this->model->error);
            }
            $this->model->register($_POST);
            $this->view->message('success', 'Регистрация завершена, проверьте свою почту');
        }
        $this->view->render('Регистрация');
    }

    public function profileAction(){
        $id = $_SESSION['account']['id'];
        $product = $this->model->myWin($id);
        $vars = [
            'product' => $product,
        ];
        $this->view->render('Профиль',$vars);
    }

    public function addAction(){
        if (!empty($_POST)){
            if(!$this->model->auctionValidate($_POST, 'add')){
                $this->view->message('error', $this->model->error);
            }
            $this->model->addAuction($_POST);
            $this->view->message('success', 'OK');
        }
        $cat = $this->model->getCat();
        $city = $this->model->getCity();
        $vars = [
            'cat' => $cat,
            'city' => $city,
        ];
        //debug($_SESSION);
        $this->view->render('Добавить аукцион',$vars);
    }

    public function logoutAction(){
        unset($_SESSION['account']);
        $this->view->redirect('/account/login');
    }

    public function recoveryAction(){
        $this->view->render('Восстановление пароля');
    }


//    public function confirmAction() {
////        if(!$this->model->checkTokenExist($this->route['token'])){
////            $this->view->errorCode(403);
////        }
////        else if($this->route['token'] == 'confirmed'){
////            $this->view->errorCode(403);
////        }
////        $this->model->activate($this->route['token']);
////        $this->view->render('Регистрация завершена!');
//        debug($this->route);
//    }
}