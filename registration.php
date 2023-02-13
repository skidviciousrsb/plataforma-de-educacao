<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <div class="form-container">
      <form action="register.php" method="post">
        <h2>Cadastro</h2>
        <div class="input-group">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome">
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="input-group">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha">
        </div>
        <div class="input-group">
          <button type="submit" class="btn">Cadastrar</button>
        </div>
        <p>Já tem uma conta? <a href="login.php">Faça Login</a></p>
      </form>
    </div>
  </body>
</html>
