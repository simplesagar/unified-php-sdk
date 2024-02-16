<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsApplicationAnswer
{
	#[\JMS\Serializer\Annotation\SerializedName('answer')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $answer;
    
	#[\JMS\Serializer\Annotation\SerializedName('question_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $questionId;
    
	public function __construct()
	{
		$this->answer = "";
		$this->questionId = "";
	}
}
