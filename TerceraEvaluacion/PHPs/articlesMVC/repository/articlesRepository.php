<?php
require_once("config/config.php");
require_once("model/article.php");

class ArticleRepository
{

    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }


    public function list()
    {
        $sql = "SELECT * FROM article ORDER BY stock DESC";
        $query = $this->getPDO()->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        $article = [];

        foreach ($list as $value) {
            $article[] = new Article($value[0], $value[1], $value[2], $value[3], $value[4]);
        }

        return $article;
    }

    public function edit($stock, $id)
    {
        $sql = "UPDATE article SET stock = ? WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $stock);
        $query->bindValue(2, $id);
        return $query->execute();
    }


    public function delete($id)
    {
        $sql = "DELETE FROM article WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $id);
        return $query->execute();
    }


    public function add($article)
    {
        $sql = "INSERT INTO article (name, description, stock, price) VALUES (?,?,?,?)";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $article->getName());
        $query->bindValue(2, $article->getDescription());
        $query->bindValue(3, $article->getStock());
        $query->bindValue(4, $article->getPrice());
        return $query->execute();
    }


    public function verify($name)
    {
        $sql = "SELECT  count(*) FROM article WHERE name = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $name);
        $query->execute();
        return $query->fetchColumn() > 0; 
    }
}
