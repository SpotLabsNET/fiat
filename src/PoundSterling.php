<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the GBP fiat currency.
 */
class PoundSterling extends FiatCurrency {

  function getCode() {
    return "gbp";
  }

  function getName() {
    return "Pound sterling";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Pound_sterling";
  }

}
