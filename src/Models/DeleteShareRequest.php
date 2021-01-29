<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Aliyun\PDS\SDK\Models;

use AlibabaCloud\Tea\Model;

/**
 * delete share request
 */
class DeleteShareRequest extends Model {
    protected $_name = [
        'shareId' => 'share_id',
    ];
    public function validate() {
        Model::validateRequired('shareId', $this->shareId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteShareRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        if(isset($map['share_id'])){
            $model->shareId = $map['share_id'];
        }
        return $model;
    }
    public $headers;

    /**
     * @description share_id
     * @example 3d336314-63c8-4d96-bce0-17aefb6833b6
     * @var string
     */
    public $shareId;

}
