<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum ObjectType: string
{
    case AccountingAccount = 'accounting_account';
    case AccountingTransaction = 'accounting_transaction';
    case AccountingContact = 'accounting_contact';
    case AccountingInvoice = 'accounting_invoice';
    case AccountingTaxrate = 'accounting_taxrate';
    case AccountingOrganization = 'accounting_organization';
    case PaymentPayment = 'payment_payment';
    case PaymentLink = 'payment_link';
    case PaymentPayout = 'payment_payout';
    case PaymentRefund = 'payment_refund';
    case CommerceItem = 'commerce_item';
    case CommerceCollection = 'commerce_collection';
    case CommerceInventory = 'commerce_inventory';
    case CommerceLocation = 'commerce_location';
    case AtsActivity = 'ats_activity';
    case AtsApplication = 'ats_application';
    case AtsApplicationstatus = 'ats_applicationstatus';
    case AtsCandidate = 'ats_candidate';
    case AtsDocument = 'ats_document';
    case AtsInterview = 'ats_interview';
    case AtsJob = 'ats_job';
    case AtsScorecard = 'ats_scorecard';
    case AtsCompany = 'ats_company';
    case CrmCompany = 'crm_company';
    case CrmContact = 'crm_contact';
    case CrmDeal = 'crm_deal';
    case CrmEvent = 'crm_event';
    case CrmLead = 'crm_lead';
    case CrmPipeline = 'crm_pipeline';
    case HrisEmployee = 'hris_employee';
    case HrisGroup = 'hris_group';
    case HrisPayslip = 'hris_payslip';
    case HrisTimeoff = 'hris_timeoff';
    case MartechList = 'martech_list';
    case MartechMember = 'martech_member';
    case Passthrough = 'passthrough';
    case TicketingNote = 'ticketing_note';
    case TicketingTicket = 'ticketing_ticket';
    case TicketingCustomer = 'ticketing_customer';
    case UcContact = 'uc_contact';
    case UcCall = 'uc_call';
    case EnrichPerson = 'enrich_person';
    case EnrichCompany = 'enrich_company';
    case StorageFile = 'storage_file';
    case GenaiModel = 'genai_model';
    case GenaiPrompt = 'genai_prompt';
}
