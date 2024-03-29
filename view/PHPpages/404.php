<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css\style.css?a=<?php echo(rand()); ?>" type="text/css">
    <title>404</title>
</head>
<body>
    <?php if(empty($_SESSION['usuario'])) : ?>
    <section class="error_section">
        <p class="error_section_subtitle">Thanks. You just broke it all !</p>
        <img class="Pag404" src="/assets/404.svg" alt="404">
        <a href="/view/home/panel_control.php" class="btn ">Get me out of here</a>
      </section>
      
      <?php else : ?>
       <section class="error_section">
        <p class="error_section_subtitle">Thanks. You just broke it all !</p>
        <img class="Pag404" src="/assets/404.svg" alt="404">
        <a href="/index.php" class="btn ">Get me out of here</a>
      </section>
      
      <?php endif ?>

</body>
</html>

