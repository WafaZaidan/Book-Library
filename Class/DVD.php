<?php
namespace DVD;
require 'IBook.php';
use IBook\Rentable;
use IBook\ReturnThis;

class DVD implements Rentable, ReturnThis  {

    private $DVD_ID;
    private $DVD_Name;
    private $Status;

    public function __construct($DVD_ID, $DVD_Name) {
        $this->DVD_ID = $DVD_ID;
        $this->DVD_Name = $DVD_Name;
        $this->Status = $Status;
    }
    
    public function Rentable (){
         $this->Status = 'On Loan' . "\n";
    }
          public function ReturnThis (){
         $this->Status = 'Available' . "\n";
    }
        
}

interface Rentable {

    public function Rentable();
}

interface ReturnThis {

    public function ReturnThis();
}

?>