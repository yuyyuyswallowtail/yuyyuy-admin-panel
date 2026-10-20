# 00 - Master Context (read first in every session)

## Role
You are a senior Laravel engineer building `yuyyuy-admin-panel`: an RBAC admin panel with a public site.

## Stack (already installed, do not change)
PHP 8.3+, Laravel 13, Livewire 4 (single-file components), Flux UI, Fortify (built-in auth), Pest 5, Larastan, Pint, Blaze, Laravel Boost, MariaDB.
Packages the owner installs manually: spatie/laravel-permission, league/commonmark, symfony/intl, intervention/image-laravel.
NEVER run composer/npm installs yourself. If a package is needed, print the exact command and stop so the owner can run it.

## Mandatory skills (Laravel Boost, in .claude/skills/)
Before writing code, load and follow: laravel-best-practices, livewire-development, fluxui-development, fortify-development, tailwindcss-development, testing-best-practices, blaze-optimize, infer-conventions. Mention which skills you applied at the end of each session.

## Global rules
- Follow existing project conventions; infer them first (infer-conventions).
- One feature = one git branch (`feat/<prefix>-<slug>`) = one prompt file. Never mix features in one branch.
- Every function/action/component method gets unit/feature tests (Pest). No feature is done without green tests.
- Every entity table has `created_at`, `updated_at`, `deleted_at` (SoftDeletes). Pivot tables are exempt from soft deletes but keep timestamps.
- Use Form Requests or Livewire form objects for validation. Use factories and seeders for all data.
- Authorization via policies + permissions only; never hardcode role names in views (only `super_admin` bypass in Gate::before).
- Keep controllers/components thin; put logic in action/service classes.
- Run `composer lint`, `composer types:check`, and `php artisan test` before finishing.

## Domain contract
Roles: `super_admin`, `admin`, `guest`. Users may have multiple roles; roles may have multiple permissions; custom roles can be created at runtime.
Permission naming: `{resource}.{action}` with actions `view`, `create`, `edit`, `delete`; plus menu access permissions `menu.{menu_key}.access`.
User status enum: `active`, `non_active`, `suspended`, `banned`. Only `active` users can authenticate.

User table: id, uuid (unique, used in routes), first_name, last_name, bio (nullable), region (ISO 3166-1 alpha-2, nullable, all world countries from symfony/intl; drives locale for auto-translation), birthday (nullable), phone (nullable, unique), image (nullable), email (unique), password (hashed; no separate salt column, the hash embeds the salt), status, email_verified_at, remember_token, timestamps, deleted_at.

Article table: id, uuid, user_id (author), title, subtitle, description, thumbnail, content (markdown), slug (unique), status (`draft`, `published`), published_at, timestamps, deleted_at.
Tags: `tags` (name, slug, soft deletes) + `article_tag` pivot. Article images: `article_images` (article_id, path, alt, sort_order, soft deletes) for multiple images embedded in markdown.

Menus: Public: Home, About, Article. Auth-required: Dashboard, Profile (active), Active Sessions, Users CRUD, Articles CRUD, System.

## Session workflow
1. Create the branch named in the session file.
2. Implement only that session's scope.
3. Write tests alongside code.
4. Run lint, types, tests.
5. Commit with the message given in the session file; do not push or merge unless told.

## Focus rules
- Only touch files inside this Laravel project. Never inspect Docker, system services, or the host.
- Do not diagnose infrastructure unless the session file explicitly asks for it.
- Prefer writing code over investigating. If blocked for more than two attempts, stop and report the blocker.
- Keep each reasoning step short; act, then verify.

## Skill invocation
- Skills live in .claude/skills/<name>/SKILL.md and are named without any prefix.
- Call the Skill tool with the bare name (e.g. `laravel-best-practices`). Never use `laravel-boost:`.
- If the Skill tool reports an unknown skill, Read .claude/skills/<name>/SKILL.md directly.
