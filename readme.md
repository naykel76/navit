<p align="center"><a href="https://naykel.com.au" target="_blank"><img src="https://avatars0.githubusercontent.com/u/32632005?s=460&u=d1df6f6e0bf29668f8a4845271e9be8c9b96ed83&v=4" width="120"></a></p>

<a href="https://packagist.org/packages/naykel/navit"><img src="https://img.shields.io/packagist/dt/naykel/navit" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/naykel/navit"><img src="https://img.shields.io/packagist/v/naykel/navit" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/naykel/navit"><img src="https://img.shields.io/packagist/l/naykel/navit" alt="License"></a>

# Naykel Navit

Navigation and Page management package for Naykel Laravel applications to easily create site menus and display pages including:

-   Database migrations
-   Seeder to create menus and links
-   Main nav for navbar
-   Dynamic page routing that displays pages from the database based on ID or SLUG, and returns 404 if page not found (overrides `web.php`)

## Installation

#### Require the package via composer:

    composer require naykel/navit

#### Publish the required public assets:

    php artisan vendor:publish --tag=nkr

#### Publish optional assets:

    php artisan vendor:publish --tag=navit-opt

## Usage

### Important Notes

-   Home is a static page the will be copied over when assets are published
-   **MUST** update `web.php` file manually to include dynamic routes (copy from package routes file)
-   looks for page in database and returns 404 page if not found
-

### Add seeders to run

    $this->call(MenuSeeder::class);           // creates basic menu items and links
    $this->call(PageSeeder::class);           // seeds main site pages without content

### run seeder

    php artisan db:seed --class=NavitSeeder

## FAQ's

## Change log

See the [changelog](changelog.md) for more information on what has changed recently.

[link-author]: https://github.com/naykel76
[link-email]: nathan@naykel.com.au
