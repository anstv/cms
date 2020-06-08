<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/model/article.php';

function getArticleData($article_id)
{
    global $site_cfg;
    $articleData = mysqli_fetch_array(getArticleRow($article_id));
    if($articleData['id'] != NULL) {

        $title = $articleData['title'];
        $text = $articleData['text'];
        $date = $articleData['date'];

        $templatePart = 'article.php';

        include 'engine/view/main.php';
    }
    else {
        include 'engine/view/404.php';
    }
}