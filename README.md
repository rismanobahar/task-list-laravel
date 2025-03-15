## ![Demo] https://drive.google.com/file/d/1qnf4JQoZ0oaIC4cnWA5cM2973lFlcJjI/view?usp=drive_link

## DESCRIPTION : 
This is a project about list management or CRUD web application where the user can create, retrieve, delete, and update data as well as marking a list of data as done

## Tech Stack :
the stack that are used was as follows:
- laravel = 10.48.20
- PHP = 8.1.10
- database = mySQL
- frontend = laravel blade
- composer = 2.8.1
- containerization = Docker

## Installation Steps :
- `git clone https://github.com/rismanobahar/task-list-laravel.git`
- `cd tasklist`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate --seed`
- `php artisan serve`

## Command line list detail :
- `composer create-project laravel/laravel (your project name->tasklist)` : to create the project.
- `cd tasklist` : access the project file.
- `php artisan` : serve run the project.
- `php artisan migrate` : to migrate a new table in database and the table will be filled with laravel's default table.
- `php artisan migrate:rollback` : to re undo the table that you have just added into the database.
- `php artisan db:seed` : generate fake data/dummy data into the database.
- `php artisan make:factory TaskFactory --model=Task` : create a new model factory name TaskFactory where it will generate new model instances for testing or seeding database with test/fake/dummy data.
- `php artisan tinker` : run laravel powershell on CMD.
- `php artisan route:list` : to showing all the route available.
-  `php artisan make:request TaskRequest`: create a new form request class named TaskRequest that is used to encapsulate validation logic and authorization logic for a specific request.

## Folder and File list detail :
- **/app/resources/views** : for creating view/frontend side.
    - `show.blade.php` : for showing all the data.
    - `index.blade.php`  : used as the base for all interface combined in it.
    - `create.blade.php`  : used for interfacing create page.
- **/app/resources/views/layouts** : for assembling all the view component that has been made.
    - `app.blade.php`  : similar with index.blade.php but is used for configuring the entire interface.
- **/app/routes** : for creating api, controller, error handling.
    - `web.php`  : used for creating routes/API.
- **/app/database/factories** : for creating a fake database.
    - `TaskFactory.php`  : for creating dummy data.
- **/app/database/migrations** : Defines the structure of a database table (columns, types, constraints). It is used to create, modify, or delete tables.
    - `2024_09_26...php`  : for migrating database column.
- **/app/database/seeders** : to set how much of fake data will be made.
    - `DatabaseSeeder.php`  : for seeding fake/dummy data.
- **/app/Models** : Represents a table in the database and provides an interface to interact with it. It contains business logic and relationships .
    - `Task.php`  : for creating a model for the form.
- **/app/Http/Requests** : for setting up a requirement/rules in the form.
    - `TaskRequest.php` : for authorizing and applying rules of method on the request data
- `.env` : configuring database and connection.
