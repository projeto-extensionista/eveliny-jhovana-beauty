<?php

namespace App;

class App {
    public function run(): void {
        $router = new Router();
        $page = $router->resolve($_GET['page'] ?? null);

        $this->renderTemplate($page);
    }

    private function renderTemplate(string $page): void {
        $template = file_get_contents(__DIR__ . '/../views/template.html');
        $content = file_exists(__DIR__ . "/../views/$page/index.html")
            ? file_get_contents(__DIR__ . "/../views/$page/index.html")
            : '';

        $output = str_replace(
            ['{{page}}', '{{content}}'],
            [$page, $content],
            $template
        );

        echo $output;
    }
}
