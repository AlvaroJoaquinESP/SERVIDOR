<?php

class Book
{
    private $title;
    private $author;
    private $isbn;
    private $pages;
    private $publication_date;
    private $number_copies;
    private $loaned_books;



    public function __construct($titleP = "", $authorP = "", $isbnP = "", $pagesP = 0, $publication_dateP = "03/18/2025", $number_copiesP = 0, $loaned_booksP = 0)
    {
        $this->title = $titleP;
        $this->author = $authorP;
        $this->isbn = $isbnP;
        $this->pages = $pagesP;
        $this->publication_date = $publication_dateP;
        $this->number_copies = $number_copiesP;
        $this->loaned_books = $loaned_booksP;
    }




    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of pages
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     *
     * @return  self
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get the value of publication_date
     */
    public function getPublication_date()
    {
        return $this->publication_date;
    }

    /**
     * Set the value of publication_date
     *
     * @return  self
     */
    public function setPublication_date($publication_date)
    {
        $this->publication_date = $publication_date;

        return $this;
    }

    /**
     * Get the value of number_copies
     */
    public function getNumber_copies()
    {
        return $this->number_copies;
    }

    /**
     * Set the value of number_copies
     *
     * @return  self
     */
    public function setNumber_copies($number_copies)
    {
        $this->number_copies = $number_copies;

        return $this;
    }

    /**
     * Get the value of loaned_books
     */
    public function getLoaned_books()
    {
        return $this->loaned_books;
    }

    /**
     * Set the value of loaned_books
     *
     * @return  self
     */
    public function setLoaned_books($loaned_books)
    {
        $this->loaned_books = $loaned_books;

        return $this;
    }



    public function loan()
    {
        $value = false;
        if ($this->loaned_books < $this->number_copies) {
            $this->loaned_books++;
            $value = true;
        } else if ($this->loaned_books == $this->number_copies) {
            
            echo "Imposible to loan this book <br>";
        }
        echo Book::__toString();    // Calling my own class method.
        return $value;
    }

    public function returns()
    {
        $value = false;
        if ($this->loaned_books > 0) {
            $this->loaned_books--;
            $value = true;
        }
        return $value;
    }

    public function __toString()
    {
        return "Title: " . $this->title . "<br>" . "Loaned Books: " . $this->loaned_books . "<br>" . "Number of Copies: " . $this->number_copies . "<hr>";
    }
}
