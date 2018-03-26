<?php
namespace book;
require 'IBook.php';
use IBook\getStatus;

abstract class Book implements getStatus{

    private $Book_ID;
    private $Title;
    private $Author;
    private $Category;
    public $Language;
    private $Format;

    public function __construct($Book_ID, $Title, $Author, $Category, $Language, $Format) {
        if ($Book_ID == null and $Title == null and $Author == null and $Category == null and $Language == null and $Format == null) {
            die('You are missing a field');
        }
        $this->Book_ID = $Book_ID;
        $this->Title = $Title;
        $this->Author = $Author;
        $this->Category = $Category;
        $this->Language = $Language;
        $this->Format = $Format;
    }

    public function getAuthor() {
        return $this->Author . "\n";
    }

    public function getInfo() {
        return $this->Title . ' ' .
                $this->Author . "\n" .
                $this->Language . "\n";
    }

    public function setLanguage($newLanguage) {
        if ($this->isLanguageValid(newLangauge)) {
            $this->Language = $newLanguage;
        }
        //setters usually don't return
    }

    private function isLangaugeValid($language) {
        //somehow validates language
        return true;
    }

    abstract function isAvaliableToRent();


}

//