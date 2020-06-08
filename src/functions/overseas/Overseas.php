<?php
namespace AliCrossopen\functions\overseas;

use AliCrossopen\core\BaseClient;
use AliCrossopen\entity\overseas\{
	SellerOrderListParams,
	OpDeliverySendOrderParams,
	SellerDetailViewParams,
	ProductQueryByStatusParams
};


/**
 * 海外代发相关
 * @package AliCrossopen\functions\overseas
 */
class Overseas extends  BaseClient{

	/**
	 * 订单列表查看(卖家视角)
	 * @param \AliCrossopen\entity\overseas\SellerOrderListParams $sellerOrderListParams
	 * @return $this
	 */
	public function getSellerOrderList( SellerOrderListParams $sellerOrderListParams){
		$this->app->params = $sellerOrderListParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.getSellerOrderList-1';
		return $this;
	}

	/**
	 * 物流发货-自己联系物流发货
	 * @param \AliCrossopen\entity\overseas\OpDeliverySendOrderParams $opDeliverySendOrderParams
	 * @return $this
	 */
	public function sendOpDeliveryOrder( OpDeliverySendOrderParams $opDeliverySendOrderParams){
		$this->app->params = $opDeliverySendOrderParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.OpDeliverySendOrder.offline-1';
		return $this;
	}

	/**
	 * 订单详情查看(卖家视角)
	 * @param \AliCrossopen\entity\overseas\SellerDetailViewParams $sellerDetailViewParams
	 * @return $this
	 */
	public function getSellerView(SellerDetailViewParams $sellerDetailViewParams){
		$this->app->params = $sellerDetailViewParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.get.sellerView-1';
		return $this;
	}

	/**
	 * 物流发货-无需物流
	 * @param \AliCrossopen\entity\overseas\OpDeliverySendOrderParams $opDeliverySendOrderParams
	 * @return $this
	 */
	public function sendOpDeliveryOrderDummy( OpDeliverySendOrderParams $opDeliverySendOrderParams){
		$this->app->params = $opDeliverySendOrderParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.OpDeliverySendOrder.dummy-1';
		return $this;
	}

	/**
	 * 根据状态查询商品
	 * @param \AliCrossopen\entity\overseas\ProductQueryByStatusParams $productQueryByStatusParams
	 * @return $this
	 */
	public function getProductByStatus( ProductQueryByStatusParams $productQueryByStatusParams){
		$this->app->params = $productQueryByStatusParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.getByStatus-1';
		return $this;
	}


}