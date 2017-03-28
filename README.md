# Case study for learn about wordpress and laravel 5 #

Project using laravel framework to build core 
### Main Features ###

* Version 1
    1. Laravel core
    2. Laravel module package
    3. Laravel Repositories package
    4. Admin LTE2 template
    5. User module
        1. authenticate:
            - login: auth/login
            - logout: auth/logout
            - register:auth/register
            - reset:auth/password/reset
        2. backend:
            - Manage User: backend/user
            - Manage Role: backend/roles 
    6. Laravel Debug
            
   

### Requirement Environment ###
    PHP >= 5.6.4
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    NPM


### How to set up? ###
    Clone repo from git 
    Install with composer
        php composer.phar install
    Config database info in .env
    Migrate data to database
        php artisan migrate
    Public vendor
        php artisan vendor:publish



### Contribution guidelines ###


* Writing tests
* Code review
* Other guidelines

### Reference link ###

* Laravel module
    - https://nwidart.com/laravel-modules/v1/installation-and-setup

* Laravel repository
    - https://github.com/andersao/l5-repository/blob/master/README.md
    
* Laravel generate mail template
    - https://laravel.com/docs/5.3/mail#generating-mailables

* Laravel datatable
    - repo: https://github.com/yajra/laravel-datatables
    - guide: https://datatables.yajrabox.com/starter
    
* Laravel laravel-responsecache
    - repo: https://github.com/spatie/laravel-responsecache