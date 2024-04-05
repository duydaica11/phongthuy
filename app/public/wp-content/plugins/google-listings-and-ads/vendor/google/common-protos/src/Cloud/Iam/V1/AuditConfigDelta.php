<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/policy.proto

namespace Google\Cloud\Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One delta entry for AuditConfig. Each individual change (only one
 * exempted_member in each entry) to a AuditConfig will be a separate entry.
 *
 * Generated from protobuf message <code>google.iam.v1.AuditConfigDelta</code>
 */
class AuditConfigDelta extends \Google\Protobuf\Internal\Message
{
    /**
     * The action that was performed on an audit configuration in a policy.
     * Required
     *
     * Generated from protobuf field <code>.google.iam.v1.AuditConfigDelta.Action action = 1;</code>
     */
    protected $action = 0;
    /**
     * Specifies a service that was configured for Cloud Audit Logging.
     * For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     * `allServices` is a special value that covers all services.
     * Required
     *
     * Generated from protobuf field <code>string service = 2;</code>
     */
    protected $service = '';
    /**
     * A single identity that is exempted from "data access" audit
     * logging for the `service` specified above.
     * Follows the same format of Binding.members.
     *
     * Generated from protobuf field <code>string exempted_member = 3;</code>
     */
    protected $exempted_member = '';
    /**
     * Specifies the log_type that was be enabled. ADMIN_ACTIVITY is always
     * enabled, and cannot be configured.
     * Required
     *
     * Generated from protobuf field <code>string log_type = 4;</code>
     */
    protected $log_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $action
     *           The action that was performed on an audit configuration in a policy.
     *           Required
     *     @type string $service
     *           Specifies a service that was configured for Cloud Audit Logging.
     *           For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     *           `allServices` is a special value that covers all services.
     *           Required
     *     @type string $exempted_member
     *           A single identity that is exempted from "data access" audit
     *           logging for the `service` specified above.
     *           Follows the same format of Binding.members.
     *     @type string $log_type
     *           Specifies the log_type that was be enabled. ADMIN_ACTIVITY is always
     *           enabled, and cannot be configured.
     *           Required
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * The action that was performed on an audit configuration in a policy.
     * Required
     *
     * Generated from protobuf field <code>.google.iam.v1.AuditConfigDelta.Action action = 1;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action that was performed on an audit configuration in a policy.
     * Required
     *
     * Generated from protobuf field <code>.google.iam.v1.AuditConfigDelta.Action action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Iam\V1\AuditConfigDelta\Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Specifies a service that was configured for Cloud Audit Logging.
     * For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     * `allServices` is a special value that covers all services.
     * Required
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Specifies a service that was configured for Cloud Audit Logging.
     * For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     * `allServices` is a special value that covers all services.
     * Required
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * A single identity that is exempted from "data access" audit
     * logging for the `service` specified above.
     * Follows the same format of Binding.members.
     *
     * Generated from protobuf field <code>string exempted_member = 3;</code>
     * @return string
     */
    public function getExemptedMember()
    {
        return $this->exempted_member;
    }

    /**
     * A single identity that is exempted from "data access" audit
     * logging for the `service` specified above.
     * Follows the same format of Binding.members.
     *
     * Generated from protobuf field <code>string exempted_member = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExemptedMember($var)
    {
        GPBUtil::checkString($var, True);
        $this->exempted_member = $var;

        return $this;
    }

    /**
     * Specifies the log_type that was be enabled. ADMIN_ACTIVITY is always
     * enabled, and cannot be configured.
     * Required
     *
     * Generated from protobuf field <code>string log_type = 4;</code>
     * @return string
     */
    public function getLogType()
    {
        return $this->log_type;
    }

    /**
     * Specifies the log_type that was be enabled. ADMIN_ACTIVITY is always
     * enabled, and cannot be configured.
     * Required
     *
     * Generated from protobuf field <code>string log_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLogType($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_type = $var;

        return $this;
    }

}

