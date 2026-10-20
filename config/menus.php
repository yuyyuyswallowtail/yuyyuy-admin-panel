<?php

return [
    'public' => [
        'home' => ['key' => 'home', 'label' => 'Home', 'route' => 'home', 'permission' => null, 'visibility' => 'public'],
        'about' => ['key' => 'about', 'label' => 'About', 'route' => 'about', 'permission' => null, 'visibility' => 'public'],
        'articles' => ['key' => 'articles', 'label' => 'Articles', 'route' => 'articles.index', 'permission' => null, 'visibility' => 'public'],
    ],

    'auth-required' => [
        'dashboard' => ['key' => 'dashboard', 'label' => 'Dashboard', 'route' => 'dashboard', 'permission' => 'menu.dashboard.access', 'visibility' => 'auth'],
        'profile' => ['key' => 'profile', 'label' => 'Profile', 'route' => 'profile.edit', 'permission' => 'menu.profile.access', 'visibility' => 'auth'],
        'active_sessions' => ['key' => 'active_sessions', 'label' => 'Active Sessions', 'route' => 'sessions.index', 'permission' => 'menu.active_sessions.access', 'visibility' => 'auth'],
        'users' => ['key' => 'users', 'label' => 'Users', 'route' => 'users.index', 'permission' => 'menu.users.access', 'visibility' => 'auth'],
        'manage_articles' => ['key' => 'manage_articles', 'label' => 'Manage Articles', 'route' => 'admin.articles.index', 'permission' => 'menu.manage_articles.access', 'visibility' => 'auth'],
        'system' => ['key' => 'system', 'label' => 'System', 'route' => 'system.index', 'permission' => 'menu.system.access', 'visibility' => 'auth'],
    ],
];
