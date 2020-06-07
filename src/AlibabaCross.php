<?php

namespace AliCrossopen;

use AliCrossopen\core\ContainerBase;
use AliCrossopen\provider\ProductProvider;
use AliCrossopen\provider\StoreProvider;

/**
 * Class Application
 * @property \AliCrossopen\functions\product\Product product
 * @property \AliCrossopen\functions\order\Order order
 * @property \AliCrossopen\functions\order\Logistics logistics
 * @property \AliCrossopen\functions\order\Refund refund
 */
class AlibabaCross extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
        StoreProvider::class,
        ProductProvider::class,
        //...其他服务提供者
    ];
}
