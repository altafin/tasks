# Tasks

Simples sistema de tarefas para praticar o Laravel 12 com Starter Kit Livewire

## Instalação

```
01. Execute o Docker
02. Acesse o ambiente WSL2
03. Clone o projeto:
    git clone https://github.com/altafin/tasks.git
04. Acesse o diretório tasks e execute:
    sudo docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php84-composer:latest composer install --ignore-platform-reqs
05. Copie o arquivo de configuração exemplo
    cp .env.example .env
    Efetue as configurações de banco de dados
06. baixe as imagens:
    ./vendor/bin/sail build –no-cache
07. Suba tudo:
    ./vendor/bin/sail up
08. Gere a chave:
    ./vendor/bin/sail artisan key:generate
09. Crie o banco de dados e os dados
    ./vendor/bin/sail artisan migrate:refresh --seed
10. Instale as bibliotecas Javascript
    ./vendor/bin/sail npm instal
11. Monte os arquivos JS e CSS
    ./vendor/bin/sail npm run build
```
