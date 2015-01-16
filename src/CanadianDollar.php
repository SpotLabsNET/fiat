<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the CAD fiat currency.
 */
class CanadianDollar extends FiatCurrency {

  function getCode() {
    return "cad";
  }

  function getName() {
    return "Canadian dollar";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Canadian_dollar";
  }

}
