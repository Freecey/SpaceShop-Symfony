# SpaceShop-Symfony

## Description
A simple e-shop in PHP using Symfony 5.2 framework & Bootstrap 4.x.

## Live version
SOON

## Requirements
* PHP 8.0 or higher;
* MariaDB 10.3.25
* composer 2.0 or higher;
* and the [usual Symfony application requirements](https://symfony.com/doc/current/setup.html#technical-requirements).

## Quickstart - Installation
Download and install the blog application using Git and Composer:

```bash
$ git clone https://github.com/Freecey/SpaceShop-Symfony.git
$ cd SpaceShop-Symfony/
$ composer install
```

## Create and Update database
```bash
$ php bin/console doctrine:database:create
$ php bin/console doctrine:schema:update --force
```

Usage
-----

There is no need to configure a virtual host in your web server to access the application.
Just use the built-in web server:

```bash
SpaceShop-Symfony$ symfony server:start
```

Contributor
----

![alt text](docs/onepanda.jpg?raw=true "Cey Pictures" )

* Cedric AUDRIT     [@freecey](https://github.com/freecey/)

___
License
----

Please see [LICENSE](https://raw.githubusercontent.com/Freecey/SpaceShop-Symfony/master/LICENSE) file for more details.