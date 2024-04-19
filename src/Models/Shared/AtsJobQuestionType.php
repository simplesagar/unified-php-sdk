<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum AtsJobQuestionType: string
{
    case Text = 'TEXT';
    case Number = 'NUMBER';
    case Date = 'DATE';
    case Boolean = 'BOOLEAN';
    case MultipleChoice = 'MULTIPLE_CHOICE';
    case File = 'FILE';
    case Textarea = 'TEXTAREA';
    case MultipleSelect = 'MULTIPLE_SELECT';
    case University = 'UNIVERSITY';
    case YesNo = 'YES_NO';
    case Currency = 'CURRENCY';
    case Url = 'URL';
}