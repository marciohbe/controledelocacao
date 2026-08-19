<?php
namespace App\Models;
final class Pedido { public static function recentes(int $limit=10): array { $limit=max(1,min(100,$limit)); return db()->query("SELECT p.*,c.nome cliente,ca.numero cacamba FROM pedidos p JOIN clientes c ON c.id=p.cliente_id LEFT JOIN cacambas ca ON ca.id=p.cacamba_id ORDER BY p.id DESC LIMIT $limit")->fetchAll(); } public static function faturamentoMes(): float { return (float)db()->query("SELECT COALESCE(SUM(valor),0) FROM pagamentos WHERE MONTH(data_pagamento)=MONTH(CURDATE()) AND YEAR(data_pagamento)=YEAR(CURDATE())")->fetchColumn(); } }
