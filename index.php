<?php require 'php/db.php'; ?>

<?php
$page_news_count = 4;
$page_switch_button_count = 3;

$query = $connection->query("SELECT COUNT(*) AS total FROM `news`");
$news_count = $query->fetch_assoc();

$page_count = ceil($news_count['total'] / $page_news_count);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
$offset = $page * $page_news_count;

$sql = ("SELECT * FROM news ORDER BY date DESC LIMIT $page_news_count OFFSET $offset");

$query = $connection->query($sql);

$sql = ("SELECT * FROM news ORDER BY date DESC LIMIT 1");
$banner_query = $connection->query($sql);
$banner = $banner_query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="css/index_style.css"> 
</head>
<body>
<?php include 'php/header.php'; ?>
    <main>
        <div class="news-banner">
            <img class="news-banner-img" src="img/news/<?php echo $banner['image']; ?>" alt="Новость"></img>
            <div class="news-banner-text">
                <h1 class="news-banner-title"><?php echo $banner['title']; ?></h1>
                <?php echo $banner['announce']; ?>
            </div>
        </div>
        <div class="container">
            <h1>Новости</h1>
            <div class="news-container">
                <?php while($row = $query->fetch_assoc()) { ?>
                <div class="news">
                    <span class="news-date"><?php echo date('d.m.Y', strtotime($row['date'])); ?></span>
                    <h2 class="news-title"><?php echo $row['title']; ?></h2>
                    <p class="news-announce"><?php echo $row['announce']; ?></p>
                    <a class="button news-button" href="php/news.php?page=<?php echo $page; ?>&id=<?php echo $row['id']; ?>">
                        <span class="button-text">Подробнее </span>
                        <img class="button-arrow" src="img/icons/arrow.svg" data-active="img/icons/active_arrow.svg" alt="Стрелка"></img>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="page-switch-buttons">
                <div class="page-switch-buttons-numbers">
                    <?php for($i = 0; $i < $page_switch_button_count - 1; $i++): ?>
                    <a href="?page=<?php echo $i; ?>">
                        <button class="button page-switch-button button-text">
                            <?php echo $i + 1; ?>
                        </button>
                    </a>
                    <?php endfor; ?>
                    <a href="?page=<?php echo $page_count - 1; ?>">
                        <button class="button page-switch-button button-text">
                            <?php echo $page_count; ?>
                        </button>
                    </a>
                </div>
                <a href="?page=<?php echo $page + 1; ?>">
                    <button class="button page-switch-button page-switch-button-arrow" <?php if ($page == $page_count - 1){?>style="display: none;"<?php } ?>>
                        <img class="page-switch-button-arrow-img" src="img/icons/next_page_arrow.svg" data-active="img/icons/active_next_page_arrow.svg" alt="Стрелка"></img>
                    </button>
                </a>
            </div>
        </div>
    </main>
<?php include 'footer.php'; ?>
    <script src="js/index_main.js"></script> 
</body>
</html>