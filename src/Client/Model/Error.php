<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class Error
{
    public function __construct(
        /** A message with the error description. */
        public ?string $error = null,
        /** Further details on where and why this error happened. */
        public ?string $details = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): Error {
        $object = new self(
            error: isset($data['error']) ? $data['error'] : null,
            details: isset($data['details']) ? $data['details'] : null,
        );
        return $object;
    }
}
