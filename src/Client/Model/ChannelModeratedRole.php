<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class ChannelModeratedRole
{
    public function __construct(
        public ?bool $value = null,
        public ?bool $enabled = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): static
    {
        $object = new static(
            value: isset($data['value']) ? $data['value'] : null,
            enabled: isset($data['enabled']) ? $data['enabled'] : null,
        );
        return $object;
    }
}