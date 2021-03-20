<?php

declare(strict_types=1);
/**
 * Contains the ModuleServiceProvider class.
 *
 * @copyright   Copyright (c) 2019 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2019-02-16
 *
 */

namespace Vanilo\Shipping\Providers;

use Konekt\Concord\BaseModuleServiceProvider;
use Vanilo\Shipping\Models\Shipment;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Shipment::class
    ];
}
