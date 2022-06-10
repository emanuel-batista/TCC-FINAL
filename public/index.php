<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP!TA - O melhor PORTAL</title>
    <?php require_once '../includes/config.php'; ?>
    <link rel="stylesheet" href="../static/style/style.css">
</head>
<body>

    <?php require_once(ROOT_PATH . '/navbar.php'); ?> 

    <!-- incluir public_functions -->
    <?php require_once(ROOT_PATH . '/public_functions.php') ?>
    <?php $posts = getPublishedPosts(); ?>    

    
    <div class="card mb-3" style="max-width: 540px;"> <!-- card -->
  <div class="row g-0">
    <div class="col-md-4">
      <img src="neymar.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>