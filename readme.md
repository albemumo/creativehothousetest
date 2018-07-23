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

Installation
------------

- Clone the repository `git clone https://albemumo@bitbucket.org/albemumo/creativehothouse.git`
- Go to the project root. `cd creativehothouse`
- Run `composer install` command.
- Create the database schema, user and grant permission to database

```sql
CREATE SCHEMA IF NOT EXISTS creativehothousetest
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_unicode_ci;

CREATE USER 'creativeuser'@'localhost' IDENTIFIED BY 'secret';
GRANT ALL ON creativehothousetest.* to creativeuser@'localhost' IDENTIFIED BY 'secret';
FLUSH PRIVILEGES;
```
- Copy .env.example to .env `cp .env.example .env`
- Edit `.env` file in root directory with your MySQL ip, port, database, user and password. Set:
```bash
DB_DATABASE=creativehothousetest
DB_USERNAME=creativeuser
DB_PASSWORD=secret
```

- `php artisan migrate` or `php artisan migrate --force` if you have troubles.

- Run `php artisan passport:install --force` to install passport. Required to access api auth endpoints. 

- `php artisan db:seed` (If you want to refresh it `php artisan migrate:refresh --seed`) This seed generates a user and OAuth Client. Save it to access api authorized endpoints.
NOTE: This command may take several hours to complete. When you arrive to Seed process 4/4 you can wait 1 min and press "control + c" to stop it.

- Run `php artisan key:generate`

- To run server and test all the app run: `php artisan serve`

Seed commands
-------------
1. `php artisan db:seed --class=CoinsTableSeeder` Cryptocurrency seeder.
2. `php artisan db:seed --class=CoinHistoricalsTableSeeder` Cryptocurrency Historical seeder. WARNING! This seed can take several hours to complete.

Running Tests
-------------
To run tests execute the next command inside project root folder: (When you run tests the database table are truncated)
- `./vendor/bin/phpunit`

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

Roadmap
-------
- Add SSL to secure data travel.
- Add laradock for guarantee the application runs as expected and be more easy to install.
- Do more advanced folder structure to separate the logic of the application. For example, create subfolder Coin to organize Models, Repositories and Resources of Coin code and do the same with other models.
- Create a Repository superclass and extend the modelRepositories from it. With this superclass we can create generical methods like find(), getAll(), to reuse more code...
- Move all Api Controllers to App\Http\Controllers\Api namespace
- JWT.   

Considerations
--------------
- I'm working in Linux so by default the database driver is MariaDB. Because of this i must declare in `app\Providers\AppServiceProvider.php` a default varchar length. `Schema::defaultStringLength(191);`
- This project uses OAuth2 to authenticate users.
- At root folder you have a Postman Collection to import. The file is called `Creative Hot House.postman_collection.json`

