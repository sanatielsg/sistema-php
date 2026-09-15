<?php
    $page = $_REQUEST['page'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos e Estoque</title>
    <script language="javascript" src="index.js"></script>
</head>
<body bgcolor="#ffffaa">
<?php
    if ($page === 'login') 
    {
?>
    Login
<?php 
    }
    else if ($page === 'rec-senha') 
    {
?>
    Recuperar Senha   
<?php 
    }
    else if ($page === 'cad-usuario') 
    {
?>
    Cadastro de Usuários
<?php 
  } else if ($page === 'cad-empresa') {
?>
    Cadastro de Empresas
<?php 
  } else if ($page === 'cad-produto') {
?>
    Cadastro de Produtos
<?php 
  } else if ($page === 'cad-cliente') {
?>
    Cadastro de Clientes
<?php 
  } else if ($page === 'cad-caixa') {
?>
    Cadastro de Caixas
<?php 
  } else if ($page === 'cad-banco') {
?>
    Cadastro de Bancos
<?php 
  } else if ($page === 'lan-estoque') {
?>
    Lançamentos de Estoque
<?php 
  } else if ($page === 'lan-caixa') {
?>
    Lançamentos de Caixas
<?php 
  } else if ($page === 'lan-banco') {
?>
    Lançamentos de Bancos    
<?php 
  } else if ($page === 'lan-pedido-venda') {
?>
    Lançamentos de Pedidos de Venda
<?php 
  } else if ($page === 'lan-cr') {
?>
    Lançamentos de Contas a Receber
<?php
  } else echo 'Requisição Inválida!';
?>  

</body>
</html>

