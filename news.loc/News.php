<?php

include_once 'db.php';

class News
{

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

    /*private function cleanString($string){
        $string=strip_tags(trim($string));
        return $string;
    }

    public function cleanAll($string) {
        $attributes = ['tittle', 'text'];
        foreach ($attributes as $attribute){
            $this->{$attribute} = $this->cleanString($attribute);
        }
    }*/

    public function cleanAll(){
        $this->_tittle = strip_tags(trim($this->_tittle));
        $this->_text = strip_tags(trim($this->_text));
    }
}

?>