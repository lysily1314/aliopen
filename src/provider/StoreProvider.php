<?php

namespace AliCrossopen\provider;

use AliCrossopen\core\Container;
use AliCrossopen\functions\order\Order;
use AliCrossopen\functions\order\Refund;
use AliCrossopen\interfaces\Provider;

/**
 * Class StoreProvider
 * @package AliCrossopen\provider
 */
class StoreProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['order']  = function ($container) {
            return new Order($container);
        };
        $container['refund'] = function ($container) {
            return new Refund($container);
        };
    }
}
