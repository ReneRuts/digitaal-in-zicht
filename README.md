# Digitaal in Zicht

> A website that maps what people minimally need to take part in the digital society, and what Flemish research and data already tell us about it.

---

## 📖 About the project

**Digitaal in Zicht** was made by a team of six final-year students at **Arteveldehogeschool** (domain _Mens en Samenleving_): one student Pedagogie van het Jonge Kind, one Sociaal Werk and four Toegepaste Psychologie. The assignment comes from the expertise network of the Arteveldehogeschool, with Tom Seymoens (research line _E-inclusie en Mediawijsheid_) as case provider. The guiding question of that team is: _"How do we make sure digitalisation excludes no one?"_

### The research question

> _Which possible minimum standards for digital participation can be identified on the basis of existing knowledge and relevant frameworks? To what extent do existing Flemish data and measuring instruments make it possible to map these standards?_

The site is the **prototype** that answers this question. It gives experts a clear overview of what already exists around digital minimum needs, where the knowledge gaps are, and which gaps deserve priority in follow-up research.

### The five dimensions

Everything on the site is organised around five dimensions of digital inclusion, each with its own colour:

| Dimension                      | Colour    | What it is about                                                                                             |
| ------------------------------ | --------- | ------------------------------------------------------------------------------------------------------------ |
| **Digitale toegang**           | 🟢 Green  | Devices, internet connection, quality and affordability                                                      |
| **Digitale competenties**      | 🟡 Yellow | Knowledge, skills and attitudes to use digital tools safely and independently                                |
| **Behoeftes**                  | 🩷 Pink   | The concrete support and conditions people (and households) need to participate without barriers             |
| **Inclusieve dienstverlening** | 🔴 Red    | Digital services that are accessible, understandable and usable for everyone, with a non-digital alternative |
| **Ondersteuningsnetwerk**      | 🔵 Blue   | Informal help (family, friends) and formal help (Digibanken, Digipunten, OCMW, libraries)                    |

Each dimension page contains three cards:

1. **Onderzocht / Bevindingen**: what research has found (with sources such as imec.digimeter 2025, Barometer Digitale Inclusie 2026, Referentiebudgetten, Mediawijs).
2. **Hiaten**: what is still unknown or not measured, based on interviews with experts (OCMW Brugge, VVSG, Mediawijs, imec-mict-UGent, Thomas More).
3. **Minimumstandaarden**: the proposed minimum standards, derived from the findings.

### Pages

| Page              | URL                   | Content                                                                                                                                                                |
| ----------------- | --------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Home**          | `/`                   | The interactive "flower" with the five dimensions, plus a strip showing which dimensions are most and least researched                                                 |
| **Wie zijn wij?** | `/wie-zijn-wij`       | The team, the assignment, the context and the research question                                                                                                        |
| **Thema's**       | `/themas/{dimension}` | One page per dimension (see above)                                                                                                                                     |
| **MDLS**          | `/mdls`               | Explanation of the _Minimum Digital Living Standards_ (UK reference framework) and a link to the official MDLS site                                                    |
| **Achtergrond**   | `/achtergrond`        | The research process (human-centered design and the double-diamond model), the full reference list and a link to the data matrix                                       |
| **Data Matrix**   | `/matrix`             | An embedded Google Sheet with all findings, gaps and standards per theme, also downloadable as Excel. Meant as an open database that can be extended with new research |

### Research process in short

1. **Discover**: literature study on three levels (research, practice and policy), followed by a second, more focused literature study.
2. **Field research**: interviews with five experts.
3. **Define**: data analysis and a "How might we" question: _how can we give experts a clear overview of what exists around digital minimum needs, where the knowledge gaps are, and which deserve priority?_
4. **Ideate and prototype**: brainstorming and design requirements, resulting in this website.

---

## 🛠️ Technical overview

### Stack

- **Laravel 13** (PHP 8.3+) with Blade templates
- **Tailwind CSS 4** via Vite
- **Alpine.js** for the dropdown and mobile menu
- **SQLite** (default), with the database used for sessions, cache and queue as well
- **Pest** for tests
- Site language: **Dutch** (`<html lang="nl">`)

### Project structure

```
app/
  Http/Controllers/PageController.php   Home, about, MDLS, background, matrix pages
  Models/Dimension.php                  The five dimensions (slug, name, colour, sort, research_rank)
  Models/Card.php                       Findings / gaps / standards cards (currently unused by the theme views)
  Providers/AppServiceProvider.php      Shares the dimensions with the layout (Thema's menu)
config/diz.php                          Reference list (sources) and MDLS link
database/
  migrations/                           dimensions + cards tables
  seeders/DimensionSeeder.php           Seeds the five dimensions
resources/
  views/layouts/app.blade.php           Header, navigation, footer
  views/pages/                          home, about, mdls, background, matrix
  views/themas/                         One Blade file per dimension (slug = filename)
  views/components/icon.blade.php       Inline SVG icon set (<x-icon name="..." />)
routes/web.php                          All routes
```

### How content is managed

- **Theme content** (findings, gaps, standards) is written **directly in the Blade files** in `resources/views/themas/`. Edit the `<li>` items in the relevant file to change the text.
- **The dimensions** (name, colour, order, ranking on the home page) live in `database/seeders/DimensionSeeder.php`. After changing it, run `php artisan db:seed --class=DimensionSeeder`.
- **The reference list** on the Achtergrond page lives in `config/diz.php`. Add or edit entries in the `sources` array.
- **The MDLS link** is `mdls_url` in `config/diz.php`.
- **The data matrix** is a published Google Sheet. The URLs are in `resources/views/pages/matrix.blade.php` and `background.blade.php`.

### Adding a new dimension

1. Add it to `DimensionSeeder.php` (unique `slug`, a colour from `Dimension::COLORS`).
2. Create `resources/views/themas/<slug>.blade.php` (copy an existing theme file).
3. Add an icon with the same name to `resources/views/components/icon.blade.php`.
4. Add its icon and position to the `$ico` / `$positions` arrays on `pages/home.blade.php`.
5. Run `php artisan db:seed --class=DimensionSeeder`.

> The theme route is `GET /themas/{dimension}` and uses the `slug` as route key, so the slug and the Blade filename **must match**.

### Useful commands

```bash
npm run dev                  # Vite dev server with hot reload
npm run build                # Production build of the assets
php artisan migrate:fresh --seed   # Reset the database and re-seed
php artisan test             # Run the test suite (Pest)
vendor/bin/pint              # Format the PHP code
```

---

## Run the site locally with Laravel Herd

### Prerequisites

| Tool                                     | Version                                                   | Notes                                                 |
| ---------------------------------------- | --------------------------------------------------------- | ----------------------------------------------------- |
| [Laravel Herd](https://herd.laravel.com) | latest                                                    | Provides PHP, Composer, Nginx and the `.test` domains |
| PHP                                      | **8.4 or higher** (8.3 is the minimum for the app itself) | Select it in Herd → _Settings → PHP_                  |
| Node.js                                  | **22.12+** (the repo's `.nvmrc` says `26`)                | Herd can install Node for you, or use `nvm use`       |
| Git                                      | any                                                       |                                                       |

### Steps

**1. Put the project in a folder Herd watches**

Herd serves every folder inside its "parked" directory (by default `~/Herd`). Clone or move the project there:

```bash
cd ~/Herd
git clone <repository-url> digitaal-in-zicht
cd digitaal-in-zicht
```

> Already have the project somewhere else? Run `herd link digitaal-in-zicht` inside the project folder instead.

**2. Install the PHP dependencies**

```bash
composer install
```

**3. Create your environment file and app key**

```bash
cp .env.example .env
php artisan key:generate
```

In `.env`, set the URL to the one Herd gives you:

```env
APP_URL=http://digitaal-in-zicht.test
```

**4. Create the database and fill it with the content**

The site uses SQLite, so there is nothing to install.

```bash
touch database/database.sqlite
php artisan migrate --seed
```

> ⚠️ Don't skip `--seed`. The five dimensions (colours, order, ranking) come from the database. Without them the "Thema's" menu is empty and the flower on the home page does not work.

**5. Install and build the front-end assets**

```bash
npm install
npm run build
```

While you are actively editing views or styles, run `npm run dev` instead (keep it running in a separate terminal) for live reloading.

**6. Open the site**

Go to **http://digitaal-in-zicht.test**. Optional: run `herd secure` to serve it on `https://`.

### Troubleshooting

| Problem                                       | Fix                                                                                             |
| --------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `Vite manifest not found`                     | Run `npm run build` (or `npm run dev`).                                                         |
| Empty "Thema's" menu / error on the home page | The database is not seeded. Run `php artisan migrate --seed`.                                   |
| `could not find driver` / SQLite errors       | Make sure `database/database.sqlite` exists and the `pdo_sqlite` extension is on in Herd's PHP. |
| Composer complains about the PHP version      | Switch the site to PHP 8.4 in Herd (`herd isolate 8.4`).                                        |
| Logo or images are missing                    | Check that `logo.png` and `double-diamond_model.png` are in the `public/` folder.               |
| Reset the content completely                  | `php artisan migrate:fresh --seed`                                                              |

---

## 📄 Credits

Made for students of **Arteveldehogeschool** by [https://github.com/ReneRuts](René Ruts), in cooperation with the expertise network _Mens, Samenleving & Digitalisering_. All sources are listed on the **Achtergrond** page of the site.
