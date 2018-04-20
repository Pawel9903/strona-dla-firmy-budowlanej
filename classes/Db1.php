<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 03.04.2018
 * Time: 18:14
 */

class Db1
{
    private static $instance;

    public static function getInstance(){
        return self::$instance = new Db1;
    }

    public function getDb(){
        $dbParameters = Config::getInstance()->getConfig();

        $pdo = new PDO('mysql:
            host='.$dbParameters->getHost().';
            dbname='.$dbParameters->getDbName().';
            charset=' .$dbParameters ->getCharset() .'',
            $dbParameters->getUserName(),
            $dbParameters->getPassword()
        );
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }
}