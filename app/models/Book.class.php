
<?php
class Book
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getbooks()
    {

        $this->db->query("SELECT * FROM `booksinfo`");
        $books = $this->db->fetchAll();
        if ($books) return $books;
        else return false;
    }

    public function addBook($book)
    {
        
        $this->db->query("insert into booksinfo (bookName, author, puplishingYear, price) values (:bookName,:author,:publish,:price,)");
        $this->db->bind(":bookName", $book['name']);
        $this->db->bind(":author", $book['author']);
        $this->db->bind(":publish", $book['published']);
        $this->db->bind(":price", $book['price']);
    
        if ($this->db->execute()) return true;
        else return false;
    }
}
