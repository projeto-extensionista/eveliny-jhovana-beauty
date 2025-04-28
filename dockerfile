# Usar a imagem oficial do PHP
FROM php:8.1-cli

# Defina o diretório de trabalho no container
WORKDIR /var/www/html

# Copiar os arquivos PHP para o diretório de trabalho no container
COPY . .

# Comando para rodar o PHP (ajustado para rodar o servidor ou o index.php)
CMD ["php", "-S", "0.0.0.0:80", "index.php"]
