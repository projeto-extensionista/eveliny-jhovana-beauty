<?php

namespace App;

class Router {

    private array $routes = [
        'home',
        'penteados',
        'design-terapeutico',
        'design-com-henna',
<<<<<<< HEAD
        'maquiagem',
        'nanopigmentacao'
=======
        'nanopigmentacao',
        'desing-com-coloracao'
>>>>>>> bcc549eb4ff8e2ed4a6ceb446beba2782855b8dc
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
