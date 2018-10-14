# PHP Laravel project

## Ferramentas usadas para o projeto

### Frontend
* 1. HTML5 (tags e WAI-ARIA)
* 2. CSS
* 3. Bootstrap 4.0 e dependências como jQuery 3.3.1 e popper 1.14.3

### Backend
* 1. PHP 7.2.10
* 2. MariaDB 10.3
* 3. Composer 1.7.2
* 4. Laravel 5.7
* 5. PHP MyAdmin 4.8

### Database
* . DB criado com o nome de laravel
* . Utilizador e senha default: user: root, senha:

## Passos seguidos
* . Criação do HTML que servirá de template
* . Instalação do backend, composer e laravel
* . Configuração do laravel e ajustes de ficheiros
* . configuração do .env com os dados para conexão, criação da tabela de registos e login
* . Criação dos blades, sendo o master layout e a divisão daquele template HTML em blades correspondentes
* . Criação das rotas e controladores para o carregamento das páginas
* . Limpeza do lixo que eventualmente tenha ficado do modelo anterior
* - Ações de registo e login
* . Foram criados dois campos adicionais na tabela users, is_admin para saber se o registante é administrador, e is_team_member, para saber se a pessoa e membro da equipa. Isso foi feito pelo Laravel com as componentes de migração
* . Para facilitar, foi incluída uma checkbox "Administrador" no registo
* . A equipa já contem meus dados independentemente de haverem registos na base de dados
* . Inserção do nome do utilizador no menu principal, junto a opção de sair
* . Adicionada página de adição de membros a equipa
* . Criado um Service Provider para permitir apenas administradores em certas partes do site
* . Correcções no formulário para adicionar membros a equipa