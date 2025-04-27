# Usar a imagem oficial do PHP
FROM php:8.1-cli

# Defina o diretório de trabalho
WORKDIR /app

# Copiar os arquivos PHP para o container
COPY . .

# Executar o PHP interativo ou o script específico
CMD ["php", "index.php"]
