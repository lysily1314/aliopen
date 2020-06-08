<?php

namespace AliCrossopen\functions\product;

use AliCrossopen\core\BaseClient;
use AliCrossopen\entity\product\{
	CrossProductInfoParam,
	CrossProductListParam,
	CrossSyncProductListParams,
	CrossSyncPushProductResultParams,
	ProductFollowParams,
	ProductUnfollowParams
};

/**
 * 产品模块[铺货相关]
 * @package AliCrossopen\functions\product
 */
class Product extends BaseClient
{

	/**
	 * 跨境场景获取商品详情
	 * @param CrossProductInfoParam $crossProductInfoParam
	 * @return $this
	 */
	public function getCrossProductInfo( CrossProductInfoParam $crossProductInfoParam)
	{
		$this->app->params = $crossProductInfoParam->build();
		$this->url_info    = 'com.alibaba.product:alibaba.cross.productInfo-1';
		return $this;
	}

	/**
	 * 跨境场景下将商品加入铺货列表
	 * @param CrossSyncProductListParams $crossSyncProductListParams
	 * @return $this
	 */
	public function CrossSyncProductList( CrossSyncProductListParams $crossSyncProductListParams){
		$this->app->params = $crossSyncProductListParams->build();
		$this->url_info = 'com.alibaba.product.push:alibaba.cross.syncProductListPushed-1';
		return $this;
	}

	/**
	 * 同步铺货结果
	 * @param CrossSyncPushProductResultParams $crossSyncPushProductResultParams
	 * @return $this
	 */
	public function CrossSyncPushProductResult( CrossSyncPushProductResultParams $crossSyncPushProductResultParams){
		$this->app->params = $crossSyncPushProductResultParams->build();
		$this->url_info = 'com.alibaba.product.push:alibaba.product.push.syncPushProductResult-1';
		return $this;
	}

	/**
	 * 跨境场景获取商品列表
	 * @param CrossProductListParam $crossProductListParam
	 * @return $this
	 */
	public function getCrossProductList( CrossProductListParam $crossProductListParam){
		$this->app->params = $crossProductListParam->build();
		$this->url_info    = 'com.alibaba.product:alibaba.cross.productList-1';
		return $this;
	}

	/**
	 * 关注商品
	 * @param ProductFollowParams $productFollowParams
	 * @return $this
	 */
	public function productFollow(ProductFollowParams $productFollowParams)
	{
		$this->app->params = $productFollowParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.follow-1';
		return $this;
	}

	/**
	 * 解除关注商品
	 * @param ProductUnfollowParams $productUnfollowParams
	 * @return $this
	 */
	public function productUnfollow(ProductUnfollowParams $productUnfollowParams)
	{
		$this->app->params = $productUnfollowParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.unfollow.crossborder-1';
		return $this;
	}


}