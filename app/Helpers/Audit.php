<?php
namespace App\Helpers;
final class Audit { public static function log(string $acao, ?string $tabela=null, ?int $registro=null): void { $u=Security::user(); $stmt=db()->prepare('INSERT INTO logs(usuario_id,acao,tabela_afetada,registro_id,ip) VALUES(?,?,?,?,?)'); $stmt->execute([$u['id']??null,$acao,$tabela,$registro,$_SERVER['REMOTE_ADDR']??'unknown']); } }
