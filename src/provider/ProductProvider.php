<?php


namespace AliCrossopen\provider;


use AliCrossopen\core\Container;
use AliCrossopen\functions\product\Product;
use AliCrossopen\interfaces\Provider;

/**
 * Class ProductProvider
 * @package AliCrossopen\provider
 * @property \AliCrossopen\functions\product\Product product
 */
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
    }
}
