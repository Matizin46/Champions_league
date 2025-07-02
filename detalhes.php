<?php
include "cabecalho.php";
// 1- Recuperar a informação do ID
$id = $_GET['id'];
// 2- Conexão com o BD
include "conexao.php";
// 3- Montagem do SQL
$sql = "select * from jogadores_champions where id = $id";
// 4- Execução do SQl
$resultado = mysqli_query($conexao, $sql);
// 5- Definição das variaveis do filme
$nome = "";
$nacionalidade = "";
$idade = "";
$posicao = "";
$time_atual = "";
$numero_camisa = "";
$gols_champios = "";
$assistencias = "";
$foto = "";
$historia = "";
// 6- Laço com as informações do filme
while ($linha = mysqli_fetch_assoc($resultado)) {
  $nome = $linha["nome"];
  $nacionalidade = $linha["nacionalidade"];
  $idade = $linha["idade"];
  $posicao = $linha["posicao"];
  $time_atual = $linha["time_atual"];
  $numero_camisa = $linha["numero_camisa"];
  $gols_champions = $linha["gols_champions"];
  $assistencias = $linha["assistencias"];
  $foto = $linha["foto"];
  $historia = $linha["historia"];
}
// 7- Fechar a conexão com o BD
mysqli_close($conexao);

// 8- Mostrar as informações na tela
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10 bg-light shadow-lg rounded-4 p-4">
      <div class="row g-4 align-items-center">

        <!-- Imagem do jogador -->
        <div class="col-md-5 text-center">
          <img src="<?= $foto ?>" class="img-fluid rounded-4 border border-2 border-secondary" alt="Foto do jogador">
        </div>

        <!-- Informações do jogador -->
        <div class="col-md-7">
          <h2 class="text-primary fw-bold mb-3"><?= $nome ?></h2>
          <p><strong>Nacionalidade:</strong> <?= $nacionalidade ?></p>
          <p><strong>Idade:</strong> <?= $idade ?> anos</p>
          <p><strong>Posição:</strong> <?= $posicao ?></p>
          <p><strong>Time Atual:</strong> <?= $time_atual ?></p>
          <p><strong>Camisa Nº:</strong> <?= $numero_camisa ?></p>
          <p><strong>Gols na Champions:</strong> <?= $gols_champions ?></p>
          <p><strong>Assistências:</strong> <?= $assistencias ?></p>

          <div class="mt-3">
            <h5 class="text-secondary">História do Jogador</h5>
            <p class="text-muted"><?= $historia ?></p>
          </div>

          <!-- Botão Voltar -->
          <a href="javascript:history.back()" class="btn btn-outline-secondary mt-4">
            ⬅ Voltar
          </a>
        </div>

      </div>
    </div>
  </div>
</div>
<?php
include "rodape.php"
?>