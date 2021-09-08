<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponseBody\material;
use AlibabaCloud\Tea\Model;

class VerifyMaterialResponseBody extends Model
{
    /**
     * @var float
     */
    public $authorityComparisionScore;

    /**
     * @var int
     */
    public $verifyStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $verifyToken;

    /**
     * @var float
     */
    public $idCardFaceComparisonScore;

    /**
     * @var material
     */
    public $material;
    protected $_name = [
        'authorityComparisionScore' => 'AuthorityComparisionScore',
        'verifyStatus'              => 'VerifyStatus',
        'requestId'                 => 'RequestId',
        'verifyToken'               => 'VerifyToken',
        'idCardFaceComparisonScore' => 'IdCardFaceComparisonScore',
        'material'                  => 'Material',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityComparisionScore) {
            $res['AuthorityComparisionScore'] = $this->authorityComparisionScore;
        }
        if (null !== $this->verifyStatus) {
            $res['VerifyStatus'] = $this->verifyStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyToken) {
            $res['VerifyToken'] = $this->verifyToken;
        }
        if (null !== $this->idCardFaceComparisonScore) {
            $res['IdCardFaceComparisonScore'] = $this->idCardFaceComparisonScore;
        }
        if (null !== $this->material) {
            $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyMaterialResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityComparisionScore'])) {
            $model->authorityComparisionScore = $map['AuthorityComparisionScore'];
        }
        if (isset($map['VerifyStatus'])) {
            $model->verifyStatus = $map['VerifyStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyToken'])) {
            $model->verifyToken = $map['VerifyToken'];
        }
        if (isset($map['IdCardFaceComparisonScore'])) {
            $model->idCardFaceComparisonScore = $map['IdCardFaceComparisonScore'];
        }
        if (isset($map['Material'])) {
            $model->material = material::fromMap($map['Material']);
        }

        return $model;
    }
}
