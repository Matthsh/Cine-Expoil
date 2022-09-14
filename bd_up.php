<?php
$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n";

$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        nota DECIMAL(2,1)
        )
    ";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n";
else 
    echo "\n[ERRO]: tabela filmes NÃO criada\n";

$sql = "INSERT INTO filmes (id, titulo, poster, nota) VALUES (
    0, 
    'Duna', 
    'https://www.themoviedb.org/t/p/w300/uzERcfV2rSHNhW5eViQiO9hNiA7.jpg', 
    8.0)";
    
if ($bd->exec($sql)) 
    echo "\nfilmes inseridos\n";
else 
    echo "\n[ERRO]:filmes NÃO inseridos\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, nota) VALUES (
        1, 
        'Homem-aranha', 
        'https://www.themoviedb.org/t/p/w300/kxFxtYdaIaGsp3N9KEtPSj7yqEE.jpg', 
        8.3)";
        
    if ($bd->exec($sql)) 
        echo "\nfilmes inseridos\n";
    else 
        echo "\n[ERRO]:filmes NÃO inseridos\n";


?>