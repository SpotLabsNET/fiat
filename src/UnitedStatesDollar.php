<?php

namespace Fiat;

use \Monolog\Logger;
use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the Netcoin cryptocurrency.
 */
class UnitedStatesDollar extends FiatCurrency {

  function getCode() {
    return "usd";
  }

  function getName() {
    return "United States Dollar";
  }

}
