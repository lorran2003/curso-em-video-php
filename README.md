# Repositório de Exercícios em PHP com Ambiente de Desenvolvimento em Docker

## Comandos iniciais

### 1. Construção da imagem

```bash
docker build -t server-apache-php .
```

### 2. Execução do container

> Observação: Para executar este comando, acesse o diretório do projeto.

```bash
docker run -d -p 80:80 --name server-php -v "${PWD}:/var/www/html" server-apache-php
```
