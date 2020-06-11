<?php
function getCategoryAdmin()
{
    global $db;
    $query = "SELECT `id`, `name`, `url`, `title` FROM `category`";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}

function addCategoryAdmin($name, $title, $url)
{
    global $db;
    $query = "INSERT INTO `category`(`name`, `title`, `url`) VALUES ('$name', '$title', '$url')";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
}

function deleteCategoryAdmin($id)
{
    global $db;
    $query = "DELETE FROM `category` WHERE `id` =" . $id;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
}

function getOneCategoryAdmin($id)
{
    global $db;
    $query = "SELECT `id`, `name`, `url`, `title` FROM `category` WHERE `id`=" . $id;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}

function updateCategoryAdmin($id, $name, $title, $url)
{
    global $db;
    $query = "UPDATE `category` SET `name` = '$name',`title` = '$title',`url` = '$url' WHERE `id` =" . $id;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
}