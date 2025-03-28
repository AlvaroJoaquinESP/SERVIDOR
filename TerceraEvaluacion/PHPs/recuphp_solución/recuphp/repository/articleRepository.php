<?php
require_once("config/configDB.php");
require_once("model/article.php");
class ArticleRepository
{
    private function getConnection()
    {
        //Se obtiene la conexión a la base de datos
        return (new ConfigDB)->getInstance();
    }

    public function listArticles()
    {
        //Se obtienen todos los artículos de la base de datos y se retorna un array de objetos de tipo Article.
        $query = $this->getConnection()->prepare("SELECT * FROM article");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
        $articles = [];
        foreach ($results as $result) {
            $articles[] = new Article(
                $result['id'],
                $result['name'],
                $result['description'],
                $result['stock'],
                $result['price']
            );
        }
        return $articles;
    }

    public function updateStock($id, $stock)
    {
        //Se actualiza el stock del artículo y se retorna true si se actualiza correctamente.
        $query = $this->getConnection()->prepare("update article set stock = stock + ? where id=?");
        $query->bindValue(1, $stock);
        $query->bindValue(2, $id);
        $query->execute();
        return ($query->rowCount() > 0);
    }

    public function find($id)
    {
        //Se busca el artículo por id y se retorna un objeto de tipo Article, podria devolverse un array asociativo.
        $query = $this->getConnection()->prepare("select * from article where id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return new Article(
                $result['id'], 
                $result['name'], 
                $result['description'], 
                $result['stock'], 
                $result['price']
            );
        } else {
            return null; // Manejar el caso cuando no se encuentra el artículo
        }
    }


    public function delete($id)
    {
        //Se borra el artículo y se retorna true si se borra correctamente.
        $query = $this->getConnection()->prepare("delete from article where id=?");
        $query->bindValue(1, $id);
       return $query->execute();
    }

}
