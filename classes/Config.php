<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 03.04.2018
 * Time: 18:13
 */

class Config
{
    private static $instance;
    private $host = 'localhost';
    private $dbName = 'budged';
    private $username = 'root';
    private $charset = 'utf8';
    private $password = '';


    /**
     * @return mixed
     */
    public static function getInstance()
    {
        return self::$instance = new Config();
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @return string
     */
    public function getPassword(){
        return $this->password;
    }

    public function getConfig(){
        return $this;
    }
}