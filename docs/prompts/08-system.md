# 08 - System
Branch: `feat/08-system`

## Scope
- Role management: create/edit/delete custom roles, assign permissions through a grouped matrix (resource x action, plus menu access); protect built-in roles from deletion/rename.
- Permission viewer (read-only list, regenerated from the catalogue by an artisan command `rbac:sync`).
- App settings (name, description, logo) stored in a `settings` table with soft deletes and cached.
- System menu visible only with `menu.system.access`.

## Tests
Role CRUD, matrix sync, built-in protection, `rbac:sync` idempotence, settings cache invalidation, authorization.

## Commit
`feat: add system role matrix and app settings`
