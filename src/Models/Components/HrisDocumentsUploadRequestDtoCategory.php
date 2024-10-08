<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisDocumentsUploadRequestDtoCategory - The category to be associated with the file to be uploaded. Id will take precedence over name. */
class HrisDocumentsUploadRequestDtoCategory
{
    /**
     * The category name to associate with the file
     *
     * @var ?HrisDocumentsUploadRequestDtoCategoryValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisDocumentsUploadRequestDtoCategoryValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisDocumentsUploadRequestDtoCategoryValue $value = null;

    /**
     * The provider specific category for associating uploaded files, if provided, the value will be ignored.
     *
     * @var ?string $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceValue = null;

    /**
     * @param  ?HrisDocumentsUploadRequestDtoCategoryValue  $value
     * @param  ?string  $sourceValue
     */
    public function __construct(?HrisDocumentsUploadRequestDtoCategoryValue $value = null, ?string $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}