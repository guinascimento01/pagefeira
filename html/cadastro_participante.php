<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Participantes</title>
    <link rel="stylesheet" href="../css/style.css">
  <script>
    function atualizarCampos() {
      const tipo = document.getElementById("tipo").value;
      document.getElementById("rmDiv").style.display = tipo === "Aluno" ? "block" : "none";
      document.getElementById("cpfDiv").style.display = tipo === "Pai" || tipo === "Responsável" ? "block" : "none";
    }
  </script>
</head>
<body>

  <header>
    <img src="../img/senai.png" alt="">
    <h1>Cadastro de Participantes</h1>
  </header>

  <nav>
    <a href="index.html">Início</a> |
    <a href="cadastro_palestra.html">Cadastro de Palestras</a> |
    <a href="cadastro_participante.html">Cadastro de Participantes</a> |
    <a href="contato.html">Contato</a> |
    <a href="mapa.html">Mapa do Evento</a>
  </nav>

  <main>
    <form action="cadastro_participante.php" method="post">
      <label for="nome">Nome Completo:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="idade">Idade:</label>
      <input type="number" id="idade" name="idade" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>

      <label for="palestra">Selecione uma Palestra/Oficina:</label>
      <select id="palestra" name="palestra" required>
        <option value="Oficina 1">Oficina do Jonatas</option>
        <option value="Oficina 2">Oficina do Bernini</option>
        <option value="Palestra A">Palestra do Bernini</option>
        <option value="Palestra A">Palestra do Jonatas</option>
      </select>

      <label for="tipo">Tipo de Participante:</label>
      <select id="tipo" name="tipo" onchange="atualizarCampos()" required>
        <option value="">-- Selecione --</option>
        <option value="Aluno">Aluno</option>
        <option value="Pai">Pai</option>
        <option value="Responsável">Responsável</option>
      </select>

      <div id="rmDiv" style="display: none;">
        <label for="rm">RM do Aluno:</label>
        <input type="text" id="rm" name="rm">
      </div>

      <div id="cpfDiv" style="display: none;">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf">
      </div>

      <input type="submit" value="Cadastrar">
    </form>
  </main>

  <footer>
    <p>&copy; 2025 - SENAI</p>
  </footer>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Participante cadastrado com sucesso!</h1>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</p>";
    echo "<p><strong>Idade:</strong> " . htmlspecialchars($_POST['idade']) . "</p>";
    echo "<p><strong>Telefone:</strong> " . htmlspecialchars($_POST['telefone']) . "</p>";
    echo "<p><strong>Palestra:</strong> " . htmlspecialchars($_POST['palestra']) . "</p>";
    echo "<p><strong>Tipo:</strong> " . htmlspecialchars($_POST['tipo']) . "</p>";
    if ($_POST['tipo'] === 'Aluno') {
        echo "<p><strong>RM:</strong> " . htmlspecialchars($_POST['rm']) . "</p>";
    } elseif ($_POST['tipo'] === 'Pai ou responsável') {
        echo "<p><strong>CPF:</strong> " . htmlspecialchars($_POST['cpf']) . "</p>";
    }
}
?>
