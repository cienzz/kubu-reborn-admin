<?php

namespace App\Constants;

class UserRole
{
    const ADMIN     = 'admin';
    const MEMBER    = 'member';

    public static function all(): array
    {
        return [self::ADMIN, self::MEMBER];
    }
}