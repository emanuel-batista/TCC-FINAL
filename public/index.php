<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP!TA - O melhor PORTAL</title>
    <?php require_once '../includes/config.php'; ?>
    <link rel="stylesheet" href="../static/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <?php require_once(ROOT_PATH . '/navbar.php'); ?> 

    <!-- incluir public_functions -->
    <?php require_once(ROOT_PATH . '/public_functions.php') ?>
    <?php $posts = getPublishedPosts(); ?>    

    
  <div class="card mb-3" style="auto;"> <!-- card carrossel -->
  <div class="row g-0">
    <div class="col-md-4" style="auto;">
      <img class="static-images" src="../static/images/neymar.jpg"  alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title">Neymar sonega impostos</h4>
        <p class="card-text">Neymarzinho e Neymar sonegam mais impostos que a Shakira.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>