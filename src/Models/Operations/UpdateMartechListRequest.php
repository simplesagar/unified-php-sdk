<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateMartechListRequest
{
    /**
     * Mailing List
     *
     * @var ?Shared\MarketingList $marketingList
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\MarketingList $marketingList = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * ID of the List
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  string  $connectionId
     * @param  string  $id
     * @param  ?Shared\MarketingList  $marketingList
     * @param  ?array<string>  $fields
     */
    public function __construct(string $connectionId, string $id, ?Shared\MarketingList $marketingList = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->marketingList = $marketingList;
        $this->fields = $fields;
    }
}