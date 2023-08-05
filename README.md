# userListPagination Laravel Package
## this will send email to admin and save contact query in database

## Install
    composer require scode/user-list-pagination
    
## set config database in .env file for example:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravelpackage
    DB_USERNAME=root
    DB_PASSWORD=your database password
#execute migration :
    php artisan migrate

## copy publishes files from  Contact Laravel Package to your project:   
    php artisan vendor:publish
   #### this command copy userListPagination.php in config directory and copy `userListPagination.blade.php` to `resources/views/userListPagination.blade.php`
   ##### get config/userListPagination.php file and edit `UserModelName`  value with User Model Name
   ##### and you also can edit userListPagination.php file
  
## run laravel server :
    php artisan serve
## get browser in laravel url project and get `/users` route for example :
    http://localhost:8000/users
#### you see users list .
  
  
