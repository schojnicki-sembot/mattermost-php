<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class Channel
{
    public function __construct(
        public ?string $id = null,
        /** The time in milliseconds a channel was created */
        public ?int $create_at = null,
        /** The time in milliseconds a channel was last updated */
        public ?int $update_at = null,
        /** The time in milliseconds a channel was deleted */
        public ?int $delete_at = null,
        public ?string $team_id = null,
        public ?string $type = null,
        public ?string $display_name = null,
        public ?string $name = null,
        public ?string $header = null,
        public ?string $purpose = null,
        /** The time in milliseconds of the last post of a channel */
        public ?int $last_post_at = null,
        public ?int $total_msg_count = null,
        /** Deprecated in Mattermost 5.0 release */
        public ?int $extra_update_at = null,
        public ?string $creator_id = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): Channel {
        $object = new self(
            id: isset($data['id']) ? $data['id'] : null,
            create_at: isset($data['create_at']) ? $data['create_at'] : null,
            update_at: isset($data['update_at']) ? $data['update_at'] : null,
            delete_at: isset($data['delete_at']) ? $data['delete_at'] : null,
            team_id: isset($data['team_id']) ? $data['team_id'] : null,
            type: isset($data['type']) ? $data['type'] : null,
            display_name: isset($data['display_name']) ? $data['display_name'] : null,
            name: isset($data['name']) ? $data['name'] : null,
            header: isset($data['header']) ? $data['header'] : null,
            purpose: isset($data['purpose']) ? $data['purpose'] : null,
            last_post_at: isset($data['last_post_at']) ? $data['last_post_at'] : null,
            total_msg_count: isset($data['total_msg_count']) ? $data['total_msg_count'] : null,
            extra_update_at: isset($data['extra_update_at']) ? $data['extra_update_at'] : null,
            creator_id: isset($data['creator_id']) ? $data['creator_id'] : null,
        );
        return $object;
    }
}
