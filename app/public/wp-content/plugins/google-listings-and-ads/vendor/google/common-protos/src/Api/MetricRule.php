<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/quota.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Bind API methods to metrics. Binding a method to a metric causes that
 * metric's configured quota behaviors to apply to the method call.
 *
 * Generated from protobuf message <code>google.api.MetricRule</code>
 */
class MetricRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax
     * details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    protected $selector = '';
    /**
     * Metrics to update when the selected methods are called, and the associated
     * cost applied to each metric.
     * The key of the map is the metric name, and the values are the amount
     * increased for the metric against which the quota limits are defined.
     * The value must not be negative.
     *
     * Generated from protobuf field <code>map<string, int64> metric_costs = 2;</code>
     */
    private $metric_costs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $selector
     *           Selects the methods to which this rule applies.
     *           Refer to [selector][google.api.DocumentationRule.selector] for syntax
     *           details.
     *     @type array|\Google\Protobuf\Internal\MapField $metric_costs
     *           Metrics to update when the selected methods are called, and the associated
     *           cost applied to each metric.
     *           The key of the map is the metric name, and the values are the amount
     *           increased for the metric against which the quota limits are defined.
     *           The value must not be negative.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Quota::initOnce();
        parent::__construct($data);
    }

    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax
     * details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax
     * details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;

        return $this;
    }

    /**
     * Metrics to update when the selected methods are called, and the associated
     * cost applied to each metric.
     * The key of the map is the metric name, and the values are the amount
     * increased for the metric against which the quota limits are defined.
     * The value must not be negative.
     *
     * Generated from protobuf field <code>map<string, int64> metric_costs = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetricCosts()
    {
        return $this->metric_costs;
    }

    /**
     * Metrics to update when the selected methods are called, and the associated
     * cost applied to each metric.
     * The key of the map is the metric name, and the values are the amount
     * increased for the metric against which the quota limits are defined.
     * The value must not be negative.
     *
     * Generated from protobuf field <code>map<string, int64> metric_costs = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetricCosts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->metric_costs = $arr;

        return $this;
    }

}

