# Laravel x Stisla

[![Build Status](https://github.com/ngodingbang/laravel-stisla-starter/actions/workflows/test.yml/badge.svg)](https://github.com/ngodingbang/laravel-stisla-starter/actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/ngodingbang/laravel-stisla-starter.svg?style=flat)](https://scrutinizer-ci.com/g/ngodingbang/laravel-stisla-starter)
[![Coverage Status](https://coveralls.io/repos/github/ngodingbang/laravel-stisla-starter/badge.svg)](https://coveralls.io/github/ngodingbang/laravel-stisla-starter)
[![Latest Stable Version](https://poser.pugx.org/ngodingbang/laravel-stisla-starter/v/stable.svg)](https://packagist.org/packages/ngodingbang/laravel-stisla-starter)
[![Total Downloads](https://poser.pugx.org/ngodingbang/laravel-stisla-starter/d/total.svg)](https://packagist.org/packages/ngodingbang/laravel-stisla-starter)
[![Software License](https://poser.pugx.org/ngodingbang/laravel-stisla-starter/license.svg)](https://packagist.org/packages/ngodingbang/laravel-stisla-starter)

**Laravel x Stisla** is a Laravel application combined with the Stisla Admin Template. You can check these GitHub repository below.

- Laravel Framework (https://github.com/laravel/laravel)
- Stisla Admin Template (https://github.com/stisla/stisla)

This application has been tested using [pestphp](https://pestphp.com).

## Requirements

- Laravel Framework ^8.75
- PHP ^7.3|^8.0
- Node.js ^16.14.0
- NPM ^8.3.1
- Composer ^2.0
- MySQL ^8.0.28

## Instalasi

To install this repository in your localhost, run this command below using your terminal.

```bash
composer create-project ngodingbang/laravel-stisla-starter
```

Packagist: https://packagist.org/packages/ngodingbang/laravel-stisla-starter

## Preparing Database
Run this command below to run database migration process.

```bash
php artisan migrate
```

## Testing

Run this command below to run test script using [pest](https://pestphp.com/).

```bash
./vendor/bin/pest
# or
composer test
```

## Changelog

See [`changelog.md`](CHANGELOG.md) for further information about the changes that happened in this repository.

## License

This repository using MIT License (MIT). See [`license.md`](LICENSE.md) for further information.

## Author

- [Septianata Rizky Pratama](https://github.com/ngodingbang)
