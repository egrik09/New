<?php
    include_once 'C:\MAMP\htdocs\news.loc\db.php';
    include_once 'C:\MAMP\htdocs\news.loc\models\News.php';
    include_once 'C:\MAMP\htdocs\news.loc\main.php';

    $news = new News();
    $news->setId($_GET['id']);

    $id = (int)$news->getId();

    mysqli_query($connection, "DELETE FROM news WHERE id = $id");

    mysqli_close($connection);

    echo 'Новость удалена!' . '<br>';

?>

    <form method="post" action="delete.php">
        <input type="submit" name="delete" value="Назад" formaction="index.php"/>
    </form>

</body>
</html>

