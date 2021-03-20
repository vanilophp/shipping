<?php

declare(strict_types=1);
/**
 * Contains the Shipment class.
 *
 * @copyright   Copyright (c) 2019 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2019-02-16
 *
 */

namespace Vanilo\Shipping\Models;

use Illuminate\Database\Eloquent\Model;
use Vanilo\Shipping\Contracts\Shipment as ShipmentContract;

class Shipment extends Model implements ShipmentContract
{
}
