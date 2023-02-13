<?php
    require_once 'header.php';

    if (!$loggedin) die();

    if (isset($_POST['lesson_name']))
    {
        $lesson_name = sanitizeString($_POST['lesson_name']);
        $course_id = sanitizeString($_POST['course_id']);
        $description = sanitizeString($_POST['description']);

        $result = queryMysql("INSERT INTO lessons(lesson_name, course_id, description) VALUES('$lesson_name', '$course_id', '$description')");
        if ($result)
        {
            $success = "A lição foi adicionada com sucesso!";
        }
        else
        {
            $error = "Algo deu errado. Por favor, tente novamente mais tarde.";
        }
    }
?>

<div class="container">
    <h2>Adicionar Lição</h2>

    <?php
        if (isset($success))
        {
            echo "<div class='success'>$success</div>";
        }
        elseif (isset($error))
        {
            echo "<div class='error'>$error</div>";
        }
    ?>

    <form action="add-lesson.php" method="post">
        <div class="form-group">
            <label for="lesson_name">Nome da Lição:</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name" required>
        </div>
        <div class="form-group">
            <label for="course_id">Curso:</label>
            <select class="form-control" id="course_id" name="course_id">
                <?php
                    $courses = queryMysql("SELECT * FROM courses");
                    while ($row = $courses->fetch_array(MYSQLI_ASSOC))
                    {
                        echo "<option value='" . $row['id'] . "'>" . $row['course_name'] . "</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

<?php
    require_once 'footer.php';
?>
