<?php
namespace Category;

class Category {
    
    private $Category_ID;
    private $Type;


    public function __construct($Category_ID, $Type) {
        $this->Category_ID = $Category_ID;
        $this->Type = $Type;
    }
    
    public function getCategory(){
        echo $this->Type."\n";
    }



}
