<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="pages/<?=$page?>/index.css">
        <title>Evelyn Joanna Beauty</title>
    </head>
    <body>
        
    <header class="header">
        <div class="content">
        <a href="/index.php">
            <img src="/eveliny-jhovana-beauty/assets/img/Logo preta2 1.png" alt="Logo Eveliny" class="logo">
        </a>
        <div class="menu-icon">☰</div>
        </div>
    </header>

    <?php include("pages/$page/index.html") ?>

    <footer class="footer">
      <div class="content">
        <p>© 2025 Evelyn Johane Beauty - All rights reserved</p>
      </div>
    </footer>

    <script src="/pages/<?=$page?>/index.js"></script>
    
    </body>
</html>