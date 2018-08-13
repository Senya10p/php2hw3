<?php

//Главная страница

require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->data = \App\Models\Article::findLast(3); //Получаем последние 3 статьи из новостей
$view->display(__DIR__ . '/templates/index.php');
