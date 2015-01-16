<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the CNY fiat currency.
 */
class Renminbi extends FiatCurrency {

  function getCode() {
    return "cny";
  }

  function getName() {
    return "Renminbi";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Renminbi";
  }

}
