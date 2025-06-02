<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Palestras</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <header>
    <img src="../img/senai.png" alt="">
    <h1>Cadastro de Palestras</h1>
  </header>

  <nav>
    <a href="index.html">Início</a> |
    <a href="cadastro_palestra.php">Cadastro de Palestras</a> |
    <a href="cadastro_participante.php">Cadastro de Participantes</a> |
    <a href="contato.php">Contato</a> |
    <a href="mapa.html">Mapa do Evento</a>
  </nav>

  <main>
    <form action="cadastro_palestra.php" method="post">
      <label for="nome">Nome da Palestra:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="descricao">Descrição:</label>
      <textarea id="descricao" name="descricao" required></textarea>

      <label for="palestrante">Palestrante:</label>
      <input type="text" id="palestrante" name="palestrante" required>

      <label for="horario">Horário:</label>
      <input type="time" id="horario" name="horario" required>

      <input type="submit" value="Cadastrar">
    </form>
  </main>
  

  <footer>
    <p>&copy; 2025 Escola Técnica</p>
  </footer>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Palestra cadastrada com sucesso!</h1>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</p>";
    echo "<p><strong>Descrição:</strong> " . htmlspecialchars($_POST['descricao']) . "</p>";
    echo "<p><strong>Palestrante:</strong> " . htmlspecialchars($_POST['palestrante']) . "</p>";
    echo "<p><strong>Horário:</strong> " . htmlspecialchars($_POST['horario']) . "</p>";
}

?>