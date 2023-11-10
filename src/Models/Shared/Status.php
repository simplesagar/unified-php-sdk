<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum Status: string
{
    case New = 'NEW';
    case Reviewing = 'REVIEWING';
    case Screening = 'SCREENING';
    case Submitted = 'SUBMITTED';
    case FirstInterview = 'FIRST_INTERVIEW';
    case SecondInterview = 'SECOND_INTERVIEW';
    case ThirdInterview = 'THIRD_INTERVIEW';
    case BackgroundCheck = 'BACKGROUND_CHECK';
    case Offered = 'OFFERED';
    case Accepted = 'ACCEPTED';
    case Hired = 'HIRED';
    case Rejected = 'REJECTED';
    case Withdrawn = 'WITHDRAWN';
}
