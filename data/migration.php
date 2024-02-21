<?php

require('data/conexao.php');
$pdo->exec("INSERT INTO produtos (nome, descricao, preco, imagem) VALUES 
  ('hamburguer', 'hamburguer de carne bovina, queijo, alface, tomate e molho especial', 15.00, 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YnVyZ3VlcnxlbnwwfDB8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60'),
  ('hamburguer', 'hamburguer de carne bovina, queijo, alface, tomate e molho especial', 15.00, 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YnVyZ3VlcnxlbnwwfDB8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60'),
  ('pizza', 'massa italiana, molho de tomate, queijo, calabresa, cebola e azeitona', 25.00, 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YnVyZ3VlcnxlbnwwfDB8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60')");