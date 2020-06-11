<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/admin-model/category.php';

function getCategoryController()
{
    $categoryList = getCategoryAdmin();

    $categoryListArray = array();
    while ($row = mysqli_fetch_array($categoryList)) {
        $categoryListArray[] = $row;
    }
    global $site_cfg;
    $templatePart = 'category.php';
    include 'engine/admin-view/main.php';
}

function addCategoryController()
{
    $name = (string)$_POST['name'];
    $title = (string)$_POST['title'];
    $url = (string)$_POST['url'];
    addCategoryAdmin($name, $title, $url);
    header('Location: /admin.php?catEdit');
}

function updateCategoryController()
{
    $id = (int)$_POST['id'];
    $name = (string)$_POST['name'];
    $title = (string)$_POST['title'];
    $url = (string)$_POST['url'];
    updateCategoryAdmin($id, $name, $title, $url);
    header('Location: /admin.php?catEdit');
}

function deleteCategoryController($id)
{
    deleteCategoryAdmin($id);
    header('Location: /admin.php?catEdit');
}

function editGetCategoryController2($id)
{
    $categoryList = getCategoryAdmin();
    $oneCat = mysqli_fetch_array(getOneCategoryAdmin($id));
    $categoryListArray = array();
    while ($row = mysqli_fetch_array($categoryList)) {
        $categoryListArray[] = $row;
    }
    global $site_cfg;
    $templatePart = 'category.php';
    include 'engine/admin-view/main.php';
}