<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class UpdateVerifySettingResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string[]
     */
    public $stepList;
    protected $_name = [
        'requestId' => 'RequestId',
        'bizType'   => 'BizType',
        'bizName'   => 'BizName',
        'solution'  => 'Solution',
        'stepList'  => 'StepList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('bizName', $this->bizName, true);
        Model::validateRequired('solution', $this->solution, true);
        Model::validateRequired('stepList', $this->stepList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->stepList) {
            $res['StepList'] = $this->stepList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVerifySettingResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['StepList'])) {
            if (!empty($map['StepList'])) {
                $model->stepList = $map['StepList'];
            }
        }

        return $model;
    }
}
