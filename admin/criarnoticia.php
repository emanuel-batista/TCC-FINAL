<?php
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$categoria = $_POST['categoria'];
$img = 'imagem.png';




//função criarPost
function criarNoticia($titulo, $conteudo, $categoria, $imagem) {
    global $conn;
    $sql = "INSERT INTO noticia(titulo_noticia, conteudo_noticia, categoria_noticia, img_noticia) VALUES ('$titulo', '$conteudo', '$categoria', '$imagem')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
}




