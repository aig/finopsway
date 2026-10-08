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

- Bump the `?v=NNN` cache-buster on `styles.css` / `menu.js` links in every
  page that references them when the file changes.
- The site header and footer live once, in `public/includes/header.php` and
  `public/includes/footer.php`; pages include them. Set `$compact = false`
  before the header include only on the home page.
- Section copy and its styles live together: markup in `public/index.php`,
  styles appended near the related block in `public/styles.css`.
