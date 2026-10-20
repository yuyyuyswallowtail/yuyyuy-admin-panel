# 04 - Dashboard, Profile, Active Sessions
Branch: `feat/04-dashboard-profile-sessions`

## Scope
- Dashboard: summary cards (users by status, articles by status, recent activity) shown according to permissions.
- Profile (active): edit first/last name, bio, region (searchable select of all countries), birthday, phone, avatar upload (validated, resized, old file removed), email change (re-verify), password change.
- Active Sessions: list the user's sessions from the `sessions` table (device, browser, IP, last active, current marked), revoke a single session, revoke all other sessions (password confirmation required).
- Admin with `users.view` can view another user's sessions and revoke them.

## Tests
Profile update, avatar handling, validation, session listing/revocation, ownership authorization, permission-gated dashboard widgets.

## Commit
`feat: add dashboard, profile, active sessions`
