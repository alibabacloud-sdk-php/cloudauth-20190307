<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateWhitelistSettingResponseBody extends Model
{
    /**
     * @var bool
     */
    public $resultObject;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'resultObject' => 'ResultObject',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultObject) {
            $res['ResultObject'] = $this->resultObject;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWhitelistSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultObject'])) {
            $model->resultObject = $map['ResultObject'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
