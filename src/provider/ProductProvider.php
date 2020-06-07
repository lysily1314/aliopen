<?php


namespace AliCrossopen\provider;


use AliCrossopen\core\Container;
use AliCrossopen\functions\order\Logistics;
use AliCrossopen\functions\product\Product;
use AliCrossopen\interfaces\Provider;

class ProductProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['product']   = function ($container) {
            return new Product($container);
        };
        $container['logistics'] = function ($container) {
            return new Logistics($container);
        };
    }
}