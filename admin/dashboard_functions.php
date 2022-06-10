<?php

//função criarPost
function criarNoticia($titulo, $conteudo, $autor, $categoria, $data, $imagem) {
    global $conn;
    $sql = "INSERT INTO posts (titulo, conteudo, autor, categoria, data, imagem) VALUES ('$titulo', '$conteudo', '$autor', '$categoria', '$data', '$imagem')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
}

//função apagarPost
    function apagarPost($id) {
        global $conn;
        $sql = "DELETE FROM posts WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            return false;
        }
    }

//função apagarComentario
    function apagarComentario($id) {
        global $conn;
        $sql = "DELETE FROM comentarios WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            return false;
        }
    }


