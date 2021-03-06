 # A simple Laravel package to set the number of results

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macsidigital/laravel-resultable.svg?style=flat-square)](https://packagist.org/packages/macsidigital/laravel-resultable)
[![Build Status](https://img.shields.io/travis/macsidigital/laravel-resultable/master.svg?style=flat-square)](https://travis-ci.org/MacsiDigital/laravel-resultable)
[![StyleCI](https://github.styleci.io/repos/193589098/shield?branch=master)](https://github.styleci.io/repos/193589098)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/MacsiDigital/laravel-resultable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/MacsiDigital/laravel-resultable/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/macsidigital/laravel-resultable.svg?style=flat-square)](https://packagist.org/packages/macsidigital/laravel-resultable)

A simple Laravel package to set the amount of results returned for pagination

## Installation

You can install the package via composer:

```bash
composer require macsidigital/laravel-resultable
```

The service provider should automatically register for For Laravel > 5.4.

For Laravel < 5.5, open config/app.php and, within the providers array, append:

``` php
MacsiDigital\Resultavle\Providers\ResultavleServiceProvider::class
```

## Usage

Set the various options in the config like so

``` php
return [
	'no_results' => [
		'20',
		'50',
		'100',
		'250',
		'500',
		'1000'
	]
];
```

Then loop through and use the blade helper to create the links like so, best used in a dropdown

``` php
@foreach(config('resultable.no_results') as $result_amount)
	<a href="@resultableurl()&results={{$result_amount}}">{{$result_amount}}</a>
@endforeach
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email colin@macsi.co.uk instead of using the issue tracker.

## Credits

- [Colin Hall](https://github.com/macsidigital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
