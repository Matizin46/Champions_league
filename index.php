<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>ChampionsLeague - Início</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <div class="container mt-4">
    <h1 class="text-center text-primary">Estrelas da Champions League</h1>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active"><img src="img/messi.jpg" class="d-block w-100" alt="Messi"></div>
        <div class="carousel-item"><img src="img/ronaldo.jpg" class="d-block w-100" alt="Ronaldo"></div>
        <div class="carousel-item"><img src="img/mbappe.jpg" class="d-block w-100" alt="Mbappé"></div>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="listagem.php" class="btn btn-success">Ver Jogadores</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
