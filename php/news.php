<?php
require 'db.php';

$id = (int)$_GET['id'];
$page = (int)$_GET['page'];

$sql = ("SELECT * FROM news WHERE id=$id");
$query = $connection->query($sql);
$row = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="../css/news_style.css"> 
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <div class="menu">
            <a href="index.php">
                <span class="menu-news-title">Главная</span=>
            </a>
            <span class="menu-news-title"> / </span>
            <span><?php echo $row['title']; ?></span>
        </div>
        <h1><?php echo $row['title'] ?></h1>
        <div class="news">
            <div class="news-content news-message">
                <span class="news-date"><?php echo date('d.m.Y', strtotime($row['date'])) ?></span>
                <h2 class="news-announce"><?php echo $row['announce'] ?></h2>
                <?php echo $row['content'] ?>
                <a class="button news-button" href="../index.php?page=<?php echo $page; ?>">
                    <img class="button-arrow" src="../img/icons/reverse_arrow.svg" data-active="../img/icons/active_reverse_arrow.svg" alt="Стрелка"></img>
                    <span class="button-text">Назад к новостям</span>
                </a>
            </div>
            <div class="news-content">
                <div class="news-img-block">
                    <img class="news-img" src="../img/news/<?php echo $row['image'] ?>" alt="Новость">
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
    <script src="../js/news_main.js"></script> 
</body>
</html>