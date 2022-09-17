<?php 

$titulo = $_POST["titulo"];
$nota = $_POST["nota"];
$poster = $_POST["poster"];

$bd = new SQLite3("filmes.db");

$sql = "INSERT INTO filmes (titulo, poster, nota) 
        VALUES (:titulo, :poster, :nota)";

$stmt = $bd->prepare($sql);

$stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT);
$stmt->bindValue(':poster', $poster, SQLITE3_TEXT);
$stmt->bindValue(':nota', $nota, SQLITE3_FLOAT);

if ($stmt->execute()) 
    echo "\nfilmes inseridos\n";
else 
    echo "\n[ERRO]:filmes NÃO inseridos\n";

?> 