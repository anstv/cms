<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php echo $title . " | " . $site_cfg['name'] ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/engine/view/style.css">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <header>
            <div class="logo">@</div>
            <div class="slider"></div>
            <nav><div class="menu">
                    <ul class="menu-list">
                        <li class="menu-list-item"><a href="/" class="menu-link">Главная</a></li>
                        <li class="menu-list-item dropdown-menu"><a href="/index.php?category=0" class="menu-link">Категории</a>
                        <?php
                        $menuCat = "<ul class=\"menu-cat dropdown-content\">" . PHP_EOL;
                        foreach ($menuArray as $menuItem)
                        {
                            $menuCat .= "<li><a class=\"menu-link\" href=\"index.php?category=" . $menuItem['id'] . "\">" . $menuItem['name'] . "</a></li>" . PHP_EOL;
                        }
                        $menuCat .= "</ul>";
                        echo $menuCat;
                        ?>
                        </li>
                        <li class="menu-list-item">Об авторе</li>
                    </ul>
                </div></nav>
        </header>
    </div>
