<?php

namespace Mrcl\Utils\InternetStandards\HttpStatusCodes;

interface Redirection
{
    /**
     * 300 Multiple Choices
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.1 RFC7231
     */
    public const MULTIPLE_CHOICES = 300;

    /**
     * 301 Moved Permanently
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.2 RFC7231
     */
    public const MOVED_PERMANENTLY = 301;

    /**
     * 302 Found
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.3 RFC7231
     */
    public const FOUND = 302;

    /**
     * 303 See Other
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.4 RFC7231
     */
    public const SEE_OTHER = 303;

    /**
     * 304 Not Modified
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-4.1 RFC7232
     */
    public const NOT_MODIFIED = 304;

    /**
     * 305 Use Proxy
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.5 RFC7231
     */
    public const USE_PROXY = 305;

    /**
     * 306 (Unused)
     *
     * @deprecated No longer used, code is reserved
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.6 RFC7231
     */
    public const UNUSED = 306;

    /**
     * 307 Temporary Redirect
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.7 RFC7231
     */
    public const TEMPORARY_REDIRECT = 307;

    /**
     * 308 Permanent Redirect
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7538#section-3 RFC7538
     */
    public const PERMANENT_REDIRECT = 308;
}
