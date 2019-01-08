<?php

namespace Formapro\TelegramBot;

use function Makasim\Values\get_value;

class User
{
    private $values = [];

    private $objects = [];

    public function getId(): int
    {
        return get_value($this, 'id');
    }
}
