<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/model/category.php';

//вывод всех статей из одной категории
function getOneCategory($category_id)
{
    $categoryArticle = getCategoryList($category_id);

    $articleArray = array();
    while ($row = mysqli_fetch_array($categoryArticle)) {
        $articleArray[] = $row;
    }
    if (!empty($articleArray)) {
        global $site_cfg;
        $templatePart = 'category.php';
        include 'engine/view/main.php';

    } else {
        echo "В категории нет статей!";
    }

}

//вывод всех статей
function getAllCategory()
{
    $categoryArticle = getCategoryListAll();
    $articleArray = array();
    while ($row = mysqli_fetch_array($categoryArticle)) {
        $articleArray[] = $row;
    }
    if (!empty($articleArray)) {
        global $site_cfg;
        $title = 'Последние статьи';
        $templatePart = 'category.php';
        include 'engine/view/main.php';

    } else {
        echo "В категории нет статей!";
    }

}

//вывод всех категорий в меню
function getMenuCategory()
{
    $categoryMenu = getCategoryMenu();

    $menuArray = array();
    while ($row = mysqli_fetch_array($categoryMenu)) {
        $menuArray[] = $row;
    }
    global $site_cfg;
    $title = 'Последние статьи';
    $templatePart = 'category.php';
    include 'engine/view/header.php';
}