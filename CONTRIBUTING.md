# Contributing to Laravel Countries

Thank you for contributing! This guide explains how we organize branches, pull requests, and CI checks.

## Branch naming

Create branches using a **prefix folder** that describes the type of change:

| Prefix | Use for |
|--------|---------|
| `feature/` | New functionality |
| `fix/` | Bug fixes. `bug/` and `bugfix/` are accepted as aliases for backward compatibility, but please use `fix/` for new branches |
| `hotfix/` | Urgent production fixes |
| `docs/` | Documentation only |
| `chore/` | Maintenance, tooling, dependencies |
| `refactor/` | Code restructuring without behavior change |
| `test/` | Test-only changes |
| `release/` | Release preparation |

Examples:

```bash
git checkout -b feature/add-turkish-translations
git checkout -b fix/country-list-limit
git checkout -b docs/update-version-constraints
```

CI validates branch names on every pull request.

## Commits

We **encourage** [Conventional Commits](https://www.conventionalcommits.org/), but they are **not required**.

Suggested format:

```
<type>(<scope>): <short description>
```

Common types: `feat`, `fix`, `docs`, `test`, `refactor`, `chore`.

Examples:

```
feat(i18n): add Turkish language seeder
fix(seeders): correct Arabic country names
docs: document custom database connection
```

## Local checks before opening a PR

This is a **Laravel package**, not a full application. Use Composer scripts instead of `php artisan`:

```bash
composer install
composer pint        # format code (see pint.json for rules)
composer pint:check  # verify formatting (CI check)
composer test        # run Pest tests
composer check        # pint:check + test — same as CI
```

## Continuous Integration

Every pull request runs:

1. **Branch naming** — validates the branch prefix
2. **Pint** — code style (`composer pint:check`)
3. **Tests** — Pest suite on Laravel 11, 12, and 13

Workflow file: [`.github/workflows/ci.yml`](.github/workflows/ci.yml)

## Pull requests

- Target the `master` branch
- Fill in the [pull request template](.github/pull_request_template.md)
- Keep PRs focused on a single concern when possible
- Add or update tests for behavior changes
- Update documentation when user-facing behavior changes

## Translations & country data

Most contributions to this package touch country data or translations rather than application logic, so please take a bit of extra care here:

- Mention in the PR which source you used (official government portal, ISO 3166, GeoNames, etc.)
- Avoid submitting machine-translated content without a manual review pass
- If you're a native or fluent speaker of the target language, say so — it helps reviewers prioritize
- Check existing entries for the same country/locale before adding new ones, to avoid duplicates or conflicting values
- Prefer one PR per language/country over a single PR touching many locales at once

## Fork workflow

1. Fork the repository
2. Create a branch with the correct prefix (`feature/my-change`)
3. Run `composer check` locally
4. Open a PR against `master`
5. Allow maintainers to modify your branch if requested

## Questions

Open a [GitHub issue](https://github.com/lwwcas/laravel-countries/issues) or check the [documentation](https://lwwcas.github.io/laravel-countries/).
