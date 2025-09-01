    <div class="container">
        <div class="menu">
            <a href="/news/">
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
                <a class="button news-button" href="/news/">
                    <img class="button-arrow" src="/Resources/img/icons/reverse_arrow.svg" data-active="/Resources/img/icons/active_reverse_arrow.svg" alt="Стрелка"></img>
                    <span class="button-text">Назад к новостям</span>
                </a>
            </div>
            <div class="news-content">
                <div class="news-img-block">
                    <img class="news-img" src="/Resources/img/news/<?php echo $row['image'] ?>" alt="Новость">
                </div>
            </div>
        </div>
    </div>
