<?php
require_once("repository/articleRepository.php");
class ArticleController
{
    public function default()
    {
        //Se carga la pantalla de inicio tras el login
        include_once("view/header.php");
        echo "<h1>Bienvenido. Por favor,seleccione una opción del menú</h1>";
        include_once("view/footer.php");
    }

    public function listArticles()
    {
        //Se carga la lista de artículos
        include_once("view/header.php");
        $repository = new ArticleRepository();
        $articles = $repository->listArticles();
        if ($articles) {
            include_once("view/listArticles.php");
        } else {
            echo "No existen artículos";
        }
        include_once("view/footer.php");
    }

    public function updateStockView()
    {
        //Se carga la vista para actualizar el stock
        include_once("view/header.php");
        include_once("view/updateStockView.php");
        include_once("view/footer.php");
    }
    public function updateStock()
    {
        //Se actualiza el stock, primero se comprueba si existe el artículo.
        $id = $_POST["id"];
        $stock = $_POST["stock"];
        $repository = new ArticleRepository();

        $article = $repository->find($id);
        if (!$article) {
            $message = "No existe el articulo";
        }else{
            $result = $repository->updateStock($id, $stock);
            if ($result) {
                $message = "Actualizado correctamente";
            } else {
                $message = "Error al actualizar el articulo";
            }
        }

        include_once("view/header.php");
        include_once("view/updateStockView.php");
        include_once("view/footer.php");
    }
    
    public function delete($id)
    {
        //Se borra el artículo. Despues se carga la lista de artículos actualizado.
        $repository = new ArticleRepository();
        $result = $repository->delete($id);
        if ($result) {
            $message = "Borrado correctamente";
        } else {
            $message = "Error al borrar el articulo";
        }

        $articles = $repository->listArticles();
        include_once("view/header.php");
        include_once("view/listArticles.php");
        include_once("view/footer.php");
    }
}
