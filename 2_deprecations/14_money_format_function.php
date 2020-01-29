<?php

/*
 * money_format() function
 *
 * The money_format() function is deprecated.
 * It can be replaced by the intl NumberFormatter functionality.
 */

// Don't do:
$number = 1234.56;
money_format('%.2n', $number);

// Do:
$formatter = new \NumberFormatter("it-IT", \NumberFormatter::CURRENCY);
$symbol = $formatter->getSymbol(\NumberFormatter::INTL_CURRENCY_SYMBOL);
$formatter->formatCurrency($number,  $symbol);
