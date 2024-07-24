# SETUP PHP

Uma base de aplicação limpa (sem frameworks), para estudos em PHP Orientado a objetos.

Essa estrutura já está dockerizada, então basta ter o docker compose rodando em seu computador que é pra dar tudo certo.

## Tecnologias

- PHP 8.3
- MySQL
- nginx

## Como usar

Primeiro basta clonar o repositório

`git clone https://github.com/alessandrofeitoza/setup-php-docker`

Agora entre na pasta com o terminal 

`cd setup-php-docker`

E agora basta rodar o docker

`docker-compose up -d`

Pronto,é sucesso!

Acesse o http://localhost:8080


## Para alterar alguma coisa

Dentro da pasta `public` existe um arquivo `index.php`, altere-o, salve e dê um F5 lá no navegaro <http://localhost:8080>
