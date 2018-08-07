<?php

// Админ-панель

require __DIR__ . '/../autoload.php';

$view = new \App\View();
$view->data = \App\Models\Article::findAll(); //Получаем все новости
$view->display(__DIR__ . '/../templates/admin.php');