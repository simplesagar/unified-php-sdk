<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class GenaiPrompt
{
    #[\JMS\Serializer\Annotation\SerializedName('max_tokens')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $maxTokens = null;

    /**
     * $messages
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\GenaiContent> $messages
     */
    #[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\GenaiContent>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;

    #[\JMS\Serializer\Annotation\SerializedName('model_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $modelId = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    /**
     * $responses
     *
     * @var ?array<string> $responses
     */
    #[\JMS\Serializer\Annotation\SerializedName('responses')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $responses = null;

    #[\JMS\Serializer\Annotation\SerializedName('temperature')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $temperature = null;

    public function __construct()
    {
        $this->maxTokens = null;
        $this->messages = null;
        $this->modelId = null;
        $this->raw = null;
        $this->responses = null;
        $this->temperature = null;
    }
}