<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/**
 * PropertyConnectionAuth - An authentication object that represents a specific authorized user's connection to an integration.
 * 
 * @package Unified\Unified_to\Models\Shared
 * @access public
 */
class PropertyConnectionAuth
{
	#[\JMS\Serializer\Annotation\SerializedName('access_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $accessToken = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('api_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $apiUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('app_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $appId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('authorize_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $authorizeUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('client_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $clientId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('client_secret')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $clientSecret = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('consumer_key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $consumerKey = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('consumer_secret')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $consumerSecret = null;
    
    /**
     * $emails
     * 
     * @var ?array<string> $emails
     */
	#[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('expires_in')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $expiresIn = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('expiry_date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $expiryDate = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyPropertyConnectionAuthMeta')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyPropertyConnectionAuthMeta $meta = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * When integration.auth_type = "other", this field contains the authentication credentials in the same order as token_names
     * 
     * @var ?array<string> $otherAuthInfo
     */
	#[\JMS\Serializer\Annotation\SerializedName('other_auth_info')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $otherAuthInfo = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('pem')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $pem = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('refresh_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $refreshToken = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('refresh_token_expires_date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $refreshTokenExpiresDate = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('refresh_token_expires_in')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $refreshTokenExpiresIn = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $state = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $token = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('token_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tokenUrl = null;
    
	public function __construct()
	{
		$this->accessToken = null;
		$this->apiUrl = null;
		$this->appId = null;
		$this->authorizeUrl = null;
		$this->clientId = null;
		$this->clientSecret = null;
		$this->consumerKey = null;
		$this->consumerSecret = null;
		$this->emails = null;
		$this->expiresIn = null;
		$this->expiryDate = null;
		$this->key = null;
		$this->meta = null;
		$this->name = null;
		$this->otherAuthInfo = null;
		$this->pem = null;
		$this->refreshToken = null;
		$this->refreshTokenExpiresDate = null;
		$this->refreshTokenExpiresIn = null;
		$this->state = null;
		$this->token = null;
		$this->tokenUrl = null;
	}
}
