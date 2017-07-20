## Steps

- Install `$ sudo composer create-project --prefer-dist laravel/laravel blog`
- Change Directory `$ cd blog`
- Set permissions `$ sudo chmod -R 777 *`
- See all commands `$ php artisan`
- Run application `$ php artisan serv`
- Create Controller `$ php artisan make:controller CustomersController --resource`
- Create Model `$ php artisan make:model Moloquent`
- Create Index `$ php artisan make:migration create_transaction_indexes`
- Run Migrations `$ php artisan migrate`
- Install mongodb package `$ composer require jenssegers/mongodb`
- Add IDE support `$ composer require --dev barryvdh/laravel-ide-helper`
- Generate IDE helper code for models `$ php artisan ide-helper:generate`
- Add doctrine support `$ composer require doctrine/dbal`
- Refresh migrations `$ php artisan migrate:refresh`
- Create Auth `$ php artisan make:auth`
