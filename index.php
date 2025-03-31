<?php include('functions.php') ?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php enqueue_css() ?>
    </head>

    <body>

        <?php 

            // Gustavo
            get_partial('global/header');
            get_partial('home/banner');

            // Derick e Luiz Guilherme
            get_partial('home/atendimentos');

            // Diogo
            get_partial('home/sobre-mim');
            get_partial('home/ambiente');

            // Rafael
            get_partial('home/feedbacks');
            get_partial('home/mapa');

            // Gustavo
            get_partial('global/footer');
            
        ?>
        
        <?php enqueue_js() ?>
        
    </body>

</html>

