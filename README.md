1. should run wampserver same time. For database.<br><br>

**Lab 01:**<br>
command to start/run the laravel:<br>
**php artisan serve**<br><br>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***refer folder Lab02/practical2&3<br>
Lab 02:**<br>
http://127.0.0.1:8000/home<br>
+ view/aboutUs.blade.php<br>
+ view/contactUs.blade.php<br><br>

+ routes/web.php<br>
= automatic page redirects when another page <br><br>

+ **php artisan make:controller UserController**<br>
= create UserController controller<br><br>

Routing to the Controller: Import UsersController in web.php and create a route that uses the controller:<br>
+ use App\Http\Controllers\UsersController;<br><br>

+ **php artisan make:component Header**<br>
= create Header component<br><br>

+ view/userInner.blade.php<br>
+ view/header.blade.php<br><br>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab02/practical2&3 or Lab03/practical3<br>
Lab03:**<br>
update .env (edit database name)<br>
create users table<br>
add function testData in UsercCntroller<br>
**http://127.0.0.1:8000/testData**<br><br>

create User Model<br>
app/Models/..<br>
**+ php artisan make:model User**<br><br>

Showing a list of users to view <br>
- modify userInnner.blade.php<br><br>

add '$data = User::paginate(5);' in UserController<br>
= Create a table that displays five pieces of data at a time<br><br>

Creating/Inserting Data into Database <br><br>

Deleting Data from Database <br><br>

Updating / Editing Data in Database <br><br>

Data Migration in Laravel <br>
- automating creation of database table<br>
Define Table Structure:<br>
+ php artisan make:migration create_test_table <br><br>

Run Migration:<br>
**+ php artisan migrate –path=/database/migrations/migration_name.php  **<br><br><br>

Data Seeding<br>
- adding dummy data into a database table.<br>
**+ php artisan make:seeder TestSeeder**<br>
Database\Seeders\...<br>
**php artisan db:seed --class=TestSeeder**<br><br>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab02/practical2&3 or Lab03/practical3<br>
Lab04**<br>
Mass Assignment:<br>
- User Signup<br><br>

Relationship:<br>
One-To-One Relationship<br>
One-To-Many Relationship<br><br>


*can refer folder practical2&3 or practical3<br>
Lab05<br>
Working with Forms and Validation<br>
Creating the Login Form<br>
+ login.blade.php<br><br>

Middleware<br>
- filter HTTP requests based on specific conditions<br>
**+ php artisan make:middleware AgeCheck**<br>
app/Http/Middleware/AgeCheck.php<br><br>

Global Middleware<br>
Register the middleware in 'app/Http/Kernel.php' under $middleware<br>
- Applies to every request in the application.<br>
+ \App\Http\Middleware\ageCheck::class,<br><br>

Route middleware<br>
- Applies to specific routes only.<br>
+ 'protectedPage' => \App\Http\Middleware\ageCheck::class,<br><br>

Group Middleware<br>
- Applies to a group of routes.<br>
'protectedpage'=>[<br>
	\App\Http\Middleware\ageCheck::class,<br>
],<br><br>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab02/practical2&3 or Lab03/practical3<br>
Lab05**<br>
Session<br>
- to track user login or logout<br><br>

Flash Session<br>
- store data for the next HTTP request only<br><br>


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab06/practical6<br>
Lab06 Authentication**<br>
Create a Laravel Application
+ composer create-project laravel/laravel:8.* practical6
+ composer require laravel/ui --dev
+ php artisan ui vue --auth
+ npm install && npm run dev

If prompted, rerun 
+ npm run dev

Update the .env file with correct database credentials.
+ php artisan make:migration create_admins_table
+ php artisan make:migration create_authors_table

Define the schemas in the migrations:
admins table & authors table

If using MariaDB or older MySQL versions, add the following in AppServiceProvider.php
AppServiceProvider.php in App\Providers

run migration
+ php artisan migrate

Create Models
+ php artisan make:model Admin
+ php artisan make:model Author
modify Admin.php & Author.php

Define Guards
Update config/auth.php

Modify app/Http/Controllers/Auth/LoginController & RegisterController
- to handle authentication and registration for admins, authors.

Define Authenticated Pages for User Access
modify and create files below:
resources/views/layouts/auth.blade.php
resources/views/admin.blade.php
resources/views/author.blade.php
resources/views/home.blade.php

Define Routes in routes/web.php

Modify RedirectIfAuthenticated.php to handle multiple guards and redirect authenticated users accordingly. The file is located at app/Http/Middleware/RedirectIfAuthenticated.php:

Modify Handler.php to redirect unauthenticated users to their respective login pages based on the URL they tried to access. This file is located at app/Exceptions/Handler.php:

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab06/practical6<br>
Lab06 Authorization and RBAC**<br>

Add Roles to User
+ php artisan make:migration add_role_column_to_users_table

Database Migrate
+ php artisan migrate

Create Post Model
+ php artisan make:model Post

Create Post Controller
+ php artisan make:controller PostController


Define Gates
- In the app/Providers/AuthServiceProvider.php, define Gates to check the roles of the users.

Authorize Actions in Blade Template.
Create Users Testing Data in User Table.
Authorize Actions in PostController.
Create Routes for Post Controller
Authorize Actions in Routes

Authorization Through Policies
Create Policy
+ php artisan make:policy PostPolicy --model=Post

Register the Policies
- In app/Providers/AuthServiceProvider.php, register the policy.

Define Policy Methods
- In app/Policies/PostPolicy.php, define the methods for each action.

Map Controller Methods to Policy Methods
- In PostController.php, use the policy methods.

Defining Policy in Blade

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab07/practical7,8,9&10<br>
Lab07 Laravel ReactJS CRUD with RESTful API 01**<br>

change Example.js in resources/js/app.js

Pre-Requisite
- Install Postman application/software into your machine
- register to use Postman on the web
- install Postman as an extension/app for your Chrome Browser
https://www.postman.com/downloads/
https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop//%40

ReactJS Scaffolding
+ php artisan ui react --auth
+ npm install
+ npm run dev

Modify the Welcome Blade Template
- Edit the resources/views/welcome.blade.php file

Post Model Mass Assignment
- In app/Models/Post.php, define fillable fields

Install and Configure Reactstrap
+ npm install reactstrap react react-dom
+ npm install --save bootstrap

Import Bootstrap into your resources/js/app.js
+ import 'bootstrap/dist/css/bootstrap.min.css';

Create a Dummy Table with Reactstrap
- Build a dummy table in your resources/js/components/Example.js

Rebuild assets:
+ npm run dev

Add a Constructor and State Management
- Modify the Example component into a class and initialize state


Create CRUD Controllers
- Use the Laravel artisan CLI to generate a controller:
+ php artisan make:controller PostController
- Add CRUD methods in PostController.

Define API Endpoints
- In routes/api.php, define routes for your API

Test API with Postman
- Use Postman to test each API endpoint by sending HTTP requests (GET, POST, PUT, DELETE)

Install Axios for API Communication
+ npm install axios

Display Posts in React
- Modify the Example component to load data from the API


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab07/practical7,8,9&10<br>
Lab0 Laravel ReactJS CRUD with RESTful API 02**<br>

change Example.js in resources/js/app.js

Setup Modal for Adding a Post
- Define the Modal through example codes provided in React Bootstrap 4
+ https://reactstrap.github.io/

Add Functionality for Adding a Post

Setup Modal for Editing a Post

Add Delete Post Functionality

Modularize Components


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab07/practical7,8,9&10<br>
Lab09 Laravel REST API Authentication with JWT**<br>


Install and Configure JWT Authentication Package
+ composer require tymon/jwt-auth

Register JWT Auth in config/app.php

Publish the package configuration
+ php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

Generate a secret key
+ php artisan jwt:secret


Define User Model
- Implement JWTSubject in User model

Configure Auth Guard
- Update config/auth.php to set up JWT guard

Define Authentication Controller
- Create AuthController
+ php artisan make:controller AuthController
- Add authentication logic for login, register, logout, refresh, and user profile.

Define REST API Authentication Endpoints
- Add routes in routes/api.php

Test REST API Endpoints in Postman:
- Register User
- Login User
- Access User Profile
- Refresh Token
- Logout


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***can refer folder Lab07/practical7,8,9&10<br>
Lab10 Laravel REST API Authentication with JWT**<br>
















