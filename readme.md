Creative HotHouse Backend Test
------------------------------

This project is a Laravel application that serves a REST API.

1. (GET)`/api/coins` Get the list of cryptocurrencies paginated.
2. (GET)`/api/coins/{coin_id}` Get a cryptocurrency details.
3. (GET)`/api/coins/{coin_id}/historical?start=date?end=date` Get a cryptocurrency historical, filtered by the range of time the client want to show.
4. (GET)`/api/portfolio` Get a user portfolio and summary of crypto trades done by the user.
5. (POST)`/api/portfolio` Update a user portfolio adding a new trade on logged user.

Requirements
------------

Installation
------------

If you have Laravel Homestead virtual machile all of the requirements are satisfied.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension

Running for first time
----------------------


Running server local:
`php artisan serve`



Seed commands
-------------
1. `php artisan db:seed --class=CoinsTableSeeder` Cryptocurrency seeder.
2. `php artisan db:seed --class=CoinHistoricalsTableSeeder` Cryptocurrency Historical seeder. WARNING! This seed can take several hours to complete.

Running Tests
-------------
To run tests execute the next command inside project root folder:
- `./vendor/bin/phpunit`

Roadmap
-------
- Add laradock for guarantee the application runs as expected and be more easy to install.
- Do more advanced folder structure to separate the logic of the application. For example, create subfolder Coin to organize Models, Repositories and Resources of Coin code and do the same with other models.
- Create a Repository superclass and extend the modelRepositories from it. With this superclass we can create generical methods like find(), getAll(), to reuse more code...
- Move all Api Controllers to App\Http\Controllers\Api namespace
- JWT.   

Documentation
-------------
This project provides a documentation for the code and API. You can access it after project is installed.

- [Sami Doc](http://127.0.0.1:8000/docs/sami/index.html)

- [API Doc](http://127.0.0.1:8000/docs/index.html)

If you want to regenerate API Documentation, run:
`php artisan api:generate --routePrefix="api/*"`

External libraries imported with composer 
-----------------------------------------
- Guzzle
- Laravel Apidoc
- Passport

Other things
------------
- I'm working in Linux so by default the database driver is MariaDB. Because of this i must declare in `app\Providers\AppServiceProvider.php` a default varchar length. `Schema::defaultStringLength(191);`
- This project uses OAuth2 to authenticate users.









-----


# Commands used
php artisan make:model 


composer require laravel/passport

Client ID: 1
Client Secret: 8ebYvziKZK4xQ82gs2KLqYkTmMrfTNHeHcysaaMF
Password grant client created successfully.
Client ID: 2
Client Secret: OZ1lD33M1wjdKfm7N3RBZpp767fech091nWvp0gi


php artisan make:provider RiakServiceProvider

------