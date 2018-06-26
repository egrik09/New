<!DOCTYPE html>
<html>
<head><title>Удаление новости</title></head>
<body>

    <?php

$connection = mysqli_connect('localhost','root','root','1234', '3308');
$db = mysqli_select_db($connection, 'news');

$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM news WHERE id = '$id'");

mysqli_close($connection);

echo 'Новость удалена!';

?>
<form>
</form>
</body>
</html>

