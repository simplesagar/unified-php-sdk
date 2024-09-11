<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListUnifiedIntegrationWorkspacesRequest
{
    /**
     * Filter the results for only the workspace's active integrations
     *
     * @var ?bool $active
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=active')]
    public ?bool $active = null;

    /**
     * Filter the results on these categories
     *
     * @var ?array<QueryParamCategories> $categories
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=categories')]
    public ?array $categories = null;

    /**
     *
     * @var ?string $env
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    /**
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    /**
     *
     * @var ?float $offset
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?float $offset = null;

    /**
     *
     * @var ?bool $summary
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=summary')]
    public ?bool $summary = null;

    /**
     *
     * @var ?string $updatedGte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte')]
    public ?string $updatedGte = null;

    /**
     * The ID of the workspace
     *
     * @var string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public string $workspaceId;

    /**
     * @param  string  $workspaceId
     * @param  ?bool  $active
     * @param  ?array<QueryParamCategories>  $categories
     * @param  ?string  $env
     * @param  ?float  $limit
     * @param  ?float  $offset
     * @param  ?bool  $summary
     * @param  ?string  $updatedGte
     */
    public function __construct(string $workspaceId, ?bool $active = null, ?array $categories = null, ?string $env = null, ?float $limit = null, ?float $offset = null, ?bool $summary = null, ?string $updatedGte = null)
    {
        $this->workspaceId = $workspaceId;
        $this->active = $active;
        $this->categories = $categories;
        $this->env = $env;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->summary = $summary;
        $this->updatedGte = $updatedGte;
    }
}