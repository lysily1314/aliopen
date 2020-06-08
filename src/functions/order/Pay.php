<?php
namespace AliCrossopen\functions\order;

use AliCrossopen\core\BaseClient;
use AliCrossopen\entity\order\{
	QueryPayWayParams,
	BuildAliPayUrlParams
};

/**
 * 支付相关模块
 * @package AliCrossopen\functions\order
 */
class Pay extends  BaseClient{

	/**
	 * 查询订单可以支持的支付渠道
	 * 查询未支付订单可以使用的支付方式或者支付渠道
	 * @param \AliCrossopen\entity\order\QueryPayWayParams $queryPayWayParams
	 * @return $this
	 */
	public function getPayWays( QueryPayWayParams $queryPayWayParams){
		$this->app->params = $queryPayWayParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.payWay.query-1';
		return $this;
	}

	/**
	 * 批量获取订单的支付链接
	 * 通过ERP付款时，可以通过本API获取批量支付的收银台的链接。 单个订单返回1688收银台地址，多个订单返回支付宝收银台地址。 ERP可以引导用户跳转到收银台链接完成支付动作，支付前会校验用户在1688的登陆状态。
	 * @param \AliCrossopen\entity\order\BuildAliPayUrlParams $buildAliPayUrlParams
	 * @return $this
	 */
	public function getAliPayUrl(BuildAliPayUrlParams $buildAliPayUrlParams){
		$this->app->params = $buildAliPayUrlParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.alipay.url.get-1';
		return $this;
	}

	/**
	 * 获取使用跨境宝支付的支付链接
	 * @param \AliCrossopen\entity\order\BuildAliPayUrlParams $buildAliPayUrlParams
	 * @return $this
	 */
	public function getCrossBorderPayUrl(BuildAliPayUrlParams $buildAliPayUrlParams){
		$this->app->params = $buildAliPayUrlParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.crossBorderPay.url.get-1';
		return $this;
	}

}