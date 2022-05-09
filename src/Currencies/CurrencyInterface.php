<?php

namespace SSD\Currency\Currencies;

interface CurrencyInterface
{
    public static function symbol(): string;

    public static function code(): string;

    public static function name(): string;

    public function format(int $value, bool $inCents = false);
}
