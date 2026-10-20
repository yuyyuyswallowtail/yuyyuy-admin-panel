# 03 - Authentication
Branch: `feat/03-auth`

## Scope (use fortify-development and livewire-development skills)
- Login, register (new users get `guest` role and `active` status unless email verification is required), logout, email verification, password confirmation.
- Forgot password via signed email link and reset form.
- Forgot email (account recovery): user submits phone number; system sends a 6-digit OTP; after verification, show the masked email (e.g. `y***@gmail.com`) only.
- OTP system: `otps` table (user_id nullable, channel, purpose, code hash, expires_at, attempts, consumed_at, soft deletes), 6 digits, 5-minute expiry, max 5 attempts, resend throttle, constant-time compare, stored hashed.
- OTP also usable as optional login second step; keep Fortify 2FA/passkeys working.
- Rate limiting on every auth endpoint; generic error messages to prevent account enumeration.
- Reject login for non-active statuses with distinct, safe messages.
- Notifications are queued; provide a log-based phone channel for local development.

## Validation
Form requests for each flow: strong password rules, unique email/phone, valid region code, birthday in the past.

## Tests
Each flow success and failure, throttling, OTP expiry/attempts/reuse, enumeration safety, status-blocked login, registration role assignment.

## Commit
`feat: add auth flows, otp, forgot password and forgot email`
