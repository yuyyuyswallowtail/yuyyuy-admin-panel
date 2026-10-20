# 05 - User CRUD
Branch: `feat/05-user-crud`

## Scope
- Livewire index with search, filters (status, role, region), sorting, pagination; show trashed with restore and force delete (force delete only `super_admin`).
- Create/edit with multi-role assignment, status change, avatar, region, password set/reset.
- Safeguards: cannot delete/demote yourself, cannot remove the last `super_admin`, admin cannot modify `super_admin`.
- All actions gated by `users.view/create/edit/delete` and policy.
- Bulk status change optional; audit via model events kept simple.

## Tests
CRUD, soft delete/restore, filters, safeguards, authorization for each role, validation.

## Commit
`feat: add user crud with soft delete and role assignment`
