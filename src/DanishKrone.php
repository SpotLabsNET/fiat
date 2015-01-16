<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the DKK fiat currency.
 */
class DanishKrone extends FiatCurrency {

  function getCode() {
    return "dkk";
  }

  function getName() {
    return "Danish krone";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Danish_krone";
  }

}
