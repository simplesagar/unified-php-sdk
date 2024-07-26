<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class PatchCrmPipelineResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Successful
     *
     * @var ?\Unified\Unified_to\Models\Shared\CrmPipeline $crmPipeline
     */
    public ?\Unified\Unified_to\Models\Shared\CrmPipeline $crmPipeline = null;

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
        $this->contentType = '';
        $this->crmPipeline = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}