<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;
use NumberFormatter;

class Helper
{
    public static function money_format($currency,$format,$price)
    {
        $money = new Money($price, new Currency($currency));
        $currencies = new ISOCurrencies();

        $numberFormatter = new \NumberFormatter($format, NumberFormatter::DECIMAL);
        $moneyFormatter = new IntlMoneyFormatter($numberFormatter, $currencies);

        $formatted_price = $moneyFormatter->format($money);
        return $formatted_price;
    }
}
