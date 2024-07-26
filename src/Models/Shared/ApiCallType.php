<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum ApiCallType: string
{
    case Login = 'login';
    case Webhook = 'webhook';
    case Inbound = 'inbound';
}
