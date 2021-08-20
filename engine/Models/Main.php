<?php

namespace engine\Models;

use engine\Core\Model;

class Main extends Model {

    function getItemsCount() {
        $sql = "SELECT COUNT(id) FROM `auctions`";
        return $this->db->getValue($sql);
    }

    function getItemList($route) {
        $max = ITEMSPAGE;
        $st = ((($route['page'] ?? 1) - 1) * $max);
        $result = $this->db->getRows("SELECT
          auctions.id,
          auctions.product,
          auctions.product_desc,
          auctions.bet,          
          countries.city,
          countries.country,
          categories.cat,
          categories.sub_cat,
          auctions.blitz_price,
          images.path,
          auctions.create_date,
          auctions.end_date
        FROM auctions
          INNER JOIN categories
            ON auctions.categories_id = categories.id
          INNER JOIN countries
            ON auctions.countries_id = countries.id
          INNER JOIN images
            ON auctions.images_id = images.id
        WHERE auctions.end_date > NOW() 
        ORDER BY auctions.id DESC LIMIT $st, $max");
        return $result;
    }

    public function auctionExists($id) {
        return $this->db->getRow('SELECT `id` FROM `auctions` WHERE id = ?', [$id]);
    }

    public function getAuction($id) {
        $result = $this->db->getRows("SELECT
                                          auctions.*,
                                          bids.bid_price
                                        FROM auctions
                                          LEFT OUTER JOIN bids
                                            ON bids.auctions_id = auctions.id
                                          INNER JOIN categories
                                            ON auctions.categories_id = categories.id
                                          INNER JOIN countries
                                            ON auctions.countries_id = countries.id
                                          INNER JOIN images
                                            ON auctions.images_id = images.id
                                        WHERE auctions.id = ?", [$id]);
        return $result;
    }

    public function getUserName($id){
        $sql = $this->db->getRow("SELECT `login` FROM `users` WHERE `id` = ?", [$id]);
        $result = implode('', $sql);
        return $result;
    }

    public function getImage($id){
        $sql = $this->db->getRow("SELECT `path` FROM `auction`.`images` WHERE `id` = ?", [$id]);
        $tostr = implode('', $sql);
        $result = SITEURL . $tostr;
        return $result;
    }

    public function getCatName($id){
        $sql = $this->db->getRow("SELECT `cat`, `sub_cat` FROM `auction`.`categories` WHERE `id` = ?", [$id]);
        $result = implode(' > ', $sql);
        return $result;
    }

    public function getCountyName($id){
        $sql = $this->db->getRow("SELECT `city`, `country` FROM `auction`.`countries` WHERE `id` = ?", [$id]);
        $result = implode(', ', $sql);
        return $result;
    }

    public function auctionPrice($min,$bet){
        if(!isset($bet)){
            return $min;
        } if(isset($bet)) {
            return $bet;
        }
    }

    public function startPrice($min,$bet){
        if(!isset($bet)){
            return $data = (($min/100) * 5) + ($min);
        } if(isset($bet)) {
            return $data = (($bet/100) * 5) + ($bet);
        }
    }

    public function betValidate($post, $minbet, $user, $type) {

        if ($post['blitzprice'] < $minbet) {
            $this->error = 'Ставка ниже текущей цены';
            return false;
        }
//        if ($user = $_SESSION['account']['id'] || empty($_SESSION['account']['id'])) {
//            header("Location: /account/login");
//            //$this->view->messageRedirect('account/login');
//            return false;
//        }
        return true;
    }

    public function addBet($post) {
        $id = $post['idauc'];
        $bet = $post['custombet'];
        $user = $_SESSION['account']['id'];
        $query = "UPDATE `auctions` SET `bet` = $bet, `winer` = $user WHERE id = $id";

        $this->db->sql($query);
    }
    public function blitzBet($post) {
        $id = $post['idauct'];
        $bet = $post['blitzprice'];
        $user = $_SESSION['account']['id'];
        $query = "UPDATE `auctions` SET `bet` = $bet, `winer` = $user, `status` = 'FINISH' WHERE id = $id";
        $this->db->sql($query);
        $date = "UPDATE `auctions` SET `end_date` = NOW() WHERE id = $id";
        $this->db->sql($date);

    }
    public function historyBet($id) {
        //$id = $post['id'];
        $query = "SELECT
                      *
                    FROM bids
                    WHERE bids.auctions_id = $id
                    ORDER BY bids.time_bid DESC";
        $result = $this->db->getRows($query);
        return $result;
    }


}