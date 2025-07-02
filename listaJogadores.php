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
                <div class="card shadow-sm border-0 rounded-4 h-100 card-hover" style="transition: transform 0.3s, box-shadow 0.3s;">

                    <!-- Imagem do jogador -->
                    <img src="<?= $linha['foto']; ?>" class="card-img-top rounded-top-4" style="height: 500px; object-fit: cover;" alt="Foto do jogador">

                    <div class="card-body">
                        <h4 class="card-title text-primary"><?= $linha['nome']; ?></h4>
                        <p class="card-text mb-1"><strong>Nacionalidade:</strong> <?= $linha['nacionalidade']; ?></p>
                        <p class="card-text mb-1"><strong>Time Atual:</strong> <?= $linha['time_atual']; ?></p>
                        <hr>
                        <a href="detalhes.php?id=<?= $linha['id']; ?>" class="btn btn-outline-primary w-100">Veja detalhes</a>
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