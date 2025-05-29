<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Contato - Feira Tecnológica</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

  <header>
    <img src="/img/senai.png" alt="">
    <h1>Contato</h1>
  </header>

  <nav>
    <a href="index.html">Início</a> |
    <a href="cadastro_palestra.php">Cadastro de Palestras</a> |
    <a href="cadastro_participante.php">Cadastro de Participantes</a> |
    <a href="contato.php">Contato</a> |
    <a href="mapa.html">Mapa do Evento</a>
  </nav>

  <main>
    <section>
      <h2>Informações de Contato</h2>
      <p>Email: feiratec@escola.com</p>
      <p>Telefone: (18) </p>
      <p>Endereço: R. Pref. José Deliberador, 300 - Vila Thaide, Paraguaçu Paulista - SP, 19703-042</p>
    </section>

    <section>
      <h2>Envie sua Mensagem</h2>
      <form action="contato.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>

        <input type="submit" value="Enviar">
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Escola Técnica</p>
  </footer>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Mensagem enviada com sucesso!</h1>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($_POST['mensagem'])) . "</p>";
}
?>