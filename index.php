<?php
require 'Class/Library.php';
require 'Class/Category.php';
require 'Class/Language.php';
require 'Class/Book.php';
require 'Class/RentedBook.php';
require 'Class/AvailableBook.php';

//use namespace\class
use Library\Library; 
use Category\Category;
use Language\Language;
use RentedBook\RentedBook;
use AvailableBook\AvailableBook;

$myLibrary = new Library();

$RentedBook = new RentedBook (1, 'Harry Potter', 'JK Rowling', 'Fiction', 'English', 'PaperBook');
$AvailableBook = new AvailableBook (2, 'Harry Potter', 'JK Rowling', 'Fiction', 'English', 'PaperBook');

echo $AvailableBook ->getStatus();

$myLibrary->addBook($RentedBook);
$myLibrary->addBook($AvailableBook);

echo $myLibrary->countBooks();
echo $myLibrary->listBooks();


$Fiction = new Category(1,'Fiction');
$Fiction->getCategory();

$French = new Language (1,'French');
echo $French->getLanguage();



/*

- book subclass in separate folder
-try protected
-getters and setters
-use- shorten namespace
-return instead of echo
-require namespace
subfolders for subclasses
*/

?>
