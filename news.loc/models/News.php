<?php

include_once 'ValidateTrait.php';

use models\ValidateTrait;

class News
{

    use ValidateTrait;


    /**
     * @var integer
     */
    private $_date;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param integer $date
     */
    public function setDate($date): void
    {
        $this->_date = $date;
    }


    /**
     * @var string
     */
    private $_tittle;

    /**
     * @return mixed
     */
    public function getTittle()
    {
        return $this->_tittle;
    }

    /**
     * @param string $tittle
     */
    public function setTittle($tittle): void
    {
        $this->_tittle = $tittle;
    }


    /**
     * @var integer
     */
    private $_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param integer $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }


    /**
     * @var string
     */
    private $_text;

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * @param string $text
     */
    public function setText($text): void
    {
        $this->_text = $text;
    }

}

?>