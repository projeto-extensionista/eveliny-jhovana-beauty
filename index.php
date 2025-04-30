<?php

class App {

    public function run(): void {
        $this->loadRoutes();
        $this->loadTemplate();
    }

    private function loadRoutes(): void {
        include 'routes.php';
    }

    private function loadTemplate(): void {
        include 'template.php';
    }

}

$app = new App();
$app->run();
