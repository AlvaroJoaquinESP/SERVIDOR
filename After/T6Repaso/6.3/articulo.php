<?php
class Article {
    private $cod;
    private $description;
    private $pvp;

    public function __construct()
    {
        $this->cod = "";
        $this->description = "";
        $this->pvp = 0;
    }

    public function createArticle($codP, $descriptionP, $pvpP)
    {
        $this->cod = $codP;
        $this->description = $descriptionP;
        $this->pvp = $pvpP;
    }

    public function show()
    {
        echo "Code: " . $this->cod . "<br>" . "Description: " . $this->description . "<br>" . "PVP: " . $this->pvp;         
    }

}



?>