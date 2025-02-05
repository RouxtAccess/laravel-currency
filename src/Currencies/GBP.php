<?php

namespace SSD\Currency\Currencies;

class GBP extends BaseCurrency implements CurrencyInterface
{
    public static function symbol(): string
    {
        return '£';
    }

    public static function code(): string
    {
        return 'GBP';
    }

    public static function name(): string
    {
        return 'Pound';
    }

    public function format(int $value, bool $inCents = false)
    {
        return self::symbol() . number_format($value/($inCents ? 100 : 1), 0);
    }
}