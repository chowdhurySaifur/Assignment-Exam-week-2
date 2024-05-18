<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook() {
        $this->availableCopies++;
    }
    
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            return true; 
        } else {
            return false;
        }
    }

    public function returnBook(Book $book) {
        $book->returnBook();
    }
}

// Here two books are created
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Here two members are created
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// This code shows that Member One borrows Book 1
$member1->borrowBook($book1);

// This code shows that Member Two borrows Book 2
$member2->borrowBook($book2);

// This code is to display available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()} </br> ";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()} </br>";
?>