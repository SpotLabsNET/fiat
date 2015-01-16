<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the USD fiat currency.
 */
class UnitedStatesDollar extends FiatCurrency {

  function getCode() {
    return "usd";
  }

  function getName() {
    return "United States dollar";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/United_States_dollar";
  }

}
