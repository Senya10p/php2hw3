<?php
/* Создаём страницу article.php. Заголовок каждой новости на главной странице является ссылкой на страницу /article.php?id=NNN,
где NNN - номер этой новости.*/

require __DIR__ . '/autoload.php';

if ( isset($_GET['id']) ) { //проверяем на существование

    $view = new \App\View();
    $view->article = \App\Models\Article::findById( $_GET['id'] );

    if (false === $view->article) { //если новости с таким id не существует

        die ('Такой новости не существует');
    }
}
$view->display(__DIR__ . '/templates/article.php');

$n = \App\Config::instance();
$n->data['db']['host'];