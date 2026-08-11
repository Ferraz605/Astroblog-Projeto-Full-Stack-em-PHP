<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina do BLOG</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/estilo.css">
    
    <link rel="icon" type="image/png" href="../logo.png">
  </head>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../imagens/astroblog_app_icon.png">

  <body>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand navbar-custom p-3">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            
            <!-- 1. LOGO NA ESQUERDA -->
            <a class="navbar-brand titulo-gradiente m-0" href="blog.html">
                AstroBlog+
            </a>

            <!-- 2. MENU NO CENTRO -->
            <ul class="nav nav-pills mx-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="blog.html">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Geral</a></li>
                        <li><a class="dropdown-item" href="#">Eventos</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="blog.html">Sistema Solar</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Gerenciamento</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Visualizar Usuarios</a></li>
                        <li><a class="dropdown-item" href="#">Eventos</a></li>
                        <li><a class="dropdown-item" href="#">Curiosidades</a></li>
                    </ul>
                </li>
            </ul>

            <!-- PERFIL DO USUÁRIO NA DIREITA -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle foto-perfil-toggle" data-bs-toggle="dropdown" aria-expanded="false" title="Menu do Usuário">
                    <img src="../imagens/usuario.png" alt="Foto do Usuário" class="rounded-circle border border-2 border-secondary" width="45" height="45" style="object-fit: cover;">
                </a>
                
                <!-- Caixinha que aparece ao clicar -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark shadow-lg mt-2">
                    <li>
                        <a class="dropdown-item text-danger fw-semibold d-flex align-items-center gap-2" href="../index.html">
                            Deseja sair?
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container-fluid mt-5 conteudo-blog">

        <!-- CABEÇALHO DAS POSTAGENS -->
        <div class="d-flex justify-content-between align-items-center mb-1">
            <h2 class="fw-bold m-0">Últimas postagens</h2>
            
            <a href="#" class="btn text-white fw-semibold px-3 py-2 fs-6" 
               style="background-color: #5B3FC4; border: none;">
                Nova Postagem
            </a>
        </div>

        <p class="text-secondary">
            Conteúdo oficial e observações compartilhadas pela comunidade.
        </p>

        <!-- FILTROS -->
        <div class="d-flex gap-2 mb-4">
            <button class="btn filtro-btn btn-filtro-ativo" data-filtro="todos">
                Todos
            </button>

            <button class="btn filtro-btn btn-filtro-outline" data-filtro="oficial">
                Oficial
            </button>

            <button class="btn filtro-btn btn-filtro-outline" data-filtro="comunidade">
                Comunidade
            </button>
        </div>

        <!-- CARDS DAS POSTAGENS -->
        <div class="row g-4" id="lista-postagens">

            <!-- POSTAGEM OFICIAL 1 -->
            <div class="col-md-6 col-lg-4 postagem" data-tipo="oficial">
                <div class="card h-100 shadow-sm border-0">
                    <img src="../imagens/exoplaneta.jpg" class="card-img-top" alt="Exoplaneta">
                    <div class="card-body">
                        <span class="badge mb-2" style="background-color: #5B3FC4;">
                            OFICIAL
                        </span>
                        <h5 class="card-title fw-bold">
                            Novo exoplaneta é descoberto
                        </h5>
                        <p class="card-text text-secondary">
                            Astrônomos identificaram um novo exoplaneta localizado fora do Sistema Solar.
                        </p>
                        <small class="text-secondary">
                            10 de agosto de 2026
                        </small>
                    </div>
                </div>
            </div>

            <!-- POSTAGEM OFICIAL 2 -->
            <div class="col-md-6 col-lg-4 postagem" data-tipo="oficial">
                <div class="card h-100 shadow-sm border-0">
                    <img src="../imagens/galaxia.jpg" class="card-img-top" alt="Galáxia">
                    <div class="card-body">
                        <span class="badge mb-2" style="background-color: #5B3FC4;">
                            OFICIAL
                        </span>
                        <h5 class="card-title fw-bold">
                            Observação de uma nova galáxia
                        </h5>
                        <p class="card-text text-secondary">
                            Cientistas registraram novas observações de uma galáxia distante.
                        </p>
                        <small class="text-secondary">
                            09 de agosto de 2026
                        </small>
                    </div>
                </div>
            </div>

            <!-- POSTAGEM DA COMUNIDADE 1 -->
            <div class="col-md-6 col-lg-4 postagem" data-tipo="comunidade">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">
                            COMUNIDADE
                        </span>
                        <h5 class="card-title fw-bold">
                            Possível nova chuva de meteoros
                        </h5>
                        <p class="card-text text-secondary">
                            Membros da comunidade relataram a possibilidade de uma nova chuva de meteoros.
                        </p>
                        <small class="text-secondary">
                            Compartilhado pela comunidade
                        </small>
                    </div>
                </div>
            </div>

            <!-- POSTAGEM DA COMUNIDADE 2 -->
            <div class="col-md-6 col-lg-4 postagem" data-tipo="comunidade">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">
                            COMUNIDADE
                        </span>
                        <h5 class="card-title fw-bold">
                            Luz misteriosa observada no céu
                        </h5>
                        <p class="card-text text-secondary">
                            Um usuário registrou uma luz incomum durante uma observação noturna.
                        </p>
                        <small class="text-secondary">
                            Compartilhado pela comunidade
                        </small>
                    </div>
                </div>
            </div>

        </div> <!-- /#lista-postagens -->

    </div> <!-- /.container-fluid -->

    <!-- JS -->
    <script src="../JS/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>