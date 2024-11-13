1. should run wampserver same time. For database.

Lab 01:
command to start/run the laravel:
php artisan serve


*refer folder practical2&3
Lab 02:
http://127.0.0.1:8000/home
+ view/aboutUs.blade.php
+ view/contactUs.blade.php

+ routes/web.php
= automatic page redirects when another page 

+ php artisan make:controller UserController
= create UserController controller

Routing to the Controller: Import UsersController in web.php and create a route that uses the controller:
+ use App\Http\Controllers\UsersController;

+ php artisan make:component Header
= create Header component

+ view/userInner.blade.php
+ view/header.blade.php


*can refer folder practical2&3 or practical3
Lab03:
update .env (edit database name)
create users table
add function testData in UsercCntroller
http://127.0.0.1:8000/testData

create User Model
app/Models/..
+ php artisan make:model User

Showing a list of users to view 
- modify userInnner.blade.php

add '$data = User::paginate(5);' in UserController
= Create a table that displays five pieces of data at a time

Creating/Inserting Data into Database 

Deleting Data from Database 

Updating / Editing Data in Database 

Data Migration in Laravel 
- automating creation of database table
Define Table Structure:
+ php artisan make:migration create_test_table 

Run Migration:
+ php artisan migrate –path=/database/migrations/migration_name.php  

Data Seeding
- adding dummy data into a database table.
+ php artisan make:seeder TestSeeder
Database\Seeders\...
php artisan db:seed --class=TestSeeder


*can refer folder practical2&3 or practical3
Lab04
Mass Assignment:
- User Signup

Relationship:
One-To-One Relationship
One-To-Many Relationship


*can refer folder practical2&3 or practical3
Lab05
Working with Forms and Validation
Creating the Login Form
+ login.blade.php

Middleware
- filter HTTP requests based on specific conditions
+ php artisan make:middleware AgeCheck
app/Http/Middleware/AgeCheck.php

Global Middleware
Register the middleware in 'app/Http/Kernel.php' under $middleware
- Applies to every request in the application.
+ \App\Http\Middleware\ageCheck::class,

Route middleware
- Applies to specific routes only.
+ 'protectedPage' => \App\Http\Middleware\ageCheck::class,

Group Middleware
- Applies to a group of routes.
'protectedpage'=>[
	\App\Http\Middleware\ageCheck::class,
],


*can refer folder practical2&3 or practical3
Lab05
Session
- to track user login or logout

Flash Session
- store data for the next HTTP request only










































