## Sengine

Sengine is a project that is used as a basic modular structure for all of our upcoming projects, it comes with a core module that contains all of the necessary services to ensure working with ease with our strucure.


## Installation

First of all clone this project,  once done head to /system make sure you install all the necessary packages.

```shell
composer install
```

make sure to autoload all of the dependencies

```shell
composer dump-autoload
```

### Initialisation

Set the necessary changes to .env (database, theme, base_url ...).

Insert all of the migrations into the database:

```shell
php artisan migrate
```

Initiate the necessary folders for the structure by this command:

```shell
php artisan sengine:initiate-project
```

This will generate all of the theme (public/assets) folder structure.

## Usage

These are some useful commands you'll often use while working with sengine:

to create a module:

```shell
php artisan sengine:make-module {moduleName}
```
to publish a module's public assets:

```shell
php artisan sengine:publish-module {moduleName}
```

Here are some helper functions that you would use on your .blade files:

```php
{!! _css('file_name_with_extension', ['module/plugin', 'subfolder']) !!}
{!! _js('file_name_with_extension', ['module/plugin', 'subfolder']) !!}
```


## Notes

Sengine's structure is mainly based on [Laravel modules package](https://nwidart.com/laravel-modules/v6/introduction).

Sengine uses [Laravel options](https://github.com/appstract/laravel-options) for all application's parameters.

[Laravel debugbar](https://github.com/barryvdh/laravel-debugbar) is installed on .dev mode only, so better use it for all debugging/performances testing.

Take a look at the core's module config file, for a set of useful config values.