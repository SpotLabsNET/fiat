<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the PLN fiat currency.
 */
class PolishZloty extends FiatCurrency {

  function getCode() {
    return "pln";
  }

  function getName() {
    return "Polish złoty";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Polish_z%C5%82oty";
  }

}
