<?php

use App\UserStatus;

test('UserStatus enum has correct values', function () {
    expect(UserStatus::ACTIVE->value)->toBe('active');
    expect(UserStatus::NON_ACTIVE->value)->toBe('non_active');
    expect(UserStatus::SUSPENDED->value)->toBe('suspended');
    expect(UserStatus::BANNED->value)->toBe('banned');
});

test('UserStatus enum has correct labels', function () {
    expect(UserStatus::ACTIVE->label())->toBe('Active');
    expect(UserStatus::NON_ACTIVE->label())->toBe('Non-Active');
    expect(UserStatus::SUSPENDED->label())->toBe('Suspended');
    expect(UserStatus::BANNED->label())->toBe('Banned');
});

test('UserStatus enum can authenticate only when active', function () {
    expect(UserStatus::ACTIVE->canAuthenticate())->toBeTrue();
    expect(UserStatus::NON_ACTIVE->canAuthenticate())->toBeFalse();
    expect(UserStatus::SUSPENDED->canAuthenticate())->toBeFalse();
    expect(UserStatus::BANNED->canAuthenticate())->toBeFalse();
});
