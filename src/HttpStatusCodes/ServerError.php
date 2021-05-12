<?php

namespace Mrcl\Utils\InternetStandards\HttpStatusCodes;

interface ServerError
{
    /**
     * 500 Internal Server Error
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.1 RFC7231
     */
    public const INTERNAL_SERVER_ERROR = 500;

    /**
     * 501 Not Implemented
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.2 RFC7231
     */
    public const NOT_IMPLEMENTED = 501;

    /**
     * 502 Bad Gateway
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.3 RFC7231
     */
    public const BAD_GATEWAY = 502;

    /**
     * 503 Service Unavailable
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.4 RFC7231
     */
    public const SERVICE_UNAVAILABLE = 503;

    /**
     * 504 Gateway Timeout
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.5 RFC7231
     */
    public const GATEWAY_TIMEOUT = 504;

    /**
     * 505 HTTP Version Not Supported
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.6 RFC7231
     */
    public const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * 506 Variant Also Negotiates
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2295#section-8.1 RFC2295
     */
    public const VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * 507 Insufficient Storage
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-11.5 RFC4918
     */
    public const INSUFFICIENT_STORAGE = 507;

    /**
     * 508 Loop Detected
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5842#section-7.2 RFC5842
     */
    public const LOOP_DETECTED = 508;

    /**
     * 510 Not Extended
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2774#section-7 RFC2774
     */
    public const NOT_EXTENDED = 510;

    /**
     * 511 Network Authentication Required
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6585#section-6 RFC6585
     */
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
}
