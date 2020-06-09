<?php
function getCategoryList($category_id)
{
    global $db;
    $query = "SELECT article.*, category.name AS cname FROM article JOIN category ON article.category = category.id WHERE category=" . $category_id;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}

function getCategoryListAll()
{
    global $db;
    $query = "SELECT article.*, category.name AS cname, category.title AS ctitle, category.id AS cid FROM article JOIN category ON article.category = category.id";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}

function getCategoryMenu()
{
    global $db;
    $query = "SELECT * FROM category";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}