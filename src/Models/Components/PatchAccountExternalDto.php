<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class PatchAccountExternalDto
{
    /**
     *
     * @var ?string $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $provider = null;

    /**
     *
     * @var ?string $originOwnerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('origin_owner_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $originOwnerId = null;

    /**
     *
     * @var ?string $originOwnerName
     */
    #[\JMS\Serializer\Annotation\SerializedName('origin_owner_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $originOwnerName = null;

    /**
     *
     * @var ?string $originUsername
     */
    #[\JMS\Serializer\Annotation\SerializedName('origin_username')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $originUsername = null;

    /**
     *
     * @var ?PatchAccountExternalDtoCredentials $credentials
     */
    #[\JMS\Serializer\Annotation\SerializedName('credentials')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\PatchAccountExternalDtoCredentials|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PatchAccountExternalDtoCredentials $credentials = null;

    /**
     *
     * @var ?PatchAccountExternalDtoSetupInformation $setupInformation
     */
    #[\JMS\Serializer\Annotation\SerializedName('setup_information')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\PatchAccountExternalDtoSetupInformation|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PatchAccountExternalDtoSetupInformation $setupInformation = null;

    /**
     *
     * @var ?Secrets $secrets
     */
    #[\JMS\Serializer\Annotation\SerializedName('secrets')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\Secrets|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Secrets $secrets = null;

    /**
     *
     * @var ?string $authenticationConfigKey
     */
    #[\JMS\Serializer\Annotation\SerializedName('authentication_config_key')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $authenticationConfigKey = null;

    /**
     *
     * @var ?string $environment
     */
    #[\JMS\Serializer\Annotation\SerializedName('environment')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $environment = null;

    /**
     *
     * @var ?Label $label
     */
    #[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\Label|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Label $label = null;

    /**
     * @param  ?string  $provider
     * @param  ?string  $originOwnerId
     * @param  ?string  $originOwnerName
     * @param  ?string  $originUsername
     * @param  ?PatchAccountExternalDtoCredentials  $credentials
     * @param  ?PatchAccountExternalDtoSetupInformation  $setupInformation
     * @param  ?Secrets  $secrets
     * @param  ?string  $authenticationConfigKey
     * @param  ?string  $environment
     * @param  ?Label  $label
     */
    public function __construct(?string $provider = null, ?string $originOwnerId = null, ?string $originOwnerName = null, ?string $originUsername = null, ?PatchAccountExternalDtoCredentials $credentials = null, ?PatchAccountExternalDtoSetupInformation $setupInformation = null, ?Secrets $secrets = null, ?string $authenticationConfigKey = null, ?string $environment = null, ?Label $label = null)
    {
        $this->provider = $provider;
        $this->originOwnerId = $originOwnerId;
        $this->originOwnerName = $originOwnerName;
        $this->originUsername = $originUsername;
        $this->credentials = $credentials;
        $this->setupInformation = $setupInformation;
        $this->secrets = $secrets;
        $this->authenticationConfigKey = $authenticationConfigKey;
        $this->environment = $environment;
        $this->label = $label;
    }
}