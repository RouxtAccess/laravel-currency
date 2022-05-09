<?php

namespace SSD\Currency\Currencies;

use SSD\Currency\Currencies\BaseCurrency;

class SEK extends BaseCurrency implements CurrencyInterface
{
    /**
     * Get symbol.
     *
     * @return string
     */
    public static function symbol(): string
    {
        return 'kr';
    }

    /**
     * Get code.
     *
     * @return string
     */
    public static function code(): string
    {
        return 'SEK';
    }

    public static function name(): string
    {
        return 'Swedish krona';
    }

    public function format(int $value, bool $inCents = false)
    {
        return number_format($value/($inCents ? 100 : 1), 0) . ' ' . self::symbol() ;
    }
}
