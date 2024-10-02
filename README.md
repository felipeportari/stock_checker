# Aplicação de Checagem de Estoque

Este projeto é uma aplicação desenvolvida com o framework Laravel 11. Siga as instruções abaixo para configurar o ambiente e executar o projeto localmente.

## Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas em sua máquina:
- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL ou outro banco de dados compatível

## Instalação

1. Navegue até a pasta do projeto.

2. Instale as dependências do PHP com o Composer:
    ```bash
    composer install
    ```

3. Instale as dependências do Node.js:
    ```bash
    npm install
    ```

4. Copie o arquivo de exemplo `.env` para configurar as variáveis de ambiente:
    ```bash
    cp .env.example .env
    ```

5. Configure o arquivo `.env` com as credenciais corretas, como o domínio e as configurações do banco de dados.

6. Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```

7. Crie o link simbólico para o armazenamento de arquivos:
    ```bash
    php artisan storage:link
    ```

8. Execute as migrações e preencha o banco de dados com dados padrão:
    ```bash
    php artisan migrate --seed
    ```

9. Inicie o servidor local:
    ```bash
    php artisan serve
    ```

10. Compile os assets front-end:
    ```bash
    npm run dev
    ```
