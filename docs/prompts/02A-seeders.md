# 02A - Seeders
Branch: `feat/02a-seeders`

## Scope
- `PermissionSeeder` (idempotent, driven by the catalogue), `RoleSeeder`:
  - `super_admin`: all (via Gate::before, also assigned all permissions).
  - `admin`: all except `system.*` and `roles.delete`/`permissions.*` management.
  - `guest`: only public menu and `profile.view/edit` for self.
- `UserSeeder`: one user per role plus users in each status (credentials from env or documented defaults for local only).
- `ArticleSeeder` and `TagSeeder` placeholders wired once article features exist.
- `DatabaseSeeder` orchestrates in the right order and is safe to rerun.

## Tests
Seeders are idempotent, role-permission matrix matches spec, seeded users have correct roles/statuses.

## Commit
`feat: add permission, role, and user seeders`
