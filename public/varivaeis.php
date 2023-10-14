<?php

include './teste.php'; #Continua a execução mesmo apos achar um erro
// require './teste2.php';  #Para o codigo ao encontrar um erro

$title = 'Home';
$name = 'Elias';

echo "$name  " . $sobrenome;

//string
echo gettype('string');

//number - integers, float(double)
echo gettype(12);
echo gettype(12.5);

// boleans
echo gettype(true);

//arrays
echo gettype(['elias', 2]);

//object
class Person
{
}

echo gettype(new Person);

//null
echo gettype(null);

// Variaveis
$name = 'Elias';
$myName = &$name; #O "&" faz referencia pega o mesmo valor em memoria
$name = 'Junior';

echo $name;
echo $myName;

//constantes

define('USERNAME', 'Ana');
echo USERNAME;
