openclerk/fiat [![Build Status](https://travis-ci.org/openclerk/fiat.svg?branch=master)](https://travis-ci.org/openclerk/fiat)
==============

A library for describing fiat currencies, used by [Openclerk](http://openclerk.org)
and live on [CryptFolio](https://cryptfolio.com).

This extends on the abstract currency definitions provided by
[openclerk/currencies](https://github.com/openclerk/currencies).

Because fiat currencies are not digitally connected, we can't do interesting
things with them like we can with [cryptocurrencies](https://github.com/openclerk/cryptocurrencies);
this component only describes fiat currencies with their three-character codes.

## Installing

Include `openclerk/fiat` as a requirement in your project `composer.json`,
and run `composer update` to install it into your project:

```json
{
  "require": {
    "openclerk/fiat": "dev-master"
  }
}
```

* [Currencies supported](https://github.com/openclerk/fiat/tree/master/src)

## Using

Get the name for a given currency:

```php
$currency = new \Fiat\PolishZloty();
echo $currency->getName();   // returns "Polish złoty"
echo $currency->getURL();    // returns "http://en.wikipedia.org/wiki/Polish_z%C5%82oty"
```

## Donate

[Donations are appreciated](https://code.google.com/p/openclerk/wiki/Donating).

## Contributing

Pull requests that contribute new currencies are welcome.

## TODO

1. Should fiat currencies have assets?
1. Generate README list of currencies/services automatically
1. Link to live APIs on CryptFolio
1. CI build server and link to test results
