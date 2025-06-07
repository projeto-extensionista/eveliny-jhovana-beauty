<?php

namespace App;

class Router {

    private array $routes = [
        'home',
        'penteados',
        'design-terapeutico',
        'design-com-henna',
        'maquiagem',
        'desing-com-coloracao',
        'lash-lifting',
        'epilacao-egipicia',
        'brow-lamination',
        'epilacao-com-cera',
        'desing-reconstrutivo',
        'nanopigmentacao'
    ];

    private string $default = 'home';
    private string $notFound = '404';

    public function resolve(string $page = null): string {

        if (is_null($page)) {
            return $this->default; 
        }

        return in_array($page, $this->routes) ? $page : $this->notFound; 
    }
    
}
