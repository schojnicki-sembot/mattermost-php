<?php

namespace CedricZiel\MattermostPhp\Client\Model;

/**
 * The request is malformed.
 */
class Default400Response extends Error
{
    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): Default400Response {
        $object = new self(
        );
        return $object;
    }
}
