<?php
function getArticleRow($article_id)
{
    global $db;
    $query = "SELECT * FROM article WHERE id=" . $article_id;
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
    return $result;
}