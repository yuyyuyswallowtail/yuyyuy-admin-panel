<?php

use App\Models\User;
use Illuminate\Support\Str;

test('uuid is generated when a user is created', function () {
    $user = User::factory()->create();

    expect(Str::isUuid($user->uuid))->toBeTrue();
});

test('each user gets a different uuid', function () {
    [$a, $b] = User::factory()->count(2)->create();

    expect($a->uuid)->not->toBe($b->uuid);
});

test('a manually set uuid is preserved', function () {
    $uuid = (string) Str::uuid();

    $user = User::factory()->create(['uuid' => $uuid]);

    expect($user->uuid)->toBe($uuid);
});

test('route key is the uuid', function () {
    $user = User::factory()->create();

    expect($user->getRouteKeyName())->toBe('uuid')
        ->and($user->getRouteKey())->toBe($user->uuid);
});

test('route binding resolves by uuid and not by id', function () {
    $user = User::factory()->create();

    expect((new User)->resolveRouteBinding($user->uuid)?->is($user))->toBeTrue()
        ->and((new User)->resolveRouteBinding((string) $user->id))->toBeNull();
});
