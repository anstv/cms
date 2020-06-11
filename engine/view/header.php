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
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/view/menu.php'; ?>
        </header>
    </div>
