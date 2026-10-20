# 06 - Article CRUD
Branch: `feat/06-article-crud`

## Scope
- Article fields per 00-master: title, subtitle, description, thumbnail, tags, markdown content, slug (auto, unique), status, published_at.
- Markdown editor with live preview; render using league/commonmark with `html_input = strip` and `allow_unsafe_links = false` (XSS-safe).
- Multiple image upload attached to the article (`article_images`), reorderable, insertable into markdown as image syntax; validate type/size, store in public disk, clean up on force delete.
- Tags: create-on-the-fly, many-to-many, filter by tag.
- Soft delete, restore, force delete (permission gated).
- Authors can edit their own articles only if they hold `articles.edit`; admins edit all.

## Tests
CRUD, slug uniqueness, markdown sanitization (script injection stripped), image upload/removal, tag sync, soft delete/restore, authorization.

## Commit
`feat: add article crud with markdown, tags, multi-image`
