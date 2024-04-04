<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum HrisPayslipDetailType: string
{
    case EarningSalary = 'EARNING_SALARY';
    case EarningOvertime = 'EARNING_OVERTIME';
    case EarningTip = 'EARNING_TIP';
    case EarningBonus = 'EARNING_BONUS';
    case EarningCommission = 'EARNING_COMMISSION';
    case EarningAdjustment = 'EARNING_ADJUSTMENT';
    case Earning = 'EARNING';
    case PretaxDeduction = 'PRETAX_DEDUCTION';
    case PretaxDeductionHealthInsurance = 'PRETAX_DEDUCTION_HEALTH_INSURANCE';
    case PretaxDeductionRetirement = 'PRETAX_DEDUCTION_RETIREMENT';
    case PretaxDeductionHra = 'PRETAX_DEDUCTION_HRA';
    case TaxFederal = 'TAX_FEDERAL';
    case TaxRegion = 'TAX_REGION';
    case TaxLocal = 'TAX_LOCAL';
    case PosttaxBenefit = 'POSTTAX_BENEFIT';
    case PosttaxGarnishment = 'POSTTAX_GARNISHMENT';
    case Reimbursement = 'REIMBURSEMENT';
}
