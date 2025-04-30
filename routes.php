<?php

class Router {

    private array $routes = [
        'home',
        'penteados',
        'design-terapeutico',
        'design-com-henna',
        'nanopigmentacao',
        '404',
        'politica-de-atendimento',
        'make'
    ];

    private string $default = 'home';
    private string $notFound = '404';

    public function resolve(string $page = null): string {
        if (is_null($page)) return $this->default;
        return in_array($page, $this->routes) ? $page : $this->notFound;
    }
    
}

$router = new Router();
$page = $router->resolve($_GET['page'] ?? null);
