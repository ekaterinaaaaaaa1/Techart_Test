<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <?php if (!empty(self::$css)) { ?>
        <link rel="stylesheet" href=<?php echo self::$css?>>
    <?php } ?>
</head>
<body>
    <header>
        <a class="header-logo-link" href="/news/" target="_self">
            <img class="header-logo" src="Resources/img/logo.svg" alt="Логотип"></img>
            <span class="header-logo-title">Галактический вестник</span>
        </a>
    </header>
<?=$content ?>
    <footer>
        <div class="footer-border">
            <span class="footer-copyright">&copy; 2023 — 2412 «Галактический вестник»</span>
        </div>
    </footer>
    <?php if (!empty(self::$js)) { ?>
        <script src=<?php echo self::$js?>></script> 
    <?php } ?>
</body>
</html>