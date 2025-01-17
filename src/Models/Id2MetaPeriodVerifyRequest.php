<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class Id2MetaPeriodVerifyRequest extends Model
{
    /**
     * @example 4****************1
     *
     * @var string
     */
    public $identifyNum;

    /**
     * @example normal
     *
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $userName;

    /**
     * @example 20301001
     *
     * @var string
     */
    public $validityEndDate;

    /**
     * @example 20201001
     *
     * @var string
     */
    public $validityStartDate;
    protected $_name = [
        'identifyNum'       => 'IdentifyNum',
        'paramType'         => 'ParamType',
        'userName'          => 'UserName',
        'validityEndDate'   => 'ValidityEndDate',
        'validityStartDate' => 'ValidityStartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->validityEndDate) {
            $res['ValidityEndDate'] = $this->validityEndDate;
        }
        if (null !== $this->validityStartDate) {
            $res['ValidityStartDate'] = $this->validityStartDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Id2MetaPeriodVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ValidityEndDate'])) {
            $model->validityEndDate = $map['ValidityEndDate'];
        }
        if (isset($map['ValidityStartDate'])) {
            $model->validityStartDate = $map['ValidityStartDate'];
        }

        return $model;
    }
}
