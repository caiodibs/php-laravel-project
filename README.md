# PHP Laravel project

Added from my bitbucket repository

Laravel project site that simulates a company site and allows the administrators to add team members. The photos were made by me and are free from author rights.

## Tools used

### Frontend
* HTML5 (tags e WAI-ARIA)
* CSS
* Bootstrap 4.0 and dependencies such as jQuery 3.3.1 e popper 1.14.3

### Backend
* Apache 2.4.34
* PHP 7.2.10
* MariaDB 10.3
* Composer 1.7.2
* Laravel 5.7
* PHP MyAdmin 4.8

### Database
* MariaDB

## How to install

### After git clone, follow the steps:
#### The files and commands are between quotes " to help the guide
* Go to the cloned folder and open a terminal
* Run "composer install"
* Rename the file ".env.example" to ".env"
* Change the database configurations on the".env"
* Go back to terminal and run the following commands
* Run "php artisan key:generate"
* Run "php artisan migrate" or "php artisan migrate:fresh" whether you don't mind loosing the data
* Run "php artisan storage:link" to allow access uploaded images
* Two options to run the server:
Option 1
* Run "php artisan serve"
* Access via browser "localhost:8000"
Option 2
* Redirect apache's directory  'httpd.conf' to "project location/public"
* Access via browser "localhost"

## Conteúdo do projeto

* Company home page with login and register pages
* Registered users that signs as administrator may add new members to the team section
* On the team members section, in case of an administrator, the user will see all registered members and may add anyone to the team. If the user chooses to add a team member, the user will be presented by a form to add a photo and a brief description. After addition, the recent added user will be moved to the upper list and will be visible for everyone as a team member