<?php
namespace engine\inc;
require 'engine\data\config.php';

class DB {

    static private $db;

    public function __construct(){
        if (self::$db === null){
            try {
                self::$db = new \PDO(
                    'mysql:host='.DBHOST.';dbname='.DBNAME,
                    DBUSER,
                    DBPASS,
                    $options = [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".COLLATE
                    ]
                );
            } catch (\PDOException $e) {
                throw new \Exception ($e->getMessage());
            }
        }

    }

    public function query($stmt)  {
        return self::$db->query($stmt);
    }

    public function prepare($stmt)  {
        return self::$db->prepare($stmt);
    }

    static function exec($query) {
        return self::$db->exec($query);
    }

    public function lastInsertId() {
        return self::$db->lastInsertId();
    }

    public function run($query, $args = [])  {
        try{
            if (!$args) {
                return self::query($query);
            }
            $stmt = self::prepare($query);
            $stmt->execute($args);
            return $stmt;
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function getRow($query, $args = [])  {
        return self::run($query, $args)->fetch();
    }

    public function getRows($query, $args = [])  {
        return self::run($query, $args)->fetchAll();
    }

    public function getValue($query, $args = [])  {
        $result = self::getRow($query, $args);
        if (!empty($result)) {
            $result = array_shift($result);
        }
        return $result;
    }

    public function getColumn($query, $args = [])  {
        return self::run($query, $args)->fetchAll(\PDO::FETCH_COLUMN);
    }

    public function sql($query, $args = [])
    {
        self::run($query, $args);
    }
}