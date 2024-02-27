<?php
include('masterhead.html')
?>

<div class="p-3">
    <div class="p-2 mb-3">
        <h1 class="w3-center w3-animate-bottom titulo">
            Sistema web para gerenciamento de ordens de serviço
        </h1>
    </div>

    <div class="row mb-5">
        <a href="index.php" class="subtitulo">&#8592; Voltar</a>
    </div>

    <div class="row mb-5">
        <div class="col">
            <span class="subtitulo">Objetivo: </span>
            <p class="texto2">
                Realizar o gerenciamento das ordens de serviço da empresa através de um sistema web que foi desenvolvido com PHP 8, utilizando o framework Laravel.
                Algumas das funcionalidades do sistema:
            </p>

            <ul class="texto2">
                <li>Vincular</li>
                <li>Editar</li>
                <li>Excluir</li>
                <li>Iniciar</li>
                <li>Finalizar</li>
                <li>Pausar</li>
                <li>monitoramento em tempo real</li>
                <li>Dentre outros</li>
            </ul>
        </div>

        <div class="img col-lg-3 col-md-12 order-md-1 picture text-center d-none d-md-block">
            <img src="img/os.svg" alt width="100%" class="img-fluid  w3-animate-zoom">
        </div>
    </div>


</div>


<?php
include('footer.php')
?>