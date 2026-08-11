<?php 
    namespace AstroBlog\View\Atualizar;
    ob_start();

    require_once('../../DAO/Conexao.php');
    require_once('../../DAO/Consultar.php');
    require_once('../../DAO/Atualizar.php');

    use AstroBlog\DAO\Conexao;
    use AstroBlog\DAO\Consultar;
    use AstroBlog\DAO\Atualizar;

    $conexao = new Conexao();
    $consultar = new Consultar();
    $atualizar = new Atualizar();

    $idLocal = (int) $_GET['idLocal'];

    $info_Especifica = $consultar->consultarLocalEspecifico($conexao,$idLocal);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/Observacao.css">    
    <link rel="stylesheet" href="../../CSS/locais.css">   
    <title>Atualizar Local</title>
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
        <h2 class="titulo-pagina titulo-pagina--md">Atualizar Local</h2>
        <p class="subtitulo-pagina subtitulo-pagina--md">Atualize um local para vincular às observações.</p>
    </div>

    <div class="acoes-cabecalho">
        <a href="../Gerenciamento/Gerenciando_Local.php" class="botao-voltar">Voltar</a>
    </div>
</div>

<div class="formulario-observacao">
    <form method="post">

        <div class="grupo-campo">
            <label class="rotulo-campo" for="nomeLocal">Nome do local</label>
            <input type="text" id="nomeLocal" name="nomeLocal" class="campo-texto" value="<?php echo $info_Especifica['nomeLocal'] ?>" required>
        </div>

        <div class="linha-campos">
            <div class="grupo-campo">
                <label class="rotulo-campo" for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" class="campo-texto" value="<?php echo $info_Especifica['cidade'] ?>" required>
            </div>
            <div class="grupo-campo">
                <label class="rotulo-campo" for="estado">Estado</label>
                <input type="text" id="estado" name="estado" class="campo-texto" value="<?php echo $info_Especifica['estado'] ?>" required>
            </div>
        </div>

        <div class="grupo-campo">
            <label class="rotulo-campo" for="pais">País</label>
            <input type="text" id="pais" name="pais" class="campo-texto" value="<?php echo $info_Especifica['pais'] ?>" required>
        </div>

        <div class="grupo-campo">
            <label class="rotulo-campo" for="descricaoLocal">Descrição</label>
            <textarea id="descricaoLocal" name="descricaoLocal" class="campo-textarea" rows="4" required><?= $info_Especifica['descricao'] ?></textarea>
        </div>

        <div class="acoes-formulario">

        <button type="submit" class="botao-atualizar">Atualizar Local
        <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nomelocal = $_POST['nomeLocal'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $pais = $_POST['pais'];
                $descricaoLocal = $_POST['descricaoLocal'];

                if ($nomelocal && $cidade && $estado && $pais && $descricaoLocal) {
                    $resultado = $atualizar->atualizarLocal($conexao, $idLocal, $nomelocal, $cidade, $estado, $pais, $descricaoLocal);

                    if ($resultado) {
                        header('Location: ../Gerenciamento/Gerenciando_Local.php');
                        exit;
                    }
                }
            }
        ?>

        </button>

</body>
</html>