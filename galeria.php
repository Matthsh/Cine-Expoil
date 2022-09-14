<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);


$filme1 = [
    "titulo"=> "Duna",
    "nota"=> 8.0,
    "poster"=> "https://www.themoviedb.org/t/p/w300/uzERcfV2rSHNhW5eViQiO9hNiA7.jpg"];

$filme2 = [
    "titulo"=> "Homem-aranha",
    "nota"=>  8.3,
    "poster"=> "https://www.themoviedb.org/t/p/w300/kxFxtYdaIaGsp3N9KEtPSj7yqEE.jpg"];

$filme3 = [
    "titulo"=> "Eu sou groot",
    "nota"=>  7.6,
    "poster"=> "https://image.tmdb.org/t/p/w300_and_h450_face/6vSMKqxgRREQmzSZpi1qwPg1rVm.jpg"];


$filme4 = [
    "titulo"=> "Trem Bala",
    "nota"=>  7.5,
    "poster"=> "https://www.themoviedb.org/t/p/w300/6moyjAEMV9OZ3EurotIX0mPiK6y.jpg"];

//$filmes = [$filme1, $filme2, $filme3, $filme4];
?>



<body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- Navegação do site -->
    <nav class="nav-extended #A50000 red accent-4">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">   
                <li class="active"><a  href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Cinexpoil</h1>
        </div>
        <div class="nav-content #212121 grey darken-4">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab disabled"><a  href="#test2">Assistidos</a></li>
                <li class="tab disabled"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="countainer">    
        <div class="row valing-wrapper center">
            <?php while ($filme = $filmes->fetchArray()) : ?> 
                <div class="col s12 m6 l3">
                    <div class="card hoverable waves-effect waves-light">
                        <div class="card-image">
                            <img src="<?= $filme["poster"]?>">
                            <span class="card-title right-align"><a class="btn-floating hoverable waves-effect waves-light black N/A transparent"><i class="material-icons red-text">favorite_border</i></a></span>
                        </div>
                        <p class="valign-wrapper"><i class="material-icons">star</i><?= $filme["nota"] ?></p>
                        <div class="card-content"><span class="center"><?php echo $filme["titulo"] ?></span></div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    
</body>
</html>