<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListUnifiedIntegrationsRequest
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
     * @var ?array<\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsQueryParamCategories> $categories
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=categories')]
    public ?array $categories = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?float $offset = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=order')]
    public ?string $order = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=summary')]
    public ?bool $summary = null;

    /**
     * Filter the results for only this integration type
     *
     * @var ?string $type
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public ?string $type = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte')]
    public ?string $updatedGte = null;

    public function __construct()
    {
        $this->active = null;
        $this->categories = null;
        $this->env = null;
        $this->limit = null;
        $this->offset = null;
        $this->order = null;
        $this->sort = null;
        $this->summary = null;
        $this->type = null;
        $this->updatedGte = null;
    }
}