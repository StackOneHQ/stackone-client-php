<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class LinkedAccountMeta
{
    /**
     *
     * @var string $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    public string $provider;

    /**
     *
     * @var LinkedAccountMetaCategory $category
     */
    #[\JMS\Serializer\Annotation\SerializedName('category')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\LinkedAccountMetaCategory')]
    public LinkedAccountMetaCategory $category;

    /**
     * $models
     *
     * @var array<string, mixed> $models
     */
    #[\JMS\Serializer\Annotation\SerializedName('models')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    public array $models;

    /**
     * @param  string  $provider
     * @param  LinkedAccountMetaCategory  $category
     * @param  array<string, mixed>  $models
     */
    public function __construct(string $provider, LinkedAccountMetaCategory $category, array $models)
    {
        $this->provider = $provider;
        $this->category = $category;
        $this->models = $models;
    }
}