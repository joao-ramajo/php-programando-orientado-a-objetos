DELETE FROM produto;

INSERT INTO produto(descricao, estoque, preco_custo, preco_venda, codigo_barras, data_cadastro, origem) 
VALUES(
    'Pendrive 512mb' , '10.0', '20.0', '40.0', '000000001', '2015-01-01', 'N'
);

INSERT INTO produto(descricao, estoque, preco_custo, preco_venda, codigo_barras, data_cadastro, origem) 
VALUES(
    'HD 120GB' , '20.0', '100.0', '180.0', '000000002', '2015-02-01', 'N'
);