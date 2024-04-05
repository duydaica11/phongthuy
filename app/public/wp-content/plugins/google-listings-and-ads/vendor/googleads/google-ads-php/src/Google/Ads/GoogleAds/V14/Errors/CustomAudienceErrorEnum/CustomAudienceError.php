<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/custom_audience_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\CustomAudienceErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible custom audience errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.CustomAudienceErrorEnum.CustomAudienceError</code>
 */
class CustomAudienceError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * New name in the custom audience is duplicated ignoring cases.
     *
     * Generated from protobuf enum <code>NAME_ALREADY_USED = 2;</code>
     */
    const NAME_ALREADY_USED = 2;
    /**
     * Cannot remove a custom audience while it's still being used as targeting.
     *
     * Generated from protobuf enum <code>CANNOT_REMOVE_WHILE_IN_USE = 3;</code>
     */
    const CANNOT_REMOVE_WHILE_IN_USE = 3;
    /**
     * Cannot update or remove a custom audience that is already removed.
     *
     * Generated from protobuf enum <code>RESOURCE_ALREADY_REMOVED = 4;</code>
     */
    const RESOURCE_ALREADY_REMOVED = 4;
    /**
     * The pair of [type, value] already exists in members.
     *
     * Generated from protobuf enum <code>MEMBER_TYPE_AND_PARAMETER_ALREADY_EXISTED = 5;</code>
     */
    const MEMBER_TYPE_AND_PARAMETER_ALREADY_EXISTED = 5;
    /**
     * Member type is invalid.
     *
     * Generated from protobuf enum <code>INVALID_MEMBER_TYPE = 6;</code>
     */
    const INVALID_MEMBER_TYPE = 6;
    /**
     * Member type does not have associated value.
     *
     * Generated from protobuf enum <code>MEMBER_TYPE_AND_VALUE_DOES_NOT_MATCH = 7;</code>
     */
    const MEMBER_TYPE_AND_VALUE_DOES_NOT_MATCH = 7;
    /**
     * Custom audience contains a member that violates policy.
     *
     * Generated from protobuf enum <code>POLICY_VIOLATION = 8;</code>
     */
    const POLICY_VIOLATION = 8;
    /**
     * Change in custom audience type is not allowed.
     *
     * Generated from protobuf enum <code>INVALID_TYPE_CHANGE = 9;</code>
     */
    const INVALID_TYPE_CHANGE = 9;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NAME_ALREADY_USED => 'NAME_ALREADY_USED',
        self::CANNOT_REMOVE_WHILE_IN_USE => 'CANNOT_REMOVE_WHILE_IN_USE',
        self::RESOURCE_ALREADY_REMOVED => 'RESOURCE_ALREADY_REMOVED',
        self::MEMBER_TYPE_AND_PARAMETER_ALREADY_EXISTED => 'MEMBER_TYPE_AND_PARAMETER_ALREADY_EXISTED',
        self::INVALID_MEMBER_TYPE => 'INVALID_MEMBER_TYPE',
        self::MEMBER_TYPE_AND_VALUE_DOES_NOT_MATCH => 'MEMBER_TYPE_AND_VALUE_DOES_NOT_MATCH',
        self::POLICY_VIOLATION => 'POLICY_VIOLATION',
        self::INVALID_TYPE_CHANGE => 'INVALID_TYPE_CHANGE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomAudienceError::class, \Google\Ads\GoogleAds\V14\Errors\CustomAudienceErrorEnum_CustomAudienceError::class);

