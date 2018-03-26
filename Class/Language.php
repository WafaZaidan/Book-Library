<?php
namespace Language;

Class Language {

    private $Language_ID;
    private $Language;

    public function __construct($Language_ID, $Language) {
        $this->Language_ID = $Language_ID;
        $this->Language = $Language;
    }

    public function getLanguage() {
        return
        "$this->Language \n";
    }

}


?>