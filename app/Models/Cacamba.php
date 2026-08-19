<?php
namespace App\Models;
final class Cacamba { public static function all(): array { return db()->query('SELECT * FROM cacambas ORDER BY numero')->fetchAll(); } public static function disponiveis(): array { return db()->query("SELECT * FROM cacambas WHERE status='disponivel' ORDER BY numero")->fetchAll(); } }
