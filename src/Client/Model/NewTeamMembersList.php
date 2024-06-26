<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class NewTeamMembersList
{
    public function __construct(
        /** Indicates if there is another page of new team members that can be fetched. */
        public ?bool $has_next = null,
        /** List of new team members. */
        public ?array $items = null,
        /** The total count of new team members for the given time range. */
        public ?int $total_count = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): NewTeamMembersList {
        $object = new self(
            has_next: isset($data['has_next']) ? $data['has_next'] : null,
            items: isset($data['items']) ? $data['items'] : null,
            total_count: isset($data['total_count']) ? $data['total_count'] : null,
        );
        return $object;
    }
}
