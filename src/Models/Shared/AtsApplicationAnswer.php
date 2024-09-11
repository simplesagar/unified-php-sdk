<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsApplicationAnswer
{
    /**
     * $answers
     *
     * @var array<string> $answers
     */
    #[\JMS\Serializer\Annotation\SerializedName('answers')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $answers;

    /**
     *
     * @var string $questionId
     */
    #[\JMS\Serializer\Annotation\SerializedName('question_id')]
    public string $questionId;

    /**
     * @param  array<string>  $answers
     * @param  string  $questionId
     */
    public function __construct(array $answers, string $questionId)
    {
        $this->answers = $answers;
        $this->questionId = $questionId;
    }
}