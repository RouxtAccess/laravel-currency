<?php

namespace SSD\Currency\Currencies;


use SSD\Currency\Currencies\BaseCurrency;

class NGN extends BaseCurrency implements CurrencyInterface
{

    public static function symbol(): string
    {
        return '₦';
    }

    public static function code(): string
    {
        return 'NGN';
    }

    public static function name(): string
    {
        return 'Naira';
    }

    public function format(int $value, bool $inCents = false)
    {
        return self::symbol() . number_format($value/($inCents ? 100 : 1), 0);
    }
}
