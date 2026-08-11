<?php 
    namespace AstroBlog\View\Registrar;
    include('../componentes/navbar.php');

    require_once('./DAO/Cadastrar.php');
    require_once('./DAO/Conexao.php');

    use AstroBlog\DAO\Cadastrar;
    use AstroBlog\DAO\Conexao;

    $conexao = new Conexao();
    $inserir = new Cadastrar();
    $mensagem = '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astroblog+ - Registrar Observação</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- CSS Customizado -->
    <link rel="stylesheet" href="../../CSS/estilo.css">


    <!-- Favicon -->
    <link rel="shortcut icon" href="../imagens/astroblog_app_icon.png?v=1" type="image/png">
    <link rel="icon" href="../imagens/astroblog_app_icon.png?v=1" type="image/png">
</head>

<body>

    <!-- NAVBAR CARREGADA DINAMICAMENTE -->
    <div id="navbar-container"></div>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container my-5" style="max-width: 760px;">
        
        <!-- Cabeçalho da Página -->
        <h1 class="fw-bold text-white mb-2 fs-2">Registrar observação</h1>
        <p class="text-secondary mb-4">
            Preencha os dados abaixo para adicionar ao seu histórico e ao blog.
        </p>

        <!-- Card do Formulário -->
        <div class="form-observacao-card">
            <form action="blog.html" method="POST" enctype="multipart/form-data">

                <!-- SEÇÃO 1: O que você observou -->
                <h3 class="form-secao-titulo">O que você observou</h3>

                <div class="mb-3">
                    <label for="titulo" class="form-label text-white fw-semibold small">Título da observação</label>
                    <input type="text" class="form-control input-astro" id="titulo" name="titulo" placeholder="Digite o título..." required>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="objeto" class="form-label text-white fw-semibold small">Objeto observado</label>
                        <input type="text" class="form-control input-astro" id="objeto" name="objeto" placeholder="Digite o objeto observado..." required>
                    </div>
                    <div class="col-md-6">
                        <label for="tipo_objeto" class="form-label text-white fw-semibold small">Tipo de objeto</label>
                        <input type="text" class="form-control input-astro" id="tipo_objeto" name="tipo_objeto" placeholder="Digite o tipo de objeto..." required>
                    </div>
                </div>

                <!-- SEÇÃO 2: Quando e onde -->
                <h3 class="form-secao-titulo">Quando e onde</h3>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="data" class="form-label text-white fw-semibold small">Data da observação</label>
                        <input type="date" class="form-control input-astro" id="data" name="data" required>
                    </div>
                    <div class="col-md-6">
                        <label for="condicao_clima1" class="form-label text-white fw-semibold small">Condição climática</label>
                        <input type="text" class="form-control input-astro" id="condicao_clima" name="condicao_clima" placeholder="Digite a condição climática....">
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <label for="local" class="form-label text-white fw-semibold small m-0">Local de observação</label>
                        <a href="locais_observacao.html" class="badge-locais">Ver locais</a>
                    </div>
                    <select class="form-select input-astro" id="local" name="local" required>
                        <option value="" selected disabled>Selecione</option>
                        <option value="observatorio_central">Observatório Central</option>
                        <option value="campo_aberto">Campo Aberto - Zona Rural</option>
                        <option value="residencia">Residência</option>
                    </select>
                </div>

                <!-- SEÇÃO 3: Equipamento e evento -->
                <h3 class="form-secao-titulo">Equipamento e evento</h3>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="equipamento" class="form-label text-white fw-semibold small">Equipamento utilizado</label>
                        <select class="form-select input-astro" id="equipamento" name="equipamento">
                            <option value="" selected disabled>Selecione</option>
                            <option value="telescopio_refletor">Telescópio Refletor</option>
                            <option value="telescopio_refrator">Telescópio Refrator</option>
                            <option value="binoculo">Binóculo Astronômico</option>
                            <option value="olho_nu">Olho Nu</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="condicao_clima" class="form-label text-white fw-semibold small">Categoria</label>
                        <input type="text" class="form-control input-astro" id="categoria" name="categoria" placeholder="Digite a categoria...">
                    </div>
                </div>

                <!-- SEÇÃO 4: Detalhes -->
                <h3 class="form-secao-titulo">Detalhes</h3>

                <div class="mb-3">
                    <label for="descricao" class="form-label text-white fw-semibold small">Descrição</label>
                    <textarea class="form-control input-astro" id="descricao" rows="4" placeholder="Digite a descrição..."></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label text-white fw-semibold small">Imagem</label>
                    <div class="upload-box" onclick="document.getElementById('imagem_upload').click();">
                        <p class="text-secondary m-0 small">Clique ou arraste uma imagem</p>
                        <input type="file" id="imagem_upload" name="imagem_upload" class="d-none" accept="image/*">
                    </div>
                </div>

                <!-- BOTÕES DE AÇÃO -->
                <div class="row g-3 pt-2">
                    <div class="col-6">
                        <a href="blog.html" class="btn btn-cancelar w-100">Cancelar</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-submeter w-100">Registrar Observação

                        <?php 
                            if(isset($_POST['titulo'])){
                                $titulo = $_POST['titulo'];
                                $objeto = $_POST['objeto'];
                                $tipo_objeto = $_POST['tipo_objeto'];
                                $data = $_POST['data'];
                                $condicao_clima = $_POST['condicao_clima'];
                                $local = $_POST['local'];
                                $equipamento = $_POST['equipamento'];
                                $categoria = $_POST['categoria'];                                
                                $descricao = $_POST['descricao'];
                                $imagem_upload = $_POST['imagem_upload'];
                                
                                $mensagem = $inserir->cadastrarObservacao($conexao,$titulo,$objeto,$tipo_objeto,$data,$condicao_clima,
                                $local,$equipamento,1,$categoria,$descricao,$imagem_upload);
                            }
                        ?>

                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>

    <!-- Script para Carregar a Navbar Reaproveitável -->
    <script>
        fetch('../componentes/navbar.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-container').innerHTML = data;
            });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>