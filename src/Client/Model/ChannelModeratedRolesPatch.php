<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class ChannelModeratedRolesPatch
{
    public function __construct(
        public ?bool $guests = null,
        public ?bool $members = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): ChannelModeratedRolesPatch {
        $object = new self(
            guests: isset($data['guests']) ? $data['guests'] : null,
            members: isset($data['members']) ? $data['members'] : null,
        );
        return $object;
    }
}
