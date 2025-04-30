<?php

class App {
    public function run(): void {
        $router = new Router();
        $page = $router->resolve($_GET['page'] ?? null);

        $this->renderTemplate($page);
    }

    private function renderTemplate(string $page): void {
        
        $template = file_get_contents('template.html');
        $content = file_exists("pages/$page/index.html") ? file_get_contents("pages/$page/index.html") : '';

        $output = str_replace(
            ['{{page}}', '{{content}}'],
            [$page, $content],
            $template
        );

        echo $output;
    }
}
