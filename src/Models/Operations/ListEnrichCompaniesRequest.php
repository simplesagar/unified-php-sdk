<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListEnrichCompaniesRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * The domain of the company to search
     *
     * @var ?string $domain
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=domain')]
    public ?string $domain = null;

    /**
     * The name of the company to search
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;

    /**
     * @param  string  $connectionId
     * @param  ?string  $domain
     * @param  ?string  $name
     */
    public function __construct(string $connectionId, ?string $domain = null, ?string $name = null)
    {
        $this->connectionId = $connectionId;
        $this->domain = $domain;
        $this->name = $name;
    }
}