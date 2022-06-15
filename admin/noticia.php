<!-- head do site -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- incluir dashboard_functions -->
        <title>AP!TA - O melhor PORTAL</title>
    </head>
    <body>
        <!-- form de inserção de post  -->
        <form action="criarnoticia.php" method="post">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
            </div>
            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
            </div>
            <button type="submit">Enviar</button>
            
        </form>

        
        
    </body>
</html>