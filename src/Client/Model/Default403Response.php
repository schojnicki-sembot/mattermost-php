<?php

namespace CedricZiel\MattermostPhp\Client\Model;

/**
 * Access to the resource is forbidden for this user.
 */
class Default403Response extends Error
{
    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): Default403Response {
        $object = new self(
        );
        return $object;
    }
}
