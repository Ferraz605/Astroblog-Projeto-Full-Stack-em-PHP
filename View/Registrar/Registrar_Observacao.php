<?php 
    namespace AstroBlog\View\Registrar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/Observacao.css">
    <title>Registrar Observação</title>
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

    <div class="Titulo_Principal">
    <h2 class="titulo-pagina">Registrar observação</h2>
    <p class="subtitulo-pagina">Preencha os dados abaixo para adicionar ao seu histórico e ao blog.</p>
</div>

<main>
    <form method="POST" class="formulario-observacao">

        <!-- SEÇÃO 1 -->
        <section class="secao-formulario">
            <h3 class="titulo-secao">O que você observou</h3>

            <div class="grupo-campo">
                <label class="rotulo-campo" for="titulo">Título da observação</label>
                <input type="text" id="titulo" name="titulo" class="campo-texto" placeholder="Digite o título..." required maxlength="30">
            </div>

            <div class="linha-campos">
                <div class="grupo-campo">
                    <label class="rotulo-campo" for="objeto">Objeto observado</label>
                    <input type="text" id="objeto" name="objeto" class="campo-texto" placeholder="Digite o objeto observado..." required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo-campo" for="tipo">Tipo de objeto</label>
                    <input type="text" id="tipo" name="tipo" class="campo-texto" placeholder="Digite o tipo de objeto..." required>
                </div>
            </div>
        </section>

        <!-- SEÇÃO 2 -->
        <section class="secao-formulario">
            <h3 class="titulo-secao">Quando e onde</h3>

            <div class="linha-campos">
                <div class="grupo-campo">
                    <label class="rotulo-campo" for="data">Data da observação</label>
                    <input type="date" id="data" name="data" class="campo-texto" placeholder="DD/MM/AAAA" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo-campo" for="clima">Condição climática</label>
                    <input type="text" id="clima" name="clima" class="campo-texto" placeholder="Digite a condição climática..." required>
                </div>
            </div>

            <div class="grupo-campo">
                <label class="rotulo-campo" for="local">
                    Local de observação
                    <span class="selo-info"><a href="../Gerenciamento/Gerenciando_Local.php">Ver locais</a></span>
                </label>
                <select id="local" name="local" class="campo-select" required>
                    <option value="">Selecione</option>
                </select>
            </div>
        </section>

        <!-- SEÇÃO 3 -->
        <section class="secao-formulario">
            <h3 class="titulo-secao">Equipamento e evento</h3>

            <div class="linha-campos">
                <div class="grupo-campo">
                    <label class="rotulo-campo" for="equipamento">Equipamento utilizado</label>
                    <select id="equipamento" name="equipamento" class="campo-select" required>
                        <option value="">Selecione</option>
                    </select>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo-campo" for="evento">Evento astronômico</label>
                    <select id="evento" name="evento" class="campo-select" required>
                        <option value="">Selecione</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- SEÇÃO 4 -->
        <section class="secao-formulario">
            <h3 class="titulo-secao">Detalhes</h3>

            <div class="grupo-campo">
                <label class="rotulo-campo" for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" class="campo-textarea" placeholder="Digite a descrição..." rows="4" maxlength="200"></textarea>
            </div>

            <div class="grupo-campo">
                <label class="rotulo-campo">Imagem</label>
                <div class="area-imagem" id="areaImagem">
                    <label for="imagem" class="area-imagem__conteudo" id="areaImagemConteudo">
                        <span>Clique ou arraste uma imagem</span>
                    </label>
                    <div class="preview-imagem" id="previewImagem" hidden>
                        <img id="previewImagemTag" src="" alt="Prévia da imagem">
                        <button type="button" class="botao-remover-imagem" id="botaoRemoverImagem" title="Remover imagem">✕</button>
                    </div>
                    <input type="file" id="imagem" name="imagem" accept="image/*" hidden>
                </div>
            </div>
        </section>

        <!-- AÇÕES -->
        <div class="acoes-formulario">
            <button type="reset" class="botao-cancelar">Limpar</button>
            <button type="submit" class="botao-registrar">Registrar Observação</button>
        </div>

    </form>
</main>



    <script src="../../JS/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>