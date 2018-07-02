<!DOCTYPE html>
<html>
<head>
    <h1> Комментарии </h1>
</head>
<body>
<form action="comment.php" method="POST">
    <input type="text" name="name" value=""><br>
    <textarea name="comment" cols="50" rows="2"></textarea>
    <input type="submit" value="Сохранить">

</form>
</body>
</html>
<?php

/*$connection = mysqli_connect('localhost','root','root','1234', '3308');
$db = mysqli_select_db($connection, 'comments');
mysqli_query(1234);

$find_comments = mysqli_query($connection, "SELECT * FROM comments");

while($row = mysqli_fetch_assoc($find_comments)){
    $comment_name = $row['name'];
    $comment = $row['comment'];

    echo "$comment_name - $comment";
}*/
?>