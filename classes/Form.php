<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 07.04.2018
 * Time: 11:04
 */

abstract class Form
{
    private $fields = array('name','email','phone','description',);
    private $errorMSG = array();

    public function ifEmptyField($array){
        $method = $_POST;
        foreach ($array as $field ){
            if(empty($method[$field])){
                $this->errorMSG[$field] = '<li>Uzupełnij pole '.$field.'</li>';
            }
        }
    }

    public function validateEmail(){
        if($_POST['email'] != '' && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $this->errorMSG['email'] = 'Nieprawidłowy email';
            }
    }

    public function addAdditionalFields($array){
        return array_merge($this->getFields(),$array);
    }

    /**
     * @return array
     */
    public function getErrorMSG(): array
    {
        return $this->errorMSG;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }
}