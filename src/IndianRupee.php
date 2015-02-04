<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the INR fiat currency.
 */
class IndianRupee extends FiatCurrency {

  function getCode() {
    return "inr";
  }

  function getName() {
    return "Indian rupee";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/Indian_rupee";
  }

}
