<!DOCTYPE html>
<html>
<head><title>Редактирование новости</title></head>
<body>


<?php
session_start();

include_once 'C:\MAMP\htdocs\news.loc\db.php';
include_once 'C:\MAMP\htdocs\news.loc\News.php';


$news = new News();
$news->setTittle($_POST['tittle']);
$news->setText($_POST['text']);
$news->setId($_GET['id']);
$newsList[] = $news;


$id = (int)$news->getId();
$result = mysqli_query($connection, "SElECT * FROM news WHERE id = '$id'");

$row = mysqli_fetch_assoc($result);

if (isset($_POST['save'])){
    $tittle = $news->getTittle();
    $text = $news->getText();
    mysqli_query($connection, "UPDATE news SET tittle='$tittle',text='$text' WHERE id = '$id'");

    mysqli_close($connection);

}

?>

<form method="post" action="edit.php?id=<?php echo $id; ?>">


    Название новсти <br />
    <input type="text" name="tittle" value="<?php echo $row['tittle'];?>" /><br /><br />

    Текст новости <br />
    <textarea cols="40" rows="10" name="text"><?php echo $row['text'];?></textarea><br /><br />
    <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>" />

    <input type="submit" name="save" value="Сохранить"/>
</form>
<?php
if (isset($_POST['save'])){

    echo "Новость исправлена";
}
?>

<form method="post" action="edit.php">
    <input type="submit" name="back" value="Назад" formaction="index.php"/>

</body>
</html>
