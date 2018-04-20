<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 07.04.2018
 * Time: 11:52
 */

class ContactForm extends Form
{
    private $additionalFields = array('subject');
    private $contactFields = array();

    public function __construct()
    {
        $this->contactFields = $this->addAdditionalFields($this->additionalFields);
    }

    /**
     * @return array
     */
    public function getContactFields(): array
    {
        return $this->contactFields;
    }

    /**
     * @return array
     */
    public function getAdditionalFields(): array
    {
        return $this->additionalFields;
    }
}