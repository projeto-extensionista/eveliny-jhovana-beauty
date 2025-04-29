<?php 
    
    $routes = [
        'home',
        'penteados',
        'design-terapeutico',
        'design-com-henna',
        'nanopigmentacao',
        '404',
        'politica-de-atendimento'
        'make'
    ];

    $page = isset($_GET["page"]) && in_array($_GET["page"], $routes) ? $_GET["page"] : '404';
