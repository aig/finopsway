# finopsway

Marketing site for the FinOpsWay browser extension. Static HTML and CSS in
[public/](public/), no build step: edit the files and open them in a browser.

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
- Section copy and its styles live together: markup in `public/index.html`,
  styles appended near the related block in `public/styles.css`.
