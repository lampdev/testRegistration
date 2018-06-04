<?php
session_start();
// подключаем файлы ядра
include_once 'config.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
date_default_timezone_set("Europe/Kiev");
ini_set('session.gc_maxlifetime', 60*60*3); 
//define("TIMECONST", 0);


require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор
