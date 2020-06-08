<?php

namespace AliCrossopen\provider;

use AliCrossopen\core\Container;
use AliCrossopen\functions\order\Order;
use AliCrossopen\functions\order\Refund;
use AliCrossopen\functions\order\Pay;
use AliCrossopen\interfaces\Provider;
use AliCrossopen\functions\order\Logistics;

/**
 * Class StoreProvider
 * @package AliCrossopen\provider
 * @property \AliCrossopen\functions\order\Order order
 * @property \AliCrossopen\functions\order\Refund refund
 * @property \AliCrossopen\functions\order\Pay pay
 * @property \AliCrossopen\functions\order\Logistics logistics
 */
class OrderProvider implements Provider
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
	    $container['pay'] = function ($container) {
		    return new Pay($container);
	    };
	    $container['logistics'] = function ($container) {
		    return new Logistics($container);
	    };
    }
}
