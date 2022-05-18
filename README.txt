
Installation for PHP 

For our project the first thing you must have is to download PHP through the official website for PHP make sure to download 
the PHP windows installer for your computer if you have windows. If you don’t have windows, then read the documentation on 
how to install PHP with a different method. After you have clicked the windows installer download the zip file for PHP. 
Create a folder called PHP and extract the file over there. After that make sure to copy the path and add a new path 
environment to your system and paste the path over there.
 


Installation for composer 

After the installation just make sure run these codes to install it composer.
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
After you have download composer make sure to add composer to you path also for you to be able to call composer in any directory you want.




Installation for node.js

After the composer is install make sure to download the node.js windows installation and install node.js from its official website.




Installation for Laravel 

To install Laravel just run this code composer global require laravel/installer 
Installation of XAMP
After the Laravel is install make sure to download the XAMP windows installation and install XAMP from its official website.



Create Database berth_plan and Migrating the SQL files for Laravel 

First we need to create a database in XAMP called berth_plan. After that make sure you’re inside the project and open command 
prompt and run php artisan migrate to migrate the Laravel migration or run the SQL file called laravel_berth_plan. After that 
make sure to run the bethsql_v1.sql.


STARTING THE SERVER 

To start the server just run this code php artisan serve after that just click the link that was provided by Laravel and enjoy the demo.

Explanation of files and code files
Most of the files and code we did were in the folder 
app/Http/ Controllers - the files inside this folder are all controller that we use during the project
app/Http/ Middleware - the files inside this folder are all middleware that we use during the project
app/Http/ Models – the file in this folder is the models where we used to create model and communicated with the databases table.
database/migrations - 
public – this were the public file that the server used for CSS, JavaScript, fonts, images, bootstrap, the favicon.
resources/views – this were the views that were displayed to the user to ser. Mostly HTML code was used over here.
routes – this were the rotes that the user could enter were mentioned here. If a route wasn’t present, then the 404 page was displayed to the user.
Most of the files were divided into section to each section does the same but for different link/ routes. The controller did it job to do unction that were needed. The middle ware did its stuff to when did it executed it code as a middleware does. The models communicated to the tale database. Migration was the actual code that will generate the migration to the database. The view displayed pages. The routes were link that the user could access. Finally, the public was the resourced that the views needed. 


