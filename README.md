# IronPDF for C++ — Beta Program Landing Page

A single-page marketing site for the IronPDF C++ beta program, built with CodeIgniter 4. The page collects early-access sign-ups and presents information about the upcoming C++ PDF library.

## Tech Stack

| Layer | Technology |
|---|---|
| Language | PHP 8.2+ |
| Framework | CodeIgniter 4.7 |
| CSS Framework | Bootstrap 5.3.2 |
| Custom Styles | Plain CSS (style.css + queries.css) |
| Fonts | Gotham (self-hosted) / Montserrat (Google Fonts fallback) |
| Content | JSON data source (`app/Data/content.json`) |
| Tests | PHPUnit 10.5 |

## Project Structure

```
ironpdf-cpp-beta/
├── app/
│   ├── Config/
│   │   └── Routes.php          # GET / → Home::index()
│   ├── Controllers/
│   │   └── Home.php            # Loads content.json, passes data to view
│   ├── Data/
│   │   └── content.json        # All page copy (hero, features, CTAs, etc.)
│   └── Views/
│       └── landing.php         # Bootstrap 5 landing page template
├── public/
│   ├── css/
│   │   ├── style.css           # Base styles and component styles
│   │   └── queries.css         # Responsive breakpoint overrides
│   ├── images/                 # SVGs and static assets
│   └── index.php               # Front controller (web root)
├── tests/
│   └── unit/
│       └── HealthTest.php
├── env                         # Environment variable template
└── composer.json
```

## Setup

### Requirements

- PHP 8.2 or higher
- PHP extensions: `intl`, `mbstring`, `json`
- Composer

### Installation

1. Clone the repository:
   ```bash
   git clone <repo-url>
   cd ironpdf-cpp-beta
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Configure the environment:
   ```bash
   cp env .env
   ```
   Open `.env` and set your base URL:
   ```
   app.baseURL = 'http://localhost:8080/'
   ```

4. Point your web server document root to the `public/` directory.

   **Using PHP's built-in server (development only):**
   ```bash
   php -S localhost:8080 -t public
   ```

5. Visit `http://localhost:8080` in your browser.

### Updating Content

All page copy lives in `app/Data/content.json`. Edit that file to change hero text, feature descriptions, product cards, CTAs, or navigation links — no view changes required.

## Running Tests

```bash
vendor/bin/phpunit
```

Run a specific test file:
```bash
vendor/bin/phpunit tests/unit/HealthTest.php
```

Run with coverage report:
```bash
vendor/bin/phpunit --colors --coverage-text=build/logs/coverage.txt --coverage-html=build/logs/html
```

## Architecture Notes

- **Data-driven:** All page content is sourced from `content.json`, decoded by the `Home` controller, and passed as variables to the `landing` view. Changing page text means editing JSON only.
- **No database:** The app is purely static content delivery — no models or database connections.
- **Responsive:** Mobile-first responsive styles are split into `queries.css` covering five breakpoints (xs, sm, md, lg, xl, xxl) aligned to the Bootstrap 5 grid.
- **Accessibility:** Output is encoded with `esc()`, interactive elements have ARIA labels, and the hamburger nav uses `aria-expanded` state.
