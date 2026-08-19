<?php
require dirname(__DIR__).'/config/config.php';
require dirname(__DIR__).'/vendor/autoload.php';
use App\Helpers\Security;
Security::startSession();
$u=Security::user();
if(!$u){ header('Location: login.php'); exit; }
header('Location: dashboard.php'); exit;
