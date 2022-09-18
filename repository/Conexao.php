<?php
//quando for mudar o banco de dados basta apenas mudar este arquivo
class Conexao {
    public static function criar() {
        return new PDO("sqlite:filmes.db");
    } 
}