<?php
//подключаем конфиг
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/config.php";
//подключаем базу
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/dbconnect.php";

//подключаем функции
//require_once "engine/functions.php";

//подключаем контролеры
require_once  $_SERVER['DOCUMENT_ROOT'] . '/engine/controller/article.php';
require_once  $_SERVER['DOCUMENT_ROOT'] . '/engine/controller/category.php';

//получаем get параметры
$getArticle = NULL;
$getCategory = NULL;

//если параметров больше, чем надо (запрос одновременно и категории, и статьи) редиректим на главную
if (isset($_GET['category']) and isset($_GET['article'])) {
    header('Location: /');
    exit();
}

//приводим их к типу int
if (isset($_GET['article'])) {
    $getArticle = (int)$_GET['article'];
}
if (isset($_GET['category'])) {
    $getCategory = (int)$_GET['category'];
}

//вывод категорий в меню, работает всегда
getMenuCategory();

//вывод отдельной статьи
if ($getArticle != NULL) {
    getArticleData($getArticle);
}

//вывод статей отдельной категории
if ($getCategory != 0 and $getCategory != 0) {
    getOneCategory($getCategory);
}

//вывод всех статей из всех категорий (при category = 0)
if ($getCategory != NULL and $getCategory == 0) {
    getAllCategory();
}