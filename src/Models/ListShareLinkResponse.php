<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Aliyun\PDS\SDK\Models;

use AlibabaCloud\Tea\Model;

use Aliyun\PDS\SDK\Models\BaseShareLinkResponse;

/**
 * list_share_link response
 */
class ListShareLinkResponse extends Model {
    protected $_name = [
        'items' => 'items',
        'nextMarker' => 'next_marker',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if(null !== $this->items && is_array($this->items)){
                $n = 0;
                foreach($this->items as $item){
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListShareLinkResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['items'])){
            if(!empty($map['items'])){
                $model->items = [];
                $n = 0;
                foreach($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? BaseShareLinkResponse::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['next_marker'])){
            $model->nextMarker = $map['next_marker'];
        }
        return $model;
    }
    /**
     * @description items
     * @example 
     * @var BaseShareLinkResponse[]
     */
    public $items;

    /**
     * @description next_marker
     * @var string
     */
    public $nextMarker;

}
