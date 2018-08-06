    <div class = "container">
        <div id="header">
            <h1>Новостная лента<h1>
        </div>
        <div class='row'>
            <div class="col-md-10">
                <?php

                    include_once 'main.php';
                    include_once 'db.php';
                    include_once 'News.php';

                    $query = 'SELECT * FROM news ORDER BY id DESC';
                    $result = mysqli_query($connection, $query);
                    $count = mysqli_num_rows($result);

                    mysqli_close($connection);


                    $newsList = [];
                    while ($row = mysqli_fetch_array($result)) {
                        $news = new News();
                        $news->setTittle($row['tittle']);
                        $news->setDate($row['date']);
                        $news->setId($row['id']);
                        $newsList[] = $news;
                    }

                    foreach ($newsList as $news) {
                        echo '<a href="detail.php?id=' .$news->getid().'">';
                        echo $news->getTittle() . '<br>';
                        echo $news->getDate() . '<br>';
                    }
                    ?>
            </div>
        </div>
     </div>
</body>
</html>
