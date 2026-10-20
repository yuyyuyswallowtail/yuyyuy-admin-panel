# 01 - Foundation
Branch: `feat/01-foundation`

## Goal
Prepare project infrastructure so later features build cleanly.

## Scope
- Verify `.env.example` and `.env` use MariaDB, database sessions, database queue; ensure `php artisan migrate` succeeds (the starter-kit migrate step failed during install; diagnose and fix configuration, not by editing vendor code).
- Reusable traits/concerns: `HasUuid` (auto uuid on creating, `getRouteKeyName` = uuid).
- Enums (backed, string): `UserStatus`, `ArticleStatus`.
- App-wide layout shell with Flux sidebar/header supporting the menu structure from 00-master.
- Config file `config/menus.php` defining menu keys, labels, routes, required permission, and visibility (public/auth).
- Pest base setup: datasets, helpers (`actingAsRole()`), RefreshDatabase.

## Tests
HasUuid trait, enums (labels/values), menu config structure, helper functions.

## Commit
`feat: add project foundation, enums, uuid trait, menu config`
