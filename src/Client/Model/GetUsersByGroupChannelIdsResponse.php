<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class GetUsersByGroupChannelIdsResponse
{
    public function __construct()
    {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): GetUsersByGroupChannelIdsResponse {
        $object = new self(

        );
        return $object;
    }
}
