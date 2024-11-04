<?php
// Me creo los alumnos y las asignaturas aqui dentro.
// Require_once -> Incluyo la clase en el fichero. También existe include, pero usamos este.
require_once "asignatura.php";
require_once "alumno.php";

//Crear las asignaturas. Si en el array no pongo ninguna key, por defecto sería 0, 1, 2...
// Defino estas constantes por si en un futuro las quiero cambiar, también lo podria hacer con el curso, o un enum.
const MAR = "MAR";
const CLI = "CLI";
const DES = "DES";
const DIS = "DIS";
const SER = "SER";

$asignaturas = [
    SER =>new Asignatura("Servidor", 2, 7.8),
    MAR=>new Asignatura("Marcas", 2, 10),
    DES=>new Asignatura("Despliegue", 2, 9.4),
    DIS=>new Asignatura("Diseño", 2, 8.3),
    CLI=>new Asignatura("Cliente", 2, 9.2)
];


// Create students. La key = id_asignatura y el value = int.

$alvaro = new Alumno("Álvaro",
"Albarracín",
"alvaropitopito@outlook.com",
 [
    MAR => 5,
    SER => 10,
    DES => 6.8,
    DIS => 7.9,
    CLI => 10
 ]);

 
$junior = new Alumno("Junior",
"Chipantashi",
"juniorpitopito@outlook.com",
 [
    MAR => 6,
    SER => 15,
    DES => 4,
    DIS => 7.9,
    CLI => 6
 ]);

 
$alvaro = new Alumno("Álvaro",
"Albarracín",
"alvaropitopito@outlook.com",
 [
    MAR => 5,
    SER => 10,
    DES => 6.8,
    DIS => 7.9,
    CLI => 10
 ]);

 $alvaro->show();
 echo "<br>";
 $junior->show();



