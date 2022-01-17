
<?php
include_once "author.php";
class Book
{
    public $title;
    public $publication_date;
    public $author;

    function __construct($title, $publication_date, $autor)
    {
        if (!isset($author)) throw new Exception("Object is not instance of Author!!!");
        if ($title == "")  throw new Exception("Title is empty!!!");

        $this->title = $title;
        $this->publication_date = $publication_date;
        $this->author = $author;
    }
}

?>