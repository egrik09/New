<!DOCTYPE html>
<html>
<head></head>
<body>

<a href="admin/news/add.php"> Добавить новости</a> </<br>
<?php

include_once 'db.php';

$query = 'SELECT * FROM news ORDER BY id DESC';
$result = mysqli_query($connection, $query);

mysqli_close($connection);

while ($row = mysqli_fetch_array($result)) {
?>
 <h1><?php echo '<a href="detail.php?id=' .$row['id']. '">';?></h1>
    <?php echo $row['tittle'] . '<br>';?>
    <a href = 'admin/news/edit.php?id=<?php echo $row['id']?>'>Редактировать новость</a>
    <a href = 'admin/news/delete.php?id=<?php echo $row['id']?>'>Удалить новость</a>
    <hr/>
<?php } ?>



</body>
</html>
