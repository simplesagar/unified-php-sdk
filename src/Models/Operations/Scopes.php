<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


enum Scopes: string
{
    case AuthLogin = 'auth_login';
    case AccountingAccountRead = 'accounting_account_read';
    case AccountingAccountWrite = 'accounting_account_write';
    case AccountingTransactionRead = 'accounting_transaction_read';
    case AccountingTransactionWrite = 'accounting_transaction_write';
    case AccountingJournalRead = 'accounting_journal_read';
    case AccountingJournalWrite = 'accounting_journal_write';
    case AccountingInvoiceRead = 'accounting_invoice_read';
    case AccountingInvoiceWrite = 'accounting_invoice_write';
    case AccountingContactRead = 'accounting_contact_read';
    case AccountingContactWrite = 'accounting_contact_write';
    case AccountingTaxrateRead = 'accounting_taxrate_read';
    case AccountingTaxrateWrite = 'accounting_taxrate_write';
    case AccountingOrganizationRead = 'accounting_organization_read';
    case PaymentPaymentRead = 'payment_payment_read';
    case PaymentPaymentWrite = 'payment_payment_write';
    case PaymentPayoutRead = 'payment_payout_read';
    case PaymentRefundRead = 'payment_refund_read';
    case PaymentLinkRead = 'payment_link_read';
    case PaymentLinkWrite = 'payment_link_write';
    case CommerceItemRead = 'commerce_item_read';
    case CommerceItemWrite = 'commerce_item_write';
    case CommerceCollectionRead = 'commerce_collection_read';
    case CommerceCollectionWrite = 'commerce_collection_write';
    case CommerceInventoryRead = 'commerce_inventory_read';
    case CommerceInventoryWrite = 'commerce_inventory_write';
    case CommerceLocationRead = 'commerce_location_read';
    case CommerceLocationWrite = 'commerce_location_write';
    case AtsActivityRead = 'ats_activity_read';
    case AtsActivityWrite = 'ats_activity_write';
    case AtsApplicationRead = 'ats_application_read';
    case AtsApplicationWrite = 'ats_application_write';
    case AtsApplicationstatusRead = 'ats_applicationstatus_read';
    case AtsCandidateRead = 'ats_candidate_read';
    case AtsCandidateWrite = 'ats_candidate_write';
    case AtsInterviewRead = 'ats_interview_read';
    case AtsInterviewWrite = 'ats_interview_write';
    case AtsJobRead = 'ats_job_read';
    case AtsJobWrite = 'ats_job_write';
    case AtsCompanyRead = 'ats_company_read';
    case AtsDocumentRead = 'ats_document_read';
    case AtsDocumentWrite = 'ats_document_write';
    case AtsScorecardRead = 'ats_scorecard_read';
    case AtsScorecardWrite = 'ats_scorecard_write';
    case CrmCompanyRead = 'crm_company_read';
    case CrmCompanyWrite = 'crm_company_write';
    case CrmContactRead = 'crm_contact_read';
    case CrmContactWrite = 'crm_contact_write';
    case CrmDealRead = 'crm_deal_read';
    case CrmDealWrite = 'crm_deal_write';
    case CrmEventRead = 'crm_event_read';
    case CrmEventWrite = 'crm_event_write';
    case CrmLeadRead = 'crm_lead_read';
    case CrmLeadWrite = 'crm_lead_write';
    case CrmPipelineRead = 'crm_pipeline_read';
    case CrmPipelineWrite = 'crm_pipeline_write';
    case MartechListRead = 'martech_list_read';
    case MartechListWrite = 'martech_list_write';
    case MartechMemberRead = 'martech_member_read';
    case MartechMemberWrite = 'martech_member_write';
    case TicketingCustomerRead = 'ticketing_customer_read';
    case TicketingCustomerWrite = 'ticketing_customer_write';
    case TicketingTicketRead = 'ticketing_ticket_read';
    case TicketingTicketWrite = 'ticketing_ticket_write';
    case TicketingNoteRead = 'ticketing_note_read';
    case TicketingNoteWrite = 'ticketing_note_write';
    case HrisEmployeeRead = 'hris_employee_read';
    case HrisEmployeeWrite = 'hris_employee_write';
    case HrisGroupRead = 'hris_group_read';
    case HrisGroupWrite = 'hris_group_write';
    case HrisPayslipRead = 'hris_payslip_read';
    case HrisPayslipWrite = 'hris_payslip_write';
    case HrisTimeoffRead = 'hris_timeoff_read';
    case HrisTimeoffWrite = 'hris_timeoff_write';
    case HrisCompanyRead = 'hris_company_read';
    case HrisCompanyWrite = 'hris_company_write';
    case UcCallRead = 'uc_call_read';
    case StorageFileRead = 'storage_file_read';
    case StorageFileWrite = 'storage_file_write';
    case Webhook = 'webhook';
    case GenaiModelRead = 'genai_model_read';
    case GenaiPromptRead = 'genai_prompt_read';
    case GenaiPromptWrite = 'genai_prompt_write';
    case MessagingMessageRead = 'messaging_message_read';
    case MessagingMessageWrite = 'messaging_message_write';
    case MessagingChannelRead = 'messaging_channel_read';
    case KmsSpaceRead = 'kms_space_read';
    case KmsSpaceWrite = 'kms_space_write';
    case KmsPageRead = 'kms_page_read';
    case KmsPageWrite = 'kms_page_write';
    case KmsCommentRead = 'kms_comment_read';
    case KmsCommentWrite = 'kms_comment_write';
    case TaskProjectRead = 'task_project_read';
    case TaskProjectWrite = 'task_project_write';
    case TaskTaskRead = 'task_task_read';
    case TaskTaskWrite = 'task_task_write';
}
