<?php 
    
    $routes = [
        'home',
        'penteados',
        'design-terapeutico',
        '404',
        'politica-de-atendimento'
    ];

    $page = isset($_GET["page"]) && in_array($_GET["page"], $routes) ? $_GET["page"] : '404';
