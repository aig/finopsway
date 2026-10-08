# finopsway

Marketing site for the FinOpsWay browser extension. PHP pages and CSS in
[public/](public/), no build step. Each page is an `index.php`; serve locally with
`php -S localhost:8000 -t public`.

## Writing style

- **Never use em dashes, en dashes or double hyphens in prose.** Not the
  characters themselves, not their HTML entities (`&mdash;`, `&ndash;`), not
  two hyphens in a row. Use a single hyphen `-` instead, or rewrite with a
  comma, colon or full stop. This applies to page copy, commit messages, PR
  descriptions and anything else written here. It does not apply to code, where
  two hyphens are syntax: CSS custom properties (`--brand`), CLI flags
  (`--watch`), BEM modifiers (`block--modifier`) and HTML comments stay as they
  are.
- Short sentences. Concrete claims about what the extension shows, not FinOps
  theory.

## Conventions

- Shared markup lives once in `public/includes/`. `header.php` opens the
  document (doctype, `<head>`, `<body>`, masthead) and `footer.php` closes it.
  Each page sets a `$page` array (title, description, path, optional Open
  Graph, article and JSON-LD fields) and includes both; the key list is at the
  top of `header.php`. Only the home page sets `'compact' => false`.
- Bump the `?v=NNN` cache-buster in `public/includes/header.php` when
  `styles.css` or `menu.js` changes. Page-only assets go in `$page['styles']`
  or `$page['scripts']` with their own cache-buster.
- Section copy and its styles live together: markup in `public/index.php`,
  styles appended near the related block in `public/styles.css`.
