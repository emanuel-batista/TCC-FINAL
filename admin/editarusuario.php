<?php
require_once '../includes/config.php';

//selecionar o usuario pelo id
$id = $_GET['id'];
$nome = $_GET['nome'];
$sql = "SELECT * FROM usuario WHERE id_usuario = $id";

echo "Você está editando o usuário com o id: $id e o nome: $nome";


