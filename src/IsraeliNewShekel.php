<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the ILS fiat currency.
 */
class IsraeliNewShekel extends FiatCurrency {

  function getCode() {
    return "ils";
  }

  function getName() {
    return "Israeli new shekel";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Israeli_new_shekel";
  }

}
