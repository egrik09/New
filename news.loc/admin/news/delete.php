<!DOCTYPE html>
<html>
<head>
    <title>Удаление новости</title>
</head>
<body>

<?php
    include_once 'C:\MAMP\htdocs\news.loc\db.php';
    include_once 'C:\MAMP\htdocs\news.loc\News.php';

    $news = new News();
    $news->setId($_GET['id']);

    $id = (int)$news->getId();

    mysqli_query($connection, "DELETE FROM news WHERE id = $id");

    mysqli_close($connection);

    echo 'Новость удалена!' . '<br>';

?>

    <form method="post" action="delete.php">
        <input type="submit" name="delete" value="Назад" formaction="index.php"/>


<form>
</form>
</body>
</html>

