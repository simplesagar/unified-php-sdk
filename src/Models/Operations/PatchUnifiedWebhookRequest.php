<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchUnifiedWebhookRequest
{
    /**
     * A webhook is used to POST new/updated information to your server.
     *
     * @var ?Shared\Webhook $webhook
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\Webhook $webhook = null;

    /**
     * ID of the Webhook
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  string  $id
     * @param  ?Shared\Webhook  $webhook
     */
    public function __construct(string $id, ?Shared\Webhook $webhook = null)
    {
        $this->id = $id;
        $this->webhook = $webhook;
    }
}