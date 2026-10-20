<?php

use App\Models\User;
use Illuminate\Support\Facades\Gate;

test('sidebar shows menu items whose routes exist', function () {
    Gate::before(fn () => true);

    $this->actingAs(User::factory()->create())
        ->get(route('dashboard'))
        ->assertOk()
        ->assertSee('data-test="menu-dashboard"', false)
        ->assertSee('data-test="menu-profile"', false);
});

test('sidebar skips items whose route does not exist', function () {
    Gate::before(fn () => true);

    $this->actingAs(User::factory()->create())
        ->get(route('dashboard'))
        ->assertDontSee('data-test="menu-users"', false)
        ->assertDontSee('data-test="menu-system"', false);
});

test('sidebar hides items when the permission is not granted', function () {
    $this->actingAs(User::factory()->create())
        ->get(route('dashboard'))
        ->assertOk()
        ->assertDontSee('data-test="menu-dashboard"', false);
});
