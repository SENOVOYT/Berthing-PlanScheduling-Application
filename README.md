<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a><br> <img src="sssasa.jpg" width="200"><br>DRIANE DIOJAN PEREZ<br><br> <img src="MarkPascual.JPG" width="200"><br>MARK ANTHONY PASCUAL<br><br> <img src="ocl.jpeg" width="200"><br>OSBORN JOSEPH COLLINS<br></p>




<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation for PHP 

For our project the first thing you must have is to download PHP through the official website for PHP make sure to download the PHP windows installer for your computer if you have windows. If you don’t have windows, then read the documentation on how to install PHP with a different method. After you have clicked the windows installer download the zip file for PHP. Create a folder called PHP and extract the file over there. After that make sure to copy the path and add a new path environment to your system and paste the path over there. 

## Installation for composer 

After the installation just make sure run these codes to install it composer.
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
After you have download composer make sure to add composer to you path also for you to be able to call composer in any directory you want.

## Installation for node.js

After the composer is install make sure to download the node.js windows installation and install node.js from its official website.

## Installation for Laravel 

To install Laravel just run this code composer global require laravel/installer 

## Installation of XAMP

After the Laravel is install make sure to download the XAMP windows installation and install XAMP from its official website.

## Create Database berth_plan and Migrating the SQL files for Laravel 

First we need to create a database in XAMP called berth_plan. After that make sure you’re inside the project and open command prompt and run php artisan migrate to migrate the Laravel migration or run the SQL file called laravel_berth_plan. After that make sure to run the bethsql_v1.sql.
## Starting the server  
To start the server just run this code php artisan serve after that just click the link that was provided by Laravel and enjoy the demo.

## Explanation of files and code files
Most of the files and code we did were in the folder 
- app/Http/ Controllers - the files inside this folder are all controller that we use during the project
- app/Http/ Middleware - the files inside this folder are all middleware that we use during the project
- app/Http/ Models – the file in this folder is the models where we used to create model and communicated with the databases table.
database/migrations - 
- public – this were the public file that the server used for CSS, JavaScript, fonts, images, bootstrap, the favicon.
resources/views – this were the views that were displayed to the user. Mostly HTML code was used over here.
- routes – this were the rotes that the user could enter were mentioned here. If a route wasn’t present, then the 404 page was displayed to the user.
-Most of the files were divided into section to each section does the same but for different link/ routes. The controller did it job to do unction that were needed. The middle ware did its stuff to when did it executed it code as a middleware does. The models communicated to the tale database. Migration was the actual code that will generate the migration to the database. The view displayed pages. The routes were link that the user could access. Finally, the public was the resourced that the views needed. 


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
