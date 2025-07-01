<?php
include "cabecalho.php";
include "banner.php";

?>
<div class="container">
    <h2 class="display-5">Melhores Jogadores</h2>

    <div class="row mb-5">
        <?php

        include "conexao.php";

        $sql = "select * from jogadores_champions order by gols_champions desc limit 4";

        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-md-3 mb-4">
                <div style="width: 18rem;">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $linha['foto']; ?>" class="card-img-top" style="width:100%; height:500px; object-fit: cover;">
                        <div class="card-body">
                            <h4 class="card-title"><?= $linha['nome']; ?></h4>
                            <p class="card-text mb-1"><strong>Nacionalidade:</strong> <?= $linha['nacionalidade']; ?></p>
                            <p class="card-text mb-1"><strong>Idade:</strong> <?= $linha['idade']; ?> anos</p>
                            <p class="card-text mb-1"><strong>Posição:</strong> <?= $linha['posicao']; ?></p>
                            <p class="card-text mb-1"><strong>Time Atual:</strong> <?= $linha['time_atual']; ?></p>
                            <p class="card-text mb-1"><strong>Camisa Nº:</strong> <?= $linha['numero_camisa']; ?></p>
                            <hr>
                            <p class="card-text mb-1"><strong>Gols na Champions:</strong> <?= $linha['gols_champions']; ?></p>
                            <p class="card-text mb-1"><strong>Assistências:</strong> <?= $linha['assistencias']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        mysqli_close($conexao);
        // Conexão fechada
        ?>
    </div>

    <div class="row mt-5">
        <div class="col-8">
            <img src="imagens/compo.jpg" class="img-fluid">
        </div>
        <div class="col-4 align-content-center">
            <p class="fs-5 fw-light">A Champions League, oficialmente chamada de UEFA Champions League, é a principal competição de clubes de futebol da Europa. Organizada pela UEFA, reúne os melhores times das ligas europeias em uma disputa de alto nível técnico e prestígio internacional.

                O torneio é dividido em várias fases. Primeiro, alguns clubes disputam as eliminatórias, que servem para definir os últimos classificados. Em seguida, começa a fase de grupos, com 32 times divididos em 8 grupos. Cada equipe joga contra os adversários do grupo em partidas de ida e volta. Os dois primeiros colocados de cada grupo avançam para a fase eliminatória.</p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-4 align-content-center">
            <p class="fs-5 fw-light">A fase eliminatória (mata-mata) inclui oitavas de final, quartas, semifinal e a grande final. Todas essas fases, com exceção da final, são disputadas em jogos de ida e volta. A final é jogo único, realizada em um estádio previamente escolhido.

                Entre suas principais características estão o alto nível dos clubes participantes, os grandes prêmios financeiros, a visibilidade mundial e a presença de jogadores de elite. O Real Madrid é o maior campeão da história do torneio.

                A Champions League acontece anualmente e é considerada o torneio mais prestigiado do futebol de clubes mundial.</p>
        </div>

        <div class="col-8">
            <img src="imagens/championsBola.jpg" class="img-fluid">
        </div>

    </div>

</div>
<?php
include "rodape.php"
?>