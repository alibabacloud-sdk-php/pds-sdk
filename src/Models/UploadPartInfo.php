<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\PDS\SDK\Models;

use AlibabaCloud\Tea\Model;

class UploadPartInfo extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @description etag
     *
     * @example 0CC175B9C0F1B6A831C399E269772661
     *
     * @var string
     */
    public $etag;

    /**
     * @description PartNumber
     *
     * @example 1
     *
     * @var int
     */
    public $partNumber;

    /**
     * @description PartSize：
     *
     * @example 1024
     *
     * @var int
     */
    public $partSize;

    /**
     * @description upload_url
     *
     * @example https://ccp.data.aliyuncs.com/xxx/xxx?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx&partNumber=1&uploadId=0CC175B9C0F1B6A831C399E269772661
     *
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'contentType' => 'content_type',
        'etag'        => 'etag',
        'partNumber'  => 'part_number',
        'partSize'    => 'part_size',
        'uploadUrl'   => 'upload_url',
    ];

    public function validate()
    {
        Model::validateMaximum('partNumber', $this->partNumber, 10000);
        Model::validateMaximum('partSize', $this->partSize, 5368709120);
        Model::validateMinimum('partNumber', $this->partNumber, 1);
        Model::validateMinimum('partSize', $this->partSize, 102400);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }
        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }
        if (null !== $this->partNumber) {
            $res['part_number'] = $this->partNumber;
        }
        if (null !== $this->partSize) {
            $res['part_size'] = $this->partSize;
        }
        if (null !== $this->uploadUrl) {
            $res['upload_url'] = $this->uploadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadPartInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }
        if (isset($map['etag'])) {
            $model->etag = $map['etag'];
        }
        if (isset($map['part_number'])) {
            $model->partNumber = $map['part_number'];
        }
        if (isset($map['part_size'])) {
            $model->partSize = $map['part_size'];
        }
        if (isset($map['upload_url'])) {
            $model->uploadUrl = $map['upload_url'];
        }

        return $model;
    }
}
