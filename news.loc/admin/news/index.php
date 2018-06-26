<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head></head>
<body>

<a href="add.php"> Добавить новости</a> </<br>
<?php

$connection = mysqli_connect('localhost','root','root','1234', '3308');
$db = mysqli_select_db($connection, 'news');
mysqli_query(1234);

$select1 = mysqli_query($connection,"SELECT COUNT(*) FROM news");
if (!$select1) die('error for count'.mysqli_error());
$row1 = mysqli_fetch_row($select1);
$count_post = $row1[0];

$result = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 5");

if (!$_GET){
while ($row = mysqli_fetch_array($result)) {
    ?>
    <h1><?php echo $row['tittle'] . '<br>';?></h1>
    <?php echo $row ['text'];?> </br>
    <a href = 'edit.php?id=<?php echo $row['id']?>'>Редактировать новость</a>
    <a href = 'delete.php?id=<?php echo $row['id']?>'>Удалить новость</a>
    <hr/>
<?php } ?>
    <?php
    echo 'Page: 1 ';
    for ($i=5, $ii=2; $i<$count_post; $i=$i+5, $ii++)
        echo "<a href='index.php?p={$i}'> {$ii} </a>";
    ?>
<?php }?>
<?php

if ($_GET['p']){
    $page = (int)$_GET['p'];
    $result = mysqli_query($connection,"SELECT * FROM news ORDER BY id DESC LIMIT $page, 5");
    if (!$result) die('error for count' . mysqli_error());

    while ($row = mysqli_fetch_array($result)){
        ?>
        <h1><?php echo $row['tittle'] . '<br>';?></h1>
        <?php echo $row ['text']; ?> </br>
        <a href='edit.php?id=<?php echo $row['id']; ?>'>Редактировать новость</a>
        <a href='delete.php?id=<?php echo $row['id']; ?>'>Удалить новость</a>
        <hr/>

    <?php }
    ?>
    <?php
    echo "Page: <a href='index.php'> 1 </a>";
    for ($i=5, $ii=2; $i<$count_post; $i=$i+5, $ii++){
        echo "<a href='index.php?p={$i}'> {$ii} </a>";
    }
}

?>
</body>
</html>