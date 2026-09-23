# Kenneth Tannery — personal site

Static portfolio and resume site for [Kenneth Tannery](https://github.com/Kenneth-Tannery): about, skills, experience, project write-ups, and contact.

Live source: [Kenneth-Tannery/kennethtannery.my](https://github.com/Kenneth-Tannery/kennethtannery.my)

## What you get

- Single-page home (`index.html`) with hero, about, skills, resume, portfolio, and contact
- Project detail pages under `portfolio/`
- Bootstrap 5 layout (MyResume template) plus vendor assets in `assets/`

Contact uses `mailto:` rather than a PHP mailer, so the site can be hosted on GitHub Pages or any static host.

## Run locally

No build step. From the repo root:

```bash
# Python 3
python -m http.server 8080
```

Then open `http://localhost:8080`.

Any other static server (VS Code Live Server, `npx serve`, etc.) works the same way.

## Layout

```
index.html              Home / resume page
starter-page.html       Extra starter layout from the template
portfolio/              Individual project pages
assets/css              Site styles
assets/js               Header, scroll, and animation behaviour
assets/img              Photos and portfolio images
assets/vendor           Bootstrap, AOS, GLightbox, and related libraries
forms/contact.php       Legacy PHP handler (not used by the live form)
```

## Branches

| Branch | Role |
| --- | --- |
| `main` | Production |
| `feature/frontend` | Working branch for site updates |

There is no separate `staging` branch. `feature/frontend` is the line used for frontend work before it lands on `main`.
