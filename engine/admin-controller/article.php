<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/admin-model/article.php';

function getArticleListAllController()
{
    $categoryArticleAdmin = getCategoryListAllAdmin();

    $articleArrayAdmin = array();
    while ($row = mysqli_fetch_array($categoryArticleAdmin)) {
        $articleArrayAdmin[] = $row;
    }
        global $site_cfg;
        $title = 'Все статьи';
        $templatePart = 'article-list.php';
        include 'engine/admin-view/main.php';
}

function editArticleAdmin(){
    $id = (int)$_GET['artEdit'];
    $catArrayAdmin = array();
    $catListAll = getCatNameAdmin();
    while ($row = mysqli_fetch_array($catListAll)) {
        $catArrayAdmin[] = $row;
    }
    $articleRowAdmin = mysqli_fetch_array(getArticleAdmin($id));
    global $site_cfg;
    $title = 'Все статьи';
    $templatePart = 'article-edit.php';
    include 'engine/admin-view/main.php';
}

function addArticleAdmin()
{
    $titleArt = (string)$_POST['titleArt'];
    $descriptionArt = (string)$_POST['descriptionArt'];
    $keywordsArt = (string)$_POST['keywordsArt'];
    $shorttextArt = (string)$_POST['shorttextArt'];
    $textArt = (string)$_POST['textArt'];
    $categoryArt = (int)$_POST['categoryArt'];
    $urlArt = (string)$_POST['urlArt'];
    insertArticle($titleArt,$descriptionArt,$keywordsArt,$shorttextArt,$textArt,$categoryArt,$urlArt);
    header('Location: /admin.php?artEdit');
}

function updateArticleAdmin()
{
    $idArt = (int)$_POST['idArt'];
    $titleArt = (string)$_POST['titleArt'];
    $descriptionArt = (string)$_POST['descriptionArt'];
    $keywordsArt = (string)$_POST['keywordsArt'];
    $shorttextArt = (string)$_POST['shorttextArt'];
    $textArt = (string)$_POST['textArt'];
    $categoryArt = (int)$_POST['categoryArt'];
    $urlArt = (string)$_POST['urlArt'];
    updateArticle($idArt,$titleArt,$descriptionArt,$keywordsArt,$shorttextArt,$textArt,$categoryArt,$urlArt);
    header('Location: /admin.php?artEdit');
}

function deleteArticleController()
{
    $id = (int)$_GET['artDel'];
    deleteArticle($id);
    header('Location: /admin.php?artEdit');
}