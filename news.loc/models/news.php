<?php

include_once 'ValidateTrait.php';

use Validate\ValidateTrait;

class News
{

    use ValidateTrait;

    private $_date;

    public function getDate()
    {
        return $this->_date;
    }
    public function setDate($date): void
    {
        $this->_date = $date;
    }


    private $_tittle;

    public function getTittle()
    {
        return $this->_tittle;
    }
    public function setTittle($tittle): void
    {
        $this->_tittle = $tittle;
    }


    private $_id;

    public function getId()
    {
        return $this->_id;
    }
    public function setId($id): void
    {
        $this->_id = $id;
    }


    private $_text;

    public function getText()
    {
        return $this->_text;
    }
    public function setText($text): void
    {
        $this->_text = $text;
    }

}

?>