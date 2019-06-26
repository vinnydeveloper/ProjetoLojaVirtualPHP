
<header class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Cursos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <?php if (isset($usuario) && $usuario != "" && $usuario['logado']): ?>

                            <?php if ($usuario['nivelAcesso'] == 0): ?>
                                <li class="nav-item active dropdown show">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações <span class="sr-only">(current)</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="cadastroProduto.php">Cadastrar Produto</a>
                                </div>
                                </li>
                                
                            <?php else: ?>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Perfil<span class="sr-only">(current)</span></a>
                                </li>
                            <?php endif;?>

                            <li class="nav-item">
                                <a class="nav-link" href="#"> Olá <?php echo $usuario['nome']; ?></a>
                            </li>

                    <?php else: ?>

                            <li class="nav-item">
                                <a class="nav-link" href="login.php"> Login </a>
                            </li>

                    <?php endif;?>
                </ul>
            </div>
        </nav>
       
        </div>
    </header>
