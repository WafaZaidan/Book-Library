<?php
namespace AvailableBook;
use book\Book; 

class AvailableBook extends Book {

    public $Status;

    public function __construct($Book_ID, $Title, $Author, $Category, $Language, $Format) {
        parent:: __construct($Book_ID, $Title, $Author, $Category, $Language, $Format);
        $this->Status = 'Available';
    }
   //Int: 
   public function getStatus() {
    
        return $this->Status . "\n";
    }

    public function borrowBook($Status) {

        $this->Status = 'On Loan' . "\n";
    }

    function isAvaliableToRent() {
        echo "Available to Rent\n";
    }
}