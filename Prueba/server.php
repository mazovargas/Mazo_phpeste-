<?php

session_start();
require "peliculas.php";

$pelicula = isset($_SESSION['codigo']) ? $_SESSION['codigo'] : [];
$pelicula = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : [];
$pelicula = isset($_SESSION['genero']) ? $_SESSION['genero'] : [];
$pelicula = isset($_SESSION['año']) ? $_SESSION['año'] : [];
$pelicula = isset($_SESSION['duracion']) ? $_SESSION['duracion'] : [];

$peliculas = new peliculas();
$peliculas->codigo = $_POST['codigo'];
$peliculas->nombre = $_POST['nombre'];
$peliculas->genero = $_POST['genero'];
$peliculas->año = $_POST['año'];
$peliculas->duracion = $_POST['duracion'];


$peliculas[] = $peliculas;

$_SESSION['codigo'] = $pelicula[];
$_SESSION['nombre'] = $pelicula[];
$_SESSION['genero'] = $pelicula[];
$_SESSION['año'] = $pelicula[];
$_SESSION['duracion'] = $pelicula[];

header('location: index.php');
