<?php include "cabecalho.php" ?>

<body>
    <!-- Navegação do site -->
    <nav class="nav-extended #A50000 red accent-4">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Cinexpoil</h1>
        </div>
        <div class="nav-content #212121 grey darken-4">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab disabled"><a href="#test2">Assistidos</a></li>
                <li class="tab disabled"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <!-- Linhas do cadastro -->
    <div class="row">

        <form action="inserirFilme.php" method="POST">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>

                        <!-- Input titulo -->
                        <div class="row">
                            <div class="input-fild col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Título do filme</label>
                            </div>
                        </div>
                        <!-- Input nota -->
                        <div class="row">
                            <div class="input-fild col s3">
                            <input id="nota" type="number" step="1" min=0 max=10 name="nota" class="validate" required>
                            <label for="nota">Nota</label>
                        </div>
                    </div>
                    <!-- input imagem -->
                    <div class="file-field input-field">
                        <div class="btn grey darken-4 hoverable">
                            <span>Capa do filme</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="poster">
                        </div>
                    </div>

                    <div class="card-action">
                        <button type="submit" class="waves-effect waves-light btn #b71c1c red darken-4">Salvar</button>
                        <a href="galeria.php" class="waves-effect waves-light btn grey">Cancelar</a>
                    </div>

                </div>

            </div>
        </form>
    </div>
</body>