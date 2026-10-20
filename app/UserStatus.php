<?php

namespace App;

enum UserStatus: string
{
    case ACTIVE = 'active';
    case NON_ACTIVE = 'non_active';
    case SUSPENDED = 'suspended';
    case BANNED = 'banned';

    /**
     * Get the human-readable label for the status.
     */
    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::NON_ACTIVE => 'Non-Active',
            self::SUSPENDED => 'Suspended',
            self::BANNED => 'Banned',
        };
    }

    /**
     * Check if the user can authenticate.
     */
    public function canAuthenticate(): bool
    {
        return $this === self::ACTIVE;
    }
}
