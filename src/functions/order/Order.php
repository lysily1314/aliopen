<?php

namespace AliCrossopen\functions\order;

use AliCrossopen\core\BaseClient;
use AliCrossopen\entity\order\{
	CrossCreateOrderParams,
	OrderDetailParams,
	CancelTradeParams,
	OrderListParams,
	PreviewCreateOrderParams,
	AddOrderMemoParams
};
/**
 * 订单模块[交易相关]
 * @package AliCrossopen\functions\order
 */
class Order extends BaseClient
{


	/**
	 * 跨境订单创建
	 * @param CrossCreateOrderParams $createOrderParams
	 * @return $this
	 */
	public function createCrossOrder( CrossCreateOrderParams $createOrderParams){
		$this->app->params = $createOrderParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.createCrossOrder-1';
		return $this;
	}

	/**
	 * 订单详情(买家视角)
	 * @param OrderDetailParams $orderDetailParams
	 * @return $this
	 */
	public function buyerOrderDetail(OrderDetailParams $orderDetailParams)
	{
		$this->app->params = $orderDetailParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.get.buyerView-1';
		return $this;
	}


	/**
	 * 取消交易
	 * @param CancelTradeParams $cancelTradeParams
	 * @return $this
	 */
	public function cancelTrade(CancelTradeParams $cancelTradeParams)
	{
		$this->app->params = $cancelTradeParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.cancel-1';
		return $this;
	}

	/**
	 * 订单列表查看(买家视角)
	 * @param OrderListParams $orderListParams
	 * @return $this
	 */
	public function buyerOrderList(OrderListParams $orderListParams)
	{
		$this->app->params = $orderListParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.getBuyerOrderList-1';
		return $this;
	}

	/**
	 * 创建订单前预览数据接口
	 * @param PreviewCreateOrderParams $previewCreateOrderParams
	 * @return $this
	 */
	public function previewCreateOrder( PreviewCreateOrderParams $previewCreateOrderParams){
		$this->app->params = $previewCreateOrderParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.createOrder.preview-1';
		return $this;
	}

	/**
	 * 修改订单备忘
	 * @param AddOrderMemoParams $addOrderMemoParams
	 * @return $this
	 */
	public function addOrderMemo( AddOrderMemoParams $addOrderMemoParams){
		$this->app->params = $addOrderMemoParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.order.memoAdd-1';
		return $this;
	}

}
