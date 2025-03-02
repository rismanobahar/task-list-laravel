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

command line list detail :
1. composer create-project laravel/laravel (your project name->tasklist) : to create the project
2. cd tasklist : access the project file
3. php artisan : serve run the project
4. php artisan migrate : to migrate a new table in database and the table will be filled with laravel's default table
5. php artisan migrate:rollback : to re undo the table that you have just added into the database
6. php artisan db:seed
7. php artisan make:factory TaskFactory --model=Task
8. php artisan tinker to run laravel powershell on CMD
9. php artisan route:list : to showing all the route available
10. php artisan make:request TaskRequest

folder list detail :
1. /app/resources/views : for creating view/frontend side
2. /app/resources/routes : for creating api, controller, error handling
3. /app/resources/routes/views/layouts : for assembling all the view component that has been made
4. /app/database/factories : for creating a fake database
5. /app/database/migrations : Defines the structure of a database table (columns, types, constraints). It is used to create, modify, or delete tables
6. /app/database/seeders : to set how much of fake data will be made
7. /app/Models : Represents a table in the database and provides an interface to interact with it. It contains business logic and relationships 
8. /app/Http/Requests : for setting up a requirement/rules in the form
 
file list detail :
1. /app/resources/views/show.blade.php : for showing all the data   
2. /app/resources/views/index.blade.php : used as the base for all interface combined in it
3. /app/resources/routes/web.php : used for creating API
4. /app/Models/Task.php : for creating a model for the form
5. /app/database/factories/TaskFactory.php : for creating dummy data
6. /app/database/migrations/2024_09_26...php : for migrating database column
7. /app/database/seeders/DatabaseSeeder.php : for initializing data dummy
8. /app/resources/views/layouts/app.blade.php : similar with index.blade.php but is used for configuring the entire interface
9. /app/resources/views/create.blade.php : used for interfacing create page