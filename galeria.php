<?php include "cabecalho.php" ?>
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
    
    <div class="row valing-wrapper center">
        <div class="col s3">
            <div class="card hoverable waves-effect waves-light">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/uzERcfV2rSHNhW5eViQiO9hNiA7.jpg">
                    <span class="card-title right-align"><a class="btn-floating hoverable waves-effect waves-light black N/A transparent"><i class="material-icons red-text">favorite_border</i></a></span>
                </div>
                <p class="valign-wrapper"><i class="material-icons">star</i> 8.0</p>
                <div class="card-content">
                    <p class="center">Duna</p>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card hoverable waves-effect waves-light">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/kxFxtYdaIaGsp3N9KEtPSj7yqEE.jpg">
                    <span class="card-title right-align"><a class="btn-floating hoverable waves-effect waves-light black N/A transparent"><i class="material-icons red-text">favorite_border</i></a></span>
                </div>
                <p class="valign-wrapper"><i class="material-icons">star</i> 8.3</p>
                <div class="card-content">
                    <p class="center">Homem-aranha</p>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card hoverable waves-effect waves-light">
                <div class="card-image">
                    <img src="https://image.tmdb.org/t/p/w300_and_h450_face/6vSMKqxgRREQmzSZpi1qwPg1rVm.jpg">
                    <span class="card-title right-align"><a class="btn-floating hoverable waves-effect waves-light black N/A transparent"><i class="material-icons red-text">favorite_border</i></a></span>
                </div>
                <p class="valign-wrapper"><i class="material-icons">star</i> 7.6</p>
                <div class="card-content">
                    <p class="center">Eu sou groot</p>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card hoverable waves-effect waves-light">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/6moyjAEMV9OZ3EurotIX0mPiK6y.jpg">
                    <span class="card-title right-align"><a class="btn-floating hoverable waves-effect waves-light black N/A transparent"><i class="material-icons red-text">favorite_border</i></a></span>
                </div>
                <p class="valign-wrapper"><i class="material-icons">star</i> 7.5</p>
                <div class="card-content">
                    <p class="center">Trem Bala</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>