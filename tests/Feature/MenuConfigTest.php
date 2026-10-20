<?php

test('menu config has public and auth-required sections', function () {
    expect(config('menus'))->toHaveKeys(['public', 'auth-required']);
});

test('every menu item has the required shape', function (string $section, string $visibility) {
    foreach (config("menus.{$section}") as $key => $item) {
        expect($item)->toHaveKeys(['key', 'label', 'route', 'permission', 'visibility'])
            ->and($item['key'])->toBe($key)
            ->and($item['visibility'])->toBe($visibility);
    }
})->with([
    'public' => ['public', 'public'],
    'auth' => ['auth-required', 'auth'],
]);

test('public menus need no permission', function () {
    foreach (config('menus.public') as $item) {
        expect($item['permission'])->toBeNull();
    }
});

test('auth menus use the menu.{key}.access permission', function () {
    foreach (config('menus.auth-required') as $key => $item) {
        expect($item['permission'])->toBe("menu.{$key}.access");
    }
});

test('menu keys are unique across sections', function () {
    $keys = array_merge(
        array_keys(config('menus.public')),
        array_keys(config('menus.auth-required')),
    );

    expect($keys)->toBe(array_values(array_unique($keys)));
});
