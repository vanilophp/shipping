<?php

namespace Vanilo\Shipping;

use Vanilo\Shipping\Contracts\ShippingMethod;

class ShippingMethods
{
    /** @var array */
    private static $registry = [];

    public static function register(string $id, string $class)
    {
        if (array_key_exists($id, self::$registry)) {
            return;
        }

        if (!class_implements($class, ShippingMethod::class)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The class you are trying to register (%s) as property type, ' .
                    'must implement the %s interface.',
                    $class,
                    ShippingMethod::class
                )
            );
        }

        self::$registry[$id] = $class;
    }

    public static function make(string $id)
    {
        $className = self::getClass($id);

        if (null === $className) {
            throw new \Exception(
                "No shipping method is registered with the id `$id`."
            );
        }

        return app()->make($className);
    }
    
    public static function getClass(string $id): ?string
    {
        return self::$registry[$id] ?? null;
    }
}
