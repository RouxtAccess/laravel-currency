<?php

namespace SSD\Currency\Currencies;

class USD extends BaseCurrency implements CurrencyInterface
{
    public static function symbol(): string
    {
        return '$';
    }

    public static function code(): string
    {
        return 'USD';
    }

    public static function name(): string
    {
        return 'United States Dollar';
    }

    public function format(int $value, bool $inCents = false)
    {
        return self::symbol() . number_format($value/($inCents ? 100 : 1), 0);
    }
}