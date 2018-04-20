<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 03.04.2018
 * Time: 18:57
 */

class Portfolio
{
    private $db;
    private $portfolio;

    public function __construct()
    {
        $this->db = Db1::getInstance()->getDb();
    }

    public function getPortfolio(){
        $this->portfolio = $this->db->query("SELECT * FROM images")->fetchAll();
        return $this->portfolio;
    }

    public function getProjectById($id){
        return $this->db->query("SELECT * FROM images WHERE id =".$id)->fetch();
    }

}