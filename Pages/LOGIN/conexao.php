<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host ='localhost';

//conexapo
$mysqli = new mysqli($host,$usuario,$senha ,$database  );

if($mysqli->error){
    die("falhazinha". $mysqli->error);

}