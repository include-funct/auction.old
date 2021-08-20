<?php
namespace engine\Controllers;

use engine\Core\Controller;

class AdminController extends Controller {

    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';

    }

    public function loginAction(){

        if (!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->redirect('/admin/add');
        }
        $this->view->render('Вход');
    }

    public function logoutAction(){
        exit('Выход');
    }

    public function addAction(){
        $this->view->render('Добавить');
    }
    public function editAction(){
        $this->view->render('Редактировать');
    }

    public function deleteAction(){
        exit('Удаление');
    }
}