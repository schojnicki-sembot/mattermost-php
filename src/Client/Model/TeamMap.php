<?php

namespace CedricZiel\MattermostPhp\Client\Model;

/**
 * A mapping of teamIds to teams.
 */
class TeamMap
{
    public function __construct(
        public $team_id = null,
    ) {
    }

    public static function hydrate(
        /** @param array<string, mixed> $data */
        ?array $data,
    ): TeamMap {
        $object = new self(
            team_id: isset($data['team_id']) ? $data['team_id'] : null,
        );
        return $object;
    }
}
