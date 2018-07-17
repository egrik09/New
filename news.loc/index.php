 <div class = "container">
        <div id="header">
            <h1>Новостная лента<h1>
        </div>
        <div class="row">
            <div class="col-md-10">
                <?php

                    include_once 'main.php';
                    include_once 'db.php';

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
            </div>
        </div>
    </div>
</body>
</html>
