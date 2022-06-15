<?php
//incluir config
require_once '../includes/config.php';

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$categoria = $_POST['categoria'];
$img = 'imagem.png';
$publicado = true;
$idusuario = '1';
    


//função inserts
function insert($titulo, $conteudo, $categoria, $img, $publicado, $idusuario) {
    global $conn;
    $sql = "INSERT INTO noticia(titulo_noticia, conteudo_noticia, categoria_noticia, img_noticia, publicado_noticia, id_usuario) 
    VALUES ('$titulo', '$conteudo', '$categoria', '$img', '$publicado', '$idusuario')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Notícia inserida com sucesso!";
    }else{
        echo "Erro ao inserir notícia!";
    }
}

insert($titulo, $conteudo, $categoria, $img, $publicado, $idusuario);


