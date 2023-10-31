<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

/**
 * UnifiedTo - Unified.to API: One API to Rule Them All
 * 
 * @package Unified\Unified_to
 * @access public
 */
class UnifiedTo
{
	public const SERVERS = [
        /** North American data region */
		'https://api.unified.to',
        /** European data region */
		'https://api-eu.unified.to',
	];
  	
	public Accounting $accounting;
	
	public Apicall $apicall;
	
	public Application $application;
	
	public Ats $ats;
	
	public Auth $auth;
	
	public Call $call;
	
	public Candidate $candidate;
	
	public Company $company;
	
	public Connection $connection;
	
	public Contact $contact;
	
	public Crm $crm;
	
	public Customer $customer;
	
	public Deal $deal;
	
	public Document $document;
	
	public Employee $employee;
	
	public Enrich $enrich;
	
	public Event $event;
	
	public File $file;
	
	public Group $group;
	
	public Hris $hris;
	
	public Integration $integration;
	
	public Interview $interview;
	
	public Invoice $invoice;
	
	public Job $job;
	
	public Lead $lead;
	
	public ListT $list;
	
	public Login $login;
	
	public Martech $martech;
	
	public Member $member;
	
	public Note $note;
	
	public Passthrough $passthrough;
	
	public Payment $payment;
	
	public Person $person;
	
	public Pipeline $pipeline;
	
	public Scorecard $scorecard;
	
	public Ticket $ticket;
	
	public Ticketing $ticketing;
	
	public Uc $uc;
	
	public Unified $unified;
	
	public Webhook $webhook;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return UnifiedToBuilder
	 */
	public static function builder(): UnifiedToBuilder
	{
		return new UnifiedToBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->accounting = new Accounting($this->sdkConfiguration);
		
		$this->apicall = new Apicall($this->sdkConfiguration);
		
		$this->application = new Application($this->sdkConfiguration);
		
		$this->ats = new Ats($this->sdkConfiguration);
		
		$this->auth = new Auth($this->sdkConfiguration);
		
		$this->call = new Call($this->sdkConfiguration);
		
		$this->candidate = new Candidate($this->sdkConfiguration);
		
		$this->company = new Company($this->sdkConfiguration);
		
		$this->connection = new Connection($this->sdkConfiguration);
		
		$this->contact = new Contact($this->sdkConfiguration);
		
		$this->crm = new Crm($this->sdkConfiguration);
		
		$this->customer = new Customer($this->sdkConfiguration);
		
		$this->deal = new Deal($this->sdkConfiguration);
		
		$this->document = new Document($this->sdkConfiguration);
		
		$this->employee = new Employee($this->sdkConfiguration);
		
		$this->enrich = new Enrich($this->sdkConfiguration);
		
		$this->event = new Event($this->sdkConfiguration);
		
		$this->file = new File($this->sdkConfiguration);
		
		$this->group = new Group($this->sdkConfiguration);
		
		$this->hris = new Hris($this->sdkConfiguration);
		
		$this->integration = new Integration($this->sdkConfiguration);
		
		$this->interview = new Interview($this->sdkConfiguration);
		
		$this->invoice = new Invoice($this->sdkConfiguration);
		
		$this->job = new Job($this->sdkConfiguration);
		
		$this->lead = new Lead($this->sdkConfiguration);
		
		$this->list = new ListT($this->sdkConfiguration);
		
		$this->login = new Login($this->sdkConfiguration);
		
		$this->martech = new Martech($this->sdkConfiguration);
		
		$this->member = new Member($this->sdkConfiguration);
		
		$this->note = new Note($this->sdkConfiguration);
		
		$this->passthrough = new Passthrough($this->sdkConfiguration);
		
		$this->payment = new Payment($this->sdkConfiguration);
		
		$this->person = new Person($this->sdkConfiguration);
		
		$this->pipeline = new Pipeline($this->sdkConfiguration);
		
		$this->scorecard = new Scorecard($this->sdkConfiguration);
		
		$this->ticket = new Ticket($this->sdkConfiguration);
		
		$this->ticketing = new Ticketing($this->sdkConfiguration);
		
		$this->uc = new Uc($this->sdkConfiguration);
		
		$this->unified = new Unified($this->sdkConfiguration);
		
		$this->webhook = new Webhook($this->sdkConfiguration);
	}
}