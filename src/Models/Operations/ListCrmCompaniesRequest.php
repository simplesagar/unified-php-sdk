<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListCrmCompaniesRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=contact_id')]
    public ?string $contactId = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=deal_id')]
    public ?string $dealId = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?float $offset = null;

    /**
     * Query string to search. eg. email address or name
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

    /**
     * Return only results whose updated date is equal or greater to this value
     *
     * @var ?\DateTime $updatedGte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $updatedGte = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public ?string $userId = null;

    public function __construct()
    {
        $this->connectionId = '';
        $this->contactId = null;
        $this->dealId = null;
        $this->fields = null;
        $this->limit = null;
        $this->offset = null;
        $this->query = null;
        $this->updatedGte = null;
        $this->userId = null;
    }
}