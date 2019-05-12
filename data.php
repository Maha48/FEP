<?php
require_once './vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// نستطيع الان قراءة المتغيرات من الملف
$db_user = getenv('DB_USER');

?>