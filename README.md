# Seoind WordPress Theme

A modern, fast, and fully customizable WordPress theme for online gaming and slot sites.

## Features

- ✅ Fully Responsive Design
- ✅ WordPress Best Practices
- ✅ Customizer Integration
- ✅ Widget Areas (Sidebar, Footer)
- ✅ Navigation Menus
- ✅ SEO Optimized
- ✅ Security Hardened
- ✅ Multilingual Ready (i18n)
- ✅ Clean & Organized Code
- ✅ Easy to Extend

## Installation

1. Download the theme
2. Upload to `/wp-content/themes/seoind/`
3. Activate in WordPress Admin
4. Configure settings in Customizer

## Theme Customization

Go to **Appearance → Customize → Seoind Settings** to:
- Set external links (Register, Login, Livechat)
- Customize theme options

## File Structure

```
seoind/
├── assets/
│   ├── style.css
│   └── script.js
├── template-parts/
│   └── games-grid.php
├── images/
│   ├── banner/
│   ├── game/
│   └── payment/
├── languages/
├── functions.php
├── header.php
├── footer.php
├── index.php
├── single.php
├── archive.php
├── 404.php
├── searchform.php
├── comments.php
└── README.md
```

## Development

### Enqueuing Assets

All CSS and JS files are properly enqueued in `functions.php` using WordPress standards.

### Security

- All user input is escaped with `esc_html()`, `esc_url()`, `esc_attr()`
- Nonce verification for AJAX requests
- SQL injection prevention through WordPress APIs

### Localization

The theme is ready for translation with text domain `seoind`.

## Support

For support, visit: https://seoind.online/

## License

GPL v2 or later
