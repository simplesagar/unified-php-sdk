<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdatePaymentPaymentRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\PaymentPayment $paymentPayment = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Payment
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    public function __construct()
    {
        $this->paymentPayment = null;
        $this->connectionId = '';
        $this->id = '';
    }
}