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

//вывод отдельной статьи
if (isset($_GET['article'])) {
    getArticleData($_GET['article']);
} else {

}

//вывод статей отдельной категории
if (isset($_GET['category']) and $_GET['category'] != 0) {
    getOneCategory($_GET['category']);
} else {

}

//вывод всех статей из всех категорий (categoty = 0)
if (isset($_GET['category']) and $_GET['category'] == 0) {
    getAllCategory();
} else {

}