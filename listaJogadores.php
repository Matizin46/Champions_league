<?php
include "cabecalho.php"
?>
<h2>Todos os Jogadores</h2>

<div class="container mt-4">
    <div class="row">
        <?php

        include "conexao.php";

        $sql = "select * from jogadores_champions order by nome asc";
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
</div>

<?php
include "rodape.php"
?>