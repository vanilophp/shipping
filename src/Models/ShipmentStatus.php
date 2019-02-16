<?php
/**
 * Contains the ShipmentStatus class.
 *
 * @copyright   Copyright (c) 2019 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2019-02-16
 *
 */

namespace Vanilo\Shipping\Models;

use Konekt\Enum\Enum;
use Vanilo\Shipping\Contracts\ShipmentStatus as ShipmentStatusContract;

class ShipmentStatus extends Enum implements ShipmentStatusContract
{
    const __default                 = self::NEW;

    const NEW                       = 'new';
    const INFO                      = 'info';
    const PICKED_UP                 = 'picked_up';
    const HUB_SCAN                  = 'hub_scan';
    const OUT_FOR_DELIVERY          = 'out_for_delivery';
    const DELIVERED_TO_PICKUP_POINT = 'delivered_to_pickup_point';
    const DELIVERED                 = 'delivered';
    const LOST                      = 'lost';
}
