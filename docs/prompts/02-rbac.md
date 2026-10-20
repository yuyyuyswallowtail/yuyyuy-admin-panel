# 02 - RBAC (Roles & Permissions)
Branch: `feat/02-rbac`

## Scope
- Use spatie/laravel-permission. Ensure the `roles` and `permissions` tables have soft deletes if feasible via custom models extending the package models (configured in `config/permission.php`); otherwise document the limitation.
- Permission catalogue generated from config: for each resource (`users`, `articles`, `roles`, `permissions`, `system`) create `view/create/edit/delete`; for each menu key create `menu.{key}.access`.
- `Gate::before` grants everything to `super_admin`.
- Policies: `UserPolicy`, `ArticlePolicy`, `RolePolicy` mapping to permissions.
- Middleware: `EnsureUserIsActive` (blocks suspended/banned/non_active with a clear message and logs out), `permission`/`role` aliases registered.
- Support multi-role users and custom roles with arbitrary permission sets.
- Blade/Livewire helpers: `@can`, menu filtering through `menu.{key}.access`.

## Tests
Each permission check, multi-role union of permissions, custom role creation, super_admin bypass, menu visibility per role, status middleware for all four statuses, policy per action.

## Commit
`feat: add rbac with permissions, policies, status middleware`
