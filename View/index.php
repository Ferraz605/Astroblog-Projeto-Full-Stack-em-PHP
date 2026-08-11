<?php 
    namespace AstroBlog\View;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astroblog+ - Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- CSS Customizado -->
    <link rel="stylesheet" href="../CSS/estilo.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/IMG/astroblog_app_icon.png?v=1" type="image/png">
    <link rel="icon" href="/IMG/astroblog_app_icon.png?v=1" type="image/png">
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0 min-vh-100">

            <!-- LADO ESQUERDO: Imagem do Observatório -->
            <div class="col-lg-8 col-md-7 d-none d-md-block login-bg-image" style="background-image: url('/IMG/observatory_nebula.png');">
            </div>

            <!-- LADO DIREITO: Form de Login -->
            <div class="col-lg-4 col-md-5 login-panel d-flex flex-column justify-content-center align-items-center px-4 py-5">
                
                <div class="w-100" style="max-width: 320px;">
                    
                    <!-- Logo -->
                    <div class="text-center mb-3">
                        <img src="/IMG/astroblog_logo_3d.png" alt="Astroblog+" class="img-fluid" style="max-width: 190px;">
                    </div>

                    <!-- Slogan -->
                    <p class="text-center text-white fw-medium fs-6 mb-4">
                        Descubra o universo de<br>forma organizada.
                    </p>

                    <!-- Divisória -->
                    <hr class="linha-divisora-login mb-4">

                    <!-- Formulário -->
                    <form action="telas/blog.html" method="GET">
                        
                        <!-- Campo Usuário -->
                        <div class="mb-3">
                            <label for="usuario" class="form-label text-white fw-semibold d-flex align-items-center gap-2 mb-2">
                                👤 Usuario
                            </label>
                            <input type="text" class="form-control input-login" id="usuario" placeholder="Digite seu usuario..." required>
                        </div>

                        <!-- Campo Senha -->
                        <div class="mb-4">
                            <label for="senha" class="form-label text-white fw-semibold d-flex align-items-center gap-2 mb-2">
                                🔒 Senha
                            </label>
                            <input type="password" class="form-control input-login" id="senha" placeholder="Digite sua senha..." required>
                        </div>

                        <!-- Botão Entrar -->
                        <button type="submit" class="btn btn-entrar w-100 fw-semibold mb-3">
                            Entrar
                        </button>

                        <!-- Cadastre-se -->
                        <div class="text-center">
                            <a href="#" class="link-cadastro text-decoration-underline small">
                                Cadastre-se aqui
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>