<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/documentation.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A documentation rule provides information about individual API elements.
 *
 * Generated from protobuf message <code>google.api.DocumentationRule</code>
 */
class DocumentationRule extends \Google\Protobuf\Internal\Message
{
    /**
     * The selector is a comma-separated list of patterns for any element such as
     * a method, a field, an enum value. Each pattern is a qualified name of the
     * element which may end in "*", indicating a wildcard. Wildcards are only
     * allowed at the end and for a whole component of the qualified name,
     * i.e. "foo.*" is ok, but not "foo.b*" or "foo.*.bar". A wildcard will match
     * one or more components. To specify a default for all applicable elements,
     * the whole pattern "*" is used.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    protected $selector = '';
    /**
     * Description of the selected proto element (e.g. a message, a method, a
     * 'service' definition, or a field). Defaults to leading & trailing comments
     * taken from the proto source definition of the proto element.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Deprecation description of the selected element(s). It can be provided if
     * an element is marked as `deprecated`.
     *
     * Generated from protobuf field <code>string deprecation_description = 3;</code>
     */
    protected $deprecation_description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $selector
     *           The selector is a comma-separated list of patterns for any element such as
     *           a method, a field, an enum value. Each pattern is a qualified name of the
     *           element which may end in "*", indicating a wildcard. Wildcards are only
     *           allowed at the end and for a whole component of the qualified name,
     *           i.e. "foo.*" is ok, but not "foo.b*" or "foo.*.bar". A wildcard will match
     *           one or more components. To specify a default for all applicable elements,
     *           the whole pattern "*" is used.
     *     @type string $description
     *           Description of the selected proto element (e.g. a message, a method, a
     *           'service' definition, or a field). Defaults to leading & trailing comments
     *           taken from the proto source definition of the proto element.
     *     @type string $deprecation_description
     *           Deprecation description of the selected element(s). It can be provided if
     *           an element is marked as `deprecated`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Documentation::initOnce();
        parent::__construct($data);
    }

    /**
     * The selector is a comma-separated list of patterns for any element such as
     * a method, a field, an enum value. Each pattern is a qualified name of the
     * element which may end in "*", indicating a wildcard. Wildcards are only
     * allowed at the end and for a whole component of the qualified name,
     * i.e. "foo.*" is ok, but not "foo.b*" or "foo.*.bar". A wildcard will match
     * one or more components. To specify a default for all applicable elements,
     * the whole pattern "*" is used.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * The selector is a comma-separated list of patterns for any element such as
     * a method, a field, an enum value. Each pattern is a qualified name of the
     * element which may end in "*", indicating a wildcard. Wildcards are only
     * allowed at the end and for a whole component of the qualified name,
     * i.e. "foo.*" is ok, but not "foo.b*" or "foo.*.bar". A wildcard will match
     * one or more components. To specify a default for all applicable elements,
     * the whole pattern "*" is used.
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
     * Description of the selected proto element (e.g. a message, a method, a
     * 'service' definition, or a field). Defaults to leading & trailing comments
     * taken from the proto source definition of the proto element.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the selected proto element (e.g. a message, a method, a
     * 'service' definition, or a field). Defaults to leading & trailing comments
     * taken from the proto source definition of the proto element.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Deprecation description of the selected element(s). It can be provided if
     * an element is marked as `deprecated`.
     *
     * Generated from protobuf field <code>string deprecation_description = 3;</code>
     * @return string
     */
    public function getDeprecationDescription()
    {
        return $this->deprecation_description;
    }

    /**
     * Deprecation description of the selected element(s). It can be provided if
     * an element is marked as `deprecated`.
     *
     * Generated from protobuf field <code>string deprecation_description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeprecationDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->deprecation_description = $var;

        return $this;
    }

}

