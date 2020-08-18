<?php

namespace Vanilo\Shipping\Models;

use Illuminate\Contracts\Support\Arrayable;

class ShippingRate implements Arrayable {
    protected $price;
    protected $currency;

    public function setPrice($value) {
        $this->price = $value;
    }

    public function setCurrency($value) {
        $this->currency = $value;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function toArray() {
        return [
            'price' => $this->price,
            'currency' => $this->currency,
        ];
    }
}