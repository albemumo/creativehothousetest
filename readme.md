<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


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

Running for first time
----------------------





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