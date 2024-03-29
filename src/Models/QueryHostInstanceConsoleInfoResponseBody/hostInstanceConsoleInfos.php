<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody;

use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody\hostInstanceConsoleInfos\perfInfo;
use AlibabaCloud\Tea\Model;

class hostInstanceConsoleInfos extends Model
{
    /**
     * @description The number of CPU cores of the instance.
     *
     * @example 8
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @description The maximum number of CPU cores of the instance.
     *
     * @example 16
     *
     * @var int
     */
    public $cpuIncreaseRatioValue;

    /**
     * @description The description of the instance.
     *
     * @example rm-bp1m5z8002gyj****
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID.
     *
     * @example rm-bp1m5z8002gyj****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * @example 500
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The database engine of the instance.
     *
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 5.8
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The IP address of the host on which the instance is deployed.
     *
     * @example 172.22.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The instance type of the instance.
     *
     * @example mysql.z2.medium.2
     *
     * @var string
     */
    public $levelName;

    /**
     * @description The maximum number of connections to the instance.
     *
     * @example 1300
     *
     * @var int
     */
    public $maxConnIncreaseRatioValue;

    /**
     * @description The memory size of the instance. Unit: GB.
     *
     * @example 16
     *
     * @var int
     */
    public $memSize;

    /**
     * @description The maximum memory size of the instance.
     *
     * @example 64
     *
     * @var int
     */
    public $memoryIncreaseRatioValue;

    /**
     * @description The performance information of the host on which the instance is deployed.
     *
     * @var perfInfo
     */
    public $perfInfo;

    /**
     * @description The port number of the host.
     *
     * @example 3443
     *
     * @var string
     */
    public $port;

    /**
     * @description The role of the instance.
     *
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description The state of the instance.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cpuCores'                  => 'CpuCores',
        'cpuIncreaseRatioValue'     => 'CpuIncreaseRatioValue',
        'DBInstanceDescription'     => 'DBInstanceDescription',
        'DBInstanceId'              => 'DBInstanceId',
        'diskSize'                  => 'DiskSize',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'ip'                        => 'Ip',
        'levelName'                 => 'LevelName',
        'maxConnIncreaseRatioValue' => 'MaxConnIncreaseRatioValue',
        'memSize'                   => 'MemSize',
        'memoryIncreaseRatioValue'  => 'MemoryIncreaseRatioValue',
        'perfInfo'                  => 'PerfInfo',
        'port'                      => 'Port',
        'role'                      => 'Role',
        'status'                    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->cpuIncreaseRatioValue) {
            $res['CpuIncreaseRatioValue'] = $this->cpuIncreaseRatioValue;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }
        if (null !== $this->maxConnIncreaseRatioValue) {
            $res['MaxConnIncreaseRatioValue'] = $this->maxConnIncreaseRatioValue;
        }
        if (null !== $this->memSize) {
            $res['MemSize'] = $this->memSize;
        }
        if (null !== $this->memoryIncreaseRatioValue) {
            $res['MemoryIncreaseRatioValue'] = $this->memoryIncreaseRatioValue;
        }
        if (null !== $this->perfInfo) {
            $res['PerfInfo'] = null !== $this->perfInfo ? $this->perfInfo->toMap() : null;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostInstanceConsoleInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['CpuIncreaseRatioValue'])) {
            $model->cpuIncreaseRatioValue = $map['CpuIncreaseRatioValue'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }
        if (isset($map['MaxConnIncreaseRatioValue'])) {
            $model->maxConnIncreaseRatioValue = $map['MaxConnIncreaseRatioValue'];
        }
        if (isset($map['MemSize'])) {
            $model->memSize = $map['MemSize'];
        }
        if (isset($map['MemoryIncreaseRatioValue'])) {
            $model->memoryIncreaseRatioValue = $map['MemoryIncreaseRatioValue'];
        }
        if (isset($map['PerfInfo'])) {
            $model->perfInfo = perfInfo::fromMap($map['PerfInfo']);
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
