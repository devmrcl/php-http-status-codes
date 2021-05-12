<?php

namespace Mrcl\Utils\InternetStandards\HttpStatusCodes;

interface Informational
{
    /**
     * 100 Continue
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.2.1 RFC7231
     */
    public const CONTINUE = 100;

    /**
     * 101 Switching Protocols
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-6.2.2 RFC7231
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * 102 Processing
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2518#section-10.1 RFC2518
     */
    public const PROCESSING = 102;

    /**
     * 103 Early Hints
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8297#section-2 RFC8297
     */
    public const EARLY_HINTS = 103;
}
