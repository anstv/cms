<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/model/category.php';

//вывод всех статей из одной категории
function getOneCategory($category_id)
{
    $categoryArticle = getCategoryList($category_id); //получаем данные из базы
    $articleArray = array();
    while ($row = mysqli_fetch_array($categoryArticle)) { //переводим их в строки в новый массив
        $articleArray[] = $row;
    }
    if (!empty($articleArray)) { //если массив не пустой, подключаем шаблон и конфиги
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
    $category_id = 0;
    $categoryArticle = getCategoryListAll();
    $articleArray = array();
    while ($row = mysqli_fetch_array($categoryArticle)) {
        $articleArray[] = $row;
    }
    if (!empty($articleArray)) {
        global $site_cfg;
        $page = NULL;
        $pages = NULL;
        $articleArrayPage = array();
        if (count($articleArray) > $site_cfg['pagination']) //включаем пагинацию
        {
            $page = (int)0;
            $pages = count($articleArray)/$site_cfg['pagination'];//всего страниц
            if (isset($_GET['page']))
            {
                $page = (int)$_GET['page'];
            }
            if ($page>$pages) {
                echo "В категории нет статей!";
                exit();
            }
            $start = $site_cfg['pagination']*$page;
            if ($page != $pages) {
                for ($i = $start; $i < $start + $site_cfg['pagination']; $i++) {
                    if(empty($articleArray[$i])){break;}
                    $articleArrayPage[] = $articleArray[$i];
                }
            }
        }
        $title = 'Последние статьи!';
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
    return $menuArray;
}