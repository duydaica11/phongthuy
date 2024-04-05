<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/batch_job.proto

namespace Google\Ads\GoogleAds\V14\Resources\BatchJob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information about the batch job. This message is also used as
 * metadata returned in batch job Long Running Operations.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.BatchJob.BatchJobMetadata</code>
 */
class BatchJobMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time when this batch job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>optional string creation_date_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creation_date_time = null;
    /**
     * Output only. The time when this batch job started running.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:30"
     *
     * Generated from protobuf field <code>optional string start_date_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_date_time = null;
    /**
     * Output only. The time when this batch job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>optional string completion_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $completion_date_time = null;
    /**
     * Output only. The fraction (between 0.0 and 1.0) of mutates that have been
     * processed. This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>optional double estimated_completion_ratio = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $estimated_completion_ratio = null;
    /**
     * Output only. The number of mutate operations in the batch job.
     *
     * Generated from protobuf field <code>optional int64 operation_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $operation_count = null;
    /**
     * Output only. The number of mutate operations executed by the batch job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>optional int64 executed_operation_count = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $executed_operation_count = null;
    /**
     * Immutable. The approximate upper bound for how long a batch job can be
     * executed, in seconds. If the job runs more than the given upper bound,
     * the job will be canceled.
     *
     * Generated from protobuf field <code>optional int32 execution_limit_seconds = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $execution_limit_seconds = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_date_time
     *           Output only. The time when this batch job was created.
     *           Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *     @type string $start_date_time
     *           Output only. The time when this batch job started running.
     *           Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:30"
     *     @type string $completion_date_time
     *           Output only. The time when this batch job was completed.
     *           Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *     @type float $estimated_completion_ratio
     *           Output only. The fraction (between 0.0 and 1.0) of mutates that have been
     *           processed. This is empty if the job hasn't started running yet.
     *     @type int|string $operation_count
     *           Output only. The number of mutate operations in the batch job.
     *     @type int|string $executed_operation_count
     *           Output only. The number of mutate operations executed by the batch job.
     *           Present only if the job has started running.
     *     @type int $execution_limit_seconds
     *           Immutable. The approximate upper bound for how long a batch job can be
     *           executed, in seconds. If the job runs more than the given upper bound,
     *           the job will be canceled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\BatchJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The time when this batch job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>optional string creation_date_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCreationDateTime()
    {
        return isset($this->creation_date_time) ? $this->creation_date_time : '';
    }

    public function hasCreationDateTime()
    {
        return isset($this->creation_date_time);
    }

    public function clearCreationDateTime()
    {
        unset($this->creation_date_time);
    }

    /**
     * Output only. The time when this batch job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>optional string creation_date_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCreationDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_date_time = $var;

        return $this;
    }

    /**
     * Output only. The time when this batch job started running.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:30"
     *
     * Generated from protobuf field <code>optional string start_date_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStartDateTime()
    {
        return isset($this->start_date_time) ? $this->start_date_time : '';
    }

    public function hasStartDateTime()
    {
        return isset($this->start_date_time);
    }

    public function clearStartDateTime()
    {
        unset($this->start_date_time);
    }

    /**
     * Output only. The time when this batch job started running.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:30"
     *
     * Generated from protobuf field <code>optional string start_date_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Output only. The time when this batch job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>optional string completion_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCompletionDateTime()
    {
        return isset($this->completion_date_time) ? $this->completion_date_time : '';
    }

    public function hasCompletionDateTime()
    {
        return isset($this->completion_date_time);
    }

    public function clearCompletionDateTime()
    {
        unset($this->completion_date_time);
    }

    /**
     * Output only. The time when this batch job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>optional string completion_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCompletionDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->completion_date_time = $var;

        return $this;
    }

    /**
     * Output only. The fraction (between 0.0 and 1.0) of mutates that have been
     * processed. This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>optional double estimated_completion_ratio = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getEstimatedCompletionRatio()
    {
        return isset($this->estimated_completion_ratio) ? $this->estimated_completion_ratio : 0.0;
    }

    public function hasEstimatedCompletionRatio()
    {
        return isset($this->estimated_completion_ratio);
    }

    public function clearEstimatedCompletionRatio()
    {
        unset($this->estimated_completion_ratio);
    }

    /**
     * Output only. The fraction (between 0.0 and 1.0) of mutates that have been
     * processed. This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>optional double estimated_completion_ratio = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setEstimatedCompletionRatio($var)
    {
        GPBUtil::checkDouble($var);
        $this->estimated_completion_ratio = $var;

        return $this;
    }

    /**
     * Output only. The number of mutate operations in the batch job.
     *
     * Generated from protobuf field <code>optional int64 operation_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getOperationCount()
    {
        return isset($this->operation_count) ? $this->operation_count : 0;
    }

    public function hasOperationCount()
    {
        return isset($this->operation_count);
    }

    public function clearOperationCount()
    {
        unset($this->operation_count);
    }

    /**
     * Output only. The number of mutate operations in the batch job.
     *
     * Generated from protobuf field <code>optional int64 operation_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOperationCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->operation_count = $var;

        return $this;
    }

    /**
     * Output only. The number of mutate operations executed by the batch job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>optional int64 executed_operation_count = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getExecutedOperationCount()
    {
        return isset($this->executed_operation_count) ? $this->executed_operation_count : 0;
    }

    public function hasExecutedOperationCount()
    {
        return isset($this->executed_operation_count);
    }

    public function clearExecutedOperationCount()
    {
        unset($this->executed_operation_count);
    }

    /**
     * Output only. The number of mutate operations executed by the batch job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>optional int64 executed_operation_count = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExecutedOperationCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->executed_operation_count = $var;

        return $this;
    }

    /**
     * Immutable. The approximate upper bound for how long a batch job can be
     * executed, in seconds. If the job runs more than the given upper bound,
     * the job will be canceled.
     *
     * Generated from protobuf field <code>optional int32 execution_limit_seconds = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getExecutionLimitSeconds()
    {
        return isset($this->execution_limit_seconds) ? $this->execution_limit_seconds : 0;
    }

    public function hasExecutionLimitSeconds()
    {
        return isset($this->execution_limit_seconds);
    }

    public function clearExecutionLimitSeconds()
    {
        unset($this->execution_limit_seconds);
    }

    /**
     * Immutable. The approximate upper bound for how long a batch job can be
     * executed, in seconds. If the job runs more than the given upper bound,
     * the job will be canceled.
     *
     * Generated from protobuf field <code>optional int32 execution_limit_seconds = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setExecutionLimitSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->execution_limit_seconds = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchJobMetadata::class, \Google\Ads\GoogleAds\V14\Resources\BatchJob_BatchJobMetadata::class);

