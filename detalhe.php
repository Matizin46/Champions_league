<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM jogadores_champions WHERE id = $id";
$resultado = $conexao->query($sql);
$jogador = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Detalhes - <?php echo $jogador['nome']; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h2><?php echo $jogador['nome']; ?></h2>
    <img src="<?php echo $jogador['foto']; ?>" class="img-fluid mb-3" style="max-width: 300px;">
    <ul class="list-group">
      <li class="list-group-item"><strong>Nacionalidade:</strong> <?php echo $jogador['nacionalidade']; ?></li>
      <li class="list-group-item"><strong>Idade:</strong> <?php echo $jogador['idade']; ?> anos</li>
      <li class="list-group-item"><strong>Posição:</strong> <?php echo $jogador['posicao']; ?></li>
      <li class="list-group-item"><strong>Time Atual:</strong> <?php echo $jogador['time_atual']; ?></li>
      <li class="list-group-item"><strong>Número da Camisa:</strong> <?php echo $jogador['numero_camisa']; ?></li>
      <li class="list-group-item"><strong>Gols na Champions:</strong> <?php echo $jogador['gols_champions']; ?></li>
      <li class="list-group-item"><strong>Assistências:</strong> <?php echo $jogador['assistencias']; ?></li>
    </ul>
    <a href="listagem.php" class="btn btn-secondary mt-3">Voltar</a>
  </div>
</body>
</html>
