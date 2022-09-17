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

    public static function client_total_revenue($customer_id)
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoices =  $stripe->invoices->all(['customer' => $customer_id]);

        $amount_paid = array();
        foreach ($invoices->data as $key => $value) {
            $amount_paid[] = $value->amount_paid;
        }

        $total_amount_paid = array_sum($amount_paid);

        return $total_amount_paid;
    }

    public static function client_open_cost($customer_id)
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoices =  $stripe->invoices->all(['customer' => $customer_id]);

        $open_cost = array();
        foreach ($invoices->data as $key => $value) {
            $open_cost[] = $value->amount_remaining;
        }

        $total_open_cost = array_sum($open_cost);

        return $total_open_cost;
    }

    public static function clients_total_revenue()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoices =  $stripe->invoices->all();

        $amount_paid = array();
        foreach ($invoices->data as $key => $value) {
            $amount_paid[] = $value->amount_paid;
        }

        $total = array_sum($amount_paid);

        return $total;
    }

    public static function invoice_open_cost()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoices =  $stripe->invoices->all();

        $invoice_open_cost = array();
        foreach ($invoices->data as $key => $value) {
            $invoice_open_cost[] = $value->amount_remaining;
        }

        $total_invoice_open_cost = array_sum($invoice_open_cost);

        return $total_invoice_open_cost;
    }


}
