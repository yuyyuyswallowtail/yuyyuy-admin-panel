# 01A - User Schema, Model, Factory
Branch: `feat/01a-user-schema`

## Scope
- Modify the default users migration (or add a new one) to match the user table contract in 00-master. Add indexes on status, region, email, phone.
- `User` model: SoftDeletes, HasUuid, HasRoles (spatie), casts (status enum, birthday date, hashed password), accessors `full_name`, `image_url`, `locale` (derived from region).
- `UserFactory` with states: `active`, `nonActive`, `suspended`, `banned`, `unverified`, `withRole($role)`.
- Region helper service using symfony/intl: list all countries, validate code, map region to locale.
- Sessions table must exist (database driver).

## Tests
Migration columns, soft delete/restore, factory states, accessors, region helper (all countries present, invalid code rejected), uuid auto-generation, unique constraints.

## Commit
`feat: add user schema, model, factory, region helper`
