<?php
namespace AliCrossopen\functions\other;

use AliCrossopen\core\BaseClient;
use AliCrossopen\entity\other\AccountAgentBasicParams;
use AliCrossopen\entity\other\LogisticsTemplateListParams;
use AliCrossopen\entity\other\RelationQuerySuppliersParams;
use AliCrossopen\entity\other\ConvertLoginIdsByMemberIdsParams;
use AliCrossopen\entity\other\AddressCodeParseParams;
use AliCrossopen\entity\other\OrderAddFeedbackParams;
use AliCrossopen\entity\other\CursorMessageListParams;
use AliCrossopen\entity\other\PushFailMessageConfirm;
use AliCrossopen\entity\other\QueryFailMessageListParams;
use AliCrossopen\entity\other\QueryMarketingMixConfigParams;

/**
 * 其他模块
 * @package AliCrossopen\functions\other
 */
class Other extends  BaseClient{

	/**
	 * 获取非授权用户的基本信息
	 * @param AccountAgentBasicParams $accountAgentBasicParams
	 * @return $this
	 */
	public function getAccountAgentBasic(AccountAgentBasicParams $accountAgentBasicParams){
		$this->app->params = $accountAgentBasicParams->build();
		$this->url_info    = 'com.alibaba.account:alibaba.account.agent.basic-1';
		return $this;
	}

	/**
	 * 获取物流模板详情
	 * @param LogisticsTemplateListParams $logisticsTemplateListParams
	 * @return $this
	 */
	public function getLogisticsTemplate( LogisticsTemplateListParams $logisticsTemplateListParams){
		$this->app->params = $logisticsTemplateListParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.myFreightTemplate.list.get-1';
		return $this;
	}

	/**
	 * 【关系】分销商-查询供应商列表
	 * @param RelationQuerySuppliersParams $relationQuerySuppliersParams
	 * @return $this
	 */
	public function getSuppliersRelation(RelationQuerySuppliersParams $relationQuerySuppliersParams){
		$this->app->params = $relationQuerySuppliersParams->build();
		$this->url_info    = 'cn.alibaba.open:alibaba.relation.querySuppliers-1';
		return $this;
	}

	/**
	 * 批量转换memberId到loginId
	 * @param ConvertLoginIdsByMemberIdsParams $convertLoginIdsByMemberIdsParams
	 * @return $this
	 */
	public function convertLoginIdsByMemberIds( ConvertLoginIdsByMemberIdsParams $convertLoginIdsByMemberIdsParams){
		$this->app->params = $convertLoginIdsByMemberIdsParams->build();
		$this->url_info    = 'cn.alibaba.open:convertLoginIdsByMemberIds-1';
		return $this;
	}

	/**
	 * 买家获取保存的收货地址信息列表
	 * @return $this
	 */
	public function getReceiveAddressList(){
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.receiveAddress.get-1';
		return $this;
	}

	/**
	 * 根据地址解析地区码
	 * @param AddressCodeParseParams $addressCodeParseParams
	 * @return $this
	 */
	public function parseAddressCode( AddressCodeParseParams $addressCodeParseParams){
		$this->app->params = $addressCodeParseParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.addresscode.parse-1';
		return $this;
	}

	/**
	 * 获取子账号列表
	 * @return $this
	 */
	public function getSubAccountList(){
		$this->url_info    = 'com.alibaba.account:alibaba.subAccount.list-1';
		return $this;
	}

	/**
	 * 买家补充订单留言接口
	 * @param OrderAddFeedbackParams $orderAddFeedbackParams
	 * @return $this
	 */
	public function addOrderFeedback( OrderAddFeedbackParams $orderAddFeedbackParams){
		$this->app->params = $orderAddFeedbackParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.addFeedback-1';
		return $this;
	}

	/**
	 * 游标式获取失败的消息列表
	 * @param CursorMessageListParams $cursorMessageListParams
	 * @return $this
	 */
	public function getCursorMessageList( CursorMessageListParams $cursorMessageListParams){
		$this->app->params = $cursorMessageListParams->build();
		$this->url_info    = 'cn.alibaba.open:push.cursor.messageList-1';
		return $this;
	}

	/**
	 * 失败消息批量确认
	 * @param PushFailMessageConfirm $pushFailMessageConfirm
	 * @return $this
	 */
	public function confirmPushFailMessage( PushFailMessageConfirm $pushFailMessageConfirm){
		$this->app->params = $pushFailMessageConfirm->build();
		$this->url_info    = 'cn.alibaba.open:push.message.confirm-1';
		return $this;
	}

	/**
	 * 查询式获取失败的消息列表
	 * @param QueryFailMessageListParams $queryFailMessageListParams
	 * @return $this
	 */
	public function queryFailMessageList( QueryFailMessageListParams $queryFailMessageListParams){
		$this->app->params = $queryFailMessageListParams->build();
		$this->url_info    = 'cn.alibaba.open:push.query.messageList-1';
		return $this;
	}

	/**
	 * 跨境场景获取非授权用户的基本信息
	 * @param AccountAgentBasicParams $accountAgentBasicParams
	 * @return $this
	 */
	public function getAccountAgentCrossBasic(AccountAgentBasicParams $accountAgentBasicParams){
		$this->app->params = $accountAgentBasicParams->build();
		$this->url_info    = 'com.alibaba.account:alibaba.account.agent.crossBasic-1';
		return $this;
	}

	/**
	 * 查询卖家混批设置
	 * @param QueryMarketingMixConfigParams $queryMarketingMixConfigParams
	 * @return $this
	 */
	public function queryMarketingMixConfig( QueryMarketingMixConfigParams $queryMarketingMixConfigParams){
		$this->app->params = $queryMarketingMixConfigParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.OpQueryMarketingMixConfig-1';
		return $this;
	}


}
