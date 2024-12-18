<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ak_66d0b62c20644717870b45e5087b8007\Models;

use AlibabaCloud\Tea\Model;

class QueryAntcloudBxptnewDatapromotionDecisionResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 用户ID
    /**
     * @var string
     */
    public $uid;

    // 营销状态
    /**
     * @var string
     */
    public $promotionStatus;

    // 业务出参JSON字符串
    /**
     * @var string
     */
    public $bizResult;
    protected $_name = [
        'reqMsgId'        => 'req_msg_id',
        'resultCode'      => 'result_code',
        'resultMsg'       => 'result_msg',
        'uid'             => 'uid',
        'promotionStatus' => 'promotion_status',
        'bizResult'       => 'biz_result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->promotionStatus) {
            $res['promotion_status'] = $this->promotionStatus;
        }
        if (null !== $this->bizResult) {
            $res['biz_result'] = $this->bizResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAntcloudBxptnewDatapromotionDecisionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['promotion_status'])) {
            $model->promotionStatus = $map['promotion_status'];
        }
        if (isset($map['biz_result'])) {
            $model->bizResult = $map['biz_result'];
        }

        return $model;
    }
}
