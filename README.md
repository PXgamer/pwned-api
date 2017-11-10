# pwned-api

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

An API wrapper for the [Have I Been Pwned][HIBP] API.

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/pwned-api
```

## Usage

This is currently up to date with [version 2][APIv2] of the API and allows use of the following:
- Breaches
   - Getting all breaches for an account <sup>[1]</sup>
   - Getting all breached sites in the system <sup>[2]</sup>
   - Getting a single breached site <sup>[3]</sup>
   - Getting an array of data classes <sup>[4]</sup>
- Pastes
   - Getting all pastes for an account <sup>[5]</sup>

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[HIBP]: https://haveibeenpwned.com/
[APIv2]: https://haveibeenpwned.com/API/v2
[1]: https://haveibeenpwned.com/api/v2/#BreachesForAccount
[2]: https://haveibeenpwned.com/api/v2/#AllBreaches
[3]: https://haveibeenpwned.com/api/v2/#SingleBreach
[4]: https://haveibeenpwned.com/api/v2/#AllDataClasses
[5]: https://haveibeenpwned.com/api/v2/#PastesForAccount

[ico-version]: https://img.shields.io/packagist/v/pxgamer/pwned-api.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/pwned-api/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/94875023/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/pwned-api.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/pwned-api.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/pwned-api
[link-travis]: https://travis-ci.org/pxgamer/pwned-api
[link-styleci]: https://styleci.io/repos/94875023
[link-code-quality]: https://codecov.io/gh/pxgamer/pwned-api
[link-downloads]: https://packagist.org/packages/pxgamer/pwned-api
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
