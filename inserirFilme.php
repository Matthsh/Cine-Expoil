<?php 

$bd = new SQLite3("filmes.db");

$titulo = $_POST["titulo"];
$nota = $_POST["nota"];
$poster = $_POST["poster"];


if ($stmt->execute()) 
    echo "\nfilmes inseridos\n";
else 
    echo "\n[ERRO]:filmes NÃO inseridos\n";

header("Location: galeria.php?msg=filme+cadastrado+com+sucesso");

?> 