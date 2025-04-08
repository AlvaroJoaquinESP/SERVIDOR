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

        return (!empty($article)) ? $article : null;
    }


    public function edit($stock, $id) 
    {
        $sql = "UPDATE article SET stock = ? WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $stock);
        $query->bindValue(2, $id);
        return $query->execute();
    }
}
