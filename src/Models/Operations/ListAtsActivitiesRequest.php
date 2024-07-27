<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListAtsActivitiesRequest
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

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=document_id')]
    public ?string $documentId = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=interview_id')]
    public ?string $interviewId = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=job_id')]
    public ?string $jobId = null;

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
        $this->applicationId = null;
        $this->candidateId = null;
        $this->connectionId = '';
        $this->documentId = null;
        $this->fields = null;
        $this->interviewId = null;
        $this->jobId = null;
        $this->limit = null;
        $this->offset = null;
        $this->query = null;
        $this->updatedGte = null;
        $this->userId = null;
    }
}