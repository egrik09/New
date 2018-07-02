<?php

include_once 'connect/db.php';

     $id = $_GET['id'];
     $query = "SELECT * FROM news WHERE id = $id";
     $result = mysqli_query($connection, $query);
     $row = mysqli_fetch_assoc($result);

     echo $row['text'];

     if (!$id = $row){
         echo 'Данной новости не существует.';
     }

?>