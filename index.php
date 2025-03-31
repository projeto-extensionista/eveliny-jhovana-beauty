<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php enqueue_css() ?>
</head>
<body>

    <?php 

        // Gustavo
        include('partials/home/banner.php');

        // Derick e Luiz Guilherme
        include('partials/home/atendimentos.php');

        // Diogo
        include('partials/home/sobre-mim.php');
        include('partials/home/ambiente.php');

        // Rafael
        include('partials/home/feedbacks.php');
        include('partials/home/mapa.php');

    ?>
    
    <?php enqueue_js() ?>
</body>
</html>

