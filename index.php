<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe e di proprietà e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative 
proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump

*/

class Movies
{
}


//prima istanza
$movie_1 = new Movies();

//seconda istanza 
$movie_2 = new Movies();



var_dump($movie_1);
var_dump($movie_2);
