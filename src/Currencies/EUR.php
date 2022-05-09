<?php

namespace SSD\Currency\Currencies;

class EUR extends BaseCurrency implements CurrencyInterface
{

    public static function symbol(): string
    {
        return '€';
    }

    public static function code(): string
    {
        return 'EUR';
    }

    public static function name(): string
    {
        return 'Euro';
    }

    public function format(int $value, bool $inCents = false)
    {
        return self::symbol() . number_format($value/($inCents ? 100 : 1), 0);
    }
}