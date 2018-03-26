<?php

namespace RentedBook;

use book\Book;

class RentedBook extends Book {

    public $Status;
    public $DateRented;
    private $MaxRentDurationInDays = "14";

    public function __construct($Book_ID, $Title, $Author, $Category, $Language, $Format) {
        parent:: __construct($Book_ID, $Title, $Author, $Category, $Language, $Format);
        $this->Status = 'On loan' . "\n";
    }

    //Int
    public function getStatus() {
        return $this->Status;
    }

    public function returnBook($Status) {
        $this->Status = 'Available';
    }

    function isAvaliableToRent() {
        echo "Not available for rent \n ";
    }

}
