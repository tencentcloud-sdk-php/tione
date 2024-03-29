<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 出参类型
 *
 * @method string getBatchTaskId() 获取批量预测任务ID
 * @method void setBatchTaskId(string $BatchTaskId) 设置批量预测任务ID
 * @method string getBatchTaskName() 获取批量预测任务名称
 * @method void setBatchTaskName(string $BatchTaskName) 设置批量预测任务名称
 * @method ModelInfo getModelInfo() 获取模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelInfo(ModelInfo $ModelInfo) 设置模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getImageInfo() 获取镜像信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息
 * @method string getChargeType() 获取计费模式
 * @method void setChargeType(string $ChargeType) 设置计费模式
 * @method string getChargeStatus() 获取计费状态，取值范围:
BILLING: 计费中
NOT_BILLING: 未计费
WHITELIST_USING: 白名单使用中
WHITELIST_STOP: 白名单到期
ARREARS_STOP: 欠费停止
 * @method void setChargeStatus(string $ChargeStatus) 设置计费状态，取值范围:
BILLING: 计费中
NOT_BILLING: 未计费
WHITELIST_USING: 白名单使用中
WHITELIST_STOP: 白名单到期
ARREARS_STOP: 欠费停止
 * @method string getResourceGroupId() 获取包年包月资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置包年包月资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceConfigInfo getResourceConfigInfo() 获取资源配置
 * @method void setResourceConfigInfo(ResourceConfigInfo $ResourceConfigInfo) 设置资源配置
 * @method array getTags() 获取标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态, 取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
 * @method void setStatus(string $Status) 设置任务状态, 取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
 * @method integer getRuntimeInSeconds() 获取运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getStartTime() 获取任务开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutputs() 获取输出
 * @method void setOutputs(array $Outputs) 设置输出
 * @method string getResourceGroupName() 获取包年包月资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置包年包月资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取失败原因
 * @method void setFailureReason(string $FailureReason) 设置失败原因
 * @method string getBillingInfo() 获取按量计费信息
 * @method void setBillingInfo(string $BillingInfo) 设置按量计费信息
 */
class BatchTaskSetItem extends AbstractModel
{
    /**
     * @var string 批量预测任务ID
     */
    public $BatchTaskId;

    /**
     * @var string 批量预测任务名称
     */
    public $BatchTaskName;

    /**
     * @var ModelInfo 模型信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelInfo;

    /**
     * @var ImageInfo 镜像信息
     */
    public $ImageInfo;

    /**
     * @var string 计费模式
     */
    public $ChargeType;

    /**
     * @var string 计费状态，取值范围:
BILLING: 计费中
NOT_BILLING: 未计费
WHITELIST_USING: 白名单使用中
WHITELIST_STOP: 白名单到期
ARREARS_STOP: 欠费停止
     */
    public $ChargeStatus;

    /**
     * @var string 包年包月资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var ResourceConfigInfo 资源配置
     */
    public $ResourceConfigInfo;

    /**
     * @var array 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 任务状态, 取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
     */
    public $Status;

    /**
     * @var integer 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 输出
     */
    public $Outputs;

    /**
     * @var string 包年包月资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string 失败原因
     */
    public $FailureReason;

    /**
     * @var string 按量计费信息
     */
    public $BillingInfo;

    /**
     * @param string $BatchTaskId 批量预测任务ID
     * @param string $BatchTaskName 批量预测任务名称
     * @param ModelInfo $ModelInfo 模型信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ImageInfo 镜像信息
     * @param string $ChargeType 计费模式
     * @param string $ChargeStatus 计费状态，取值范围:
BILLING: 计费中
NOT_BILLING: 未计费
WHITELIST_USING: 白名单使用中
WHITELIST_STOP: 白名单到期
ARREARS_STOP: 欠费停止
     * @param string $ResourceGroupId 包年包月资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceConfigInfo $ResourceConfigInfo 资源配置
     * @param array $Tags 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态, 取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
     * @param integer $RuntimeInSeconds 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间
     * @param string $StartTime 任务开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Outputs 输出
     * @param string $ResourceGroupName 包年包月资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason 失败原因
     * @param string $BillingInfo 按量计费信息
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BatchTaskId",$param) and $param["BatchTaskId"] !== null) {
            $this->BatchTaskId = $param["BatchTaskId"];
        }

        if (array_key_exists("BatchTaskName",$param) and $param["BatchTaskName"] !== null) {
            $this->BatchTaskName = $param["BatchTaskName"];
        }

        if (array_key_exists("ModelInfo",$param) and $param["ModelInfo"] !== null) {
            $this->ModelInfo = new ModelInfo();
            $this->ModelInfo->deserialize($param["ModelInfo"]);
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceConfigInfo",$param) and $param["ResourceConfigInfo"] !== null) {
            $this->ResourceConfigInfo = new ResourceConfigInfo();
            $this->ResourceConfigInfo->deserialize($param["ResourceConfigInfo"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuntimeInSeconds",$param) and $param["RuntimeInSeconds"] !== null) {
            $this->RuntimeInSeconds = $param["RuntimeInSeconds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }
    }
}
