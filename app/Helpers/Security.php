<?php
namespace App\Helpers;

final class Security {
 public static function startSession(): void { if(session_status()!==PHP_SESSION_ACTIVE){ session_set_cookie_params(['httponly'=>true,'secure'=>!empty($_SERVER['HTTPS']),'samesite'=>'Lax']); session_start(); } if(isset($_SESSION['last_activity']) && time()-$_SESSION['last_activity']>SESSION_TIMEOUT){ self::logout(); } $_SESSION['last_activity']=time(); }
 public static function csrf(): string { self::startSession(); if(empty($_SESSION['csrf'])) $_SESSION['csrf']=bin2hex(random_bytes(32)); return $_SESSION['csrf']; }
 public static function checkCsrf(?string $token): void { self::startSession(); if(!$token || !hash_equals($_SESSION['csrf']??'', $token)){ http_response_code(419); exit('Token CSRF inválido.'); } }
 public static function e(?string $value): string { return htmlspecialchars($value??'', ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8'); }
 public static function login(array $user): void { self::startSession(); session_regenerate_id(true); $_SESSION['user']=$user; $_SESSION['last_activity']=time(); }
 public static function user(): ?array { self::startSession(); return $_SESSION['user']??null; }
 public static function logout(): void { $_SESSION=[]; if(ini_get('session.use_cookies')){ $p=session_get_cookie_params(); setcookie(session_name(),'',time()-42000,$p['path'],$p['domain'],$p['secure'],$p['httponly']); } session_destroy(); }
 public static function requireAuth(): array { $u=self::user(); if(!$u){ header('Location: '.APP_URL.'/login.php'); exit; } return $u; }
 public static function requireRole(array $roles): array { $u=self::requireAuth(); if(!in_array($u['nivel'],$roles,true)){ http_response_code(403); exit('Acesso negado.'); } return $u; }
}
