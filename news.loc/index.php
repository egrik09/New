<?php

require ('db.php');

$query = 'SELECT * FROM news';
$result = mysqli_query($connection, $query);

mysqli_close();

while ($row = mysqli_fetch_array($result)) {

    echo '<a href="detail.php?id' .$row['id']. '">';
    echo $row['tittle'] . '<br>';
}

?>