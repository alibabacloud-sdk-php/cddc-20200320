<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class RDSRegion extends Model
{
    /**
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'regionId' => 'RegionId',
        'zoneId'   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RDSRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
