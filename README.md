1. should run wampserver same time. For database.<br><br>

**Lab 01:**<br>
command to start/run the laravel:<br>
**php artisan serve**<br><br>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

***refer folder practical2&3<br>
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

***can refer folder practical2&3 or practical3<br>
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

***can refer folder practical2&3 or practical3<br>
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

***can refer folder practical2&3 or practical3<br>
Lab05**<br>
Session<br>
- to track user login or logout<br><br>

Flash Session<br>
- store data for the next HTTP request only<br><br>










































