<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/policy.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google API Policy Annotation
 * This message defines a simple API policy annotation that can be used to
 * annotate API request and response message fields with applicable policies.
 * One field may have multiple applicable policies that must all be satisfied
 * before a request can be processed. This policy annotation is used to
 * generate the overall policy that will be used for automatic runtime
 * policy enforcement and documentation generation.
 *
 * Generated from protobuf message <code>google.api.FieldPolicy</code>
 */
class FieldPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Selects one or more request or response message fields to apply this
     * `FieldPolicy`.
     * When a `FieldPolicy` is used in proto annotation, the selector must
     * be left as empty. The service config generator will automatically fill
     * the correct value.
     * When a `FieldPolicy` is used in service config, the selector must be a
     * comma-separated string with valid request or response field paths,
     * such as "foo.bar" or "foo.bar,foo.baz".
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    protected $selector = '';
    /**
     * Specifies the required permission(s) for the resource referred to by the
     * field. It requires the field contains a valid resource reference, and
     * the request must pass the permission checks to proceed. For example,
     * "resourcemanager.projects.get".
     *
     * Generated from protobuf field <code>string resource_permission = 2;</code>
     */
    protected $resource_permission = '';
    /**
     * Specifies the resource type for the resource referred to by the field.
     *
     * Generated from protobuf field <code>string resource_type = 3;</code>
     */
    protected $resource_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $selector
     *           Selects one or more request or response message fields to apply this
     *           `FieldPolicy`.
     *           When a `FieldPolicy` is used in proto annotation, the selector must
     *           be left as empty. The service config generator will automatically fill
     *           the correct value.
     *           When a `FieldPolicy` is used in service config, the selector must be a
     *           comma-separated string with valid request or response field paths,
     *           such as "foo.bar" or "foo.bar,foo.baz".
     *     @type string $resource_permission
     *           Specifies the required permission(s) for the resource referred to by the
     *           field. It requires the field contains a valid resource reference, and
     *           the request must pass the permission checks to proceed. For example,
     *           "resourcemanager.projects.get".
     *     @type string $resource_type
     *           Specifies the resource type for the resource referred to by the field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Selects one or more request or response message fields to apply this
     * `FieldPolicy`.
     * When a `FieldPolicy` is used in proto annotation, the selector must
     * be left as empty. The service config generator will automatically fill
     * the correct value.
     * When a `FieldPolicy` is used in service config, the selector must be a
     * comma-separated string with valid request or response field paths,
     * such as "foo.bar" or "foo.bar,foo.baz".
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Selects one or more request or response message fields to apply this
     * `FieldPolicy`.
     * When a `FieldPolicy` is used in proto annotation, the selector must
     * be left as empty. The service config generator will automatically fill
     * the correct value.
     * When a `FieldPolicy` is used in service config, the selector must be a
     * comma-separated string with valid request or response field paths,
     * such as "foo.bar" or "foo.bar,foo.baz".
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
     * Specifies the required permission(s) for the resource referred to by the
     * field. It requires the field contains a valid resource reference, and
     * the request must pass the permission checks to proceed. For example,
     * "resourcemanager.projects.get".
     *
     * Generated from protobuf field <code>string resource_permission = 2;</code>
     * @return string
     */
    public function getResourcePermission()
    {
        return $this->resource_permission;
    }

    /**
     * Specifies the required permission(s) for the resource referred to by the
     * field. It requires the field contains a valid resource reference, and
     * the request must pass the permission checks to proceed. For example,
     * "resourcemanager.projects.get".
     *
     * Generated from protobuf field <code>string resource_permission = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourcePermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_permission = $var;

        return $this;
    }

    /**
     * Specifies the resource type for the resource referred to by the field.
     *
     * Generated from protobuf field <code>string resource_type = 3;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Specifies the resource type for the resource referred to by the field.
     *
     * Generated from protobuf field <code>string resource_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

}

