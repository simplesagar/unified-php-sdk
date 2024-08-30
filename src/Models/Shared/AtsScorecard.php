<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsScorecard
{
    /**
     *
     * @var ?string $applicationId
     */
    #[\JMS\Serializer\Annotation\SerializedName('application_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $applicationId = null;

    /**
     *
     * @var ?string $candidateId
     */
    #[\JMS\Serializer\Annotation\SerializedName('candidate_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $candidateId = null;

    /**
     *
     * @var ?string $comment
     */
    #[\JMS\Serializer\Annotation\SerializedName('comment')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $comment = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var ?string $interviewId
     */
    #[\JMS\Serializer\Annotation\SerializedName('interview_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $interviewId = null;

    /**
     *
     * @var ?string $interviewerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('interviewer_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $interviewerId = null;

    /**
     *
     * @var ?string $jobId
     */
    #[\JMS\Serializer\Annotation\SerializedName('job_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $jobId = null;

    /**
     * $questions
     *
     * @var ?array<AtsScorecardQuestion> $questions
     */
    #[\JMS\Serializer\Annotation\SerializedName('questions')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsScorecardQuestion>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $questions = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    /**
     *
     * @var ?Recommendation $recommendation
     */
    #[\JMS\Serializer\Annotation\SerializedName('recommendation')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\Recommendation|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Recommendation $recommendation = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $applicationId
     * @param  ?string  $candidateId
     * @param  ?string  $comment
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $id
     * @param  ?string  $interviewId
     * @param  ?string  $interviewerId
     * @param  ?string  $jobId
     * @param  ?array<AtsScorecardQuestion>  $questions
     * @param  ?array<string, mixed>  $raw
     * @param  ?Recommendation  $recommendation
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $applicationId = null, ?string $candidateId = null, ?string $comment = null, ?\DateTime $createdAt = null, ?string $id = null, ?string $interviewId = null, ?string $interviewerId = null, ?string $jobId = null, ?array $questions = null, ?array $raw = null, ?Recommendation $recommendation = null, ?\DateTime $updatedAt = null)
    {
        $this->applicationId = $applicationId;
        $this->candidateId = $candidateId;
        $this->comment = $comment;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->interviewId = $interviewId;
        $this->interviewerId = $interviewerId;
        $this->jobId = $jobId;
        $this->questions = $questions;
        $this->raw = $raw;
        $this->recommendation = $recommendation;
        $this->updatedAt = $updatedAt;
    }
}