# Validates ean13 check digit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/grada/ean13validator.svg?style=flat-square)](https://packagist.org/packages/grada/ean13validator)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/grada/ean13validator/Tests?label=tests)](https://github.com/grada/ean13validator/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/grada/ean13validator.svg?style=flat-square)](https://packagist.org/packages/grada/ean13validator)


This package validates EAN13 barcode check digit.

## Support us

[<img src="https://www.grada.com.ar/wp-content/uploads/2020/06/logoGrada200x71.png" width="419px" />](https://spatie.be/github-ad-click/package-skeleton-php)

We invest a lot of resources into creating best in class open source packages. You can support us by [buying one of our paid services](https://www.grada.com.ar/).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://www.grada.com.ar/contacto/).

## Installation

You can install the package via composer:

```bash
composer require grada/ean13validator
```

## Usage

```php
$vc = new Ean13validatorClass();
$result = $vc->validate_EAN13Barcode("0123456789");   // true if it is a valid EAN13 barcode
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Carlos Rubén Jacobs](https://github.com/consultora-grada)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
