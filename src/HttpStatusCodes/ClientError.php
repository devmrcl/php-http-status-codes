<?php

namespace Mrcl\Utils\InternetStandards\HttpStatusCodes;

interface ClientError
{
    /**
     * 400 Bad Request
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.1 RFC7231
     */
    public const BAD_REQUEST = 400;

    /**
     * 401 Unauthorized
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7235#section-3.1 RFC7235
     */
    public const UNAUTHORIZED = 401;

    /**
     * 402 Payment Required
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.2 RFC7231
     */
    public const PAYMENT_REQUIRED = 402;

    /**
     * 403 Forbidden
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.3 RFC7231
     */
    public const FORBIDDEN = 403;

    /**
     * 404 Not Found
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.4 RFC7231
     */
    public const NOT_FOUND = 404;

    /**
     * 405 Method Not Allowed
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.5 RFC7231
     */
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * 406 Not Acceptable
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.6 RFC7231
     */
    public const NOT_ACCEPTABLE = 406;

    /**
     * 407 Proxy Authentication Required
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7235#section-3.2 RFC7235
     */
    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * 408 Request Timeout
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.7 RFC7231
     */
    public const REQUEST_TIMEOUT = 408;

    /**
     * 409 Conflict
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.8 RFC7231
     */
    public const CONFLICT = 409;

    /**
     * 410 Gone
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.9 RFC7231
     */
    public const GONE = 410;

    /**
     * 411 Length Required
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.10 RFC7231
     */
    public const LENGTH_REQUIRED = 411;

    /**
     * 412 Precondition Failed
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-4.2 RFC7232
     */
    public const PRECONDITION_FAILED = 412;

    /**
     * 413 Payload Too Large
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.11 RFC7231
     */
    public const PAYLOAD_TOO_LARGE = 413;

    /**
     * 414 URI Too Long
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.12 RFC7231
     */
    public const URI_TOO_LONG = 414;

    /**
     * 415 Unsupported Media Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.13 RFC7231
     */
    public const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * 416 Range Not Satisfiable
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7233#section-4.4 RFC7233
     */
    public const RANGE_NOT_SATISFIABLE = 416;

    /**
     * 417 Expectation Failed
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.14 RFC7231
     */
    public const EXPECTATION_FAILED = 417;

    /**
     * 418 I'm a teapot
     *
     * @see  https://en.wikipedia.org/wiki/Hyper_Text_Coffee_Pot_Control_Protocol Hyper Text Coffee Pot Control Protocol - Wikipedia
     * @link https://datatracker.ietf.org/doc/html/rfc2324#section-2.3.2 RFC2324
     * @link https://datatracker.ietf.org/doc/html/rfc7168#section-2.3.3 RFC7168
     */
    public const I_AM_A_TEAPOT = 418;

    /**
     * 421 Misdirected Request
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7540#section-9.1.2 RFC7540
     */
    public const MISDIRECTED_REQUEST = 421;

    /**
     * 422 Unprocessable Entity
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-11.2 RFC4918
     */
    public const UNPROCESSABLE_ENTITY = 422;

    /**
     * 423 Locked
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-11.3 RFC4918
     */
    public const LOCKED = 423;

    /**
     * 424 Failed Dependency
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-11.4 RFC4918
     */
    public const FAILED_DEPENDENCY = 424;

    /**
     * 425 Too Early
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8470#section-5.2 RFC8470
     */
    public const TOO_EARLY = 425;

    /**
     * 426 Upgrade Required
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.15 RFC7231
     */
    public const UPGRADE_REQUIRED = 426;

    /**
     * 428 Precondition Required
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6585#section-3 RFC6585
     */
    public const PRECONDITION_REQUIRED = 428;

    /**
     * 429 Too Many Requests
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6585#section-4 RFC6585
     */
    public const TOO_MANY_REQUESTS = 429;

    /**
     * 431 Request Header Fields Too Large
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6585#section-5 RFC6585
     */
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * 451 Unavailable For Legal Reasons
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7725#section-3 RFC7725
     */
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
}
