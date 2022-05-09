<?php

namespace SSD\Currency\Currencies;


class ZAR extends BaseCurrency implements CurrencyInterface
{
    public static function symbol(): string
    {
        return 'R';
    }

    public static function code(): string
    {
        return 'ZAR';
    }

    public static function name(): string
    {
        return 'South African Rand';
    }

    public function format(int $value, bool $inCents = false)
    {
        return self::symbol() . number_format($value/($inCents ? 100 : 1), 0, '.', ' ');
    }
}
