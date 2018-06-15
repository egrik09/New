<?php

$connection = mysqli_connect('localhost','root','root','1234', '3307');
$db = mysqli_select_db($connection, 'news');
mysqli_set_charset($connection,utf8_encode());


?>