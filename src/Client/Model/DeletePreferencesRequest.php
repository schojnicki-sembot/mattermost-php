<?php

namespace CedricZiel\MattermostPhp\Client\Model;

class DeletePreferencesRequest
{
    public function __construct(
        /**
         * @var []
         */
        public array $items,
    ) {
    }
}