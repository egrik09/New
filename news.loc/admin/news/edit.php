<!DOCTYPE html>
<html>
<head><title>Редактирование новости</title></head>
<body>


<?php
session_start();

$connection = mysqli_connect('localhost','root','root','1234', '3308');
$db = mysqli_select_db($connection, 'news');

$id = $_GET ['id'];
$result = mysqli_query($connection, "SElECT * FROM news WHERE id = '$id'");

$row = mysqli_fetch_assoc($result);

if (isset($_POST['save'])){
    $tittle = strip_tags(trim($_POST['tittle']));
    $text = strip_tags(trim($_POST['text']));
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

</body>
</html>
