<?php 
    namespace AstroBlog\View\Gerenciamento;

    require_once('../../DAO/Conexao.php');
    require_once('../../DAO/Consultar.php');

    use AstroBlog\DAO\Conexao;
    use AstroBlog\DAO\Consultar;

    $conexao = new Conexao();
    $consultar = new Consultar();

    $locais = $consultar->consultarLocais($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/Observacao.css">    
    <link rel="stylesheet" href="../../CSS/locais.css">
    <title>Gerenciando Locais</title>
</head>
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
                    <a class="nav-link fw-semibold" href="blog.html">Início</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold link-ativo" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Geral</a></li>
                        <li><a class="dropdown-item" href="#">Eventos</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="blog.html">Sistema Solar</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Gerenciamento</a>
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

<div class="Titulo_Principal Titulo_Principal--com-acoes">
    <div>
        <h2 class="titulo-pagina titulo-pagina--md">Locais de observação</h2>
        <p class="subtitulo-pagina subtitulo-pagina--md">Lugares disponíveis pra vincular às observações da comunidade.</p>
    </div>

    <div class="acoes-cabecalho">
        <a href="../Registrar/Registrar_Observacao.php" class="botao-voltar">Voltar</a>
        <a href="../Registrar/Registrar_Local.php" class="botao-novo-local">
            Local <span class="icone-mais">+</span>
        </a>
    </div>
</div>

<main class="formulario-observacao formulario-observacao--tabela">
    <table class="tabela-locais">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>País</th>
                <th class="coluna-acoes">Ações</th>
            </tr>
        </thead>
        <tbody>
    <?php while ($linha = mysqli_fetch_assoc($locais)): ?>
        <tr>
            <td>
                <span class="nome-local"><?= $linha['nomeLocal'] ?></span>
                <span class="descricao-local"><?= $linha['descricao'] ?></span>
            </td>
            <td><?= $linha['cidade'] ?></td>
            <td><?= $linha['estado'] ?></td>
            <td><?= $linha['pais'] ?></td>
            <td class="coluna-acoes">
                <a href="../Atualizar/Atualizar_Local.php?idLocal=<?= $linha['idLocal'] ?>" class="botao-icone" title="Editar">↻</a>
                <button type="button" class="botao-icone botao-icone--excluir" title="Excluir">✕</button>
            </td>
        </tr>
    <?php endwhile; ?>
        </tbody>
    </table>

    <div class="fim-lista">Fim da Lista</div>
</main>

    <script src="../../JS/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>