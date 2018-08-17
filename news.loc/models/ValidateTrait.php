<?php

namespace Validate;

trait ValidateTrait
{
    private function cleanString($string)
    {
        $string = strip_tags(trim($string));

        return $string;
    }


    public function cleanAll()
    {

        $this->_tittle = $this->cleanString($this->_tittle);
        $this->_text = $this->cleanString($this->_text);

    }

    /*public function cleanAll(){

        $this->_text = strip_tags(trim($this->_text));

        $this->_tittle = strip_tags(trim($this->_tittle));

    }*/

//    public function cleanAll(){
//
//        $this->_text = strip_tags(trim($this->_text));
//
//        $this->_tittle = strip_tags(trim($this->_tittle));
//
//    }
}
?>
