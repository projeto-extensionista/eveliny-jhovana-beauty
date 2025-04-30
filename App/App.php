<?php 

namespace App;

class App {
    public function run(): void {
        $router = new Router();
        $page = $router->resolve($_GET['page'] ?? 'home');
        $this->renderTemplate($page);
    }

    private function renderTemplate(string $page): void {
        $template = file_get_contents(__DIR__ . '/../views/template.html');
        $content = $this->getPageContent($page);
        $jsonData = $this->getPageData($page);
        $output = str_replace(
            ['{{page}}', '{{content}}'],
            [$page, $content],
            $template
        );
        $output = $this->replacePlaceholdersWithJsonData($output, $jsonData);
        echo $output;
    }

    private function getPageContent(string $page): string {
        $contentFilePath = __DIR__ . "/../views/$page.html";
        if (file_exists($contentFilePath)) {
            return file_get_contents($contentFilePath);
        }

        return "<h1>Página não encontrada</h1><p>Desculpe, a página solicitada não foi encontrada.</p>";
    }

    private function getPageData(string $page): array {
        $contentFilePath = __DIR__ . "/../data/$page.json";
        if (file_exists($contentFilePath)) {
            return json_decode(file_get_contents($contentFilePath), true);
        }

        return [];
    }

    private function replacePlaceholdersWithJsonData(string $content, array $data): string {
        preg_match_all('/\{\{(.*?)\}\}/', $content, $matches);
        foreach ($matches[1] as $placeholder) {
            $value = $this->getValueFromJson($data, $placeholder);
            if (is_array($value)) {
                $html = '';
                foreach ($value as $social) {
                    $html .= "<a href=\"{$social['url']}\" target=\"_blank\"><img src=\"{$social['icon']}\" alt=\"Social Icon\"></a> ";
                }
                $content = str_replace("{{{$placeholder}}}", $html, $content);
            } else {
                $content = str_replace("{{{$placeholder}}}", $value, $content);
            }
        }
    
        return $content;
    }
    

    private function getValueFromJson(array $data, string $path) {
        $keys = explode('.', $path);
        $value = $data;

        foreach ($keys as $key) {
            if (isset($value[$key])) {
                $value = $value[$key];
            } else {
                return '';
            }
        }

        return $value;
    }
}
