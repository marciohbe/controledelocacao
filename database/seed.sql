USE controle_cacambas;
INSERT INTO usuarios (nome,email,senha,nivel) VALUES ('Administrador','admin@admin.com', '$2y$12$8ByvmqwT.xUMcu3NML3UveeMGB7UmtWI0dZEGoVF7PtCOC1QXNqXO', 'administrador');
INSERT INTO configuracoes (chave,valor) VALUES ('empresa_nome','Controle de Locação'),('prazo_padrao_dias','7'),('valor_3m3','150'),('valor_4m3','180'),('valor_5m3','220'),('valor_7m3','280');
INSERT INTO cacambas (numero,tipo,status) VALUES ('C001','3m3','disponivel'),('C002','4m3','disponivel'),('C003','5m3','manutencao'),('C004','7m3','disponivel');
