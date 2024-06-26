<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class TeamExists
{
    public function __construct(
        public ?bool $exists = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): TeamExists {
        $object = new self(
            exists: isset($data['exists']) ? $data['exists'] : null,
        );
        return $object;
    }
}
