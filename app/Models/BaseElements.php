<?php

namespace App\Models;

require_once 'Printable.php';

class BaseElements implements Printable{
    
    private $title;
    public $description;
    public $visible = true;

    public function __construct($title, $description){
       $this->setTitle($title);
       $this->description = $description; 
    }

    public function setTitle($t){
        if($t == ''){
            $this->title = 'N/A';
        }else{
            $this->title = $t;
        }    
    }

    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
}