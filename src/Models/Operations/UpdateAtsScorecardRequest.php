<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateAtsScorecardRequest
{
    /**
     * A scorecard is feedback/assessment of a candidate's interview
     * 
     * @var ?\Unified\Unified_to\Models\Shared\AtsScorecard $atsScorecard
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\AtsScorecard $atsScorecard = null;
    
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
    /**
     * ID of the Document
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->atsScorecard = null;
		$this->connectionId = "";
		$this->id = "";
	}
}
