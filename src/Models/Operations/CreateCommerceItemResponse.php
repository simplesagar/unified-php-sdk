<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class CreateCommerceItemResponse
{
    /**
     * Successful
     *
     * @var ?\Unified\Unified_to\Models\Shared\CommerceItem $commerceItem
     */
    public ?\Unified\Unified_to\Models\Shared\CommerceItem $commerceItem = null;

    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    public function __construct()
    {
        $this->commerceItem = null;
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}