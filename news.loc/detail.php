    <div class = "container">
        <div class="row">
            <div class="col-md-12">
                <?php

                include_once 'main.php';
                include_once 'db.php';

                $id = (int)$_GET['id'];
                $query = "SELECT * FROM news WHERE id = $id";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <h4><?php echo $row['tittle'];?></h4>
                <?php echo $row['text'];

                if (!$id = $row){
                echo 'Данной новости не существует.';
                }

                ?>
            </div>
        </div>
    </div>
</body>
</html>

