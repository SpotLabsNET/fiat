<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the AUD fiat currency.
 */
class AustralianDollar extends FiatCurrency {

  function getCode() {
    return "aud";
  }

  function getName() {
    return "Australian dollar";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Australian_dollar";
  }

}
