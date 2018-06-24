<?php

include_once 'db.php';

    $id = (int) $_GET['id'];
    $query = "SELECT * FROM news WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    echo $row['text'];
?>
