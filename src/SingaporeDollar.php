<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the SGD fiat currency.
 */
class SingaporeDollar extends FiatCurrency {

  function getCode() {
    return "sgd";
  }

  function getName() {
    return "Singapore dollar";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Singapore_dollar";
  }

}
