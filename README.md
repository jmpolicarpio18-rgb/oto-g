# OtoGOAT PHP Website Starter

This package is a basic PHP website for GoDaddy shared hosting. It is not a React, Vite, or TypeScript project.

## What is included

- PHP pages: index.php, services.php, booking.php, branches.php, gallery.php, about.php, contact.php
- Reusable PHP includes: header, nav, footer, loader, booking form, config
- CSS loading animation for the OtoGOAT logo concept
- JavaScript for loader hiding, mobile navigation, and scroll reveal
- Booking form handler with email send and CSV backup

## Upload to GoDaddy

1. Unzip this package.
2. Upload the contents of the folder into `public_html`.
3. Make sure `index.php` is directly inside `public_html`.
4. Edit `includes/config.php` and update the email, Facebook, Messenger, phone numbers, and branch details.
5. Test `booking.php` and check `leads/booking-leads.csv` after submitting a test inquiry.

## Important

If Google AI Studio creates files like App.tsx, main.tsx, package.json, vite.config.ts, or src/, it created a React/Vite project. For GoDaddy basic PHP hosting, use this PHP package instead.

## Loader files

Main loader include:

- `includes/loader.php`

Loader CSS:

- `assets/css/style.css` under the section `OtoGOAT Loading Animation`

Loader JavaScript:

- `assets/js/main.js`

## Google AI Studio prompt to avoid React

Create a traditional PHP static website only. Do not use React, TypeScript, Vite, Node.js, Next.js, npm, package.json, or src/App.tsx. Build PHP files that can run on basic GoDaddy shared hosting. Use index.php, includes/header.php, includes/nav.php, includes/footer.php, assets/css/style.css, assets/js/main.js, and PHP include statements. Create an OtoGOAT loading animation using only HTML, CSS, and vanilla JavaScript.
