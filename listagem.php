<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Jogadores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <div class="container mt-4">
    <h2 class="text-center text-primary">Jogadores da Champions</h2>
    <div class="row">
      <?php
        $sql = "SELECT * FROM jogadores_champions";
        $resultado = $conexao->query($sql);
        while($row = $resultado->fetch_assoc()) {
      ?>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="<?php echo $row['foto']; ?>" class="card-img-top" alt="<?php echo $row['nome']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['nome']; ?></h5>
            <p class="card-text"><?php echo $row['posicao']; ?> | <?php echo $row['time_atual']; ?></p>
            <a href="detalhe.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Ver Detalhes</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</body>
</html>
