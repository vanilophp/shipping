<?php

namespace Vanilo\Shipping\Models;

use Illuminate\Contracts\Support\Arrayable;

class ShippingRate implements Arrayable {
    protected $price;
    protected $currency;

    public function setPrice($value, $currency = null) {
        $this->price = $value;
        if (isset($currency)) $this->currency = $currency;
    }

    public function setCurrency($value) {
        $this->currency = $value;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getConvertedPrice() {
        return currency($this->price, $this->currency, null, false);
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function toArray() {
        return [
            'price' => $this->price,
            'currency' => $this->currency,
            'converted_price' => $this->getConvertedPrice(),
            'converted_currency' => currency()->getUserCurrency(),
            'display_price' => currency_format($this->getConvertedPrice(), currency()->getUserCurrency()),
        ];
    }
}