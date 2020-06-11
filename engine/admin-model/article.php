<?php

function getCategoryListAllAdmin()
{
    global $db;
    $query = "SELECT article.*, category.name AS cname, category.title AS ctitle, category.id AS cid FROM article JOIN category ON article.category = category.id";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}

function getArticleAdmin($id)
{
    global $db;
    $query = "SELECT * FROM `article` WHERE `id` = " . $id;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}

function getCatNameAdmin()
{
    global $db;
    $query = "SELECT `id`,`name` FROM `category`";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}

function updateArticle($idArt,$titleArt,$descriptionArt,$keywordsArt,$shorttextArt,$textArt,$categoryArt,$urlArt)
{
    global $db;
    $query = "UPDATE `article` SET `title`='$titleArt',`description`='$descriptionArt',`keywords`='$keywordsArt',`short_text`='$shorttextArt',`text`='$textArt',`category`=$categoryArt,`url`='$urlArt' WHERE `id`=" . $idArt;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
}
function insertArticle($titleArt,$descriptionArt,$keywordsArt,$shorttextArt,$textArt,$categoryArt,$urlArt)
{
    global $db;
    $query = "INSERT INTO `article`(`title`, `description`, `keywords`, `short_text`, `text`, `category`, `url`) VALUES ('$titleArt','$descriptionArt','$keywordsArt','$shorttextArt','$textArt',$categoryArt,'$urlArt')";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
}

function deleteArticle($id)
{
    global $db;
    $query = "DELETE FROM `article` WHERE `id` =" . $id;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
}