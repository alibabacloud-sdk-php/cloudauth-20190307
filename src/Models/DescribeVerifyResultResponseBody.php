<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponseBody\material;
use AlibabaCloud\Tea\Model;

class DescribeVerifyResultResponseBody extends Model
{
    /**
     * @var float
     */
    public $authorityComparisionScore;

    /**
     * @var float
     */
    public $faceComparisonScore;

    /**
     * @var float
     */
    public $idCardFaceComparisonScore;

    /**
     * @var material
     */
    public $material;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $verifyStatus;
    protected $_name = [
        'authorityComparisionScore' => 'AuthorityComparisionScore',
        'faceComparisonScore'       => 'FaceComparisonScore',
        'idCardFaceComparisonScore' => 'IdCardFaceComparisonScore',
        'material'                  => 'Material',
        'requestId'                 => 'RequestId',
        'verifyStatus'              => 'VerifyStatus',
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
        if (null !== $this->faceComparisonScore) {
            $res['FaceComparisonScore'] = $this->faceComparisonScore;
        }
        if (null !== $this->idCardFaceComparisonScore) {
            $res['IdCardFaceComparisonScore'] = $this->idCardFaceComparisonScore;
        }
        if (null !== $this->material) {
            $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyStatus) {
            $res['VerifyStatus'] = $this->verifyStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityComparisionScore'])) {
            $model->authorityComparisionScore = $map['AuthorityComparisionScore'];
        }
        if (isset($map['FaceComparisonScore'])) {
            $model->faceComparisonScore = $map['FaceComparisonScore'];
        }
        if (isset($map['IdCardFaceComparisonScore'])) {
            $model->idCardFaceComparisonScore = $map['IdCardFaceComparisonScore'];
        }
        if (isset($map['Material'])) {
            $model->material = material::fromMap($map['Material']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyStatus'])) {
            $model->verifyStatus = $map['VerifyStatus'];
        }

        return $model;
    }
}
