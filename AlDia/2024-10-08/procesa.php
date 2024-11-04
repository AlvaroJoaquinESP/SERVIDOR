<?php
//También puedo poner $_GET.
echo $_REQUEST['nombre'];
echo $_REQUEST['apellidos'];

/*Falla ya que esta key no esta definida.
echo $_REQUEST['aaaaaa'];
¿Como se arreglaría?*/

//isset comprueba si la variable está declarada/setteada o es NULL.
if(!isset($_REQUEST['aaaaaa'])) {
    echo 'No existe la variable aaaaaa';
}



?>