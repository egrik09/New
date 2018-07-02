<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Новости</title>

</head>
<body>

    <div id="header">
     <h1>Новостная лента<h1>
    </div>

<?php

include_once 'connect/db.php';

$query = 'SELECT * FROM news ORDER BY id DESC';
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

mysqli_close($connection);

while ($row = mysqli_fetch_array($result)) {
?>
 <h1><?php echo '<a href="detail.php?id=' .$row['id']. '">';?></h1>
    <?php echo $row['tittle'] . '<br>';?>
    <?php echo $row['date']?>
    <hr/>
<?php } ?>

</body>
</html>
