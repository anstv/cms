<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/model/category.php';

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