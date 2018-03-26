<?php
namespace Library;


class Library {

    public $books;

    public function __construct() {
        $this->books = [];
    }
    
//Triat add/remove/count/list to admin ?
    
   public function addBook($bookToAdd) {
      if (gettype($bookToAdd) == "object" && (get_class($bookToAdd) == "AvailableBook\AvailableBook" || get_class($bookToAdd) == "RentedBook\RentedBook")) {
            
            array_push($this->books, $bookToAdd);
        }
        else {die('You have entered an invalid book');}
    }

    public function removeBook($bookToRemove) {
        unset($this->books, $bookToRemove);
    }

    public function countBooks() {
        return sizeof($this->books) . "\n";
    }

    public function listBooks() {
        foreach ($this->books as $CurrentBook) {
            echo $CurrentBook->getInfo();
            echo $CurrentBook->isAvaliableToRent()."\n";
        }
    }

}
