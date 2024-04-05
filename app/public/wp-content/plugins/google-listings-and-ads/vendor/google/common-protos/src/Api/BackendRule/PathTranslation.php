<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/backend.proto

namespace Google\Api\BackendRule;

use UnexpectedValueException;

/**
 * Path Translation specifies how to combine the backend address with the
 * request path in order to produce the appropriate forwarding URL for the
 * request.
 * Path Translation is applicable only to HTTP-based backends. Backends which
 * do not accept requests over HTTP/HTTPS should leave `path_translation`
 * unspecified.
 *
 * Protobuf type <code>google.api.BackendRule.PathTranslation</code>
 */
class PathTranslation
{
    /**
     * Generated from protobuf enum <code>PATH_TRANSLATION_UNSPECIFIED = 0;</code>
     */
    const PATH_TRANSLATION_UNSPECIFIED = 0;
    /**
     * Use the backend address as-is, with no modification to the path. If the
     * URL pattern contains variables, the variable names and values will be
     * appended to the query string. If a query string parameter and a URL
     * pattern variable have the same name, this may result in duplicate keys in
     * the query string.
     * # Examples
     * Given the following operation config:
     *     Method path:        /api/company/{cid}/user/{uid}
     *     Backend address:    https://example.cloudfunctions.net/getUser
     * Requests to the following request paths will call the backend at the
     * translated path:
     *     Request path: /api/company/widgetworks/user/johndoe
     *     Translated:
     *     https://example.cloudfunctions.net/getUser?cid=widgetworks&uid=johndoe
     *     Request path: /api/company/widgetworks/user/johndoe?timezone=EST
     *     Translated:
     *     https://example.cloudfunctions.net/getUser?timezone=EST&cid=widgetworks&uid=johndoe
     *
     * Generated from protobuf enum <code>CONSTANT_ADDRESS = 1;</code>
     */
    const CONSTANT_ADDRESS = 1;
    /**
     * The request path will be appended to the backend address.
     * # Examples
     * Given the following operation config:
     *     Method path:        /api/company/{cid}/user/{uid}
     *     Backend address:    https://example.appspot.com
     * Requests to the following request paths will call the backend at the
     * translated path:
     *     Request path: /api/company/widgetworks/user/johndoe
     *     Translated:
     *     https://example.appspot.com/api/company/widgetworks/user/johndoe
     *     Request path: /api/company/widgetworks/user/johndoe?timezone=EST
     *     Translated:
     *     https://example.appspot.com/api/company/widgetworks/user/johndoe?timezone=EST
     *
     * Generated from protobuf enum <code>APPEND_PATH_TO_ADDRESS = 2;</code>
     */
    const APPEND_PATH_TO_ADDRESS = 2;

    private static $valueToName = [
        self::PATH_TRANSLATION_UNSPECIFIED => 'PATH_TRANSLATION_UNSPECIFIED',
        self::CONSTANT_ADDRESS => 'CONSTANT_ADDRESS',
        self::APPEND_PATH_TO_ADDRESS => 'APPEND_PATH_TO_ADDRESS',
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


