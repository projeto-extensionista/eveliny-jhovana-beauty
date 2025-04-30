<?php 

namespace App;

class App {
    public function run(): void {
        $router = new Router();
        $page = $router->resolve($_GET['page'] ?? null);
        $this->renderTemplate($page);
    }

    private function renderTemplate(string $page): void {
        $template = file_get_contents(__DIR__ . '/../pages/template.html');
        $content = $this->getPageContent($page);
        $output = str_replace(
            ['{{page}}', '{{content}}'],
            [$page, $content],
            $template
        );
        echo $output;
    }

    private function getPageContent(string $page): string {
        $contentFilePath = __DIR__ . "/../data/$page.json";
        if (file_exists($contentFilePath)) {
            $jsonData = json_decode(file_get_contents($contentFilePath), true);
            if (isset($jsonData['title'], $jsonData['content'])) {
                return $this->generateContent($jsonData);
            }
        }

        return "<h1>Página não encontrada</h1><p>Desculpe, a página solicitada não foi encontrada ou está com erro.</p>";
    }

    private function generateContent(array $jsonData): string {
        $title = $jsonData['title'] ?? 'Sem título';
        $content = $jsonData['content'] ?? 'Conteúdo não disponível';

        return "<h1>$title</h1><p>$content</p>";
    }
}
