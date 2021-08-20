<?php
namespace engine\Controllers;

use engine\Core\Controller;
use engine\inc\Pagination;

class MainController extends Controller {
    public function indexAction(){

        //$result = $this->model->getData();
        $pagi = new Pagination($this->route, $this->model->getItemsCount());
        $vars = [

            'pagination' => $pagi->get(),
            'main' => $this->model->getItemList($this->route),
        ];

        $this->view->render('Главная страница', $vars);

    }

    public function auctionAction(){
        if (!$this->model->auctionExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $data = $this->model->getAuction($this->route['id'])[0];
        $user = $this->model->getUserName($data['users_id']);
        $img = $this->model->getImage($data['images_id']);
        $cat = $this->model->getCatName($data['categories_id']);
        $city = $this->model->getCountyName($data['countries_id']);
        $min = $this->model->startPrice($data['min_price'],$data['bet']);
        $start = $this->model->auctionPrice($data['min_price'],$data['bet']);
        $history = $this->model->historyBet($data['id']);

        if (!empty($_POST['custombet'])){
            if(!$this->model->betValidate($_POST, $min, $user ,'add')){
                $this->view->message('error', $this->model->error);
            }
            $this->model->addBet($_POST);

   //         $this->view->messageRedirect('account/profile');
//            $this->view->message('success', 'OK');

        }
        if (!empty($_POST['blitzprice'])){
//            if(!$this->model->betValidate($_POST, $min, $user ,'add')){
//                $this->view->message('error', $this->model->error);
//            }
            $this->model->blitzBet($_POST);

            //         $this->view->messageRedirect('account/profile');
//            $this->view->message('success', 'OK');

        }

            //$this->model->blitzBet($_POST);

//
        $vars = [
            'data' => $data,
            'user' => $user,
            'img' => $img,
            'cat' => $cat,
            'city' => $city,
            'min' => $min,
            'start' => $start,
            'history' => $history
        ];




        $this->view->render('Посты', $vars);
    }
}