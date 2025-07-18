<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="../css/index_style.css"> 
</head>
<body>
<?php include 'header.php'; ?>
    <main>
        <div class="news-banner">
            <img class="news-banner-img" src="../img/news/c6e252ce94fd757ae97522197c394239.jpg"></img>
            <div class="news-banner-text">
                <h1 class="news-banner-title">Возвращение этнографа</h1>
                <p class="news-banner-announce">Cегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</p>
            </div>
        </div>
        <div class="container">
            <h1>Новости</h1>
            <div class="news-container">
                <div class="news">
                    <span class="news-date">11.06.2412</span>
                    <h2 class="news-title">Возвращение из этнографа</h2>
                    <p class="news-announce">Cегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</p>
                    <a class="button news-button" href="news.php">
                        <span class="button-text">Подробнее </span>
                        <img class="button-arrow" src="../img/icons/arrow.svg" data-active="../img/icons/active_arrow.svg" alt="Стрелка"></img>
                    </a>
                </div>
                <div class="news">
                    <span class="news-date">11.06.2412</span>
                    <h2 class="news-title">Несчастный случай с известной светской дивой</h2>
                    <p class="news-announce">Светская дива Алиса Уткина попала под троллейбус, пытаясь уйти от преследования.</p>
                    <a class="button news-button" href="news.php">
                        <span class="button-text">Подробнее </span>
                        <img class="button-arrow" src="../img/icons/arrow.svg" data-active="../img/icons/active_arrow.svg" alt="Стрелка"></img>
                    </a>
                </div>
                <div class="news">
                    <span class="news-date">11.06.2412</span>
                    <h2 class="news-title">Папа Римский совершил визит в систему Альфы Центавра</h2>
                    <p class="news-announce">Папа Римский Жан-Клод XIV посетил с апостольским визитом систему Альфы Центавра. Он принял участие в ряде благотворительных мероприятий и совершил богослужение в соборе Ван-Дамм-де-Ури.</p>
                    <a class="button news-button" href="news.php">
                        <span class="button-text">Подробнее </span>
                        <img class="button-arrow" src="../img/icons/arrow.svg" data-active="../img/icons/active_arrow.svg" alt="Стрелка"></img>
                    </a>
                </div>
                <div class="news">
                    <span class="news-date">11.06.2412</span>
                    <h2 class="news-title">На чемпионате по пустотной гребле победила команда с Фобоса</h2>
                    <p class="news-announce">В поясе астероидов на проходившем в последние выходные этапе системного чемпионата по пустотной гребле команда с Фобоса одержала убедительную победу.</p>
                    <a class="button news-button" href="news.php">
                        <span class="button-text">Подробнее </span>
                        <img class="button-arrow" src="../img/icons/arrow.svg" data-active="../img/icons/active_arrow.svg" alt="Стрелка"></img>
                    </a>
                </div>
            </div>
            <div class="page-switch-buttons">
                <div class="page-switch-buttons-numbers">
                    <button class="button page-switch-button button-text">1</button>
                    <button class="button page-switch-button button-text">2</button>
                    <button class="button page-switch-button page-switch-button-last button-text">3</button>
                </div>
                <button class="button page-switch-button page-switch-button-arrow">
                    <img class="page-switch-button-arrow-img" src="../img/icons/next_page_arrow.svg" data-active="../img/icons/active_next_page_arrow.svg" alt="Стрелка"></img>
                </div>
            </div>
        </div>
    </main>
<?php include 'footer.php'; ?>
    <script src="../js/main.js"></script> 
</body>
</html>