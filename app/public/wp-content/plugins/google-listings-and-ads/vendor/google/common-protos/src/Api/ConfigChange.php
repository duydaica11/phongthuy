<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/config_change.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output generated from semantically comparing two versions of a service
 * configuration.
 * Includes detailed information about a field that have changed with
 * applicable advice about potential consequences for the change, such as
 * backwards-incompatibility.
 *
 * Generated from protobuf message <code>google.api.ConfigChange</code>
 */
class ConfigChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Object hierarchy path to the change, with levels separated by a '.'
     * character. For repeated fields, an applicable unique identifier field is
     * used for the index (usually selector, name, or id). For maps, the term
     * 'key' is used. If the field has no unique identifier, the numeric index
     * is used.
     * Examples:
     * - visibility.rules[selector=="google.LibraryService.ListBooks"].restriction
     * - quota.metric_rules[selector=="google"].metric_costs[key=="reads"].value
     * - logging.producer_destinations[0]
     *
     * Generated from protobuf field <code>string element = 1;</code>
     */
    protected $element = '';
    /**
     * Value of the changed object in the old Service configuration,
     * in JSON format. This field will not be populated if ChangeType == ADDED.
     *
     * Generated from protobuf field <code>string old_value = 2;</code>
     */
    protected $old_value = '';
    /**
     * Value of the changed object in the new Service configuration,
     * in JSON format. This field will not be populated if ChangeType == REMOVED.
     *
     * Generated from protobuf field <code>string new_value = 3;</code>
     */
    protected $new_value = '';
    /**
     * The type for this change, either ADDED, REMOVED, or MODIFIED.
     *
     * Generated from protobuf field <code>.google.api.ChangeType change_type = 4;</code>
     */
    protected $change_type = 0;
    /**
     * Collection of advice provided for this change, useful for determining the
     * possible impact of this change.
     *
     * Generated from protobuf field <code>repeated .google.api.Advice advices = 5;</code>
     */
    private $advices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $element
     *           Object hierarchy path to the change, with levels separated by a '.'
     *           character. For repeated fields, an applicable unique identifier field is
     *           used for the index (usually selector, name, or id). For maps, the term
     *           'key' is used. If the field has no unique identifier, the numeric index
     *           is used.
     *           Examples:
     *           - visibility.rules[selector=="google.LibraryService.ListBooks"].restriction
     *           - quota.metric_rules[selector=="google"].metric_costs[key=="reads"].value
     *           - logging.producer_destinations[0]
     *     @type string $old_value
     *           Value of the changed object in the old Service configuration,
     *           in JSON format. This field will not be populated if ChangeType == ADDED.
     *     @type string $new_value
     *           Value of the changed object in the new Service configuration,
     *           in JSON format. This field will not be populated if ChangeType == REMOVED.
     *     @type int $change_type
     *           The type for this change, either ADDED, REMOVED, or MODIFIED.
     *     @type array<\Google\Api\Advice>|\Google\Protobuf\Internal\RepeatedField $advices
     *           Collection of advice provided for this change, useful for determining the
     *           possible impact of this change.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\ConfigChange::initOnce();
        parent::__construct($data);
    }

    /**
     * Object hierarchy path to the change, with levels separated by a '.'
     * character. For repeated fields, an applicable unique identifier field is
     * used for the index (usually selector, name, or id). For maps, the term
     * 'key' is used. If the field has no unique identifier, the numeric index
     * is used.
     * Examples:
     * - visibility.rules[selector=="google.LibraryService.ListBooks"].restriction
     * - quota.metric_rules[selector=="google"].metric_costs[key=="reads"].value
     * - logging.producer_destinations[0]
     *
     * Generated from protobuf field <code>string element = 1;</code>
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Object hierarchy path to the change, with levels separated by a '.'
     * character. For repeated fields, an applicable unique identifier field is
     * used for the index (usually selector, name, or id). For maps, the term
     * 'key' is used. If the field has no unique identifier, the numeric index
     * is used.
     * Examples:
     * - visibility.rules[selector=="google.LibraryService.ListBooks"].restriction
     * - quota.metric_rules[selector=="google"].metric_costs[key=="reads"].value
     * - logging.producer_destinations[0]
     *
     * Generated from protobuf field <code>string element = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setElement($var)
    {
        GPBUtil::checkString($var, True);
        $this->element = $var;

        return $this;
    }

    /**
     * Value of the changed object in the old Service configuration,
     * in JSON format. This field will not be populated if ChangeType == ADDED.
     *
     * Generated from protobuf field <code>string old_value = 2;</code>
     * @return string
     */
    public function getOldValue()
    {
        return $this->old_value;
    }

    /**
     * Value of the changed object in the old Service configuration,
     * in JSON format. This field will not be populated if ChangeType == ADDED.
     *
     * Generated from protobuf field <code>string old_value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOldValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->old_value = $var;

        return $this;
    }

    /**
     * Value of the changed object in the new Service configuration,
     * in JSON format. This field will not be populated if ChangeType == REMOVED.
     *
     * Generated from protobuf field <code>string new_value = 3;</code>
     * @return string
     */
    public function getNewValue()
    {
        return $this->new_value;
    }

    /**
     * Value of the changed object in the new Service configuration,
     * in JSON format. This field will not be populated if ChangeType == REMOVED.
     *
     * Generated from protobuf field <code>string new_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_value = $var;

        return $this;
    }

    /**
     * The type for this change, either ADDED, REMOVED, or MODIFIED.
     *
     * Generated from protobuf field <code>.google.api.ChangeType change_type = 4;</code>
     * @return int
     */
    public function getChangeType()
    {
        return $this->change_type;
    }

    /**
     * The type for this change, either ADDED, REMOVED, or MODIFIED.
     *
     * Generated from protobuf field <code>.google.api.ChangeType change_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setChangeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\ChangeType::class);
        $this->change_type = $var;

        return $this;
    }

    /**
     * Collection of advice provided for this change, useful for determining the
     * possible impact of this change.
     *
     * Generated from protobuf field <code>repeated .google.api.Advice advices = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdvices()
    {
        return $this->advices;
    }

    /**
     * Collection of advice provided for this change, useful for determining the
     * possible impact of this change.
     *
     * Generated from protobuf field <code>repeated .google.api.Advice advices = 5;</code>
     * @param array<\Google\Api\Advice>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdvices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Advice::class);
        $this->advices = $arr;

        return $this;
    }

}

