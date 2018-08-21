<div class = "container">
    <div class="row">
        <div class="col-md-12">

        <a href="add.php"> Добавить новости </a></<br>
        <?php

        $nickname = "Админка";

        include_once 'C:\MAMP\htdocs\news.loc\db.php';
        include_once 'C:\MAMP\htdocs\news.loc\main.php';
        include_once 'C:\MAMP\htdocs\news.loc\models\News.php';

        $select1 = mysqli_query($connection,"SELECT COUNT(*) FROM news");
        if (!$select1) die('error for count'.mysqli_error());
        $row1 = mysqli_fetch_row($select1);
        $count_post = $row1[0];

        $result = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 5");

        if (!$_GET){

            $newsList = [];
            while ($row = mysqli_fetch_array($result)) {
                $news = new News();
                $news->setTittle($row['tittle']);
                $news->setText($row['text']);
                $news->setId($row['id']);
                $news->cleanAll();
                $newsList[] = $news;
            }

            foreach ($newsList as $news) {
        ?>
            <h1><?php echo $news->getTittle() . '<br>';?></h1>
            <?php echo $news->getText()?> </br>
            <a href = 'edit.php?id=<?php echo $news->getId()?>'>Редактировать новость</a></br>
            <a href = 'delete.php?id=<?php echo $news->getId()?>'>Удалить новость</a>
            <hr/>
        <?php } ?>
            <?php
            echo 'Page: 1 ';
            for ($i=5, $ii=2; $i<$count_post; $i=$i+5, $ii++)
                echo "<a href='index.php?p={$i}'> {$ii} </a>";
            ?>
        <?php }?>
            <?php

            if ($_GET['p']){
                $page = (int)$_GET['p'];
                $result = mysqli_query($connection,"SELECT * FROM news ORDER BY id DESC LIMIT $page, 5");
                if (!$result) die('error for count' . mysqli_error());

                $newsList = [];
                while ($row = mysqli_fetch_array($result)) {
                    $news = new News();
                    $news->setTittle($row['tittle']);
                    $news->setText($row['text']);
                    $news->setId($row['id']);
                    $newsList[] = $news;
                    $news->cleanAll();
                }

                foreach ($newsList as $news){
                    ?>
                    <h1><?php echo $news->getTittle() . '<br>';?></h1>
                    <?php echo $news->getText(); ?> </br>
                    <a href='edit.php?id=<?php echo $news->getId(); ?>'>Редактировать новость</a></br>
                    <a href='delete.php?id=<?php echo $news->getId(); ?>'>Удалить новость</a>
                    <hr/>
                <?php } ?>
                <?php
                echo "Page: <a href='index.php'> 1 </a>";
                for ($i=5, $ii=2; $i<$count_post; $i=$i+5, $ii++){
                    echo "<a href='index.php?p={$i}'> {$ii} </a>";
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>