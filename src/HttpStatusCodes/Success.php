<?php

namespace Mrcl\Utils\InternetStandards\HttpStatusCodes;

interface Success
{
    /**
     * 200 OK
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.1 RFC7231
     */
    public const OK = 200;

    /**
     * 201 Created
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.2 RFC7231
     */
    public const CREATED = 201;

    /**
     * 202 Accepted
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.3 RFC7231
     */
    public const ACCEPTED = 202;

    /**
     * 203 Non-Authoritative Information
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.4 RFC7231
     */
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * 204 No Content
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.5 RFC7231
     */
    public const NO_CONTENT = 204;

    /**
     * 205 Reset Content
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.6 RFC7231
     */
    public const RESET_CONTENT = 205;

    /**
     * 206 Partial Content
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7233#section-4.1 RFC7233
     */
    public const PARTIAL_CONTENT = 206;

    /**
     * 207 Multi-Status
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-11.1 RFC4918
     */
    public const MULTI_STATUS = 207;

    /**
     * 208 Already Reported
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5842#section-7.1 RFC5842
     */
    public const ALREADY_REPORTED = 208;

    /**
     * 226 IM Used
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3229#section-10.4.1 RFC3229
     */
    public const IM_USED = 226;
}
