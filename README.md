# DistroManager — Frontend

## Stack
- PHP (HTML shell only, no PHP logic in this frontend build)
- Tailwind CSS v3 with PostCSS
- Vanilla JS ES6+

## Prerequisites
- Node.js LTS (v18 or v20) — works on Windows and Ubuntu
- npm v8+

## Setup
```bash
cd distro-system
npm install
npm run build       # production build
npm run dev         # watch mode during development
```

## Pages
| File | Route | Description |
|------|-------|-------------|
| login.php | /login | Login with role selector |
| dashboard.php | /dashboard | Business overview |
| sales.php | /sales | Sales records + entry drawer |
| purchases.php | /purchases | Purchase orders |
| stock.php | /stock | Stock levels + dispatch |
| pos.php | /pos | Mobile POS for drivers |
| reports.php | /reports | Analytics & reporting |
| accounting.php | /accounting | Cash book & expenses |
| logistics.php | /logistics | Drivers & reconciliation |

## Light/Dark Mode
Theme persisted in localStorage key "theme". Toggle button in sidebar and login page.

## Notes
- All data is dummy/hardcoded for frontend demo
- No PHP logic — connect backend separately
- CSS compiled from src/css/app.css → public/css/app.css