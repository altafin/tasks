# Tasks

Simples sistema de tarefas para praticar o Laravel 12 com Starter Kit Livewire

## Instalação

```
01. Execute o Docker
02. Acesse o ambiente WSL2
03. Faça um clone do projeto para a máquina local:
    git clone https://github.com/altafin/tasks.git
04. Acesse o diretório tasks e execute:
    sudo docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php84-composer:latest composer install --ignore-platform-reqs
05. Copie o arquivo de configuração exemplo
    cp .env.example .env
    Efetue as configurações de banco de dados
06. Baixe as imagens:
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
12. Execute no navegador usando o endereço:
    localhost
```
## Tecnologias

|              |  versão   |
|--------------|:---------:|
| Laravel      |  12.9.2   |
| Livewire     |     3     |
| Laravel Sail |   1.41    |
| Tailwind CSS |   4.0.7   |
| SweetAlert 2 |  11.6.13  |
