<?php

require_once './classes/movies.php';

$Godfather = new Movie('The Godfather', 'Francis Ford Coppola', 1972, 'Crime');

$scarface = new Movie('Scarface', 'Brian De Palma', 1983, 'Crime');

$goodfellas = new Movie('Goodfellas', 'Martin Scorsese', 1990, 'Crime');

var_dump($Godfather, $scarface, $goodfellas);
?>