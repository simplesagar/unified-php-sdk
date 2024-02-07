<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateCommerceCollectionRequest
{
    /**
     * A collection of items/products/services
     * 
     * @var ?\Unified\Unified_to\Models\Shared\CommerceCollection $commerceCollection
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\CommerceCollection $commerceCollection = null;
    
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
    /**
     * ID of the Collection
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->commerceCollection = null;
		$this->connectionId = "";
		$this->id = "";
	}
}