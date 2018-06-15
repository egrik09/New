<?php
$id = $_GET['id'];

include ('db.php');


$query1 = 'SELECT * FROM news WHERE text = $id';
$result1 = mysqli_query($connection, $query1);
$row1 = mysqli_fetch_array($result1);

while ($row1 = mysqli_fetch_array($result1)) {

 echo $row1['text'];
}

?>