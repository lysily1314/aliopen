<?php
namespace AliCrossopen\functions\order;

use AliCrossopen\core\BaseClient;
use AliCrossopen\entity\order\{
	QueryRefundByOrderIdParams,
	QueryOrderRefundOperationListParams,
	QueryOrderRefundParams,
	QueryOrderRefundListParams,
	CreateRefundParams,
	RefundReasonListParams,
	ReturnGoodsParams,
	UploadRefundVoucherParams
};
/**
 * 退货模块
 * @package AliCrossopen\functions\order
 */
class Refund extends BaseClient
{

	/**
	 * 查询退款单详情-根据订单ID
	 * @param \AliCrossopen\entity\order\QueryRefundByOrderIdParams $queryRefundByOrderIdParams
	 * @return $this
	 */
	public function queryRefundByOrderId(QueryRefundByOrderIdParams $queryRefundByOrderIdParams){
		$this->app->params = $queryRefundByOrderIdParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.OpQueryBatchRefundByOrderIdAndStatus-1';
		return $this;
	}


	/**
	 * 退款单操作记录列表-买卖双方退款操作记录
	 * @param QueryOrderRefundOperationListParams $queryOrderRefundOperationListParams
	 * @return $this
	 */
	public function queryOrderRefundOperationList(QueryOrderRefundOperationListParams $queryOrderRefundOperationListParams)
	{
		$this->app->params = $queryOrderRefundOperationListParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.OpQueryOrderRefundOperationList-1';
		return $this;
	}

	/**
	 * 查询退款单详情-根据退款单ID
	 *
	 * @param QueryOrderRefundParams $queryOrderRefundParams
	 * @return $this
	 */
	public function queryOrderRefund(QueryOrderRefundParams $queryOrderRefundParams)
	{
		$this->app->params = $queryOrderRefundParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.OpQueryOrderRefund-1';
		return $this;
	}

	/**
	 * 查询退款单列表(买家视角)
	 * 买家查看退款单列表，该接口不支持子账号查询，请使用主账号授权后查询
	 * @param \AliCrossopen\entity\order\QueryOrderRefundListParams $queryOrderRefundListParams
	 * @return $this
	 */
	public function queryOrderRefundList( QueryOrderRefundListParams $queryOrderRefundListParams){
		$this->app->params = $queryOrderRefundListParams->build();
		$this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.buyer.queryOrderRefundList-1';
		return $this;
	}


    /**
     * 创建退款退货申请
     * @param CreateRefundParams $createRefundParams
     * @return $this
     */
    public function createRefund(CreateRefundParams $createRefundParams)
    {
        $this->app->params = $createRefundParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.createRefund-1';
        return $this;
    }

    /**
     * 查询退款退货原因（用于创建退款退货）
     * @param RefundReasonListParams $refundReasonListParams
     * @return $this
     */
    public function getRefundReasonList(RefundReasonListParams $refundReasonListParams)
    {
        $this->app->params = $refundReasonListParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.getRefundReasonList-1';
        return $this;
    }

    /**
     * 上传退款退货凭证
     * @param UploadRefundVoucherParams $uploadRefundVoucherParams
     * @return $this
     */
    public function uploadRefundVoucher(UploadRefundVoucherParams $uploadRefundVoucherParams)
    {
        $this->app->params = $uploadRefundVoucherParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.uploadRefundVoucher-1';
        return $this;
    }

    /**
     * 买家提交退款货信息
     *
     * @param ReturnGoodsParams $returnGoodsParams
     * @return $this
     */
    public function returnGoods(ReturnGoodsParams $returnGoodsParams)
    {
        $this->app->params = $returnGoodsParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.returnGoods-1';
        return $this;
    }

}