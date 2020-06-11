<?php
//подключаем конфиг
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/config.php";
//подключаем базу
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/dbconnect.php";

//подключаем контролеры
require_once  $_SERVER['DOCUMENT_ROOT'] . '/engine/admin-controller/article.php';
require_once  $_SERVER['DOCUMENT_ROOT'] . '/engine/admin-controller/category.php';

if (isset($_GET['catEdit']) and $_GET['catEdit'] == NULL) {
    getCategoryController();
}

if (isset($_GET['catEdit']) and $_GET['catEdit'] != NULL) {
    $id = (int)$_GET['catEdit'];
    editGetCategoryController2($id);
}

if (isset($_POST['id']) and isset($_POST['name']) and isset($_POST['title']) and isset($_POST['url'])) {
    updateCategoryController();
}

if (isset($_POST['name']) and isset($_POST['title']) and isset($_POST['url']) and !isset($_POST['id'])) {
    addCategoryController();
}

if (isset($_GET['catDelete'])) {
    $id = (int)$_GET['catDelete'];
    deleteCategoryController($id);
}

if (isset($_GET['artEdit']) and $_GET['artEdit'] == NULL) {
    getArticleListAllController();
}

if (isset($_GET['artEdit']) and $_GET['artEdit'] != NULL) {
    editArticleAdmin();
}

if ($_POST['idArt'] == "new") {
    addArticleAdmin();
}

if ($_POST['idArt'] != NULL and $_POST['idArt'] != "new") {
    updateArticleAdmin();
}

if (isset($_GET['artDel']) and $_GET['artDel'] != NULL) {
    deleteArticleController();
}