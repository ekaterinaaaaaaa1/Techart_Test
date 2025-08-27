<?php
require 'php/NewsModel.php';

$pageNewsCount = 4;
$pageSwitchButtonCount = 3;

$newsModel = new NewsModel();
$newsCount = $newsModel->getCount();

$pageCount = ceil($newsCount / $pageNewsCount);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $pageNewsCount;

$banner = $newsModel->getRows(0, 1)[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
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
                <?php foreach ($newsModel->getRows($offset, $pageNewsCount) as $row) { ?>
                <div class="news">
                    <span class="news-date"><?php echo date('d.m.Y', strtotime($row['date'])); ?></span>
                    <h2 class="news-title"><?php echo $row['title']; ?></h2>
                    <p class="news-announce"><?php echo $row['announce']; ?></p>
                    <a class="button news-button" href="/news/<?php echo $row['id']; ?>/">
                        <span class="button-text">Подробнее </span>
                        <img class="button-arrow" src="img/icons/arrow.svg" data-active="img/icons/active_arrow.svg" alt="Стрелка"></img>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="page-switch-buttons">
                <div class="page-switch-buttons-numbers">
                    <?php
                    if ($page + $pageSwitchButtonCount <= $pageCount + 1) {
                        for ($i = 0; $i < $pageSwitchButtonCount; $i++): ?>
                            <a href="/news/page-<?php echo $page + $i; ?>/">
                                <button class="button page-switch-button button-text">
                                    <?php echo $page + $i; ?>
                                </button>
                            </a>
                        <?php endfor;
                    }
                    else {
                        for ($i = $pageSwitchButtonCount - 1; $i >= 0; $i--): ?>
                            <a href="/news/page-<?php echo $pageCount - $i; ?>/">
                                <button class="button page-switch-button button-text">
                                    <?php echo $pageCount - $i; ?>
                                </button>
                            </a>
                        <?php endfor;
                    }
                    ?>
                </div>
                <a href="/news/page-<?php echo $page + 1; ?>/">
                    <button class="button page-switch-button page-switch-button-arrow" <?php if ($page == $pageCount){?>style="display: none;"<?php } ?>>
                        <img class="page-switch-button-arrow-img" src="img/icons/next_page_arrow.svg" data-active="img/icons/active_next_page_arrow.svg" alt="Стрелка"></img>
                    </button>
                </a>
            </div>
        </div>
    </main>
<?php include 'php/footer.php'; ?>
    <script src="js/index_main.js"></script> 
</body>
</html>
