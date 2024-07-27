<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListAtsDocumentsRequest
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=application_id')]
    public ?string $applicationId = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=candidate_id')]
    public ?string $candidateId = null;

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

    public function __construct()
    {
        $this->applicationId = null;
        $this->candidateId = null;
        $this->connectionId = '';
        $this->fields = null;
        $this->limit = null;
        $this->offset = null;
        $this->query = null;
        $this->updatedGte = null;
    }
}