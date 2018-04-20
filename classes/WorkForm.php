<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 07.04.2018
 * Time: 11:52
 */

class WorkForm extends Form
{
    private $additionalFields = array();
    private $workFields = array();

    public function __construct()
    {
        $this->workFields = $this->addAdditionalFields($this->additionalFields);
    }


    /**
     * @return array
     */
    public function getWorkFields(): array
    {
        return $this->workFields;
    }

    /**
     * @return array
     */
    public function getAdditionalFields(): array
    {
        return $this->additionalFields;
    }

}