<!DOCTYPE html>
<html>
<head></head>
<body>

<?php

include_once 'connect/db.php';

$query = 'SELECT * FROM news ORDER BY id DESC';
$result = mysqli_query($connection, $query);

mysqli_close($connection);

while ($row = mysqli_fetch_array($result)) {
?>
 <h1><?php echo '<a href="detail.php?id=' .$row['id']. '">';?></h1>
    <?php echo $row['tittle'] . '<br>';?>
    <hr/>
<?php } ?>



</body>
</html>
