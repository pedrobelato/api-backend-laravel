<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Projeto PHP utilizando Laravel na construção de uma API

Neste projeto, foi desenvolvido no ambiente Laragon e utilizando banco de dados MySQL.

## Para executar o projeto

* Faça o download do projeto e abra-o no VS Code.
* Em seguida, com o laragon instalado no C:laragon em seu computador, navegue até a pasta "www" e cole o projeto baixado dentro dela.
* Navegue pelo diretório do projeto em ".../database/seeders/" e abra o arquivo DatabaseSeeder.php, nele, irá conter duas factories para obter-se os dados de usuários e produtos gerados automaticamente.
* Ainda no terminal do Laragon, execute o comando: _php artisan tinker_ e cole cada factory e tecle enter para gerar os dados.
* Vá até o Laragon, inicie-o e, em seu terminal, execute o seguinte comando: _php artisan serve_ para executar o projeto.

### Para testar as API's

Dentro do projeto, contém o arquivo de exportação de toda a documentação das rotas feita pelo Postman.
* Abra o Postman e clique no botão importar.
* Navegue até o diretório do projeto onde o mesmo de localiza com o nome _API-Backend - CRUD.postman_collection_ e clique em abrir.

Dentro do mesmo, há uma documentação exclusiva sobre as requisições.

## Descrição do projeto

### Tecnologias Utilizadas:
* Laravel: Framework PHP utilizado para desenvolver a API RESTful.
* Eloquent ORM: Utilizado para interagir com o banco de dados através de modelos.
* Laravel Passport: Utilizado para implementar a autenticação baseada em tokens (OAuth2).
* JSON Web Tokens (JWT): Utilizado para gerar tokens de acesso após a autenticação do usuário.
* MySQL: Banco de dados relacional utilizado para armazenar dados dos produtos e informações de usuários.
* Postman: Ferramenta colaborativa para testar APIs, permitindo criar, enviar e salvar solicitações HTTP de forma eficiente.

### Funcionalidades Principais:

* Criação de novos produtos com validação dos campos obrigatórios (nome, preço, status e quantidade em estoque).
* Listagem de todos os produtos cadastrados, exibindo informações básicas como nome, descrição e preço.
* Atualização de produtos existentes com validação dos campos antes da atualização.
* Exclusão de produtos do banco de dados.

### Autenticação de Usuários:

* Autenticação de usuários através do endpoint /api/login, utilizando e-mail e senha.
* Geração de token de acesso válido após autenticação bem-sucedida.
* Restrição de acesso aos endpoints protegidos da API utilizando o token de acesso.

### Resumo da Arquitetura:
* Controllers: Responsáveis por receber as requisições HTTP, validar os dados e interagir com os modelos (Eloquent) para realizar operações no banco de dados.
* Models: Representam os dados da aplicação e interagem com o banco de dados utilizando o Eloquent ORM.
* Routes: Define os endpoints da API e associa cada endpoint a um método do controller.
* Middlewares: Utilizados para aplicar camadas adicionais de segurança e lógica às rotas da API, como autenticação.
