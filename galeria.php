<?php include "cabecalho.php" ?>

<?php

require "./repository/FilmesRepositoryPDO.php";

$filmesRepository = new FilmesRepositoryPDO();
$filmes = $filmesRepository->listarTodos();

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
            <?php foreach($filmes as $filme) : ?> 
                <div class="col s12 m6 l3">
                    <div class="card hoverable waves-effect waves-light">
                        <div class="card-image">
                            <img src="<?= $filme->poster?>">
                            <span class="card-title right-align"><a class="btn-floating hoverable waves-effect waves-light black N/A transparent"><i class="material-icons red-text">favorite_border</i></a></span>
                        </div>
                        <p class="valign-wrapper"><i class="material-icons">star</i><?= $filme->nota ?></p>
                        <div class="card-content"><span class="center"><?php echo $filme->titulo ?></span></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
</body>

<?php if(isset($_GET["msg"])) : ?>
<script>
    M.toast({
        html: '<?= $_GET["msg"] ?>'
    }); 
</script>
<?php endif ?>

</html>