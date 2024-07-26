<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
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
     * @var ?array<\Unified\Unified_to\Models\Operations\QueryParamCategories> $categories
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=categories')]
    public ?array $categories = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?float $offset = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=summary')]
    public ?bool $summary = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte')]
    public ?string $updatedGte = null;

    /**
     * The ID of the workspace
     *
     * @var string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public string $workspaceId;

    public function __construct()
    {
        $this->active = null;
        $this->categories = null;
        $this->env = null;
        $this->limit = null;
        $this->offset = null;
        $this->summary = null;
        $this->updatedGte = null;
        $this->workspaceId = '';
    }
}