<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the NZD fiat currency.
 */
class NewZealandDollar extends FiatCurrency {

  function getCode() {
    return "nzd";
  }

  function getName() {
    return "New Zealand dollar";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/New_Zealand_dollar";
  }

}
