<?php
namespace App\Models;
final class Cliente { public static function all(string $q=''): array { $s=db()->prepare("SELECT * FROM clientes WHERE nome LIKE ? OR documento LIKE ? OR telefone LIKE ? ORDER BY id DESC"); $x="%$q%"; $s->execute([$x,$x,$x]); return $s->fetchAll(); } public static function create(array $d): int { $s=db()->prepare('INSERT INTO clientes(nome,documento,tipo_documento,email,telefone,celular,cep,endereco,numero,complemento,bairro,cidade,estado) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)'); $s->execute(array_values($d)); return (int)db()->lastInsertId(); } }
