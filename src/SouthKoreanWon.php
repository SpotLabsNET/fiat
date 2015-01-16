<?php

namespace Fiat;

use \Openclerk\Currencies\FiatCurrency;

/**
 * Represents the South Korean won fiat currency.
 */
class SouthKoreanWon extends FiatCurrency {

  function getCode() {
    return "krw";
  }

  function getName() {
    return "South Korean won";
  }

  function getURL() {
    return "http://en.wikipedia.org/wiki/South_Korean_won";
  }

}
