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
session_start();

$connection = mysqli_connect('localhost','root','root','1234', '3308');
$db = mysqli_select_db($connection, 'news');



if(isset($_POST['add'])){

    $tittle = strip_tags(trim($_POST['tittle']));
    $text = strip_tags(trim($_POST['text']));
    $date = $_POST['date'];
    $id = $_POST['id'];
    mysqli_query ($connection,"INSERT INTO news (id, text, tittle, date) VALUES ('$id','$text','$tittle','$date')");
    mysqli_close();

    echo 'Новость успешно добавлена';
}

?>
</body>
</html>
