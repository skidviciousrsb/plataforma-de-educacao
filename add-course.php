<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Adicionar Curso</title>
  <link rel="stylesheet" type="text/css" href="add-course.css">
</head>
<body>
  <header>
    <nav>
      <a href="index.php">Início</a>
      <a href="courses.php">Cursos</a>
      <a href="registration.php">Registro</a>
    </nav>
  </header>
  <main>
    <h1>Adicionar Curso</h1>
    <form action="" method="post">
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="description">Descrição:</label>
      <textarea id="description" name="description"></textarea><br><br>
      <label for="price">Preço:</label>
      <input type="text" id="price" name="price"><br><br>
      <input type="submit" value="Adicionar">
    </form>
  </main>
  <footer>
    &copy; 2023, plataforma de cursos online
  </footer>
</body>
</html>
