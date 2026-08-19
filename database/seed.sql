USE controle_cacambas;
INSERT INTO usuarios (nome,email,senha,nivel) VALUES ('Administrador','admin@admin.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC9x2x7ZQvYl1h2V8k6W', 'administrador');
INSERT INTO configuracoes (chave,valor) VALUES ('empresa_nome','Controle de Locação'),('prazo_padrao_dias','7'),('valor_3m3','150'),('valor_4m3','180'),('valor_5m3','220'),('valor_7m3','280');
INSERT INTO cacambas (numero,tipo,status) VALUES ('C001','3m3','disponivel'),('C002','4m3','disponivel'),('C003','5m3','manutencao'),('C004','7m3','disponivel');
