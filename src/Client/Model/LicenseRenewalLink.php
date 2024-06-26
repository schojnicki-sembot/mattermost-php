<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class LicenseRenewalLink
{
    public function __construct(
        /** License renewal link */
        public ?string $renewal_link = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): LicenseRenewalLink {
        $object = new self(
            renewal_link: isset($data['renewal_link']) ? $data['renewal_link'] : null,
        );
        return $object;
    }
}
