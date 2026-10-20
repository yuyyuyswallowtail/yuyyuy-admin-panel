# 07 - Public Pages
Branch: `feat/07-public-pages`

## Scope
- Home (hero, latest published articles), About, Article list (search, tag filter, pagination) and Article detail (rendered markdown, tags, author, related articles).
- Only `published` and non-trashed articles are public; drafts return 404.
- SEO: title, meta description, Open Graph from article fields.
- Responsive, accessible; follow tailwindcss-development and fluxui-development skills.
- Locale awareness: set app locale from the user's region where a translation exists; fall back to default.

## Tests
Visibility rules, 404 for drafts/trashed, pagination, search/tag filter, meta tags, guest access.

## Commit
`feat: add public home, about, article pages`
