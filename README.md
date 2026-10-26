# Bali Cebelok Gesiuh

Static one-page landing site for the traditional coconut oil class. React + Vite, no backend.

```bash
npm install
npm run dev       # local dev server
npm run build     # outputs static files to dist/
npm run preview   # serve dist/ locally
```

- Page content lives in `src/App.jsx` (steps, inclusions, class details are arrays at the top).
- Styles and color tokens are in `src/index.css`.
- Photos are in `public/images/`, resized to max 1600px. Resize new photos before adding them.

Deploy: upload the contents of `dist/` to any static host (Netlify, Vercel, Cloudflare Pages, GitHub Pages, shared hosting).
