<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateMartechMemberRequest
{
    /**
     * A member represents a person
     * 
     * @var ?\Unified\Unified_to\Models\Shared\MarketingMember $marketingMember
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\MarketingMember $marketingMember = null;
    
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
	public function __construct()
	{
		$this->marketingMember = null;
		$this->connectionId = "";
	}
}
