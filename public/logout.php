<?php require dirname(__DIR__).'/config/config.php'; require dirname(__DIR__).'/vendor/autoload.php'; App\Helpers\Security::logout(); header('Location: login.php'); exit;
