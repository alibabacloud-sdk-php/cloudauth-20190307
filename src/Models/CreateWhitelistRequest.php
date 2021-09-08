<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateWhitelistRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $idCardNum;

    /**
     * @var string
     */
    public $validDay;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'lang'      => 'Lang',
        'bizType'   => 'BizType',
        'bizId'     => 'BizId',
        'idCardNum' => 'IdCardNum',
        'validDay'  => 'ValidDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->idCardNum) {
            $res['IdCardNum'] = $this->idCardNum;
        }
        if (null !== $this->validDay) {
            $res['ValidDay'] = $this->validDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['IdCardNum'])) {
            $model->idCardNum = $map['IdCardNum'];
        }
        if (isset($map['ValidDay'])) {
            $model->validDay = $map['ValidDay'];
        }

        return $model;
    }
}
