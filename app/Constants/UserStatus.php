<?php

namespace App\Constants;

class UserStatus
{
    const ACTIVE      = 'active';
    const BLACKLIST   = 'blacklist';

    public static function all(): array
    {
        return [self::ACTIVE, self::BLACKLIST];
    }
}