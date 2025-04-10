<?php
require_once("config/configDB.php");
require_once("model/book.php");

class BookRepository
{

    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }


    public function getAll()
    {
        $sql = "SELECT * FROM book ORDER BY pages DESC";
        $query = $this->getPDO()->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();

        $books = [];

        foreach ($list as $value) {
            $books[] = new Book($value[0], $value[1], $value[2], $value[3], $value[4]);
        }

        return $books;
    }


    public function delete($id)
    {
        $sql = "DELETE FROM book WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $id);
        return $query->execute();
    }


    public function add($book)
    {
        $sql = "INSERT INTO book (pages, author, year, title) VALUES (?,?,?,?)";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $book->getPages());
        $query->bindValue(2, $book->getAuthor());
        $query->bindValue(3, $book->getYear());
        $query->bindValue(4, $book->getTitle());
        return $query->execute();
    }


    public function verify($year)
    {
        $sql = "SELECT COUNT(*) FROM book WHERE year = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $year);
        $query->execute();
        return $query->fetchColumn() > 0; // Devuelve un contador.
    }


    public function search($author)
    {
        $sql = "SELECT * FROM book WHERE author = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $author);
        $query->execute();
        $list = $query->fetchAll();

        $books = [];

        foreach ($list as $value) {
            $books[] = (new Book($value[0], $value[1], $value[2], $value[3], $value[4]));
        }

        return $books;
    }


    public function update($id, $pages)
    {
        $sql = "UPDATE book SET pages = ? WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $pages);
        $query->bindValue(2, $id);
        return $query->execute();
    }


    public function findById($id)
    {
        $sql = "SELECT * FROM book WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetch();
    }


    public function edit($pages, $author, $id)
    {
        $sql = "UPDATE book SET pages = ?, author = ? WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $pages);
        $query->bindValue(2, $author);
        $query->bindValue(3, $id);
        return $query->execute();
    }
}
