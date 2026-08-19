# Controle de Locação de Caçambas

Sistema web profissional para operação de locação de caçambas de entulho e construção.

## Funcionalidades implementadas
- Login seguro com níveis administrador, gerente, operador e cliente.
- Sessão com timeout, regeneração de ID e logout seguro.
- Rate limiting de tentativas de login.
- CSRF em formulários e escaping XSS com `htmlspecialchars`.
- PDO com prepared statements.
- CRUD inicial de clientes, caçambas, motoristas e fornecedores.
- Cadastro de pedidos/aluguéis.
- Baixa de pagamentos e dashboard financeiro.
- Dashboard com indicadores e Chart.js.
- Relatórios por período.
- API JSON para clientes e caçambas.
- Auditoria de ações.
- Consulta automática de CEP via ViaCEP.
- Bootstrap 5 responsivo.
- Composer com PHPMailer e Dompdf preparados para e-mail e PDF.

## Requisitos
PHP 8.2+, MySQL 8+, Apache/Nginx, Composer e extensão PDO MySQL.

## Instalação
```bash
composer install
cp .env.example .env
```

No Windows, copie manualmente `.env.example` para `.env`.

Depois importe:
```text
database/schema.sql
database/seed.sql
```

Configure `.env` e aponte o DocumentRoot para `public/`.

Para desenvolvimento:
```bash
composer serve
```

## Usuário inicial
`admin@admin.com` / `admin123`

**Troque a senha imediatamente após o primeiro acesso.**

## URLs principais
- `/login.php`
- `/dashboard.php`
- `/clientes.php`
- `/cacambas.php`
- `/pedidos.php`
- `/motoristas.php`
- `/fornecedores.php`
- `/pagamentos.php`
- `/relatorios.php`
- `/usuarios.php`
- `/logs.php`
- `/api.php?resource=cacambas`

## Segurança
Nunca coloque `.env` ou credenciais reais no Git. Em produção, use HTTPS, firewall, backups externos, usuário MySQL sem privilégios administrativos e política de senha forte.

## Deploy
1. Suba o projeto para o servidor.
2. Rode `composer install --no-dev --optimize-autoloader`.
3. Configure o banco.
4. Configure `.env`.
5. Aponte o domínio para `public/`.
6. Habilite HTTPS.
7. Remova credenciais padrão.

## Screenshots
A documentação reserva a seção para screenshots reais capturados após a primeira execução em ambiente configurado. Não são incluídas imagens fictícias como se fossem telas reais.

## Licença
MIT.
