---
description: Repository Information Overview
alwaysApply: true
---

# Azzam Portfolio Information

## Summary
A static personal portfolio website for **Eng. Azzam Aziz Ali**, a FullStack Web Developer. The site showcases skills, projects, and certificates. It is a single-page HTML/CSS/JS application hosted via XAMPP locally and published on GitHub Pages at `https://azz3m90.github.io/Azzam-portfolio/`.

## Structure
```
Azzam-portfolio/
├── index.html          # Single entry point — entire portfolio SPA
├── favicon.png         # Site favicon
├── css/
│   ├── styles.css      # Main custom stylesheet (1467 lines)
│   ├── all.min.css     # Font Awesome icons (minified)
│   └── devicon.min.css # Developer icons font
├── js/
│   ├── script.js       # Main interactivity script
│   ├── axios.min.js    # Axios HTTP client (minified)
│   └── axios.min.js.map
├── images/             # All portfolio images, skill icons, project screenshots
├── cv/                 # Certificates and CV PDFs organized by category
│   ├── WebDevelopment/ # Web dev certificates (React, Laravel, SEO, etc.)
│   ├── AndroidDevelopment/
│   ├── controlling/
│   ├── LinkedIn/
│   ├── Networking/
│   └── Skills/
└── jquery.tagcanvas.js # Tag cloud library for skills visualization
```

## Language & Runtime
**Language**: HTML5, CSS3, Vanilla JavaScript (ES6+)  
**Runtime**: Browser-based — no server-side runtime required  
**Build System**: None — static files served directly  
**Package Manager**: None — all dependencies are vendored/CDN-linked

## Dependencies
**Vendored/Local Libraries**:
- `axios.min.js` — HTTP client for API requests
- `jquery.tagcanvas.js` — Interactive 3D tag cloud for skills section

**CDN / External Resources**:
- Google Fonts: Poppins, Roboto, Saira Stencil One
- Font Awesome (`all.min.css`)
- Devicon (`devicon.min.css`)

## Main Files
- **Entry Point**: `index.html` — full single-page portfolio
- **Styling**: `css/styles.css` — custom CSS with CSS variables, dark/light theme support
- **Logic**: `js/script.js` — handles sticky header, navbar toggle, skills tab toggle, dark/light theme (persisted via `localStorage`), certificate section toggle

## Key Features (from code)
- **Dark/Light theme toggle** with `localStorage` persistence
- **Sticky header** and scroll-to-top button
- **Skills tab toggle** (technical vs. other skills)
- **Certificate category toggle**
- **Responsive design** (meta viewport, multiple hero banner image sizes)
- **SEO optimized** — Open Graph, Twitter Cards, Schema.org JSON-LD structured data

## Hosting & Deployment
- **Local**: XAMPP (`c:\xampp\htdocs\Azzam-portfolio`)
- **Production**: GitHub Pages — `https://azz3m90.github.io/Azzam-portfolio/`
- **Version Control**: Git (`master` branch, remote `origin`)

> No build step, bundler, test framework, or Docker configuration is present. Deploy by pushing to the `master` branch on GitHub.
