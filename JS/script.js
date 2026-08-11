document.addEventListener("DOMContentLoaded", () => {
    const botoesFiltro = document.querySelectorAll(".filtro-btn");
    const postagens = document.querySelectorAll(".postagem");

    botoesFiltro.forEach(botao => {
        botao.addEventListener("click", () => {
            const filtro = botao.dataset.filtro;

            // Atualiza o estilo visual dos botões
            botoesFiltro.forEach(b => {
                b.classList.remove("btn-filtro-ativo");
                b.classList.add("btn-filtro-outline");
            });

            botao.classList.remove("btn-filtro-outline");
            botao.classList.add("btn-filtro-ativo");

            // Exibe/oculta as postagens
            postagens.forEach(postagem => {
                const tipo = postagem.dataset.tipo;

                if (filtro === "todos" || tipo === filtro) {
                    postagem.style.display = "";
                } else {
                    postagem.style.display = "none";
                }
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const inputImagem = document.getElementById('imagem');
    const areaImagemConteudo = document.getElementById('areaImagemConteudo');
    const previewImagem = document.getElementById('previewImagem');
    const previewImagemTag = document.getElementById('previewImagemTag');
    const botaoRemoverImagem = document.getElementById('botaoRemoverImagem');

    inputImagem.addEventListener('change', function () {
        const arquivo = inputImagem.files[0];
        if (!arquivo) return;

        const leitor = new FileReader();
        leitor.onload = function (evento) {
            previewImagemTag.src = evento.target.result;
            previewImagem.hidden = false;
            areaImagemConteudo.hidden = true;
        };
        leitor.readAsDataURL(arquivo);
    });

    botaoRemoverImagem.addEventListener('click', function () {
        inputImagem.value = '';
        previewImagemTag.src = '';
        previewImagem.hidden = true;
        areaImagemConteudo.hidden = false;
    });
});