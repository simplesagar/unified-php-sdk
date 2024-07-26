<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateCrmContactRequest
{
    /**
     * A contact represents a person that optionally is associated with a deal and/or a company
     *
     * @var ?\Unified\Unified_to\Models\Shared\CrmContact $crmContact
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\CrmContact $crmContact = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Contact
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    public function __construct()
    {
        $this->crmContact = null;
        $this->connectionId = '';
        $this->id = '';
    }
}