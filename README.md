# PHP Laravel project

Trata-se de um projeto desenvolvido em Laravel com a finalidade de criar um site da empresa, com registo, login e possibilidade de adicionar membros a equipa.
Na secção equipa, meu nome, foto e descrição sempre constarão, independente de haverem dados na base de dados
O tema e o contacto são fictícios, e todas as fotos foram tiradas por mim, sendo assim, livre de direitos de autor

## Ferramentas usadas para o projeto

### Frontend
* HTML5 (tags e WAI-ARIA)
* CSS
* Bootstrap 4.0 e dependências como jQuery 3.3.1 e popper 1.14.3

### Backend
* Apache 2.4.34
* PHP 7.2.10
* MariaDB 10.3
* Composer 1.7.2
* Laravel 5.7
* PHP MyAdmin 4.8

### Database
* DB criado com o nome de laravel
* Alterar as configurações de utilizador e palavra-passe no ficheiro .env

## Como executar

### Ao fazer o git clone, executar os seguintes passos
#### Os ficheiros e comandos estarão entre aspas " para facilitar a visualização
* Vá até a pasta onde o projeto foi clonado. linha de comando, ou terminal caso prefira usar um ambiente de programação e se o mesmo oferecer um terminal
* Executar "composer install"
* De seguida, renomear o ficheiro ".env.example" para ".env"
* Altere no ficheiro ".env" as configurações para apontar para a base de dados a ser utilizada. Como exemplo, este projeto utiliza a base de dados com o nome de laravel
* Ainda no ficheiro ".env", defina o utilizador e senha a serem usados
* De volta ao terminal, execute os seguintes
* Executar "php artisan key:generate"
* Executar "php artisan migrate". Caso a base for apenas para testes, e não se importar com a perda dos registos nela contidos, pode executar "php artisan migrate:fresh"
* Executar "php artisan storage:link" para permitir que as imagens carregadas pelos utilizadores possam ser vistas dentro do projeto
* Rodar o servidor. Duas opções:
Opção 1
* Executar "php artisan serve"
* Aceder pelo browser a página "localhost:8000"
Opção 2
* Redirecionar o diretório do apache no httpd.conf para onde o projeto foi clonado "local do projeto/public"
* Aceder ao "localhost"

## Conteúdo do projeto

* Site com as páginas Home, Sobre a empresa, Equipa, Contacto, Registo e Login
* Caso o utilizador registe-se como administrador, ele poderá adicionar membros na secção Equipa
* Logo abaixo de todos os membros da equipa, e caso o utilizador seja administrador, ele verá uma parte de Área de aprovação do administrador com todos os utilizadores registados. Ele pode adicionar qualquer membro desta lista
* Ao adicionar membro, ele será redirecionado ao formulário onde deverá anexar uma foto do utilizador e escrever uma descrição sobre ele.
* Ao adicionar, ele será redirecionado a página da equipa com o membro adicionado já na parte superior, e esta alteração poderá ser vista por todos utilizadores, registados ou não

## Passos seguidos ao criar o projeto
* Criação do HTML que servirá de template
* Instalação do backend, composer e laravel
* Configuração do laravel e ajustes de ficheiros
* configuração do .env com os dados para conexão, criação da tabela de registos e login
* Criação dos blades, sendo o master layout e a divisão daquele template HTML em blades correspondentes
* Criação das rotas e controladores para o carregamento das páginas
* Limpeza do lixo que eventualmente tenha ficado do modelo anterior
* Ações de registo e login
* Foram criados dois campos adicionais na tabela users, is_admin para saber se o registante é administrador, e is_team_member, para saber se a pessoa e membro da equipa. Isso foi feito pelo Laravel com as componentes de migração
* Para facilitar, foi incluída uma checkbox "Administrador" no registo
* A equipa já contem meus dados independentemente de haverem registos na base de dados
* Inserção do nome do utilizador no menu principal, junto a opção de sair
* Adicionada página de adição de membros a equipa
* Criado um Service Provider para permitir apenas administradores em certas partes do site
* Correcções no formulário para adicionar membros a equipa
* Algumas limpezas de código e adição de comentários
* Criados campos de descrição e imagem
* Adicionada área onde os administradores podem registar membros na equipa
* Inserção de membros na equipa e upload de imagens
* Alteração do upload para acrescer o id ao nome da imagem, para evitar duplicidade
* Link simbólico para poder aceder aos arquivos anexados
* Limpeza e comentário de código
* Ajustes tipográficos
* Finalização da descrição do projeto

## Implementações futuras
* Criar um campo para ordenação manual dos membros da equipa, onde os administradores possam escolher a ordem em que os membros aparecem
* A foto e descrição poderá ser incluída pelo próprio utilizador ao se registar, ficando passível de moderação por parte da administração
* Adicionar painel de controlo para o utilizador realizar alterações nos seus dados
* Permitir que mais fotos sejam adicionadas na secção Sobre a empresa