<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the EUR fiat currency.
 */
class Euro extends FiatCurrency {

  function getCode() {
    return "eur";
  }

  function getName() {
    return "Euro";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Euro";
  }

}
