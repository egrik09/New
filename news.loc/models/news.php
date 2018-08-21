<?php

include_once 'ValidateTrait.php';

use Validate\ValidateTrait;

class News
{

    use ValidateTrait;

    /**
     * @var string %_date Date
     */

    private $_date;

    /**
     * @return string $this
     */

    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param $date
     */

    public function setDate($date): void
    {
        $this->_date = $date;
    }

    /**
     * @var string %_tittle Tittle
     */

    private $_tittle;

    /**
     * @return string $this
     */

    public function getTittle()
    {
        return $this->_tittle;
    }

    /**
     * @param $tittle
     */

    public function setTittle($tittle): void
    {
        $this->_tittle = $tittle;
    }

    /**
     * @var string $_id ID
     */

    private $_id;

    /**
     * @return string $this
     */

    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param $id
     */

    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @var string $_text Text
     */

    private $_text;

    /**
     * @return string $this
     */

    public function getText()
    {
        return $this->_text;
    }

    /**
     * @param $text
     */

    public function setText($text): void
    {
        $this->_text = $text;
    }

}

?>