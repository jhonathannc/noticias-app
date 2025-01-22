# Portal noticias

Cadastro noticias e categorias

## Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:
* Ter instalado a versão mais recente de `Docker` e `Docker Compose`.

## Executando

Linux e macOS:
- cp .env.example .env
- docker compose up -d
- docker compose exec app php artisan migrate

O frontend exibe na porta 80 de localhost.
http://localhost


criar a rota contato
formulario de contato nome e mensagem
ao submit , exibir o resquest do form, dd

