<!DOCTYPE html>
<html>
<head>
    <title>Добавление новости</title>

</head>
<body>

<form method="post" action="add.php">


    Название новсти <br />
<input type="text" name="tittle" required/><br /><br />

    Текст новости <br />
    <textarea cols="40" rows="10" name="text" required></textarea><br /><br />
    <input type="date" name="date" required />

    <input type="submit" name="add" value="Добавить"/>
</form>

    <?php

    include_once 'C:\MAMP\htdocs\news.loc\db.php';
    include_once 'C:\MAMP\htdocs\news.loc\News.php';

        $news = new News();
        $news->setTittle($_POST['tittle']);
        $news->setText($_POST['text']);
        $news->setDate($_POST['date']);
        $news->setId($_POST['id']);
        $newsList[] = $news;

        if(isset($_POST['add'])){

            $tittle = $news->getTittle();
            $text = $news->getText();
            $date = $news->getDate();
            $id = $news->getId();
            mysqli_query ($connection,"INSERT INTO news (id, text, tittle, date) VALUES ('$id','$text','$tittle','$date')");
            mysqli_close();

            echo 'Новость успешно добавлена';

        }
    ?>

<form method="post" action="add.php">
    <input type="submit" name="back" value="Назад" formaction="index.php"/>


</body>
</html>