<?php
declare(strict_types=1);

$envFile = dirname(__DIR__).'/.env';
if (is_file($envFile)) { foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) { if (str_starts_with(trim($line),'#') || !str_contains($line,'=')) continue; [$k,$v]=array_map('trim',explode('=', $line,2)); $_ENV[$k]=trim($v,'"\''); } }

define('APP_NAME', $_ENV['APP_NAME'] ?? 'Controle de Locação');
define('APP_URL', rtrim($_ENV['APP_URL'] ?? 'http://localhost:8000','/'));
define('SESSION_TIMEOUT', (int)($_ENV['SESSION_TIMEOUT'] ?? 1800));

date_default_timezone_set('America/Sao_Paulo');

function db(): PDO { static $pdo; if ($pdo instanceof PDO) return $pdo; $dsn='mysql:host='.($_ENV['DB_HOST']??'127.0.0.1').';port='.($_ENV['DB_PORT']??3306).';dbname='.($_ENV['DB_NAME']??'controle_cacambas').';charset=utf8mb4'; $pdo=new PDO($dsn,$_ENV['DB_USER']??'root',$_ENV['DB_PASS']??'', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,PDO::ATTR_EMULATE_PREPARES=>false]); return $pdo; }
