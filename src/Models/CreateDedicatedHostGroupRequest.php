<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostGroupRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @var int
     */
    public $memAllocationRatio;

    /**
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @var string
     */
    public $allocationPolicy;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $openPermission;

    /**
     * @var string
     */
    public $dedicatedHostGroupDesc;
    protected $_name = [
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'regionId'               => 'RegionId',
        'engine'                 => 'Engine',
        'cpuAllocationRatio'     => 'CpuAllocationRatio',
        'memAllocationRatio'     => 'MemAllocationRatio',
        'diskAllocationRatio'    => 'DiskAllocationRatio',
        'allocationPolicy'       => 'AllocationPolicy',
        'VPCId'                  => 'VPCId',
        'hostReplacePolicy'      => 'HostReplacePolicy',
        'clientToken'            => 'ClientToken',
        'openPermission'         => 'OpenPermission',
        'dedicatedHostGroupDesc' => 'DedicatedHostGroupDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->cpuAllocationRatio) {
            $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->allocationPolicy) {
            $res['AllocationPolicy'] = $this->allocationPolicy;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->hostReplacePolicy) {
            $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedHostGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['CpuAllocationRatio'])) {
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['AllocationPolicy'])) {
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['HostReplacePolicy'])) {
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }

        return $model;
    }
}
