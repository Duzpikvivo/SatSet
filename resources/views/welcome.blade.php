<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SatSet – Service AC & Elektronik</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --cream: #F5F3EF;
      --navy: #0F1F3D;
      --steel: #1E3A5F;
      --blue-acc: #2A6FBF;
      --gold: #B8962E;
      --gold-light: #D4AE4E;
      --text: #2C2C2C;
      --muted: #7A7A7A;
      --border: #DDD9D1;
      --white: #FFFFFF;
    }

    html { scroll-behavior: smooth; }
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--text);
      font-size: 15px;
      line-height: 1.7;
    }

    /* ── NAVBAR ── */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      background: rgba(15, 31, 61, 0.97);
      backdrop-filter: blur(8px);
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 48px;
      height: 68px;
      border-bottom: 1px solid rgba(42,111,191,0.25);
    }
    .nav-brand { display: flex; align-items: center; gap: 12px; }
    .nav-logo {
      width: 38px; height: 38px;
      background: var(--blue-acc);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .nav-logo svg { width: 20px; height: 20px; fill: white; }
    .nav-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px; font-weight: 600;
      color: white; letter-spacing: 0.04em;
    }
    .nav-name span { color: var(--gold-light); }
    .nav-links { display: flex; gap: 32px; list-style: none; }
    .nav-links a {
      color: rgba(255,255,255,0.72);
      text-decoration: none; font-size: 13px;
      font-weight: 400; letter-spacing: 0.07em;
      text-transform: uppercase; transition: color 0.2s;
    }
    .nav-links a:hover, .nav-links a.active { color: var(--gold-light); }
    .nav-cta {
      background: var(--blue-acc);
      color: white; padding: 9px 22px;
      font-size: 12.5px; font-weight: 500;
      letter-spacing: 0.07em; text-transform: uppercase;
      text-decoration: none; transition: background 0.2s;
      white-space: nowrap;
    }
    .nav-cta:hover { background: #1a5aa0; }

    /* Mobile nav toggle */
    .nav-toggle {
      display: none;
      flex-direction: column; gap: 5px;
      cursor: pointer; padding: 4px;
      background: none; border: none;
    }
    .nav-toggle span {
      display: block; width: 24px; height: 2px;
      background: white; transition: all 0.3s;
    }
    .nav-toggle.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .nav-toggle.open span:nth-child(2) { opacity: 0; }
    .nav-toggle.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    /* Mobile menu */
    .mobile-menu {
      display: none;
      position: fixed; top: 68px; left: 0; right: 0;
      background: rgba(15, 31, 61, 0.98);
      backdrop-filter: blur(8px);
      z-index: 99;
      padding: 24px 32px;
      border-bottom: 1px solid rgba(42,111,191,0.25);
      flex-direction: column; gap: 0;
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a {
      color: rgba(255,255,255,0.72);
      text-decoration: none; font-size: 14px;
      font-weight: 400; letter-spacing: 0.07em;
      text-transform: uppercase;
      padding: 14px 0;
      border-bottom: 1px solid rgba(255,255,255,0.07);
      transition: color 0.2s;
    }
    .mobile-menu a:last-child { border-bottom: none; }
    .mobile-menu a:hover { color: var(--gold-light); }
    .mobile-menu .mobile-cta {
      margin-top: 16px;
      background: var(--blue-acc);
      color: white; padding: 13px 22px;
      text-align: center; font-weight: 500;
      border-bottom: none;
    }

    /* ── HERO ── */
    .hero {
      min-height: 100vh;
      background: linear-gradient(150deg, #0F1F3D 0%, #1E3A5F 55%, #0F1F3D 100%);
      display: flex; flex-direction: column;
      justify-content: center; align-items: flex-start;
      padding: 120px 80px 100px;
      position: relative; overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute; inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232A6FBF' fill-opacity='0.05'%3E%3Cpath d='M0 0h40v40H0V0zm40 40h40v40H40V40zm0-40h2l-2 2V0zm0 4l4-4h2l-6 6V4zm0 4l8-8h2L40 10V8zm0 4L52 0h2L40 14v-2zm0 4L56 0h2L40 18v-2zm0 4L60 0h2L40 22v-2zm0 4L64 0h2L40 26v-2zm0 4L68 0h2L40 30v-2zm0 4L72 0h2L40 34v-2zm0 4L76 0h2L40 38v-2zm0 4L80 0v2L42 40h-2zm4 0L80 4v2L46 40h-2zm4 0L80 8v2L50 40h-2zm4 0L80 12v2L54 40h-2zm4 0L80 16v2L58 40h-2zm4 0L80 20v2L62 40h-2zm4 0L80 24v2L66 40h-2zm4 0L80 28v2L70 40h-2zm4 0L80 32v2L74 40h-2zm4 0L80 36v2L78 40h-2zm4 0L80 40h-2l2-2v2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      pointer-events: none;
    }
    .hero-img-panel {
      position: absolute;
      right: 0; top: 0; bottom: 0;
      width: 42%;
      overflow: hidden;
    }
    .hero-img-panel::before {
      content: '';
      position: absolute;
      left: 0; top: 0; bottom: 0;
      width: 180px;
      background: linear-gradient(to right, #1E3A5F, transparent);
      z-index: 1;
    }
    .hero-img-panel img {
      width: 100%; height: 100%;
      object-fit: cover; opacity: 0.35;
      filter: grayscale(30%);
    }

    .hero-tag {
      font-size: 11px; letter-spacing: 0.2em;
      text-transform: uppercase; color: var(--gold-light);
      font-weight: 500; margin-bottom: 20px;
      display: flex; align-items: center; gap: 10px;
      position: relative; z-index: 2;
    }
    .hero-tag::before {
      content: ''; width: 36px; height: 1px; background: var(--gold);
    }
    .hero h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(40px, 6.5vw, 82px);
      font-weight: 300; color: white;
      line-height: 1.06; max-width: 620px;
      margin-bottom: 24px; position: relative; z-index: 2;
    }
    .hero h1 em { font-style: italic; color: var(--gold-light); }
    .hero p {
      color: rgba(255,255,255,0.6); font-size: 16px;
      max-width: 440px; margin-bottom: 40px;
      line-height: 1.8; position: relative; z-index: 2;
    }
    .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; position: relative; z-index: 2; }
    .btn-primary {
      background: var(--blue-acc); color: white;
      padding: 14px 32px; border: none;
      font-family: 'DM Sans', sans-serif;
      font-size: 13px; font-weight: 500;
      letter-spacing: 0.08em; text-transform: uppercase;
      text-decoration: none; cursor: pointer;
      transition: background 0.2s; display: inline-block;
    }
    .btn-primary:hover { background: #1a5aa0; }
    .btn-outline {
      background: transparent; color: white;
      padding: 14px 32px;
      border: 1px solid rgba(255,255,255,0.28);
      font-family: 'DM Sans', sans-serif;
      font-size: 13px; font-weight: 500;
      letter-spacing: 0.08em; text-transform: uppercase;
      text-decoration: none; cursor: pointer;
      transition: border-color 0.2s, color 0.2s; display: inline-block;
    }
    .btn-outline:hover { border-color: var(--gold); color: var(--gold-light); }

    /* Stats bar */
    .hero-infobar {
      position: absolute; bottom: 0; left: 0; right: 0;
      background: rgba(255,255,255,0.04);
      border-top: 1px solid rgba(42,111,191,0.2);
      display: flex; z-index: 2;
    }
    .info-item {
      flex: 1; padding: 18px 32px;
      border-right: 1px solid rgba(42,111,191,0.15);
    }
    .info-item:last-child { border-right: none; }
    .info-label {
      font-size: 10px; letter-spacing: 0.15em;
      text-transform: uppercase; color: var(--gold-light); margin-bottom: 4px;
    }
    .info-value { color: white; font-size: 14px; font-weight: 300; }

    /* ── SECTIONS ── */
    section { padding: 88px 80px; }
    .section-label {
      font-size: 10.5px; letter-spacing: 0.2em;
      text-transform: uppercase; color: var(--blue-acc);
      font-weight: 500; margin-bottom: 12px;
      display: flex; align-items: center; gap: 10px;
    }
    .section-label::before {
      content: ''; width: 28px; height: 1px; background: var(--blue-acc);
    }
    .section-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(28px, 4vw, 46px);
      font-weight: 300; color: var(--navy);
      line-height: 1.15; margin-bottom: 14px;
    }
    .section-title em { font-style: italic; color: var(--gold); }
    .section-sub {
      color: var(--muted); max-width: 480px;
      font-size: 15px; margin-bottom: 52px;
    }

    /* ── LAYANAN UTAMA ── */
    .layanan-section { background: white; }
    .layanan-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
      border: 1px solid var(--border);
    }
    .layanan-card {
      border-right: 1px solid var(--border);
      overflow: hidden; position: relative;
      transition: transform 0.3s;
    }
    .layanan-card:last-child { border-right: none; }
    .layanan-card:hover .layanan-img img { transform: scale(1.04); }
    .layanan-img {
      width: 100%; height: 220px; overflow: hidden;
      position: relative;
    }
    .layanan-img img {
      width: 100%; height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
      filter: grayscale(15%);
    }
    .layanan-img-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to bottom, transparent 40%, rgba(15,31,61,0.7));
    }
    .layanan-body { padding: 28px 28px 32px; }
    .layanan-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 13px; font-weight: 600;
      color: var(--blue-acc); letter-spacing: 0.12em;
      margin-bottom: 10px;
    }
    .layanan-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 22px; font-weight: 600;
      color: var(--navy); margin-bottom: 10px; line-height: 1.25;
    }
    .layanan-desc {
      color: var(--muted); font-size: 13.5px;
      line-height: 1.75; margin-bottom: 20px;
    }
    .layanan-tags { display: flex; flex-wrap: wrap; gap: 6px; }
    .tag {
      font-size: 10.5px; font-weight: 500;
      letter-spacing: 0.08em; text-transform: uppercase;
      padding: 4px 10px;
      background: var(--cream);
      color: var(--navy);
      border: 1px solid var(--border);
    }

    /* ── SEMUA LAYANAN GRID ── */
    .all-layanan-section { background: var(--cream); }
    .all-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }
    .all-card {
      background: white; border: 1px solid var(--border);
      overflow: hidden; transition: box-shadow 0.2s, transform 0.2s;
    }
    .all-card:hover {
      box-shadow: 0 8px 28px rgba(0,0,0,0.09);
      transform: translateY(-3px);
    }
    .all-card-img { width: 100%; height: 160px; overflow: hidden; }
    .all-card-img img {
      width: 100%; height: 100%; object-fit: cover;
      filter: grayscale(10%);
      transition: transform 0.4s;
    }
    .all-card:hover .all-card-img img { transform: scale(1.06); }
    .all-card-body { padding: 20px; }
    .all-card-label {
      font-size: 10px; letter-spacing: 0.15em;
      text-transform: uppercase; color: var(--blue-acc); margin-bottom: 6px;
    }
    .all-card-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 18px; font-weight: 600;
      color: var(--navy); margin-bottom: 6px; line-height: 1.3;
    }
    .all-card-text {
      color: var(--muted); font-size: 13px; line-height: 1.65;
    }
    .all-card-link {
      display: inline-flex; align-items: center; gap: 6px;
      margin-top: 14px; font-size: 12px; font-weight: 500;
      color: var(--navy); text-decoration: none;
      letter-spacing: 0.06em;
      border-bottom: 1px solid var(--gold); padding-bottom: 1px;
      transition: color 0.2s;
    }
    .all-card-link:hover { color: var(--gold); }

    /* ── PROSES KERJA ── */
    .proses-section { background: var(--navy); }
    .proses-section .section-label { color: var(--gold-light); }
    .proses-section .section-label::before { background: var(--gold); }
    .proses-section .section-title { color: white; }
    .proses-section .section-sub { color: rgba(255,255,255,0.5); }
    .proses-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2px;
    }
    .proses-card {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(42,111,191,0.15);
      padding: 36px 28px;
      position: relative; overflow: hidden;
      transition: background 0.2s;
    }
    .proses-card::before {
      content: '';
      position: absolute; top: 0; left: 0;
      width: 0; height: 3px;
      background: var(--gold);
      transition: width 0.3s;
    }
    .proses-card:hover::before { width: 100%; }
    .proses-card:hover { background: rgba(255,255,255,0.07); }
    .proses-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 52px; font-weight: 300;
      color: rgba(42,111,191,0.25);
      line-height: 1; margin-bottom: 16px;
    }
    .proses-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px; color: white; font-weight: 400;
      margin-bottom: 10px;
    }
    .proses-desc {
      color: rgba(255,255,255,0.5); font-size: 13.5px; line-height: 1.7;
    }

    /* ── KEUNGGULAN ── */
    .keunggulan-section { background: white; }
    .keunggulan-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 64px;
      align-items: center;
    }
    .keunggulan-img {
      position: relative;
    }
    .keunggulan-img img {
      width: 100%; height: 480px; object-fit: cover;
      filter: grayscale(15%);
    }
    .keunggulan-badge {
      position: absolute;
      bottom: -20px; right: -20px;
      background: var(--navy);
      color: white; padding: 24px 28px;
      min-width: 160px; text-align: center;
    }
    .keunggulan-badge-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 48px; font-weight: 300; color: var(--gold-light);
      line-height: 1;
    }
    .keunggulan-badge-text {
      font-size: 11px; letter-spacing: 0.12em;
      text-transform: uppercase; color: rgba(255,255,255,0.6);
      margin-top: 4px;
    }
    .keunggulan-list { display: flex; flex-direction: column; gap: 24px; margin-bottom: 36px; }
    .keunggulan-item { display: flex; gap: 16px; align-items: flex-start; }
    .keunggulan-icon {
      width: 40px; height: 40px; flex-shrink: 0;
      background: var(--navy);
      display: flex; align-items: center; justify-content: center;
    }
    .keunggulan-icon svg { width: 18px; height: 18px; fill: var(--gold-light); }
    .keunggulan-item-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 18px; font-weight: 600;
      color: var(--navy); margin-bottom: 4px;
    }
    .keunggulan-item-text { color: var(--muted); font-size: 13.5px; line-height: 1.65; }

    /* ── HARGA ── */
    .harga-section { background: var(--cream); }
    .harga-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .harga-card {
      background: white; border: 1px solid var(--border);
      padding: 36px 32px;
      position: relative; transition: box-shadow 0.2s;
    }
    .harga-card:hover { box-shadow: 0 8px 28px rgba(0,0,0,0.08); }
    .harga-card.featured {
      background: var(--navy); border-color: var(--navy);
    }
    .harga-card.featured .harga-name { color: white; }
    .harga-card.featured .harga-price { color: var(--gold-light); }
    .harga-card.featured .harga-period { color: rgba(255,255,255,0.5); }
    .harga-card.featured .harga-desc { color: rgba(255,255,255,0.55); }
    .harga-card.featured .harga-item { color: rgba(255,255,255,0.7); border-color: rgba(255,255,255,0.1); }
    .harga-badge-top {
      position: absolute; top: -1px; left: 32px;
      background: var(--gold); color: white;
      font-size: 10px; font-weight: 500;
      letter-spacing: 0.1em; text-transform: uppercase;
      padding: 4px 14px;
    }
    .harga-name {
      font-size: 11px; letter-spacing: 0.15em;
      text-transform: uppercase; color: var(--blue-acc);
      margin-bottom: 16px;
    }
    .harga-price {
      font-family: 'Cormorant Garamond', serif;
      font-size: 40px; font-weight: 300; color: var(--navy);
      line-height: 1;
    }
    .harga-period {
      font-size: 12px; color: var(--muted);
      margin-bottom: 20px; margin-top: 4px;
    }
    .harga-desc {
      font-size: 13.5px; color: var(--muted);
      margin-bottom: 24px; line-height: 1.65;
    }
    .harga-items { list-style: none; margin-bottom: 28px; }
    .harga-item {
      font-size: 13.5px; color: var(--text);
      padding: 9px 0;
      border-bottom: 1px solid var(--border);
      display: flex; align-items: center; gap: 8px;
    }
    .harga-item::before {
      content: ''; width: 6px; height: 6px;
      background: var(--gold); flex-shrink: 0;
    }

    /* ── FOOTER ── */
    footer {
      background: #0A1628;
      color: rgba(255,255,255,0.5);
      padding: 64px 80px 40px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 48px;
      padding-bottom: 48px;
      border-bottom: 1px solid rgba(255,255,255,0.07);
      margin-bottom: 32px;
    }
    .footer-brand-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 22px; color: white; font-weight: 400; margin-bottom: 10px;
    }
    .footer-brand-name span { color: var(--gold-light); }
    .footer-col-title {
      font-size: 11px; letter-spacing: 0.15em;
      text-transform: uppercase; color: var(--gold-light); margin-bottom: 18px;
    }
    .footer-links { list-style: none; display: flex; flex-direction: column; gap: 10px; }
    .footer-links a {
      color: rgba(255,255,255,0.5); text-decoration: none;
      font-size: 13.5px; transition: color 0.2s;
    }
    .footer-links a:hover { color: white; }
    .footer-bottom {
      display: flex; justify-content: space-between; align-items: center;
      font-size: 12.5px; flex-wrap: wrap; gap: 8px;
    }
    .contact-line {
      display: flex; align-items: center; gap: 8px;
      font-size: 13.5px; margin-bottom: 8px;
    }
    .contact-line svg { width: 14px; height: 14px; fill: var(--gold); flex-shrink: 0; }

    /* ════════════════════════════════════════
       RESPONSIVE BREAKPOINTS
    ════════════════════════════════════════ */

    /* ── TABLET LANDSCAPE (≤ 1100px) ── */
    @media (max-width: 1100px) {
      nav { padding: 0 32px; }
      .nav-links { gap: 20px; }
      section { padding: 72px 48px; }
      footer { padding: 56px 48px 36px; }
      .footer-grid { gap: 32px; }

      .all-grid { grid-template-columns: repeat(2, 1fr); }
      .hero { padding: 120px 48px 120px; }
      .hero-img-panel { width: 36%; }
    }

    /* ── TABLET PORTRAIT (≤ 900px) ── */
    @media (max-width: 900px) {
      /* Navbar */
      nav { padding: 0 24px; }
      .nav-links { display: none; }
      .nav-cta { display: none; }
      .nav-toggle { display: flex; }

      /* Hero */
      .hero {
        padding: 100px 32px 140px;
        min-height: 100svh;
      }
      .hero-img-panel {
        width: 100%;
        opacity: 0.5;
      }
      .hero-img-panel::before {
        width: 100%;
        background: linear-gradient(to right, #0F1F3D 30%, rgba(15,31,61,0.5));
      }
      .hero h1 { max-width: 100%; }
      .hero p { max-width: 100%; }

      /* Info bar */
      .hero-infobar {
        flex-wrap: wrap;
        position: relative;
        margin-top: 56px;
      }
      .info-item {
        flex: 1 1 50%;
        padding: 14px 20px;
        border-bottom: 1px solid rgba(42,111,191,0.15);
      }
      .info-item:nth-child(2) { border-right: none; }
      .info-item:nth-child(3), .info-item:nth-child(4) { border-bottom: none; }

      /* Sections */
      section { padding: 64px 32px; }

      /* Layanan */
      .layanan-grid {
        grid-template-columns: 1fr;
        border: 1px solid var(--border);
      }
      .layanan-card { border-right: none; border-bottom: 1px solid var(--border); }
      .layanan-card:last-child { border-bottom: none; }

      /* All layanan */
      .all-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }

      /* Proses */
      .proses-grid { grid-template-columns: repeat(2, 1fr); }

      /* Keunggulan */
      .keunggulan-layout { grid-template-columns: 1fr; gap: 48px; }
      .keunggulan-img { max-width: 560px; margin: 0 auto; }
      .keunggulan-img img { height: 360px; }
      .keunggulan-badge { right: 0; bottom: -16px; }

      /* Harga */
      .harga-grid { grid-template-columns: 1fr; max-width: 480px; }

      /* Footer */
      footer { padding: 48px 32px 32px; }
      .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 36px;
      }
    }

    /* ── MOBILE (≤ 600px) ── */
    @media (max-width: 600px) {
      nav { padding: 0 20px; height: 60px; }
      .mobile-menu { top: 60px; padding: 20px; }

      /* Hero */
      .hero {
        padding: 88px 20px 20px;
        min-height: 100svh;
        justify-content: flex-start;
      }
      .hero-img-panel { width: 100%; opacity: 0.3; }
      .hero h1 { font-size: clamp(36px, 10vw, 52px); margin-bottom: 16px; }
      .hero p { font-size: 14px; margin-bottom: 28px; }
      .hero-tag { margin-bottom: 14px; font-size: 10px; }
      .hero-tag::before { width: 24px; }
      .btn-primary, .btn-outline { padding: 13px 22px; font-size: 12px; width: 100%; text-align: center; }
      .hero-actions { flex-direction: column; width: 100%; }

      /* Info bar stacked */
      .hero-infobar { position: relative; margin-top: 32px; }
      .info-item {
        flex: 1 1 100%;
        border-right: none;
        border-bottom: 1px solid rgba(42,111,191,0.15);
        padding: 12px 20px;
      }
      .info-item:last-child { border-bottom: none; }

      /* Sections */
      section { padding: 48px 20px; }
      .section-sub { margin-bottom: 36px; }

      /* Layanan */
      .layanan-body { padding: 20px 20px 24px; }
      .layanan-img { height: 180px; }

      /* All layanan - single col */
      .all-grid { grid-template-columns: 1fr; gap: 16px; }

      /* Proses - single col */
      .proses-grid { grid-template-columns: 1fr; gap: 2px; }
      .proses-card { padding: 28px 20px; }
      .proses-num { font-size: 40px; margin-bottom: 12px; }

      /* Keunggulan */
      .keunggulan-layout { gap: 40px; }
      .keunggulan-img img { height: 280px; }
      .keunggulan-badge {
        right: 0; bottom: -12px;
        padding: 16px 20px;
        min-width: 120px;
      }
      .keunggulan-badge-num { font-size: 36px; }
      .keunggulan-list { gap: 20px; }

      /* Harga */
      .harga-grid { grid-template-columns: 1fr; max-width: 100%; }
      .harga-card { padding: 28px 24px; }

      /* Footer */
      footer { padding: 40px 20px 28px; }
      .footer-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }
      .footer-bottom {
        flex-direction: column; align-items: flex-start; gap: 6px;
      }
    }

    /* ── SMALL MOBILE (≤ 380px) ── */
    @media (max-width: 380px) {
      .hero h1 { font-size: 34px; }
      .info-item { padding: 10px 16px; }
      .info-value { font-size: 13px; }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="nav-brand">
    <div class="nav-logo">
      <svg viewBox="0 0 24 24"><path d="M17.66 11.2c-.23-.3-.51-.56-.77-.82-.67-.6-1.43-1.03-2.07-1.66C13.33 7.26 13 4.85 13.95 3c-.95.23-1.78.75-2.49 1.32-2.59 2.08-3.61 5.75-2.39 8.9.04.1.08.2.08.33 0 .22-.15.42-.35.5-.23.1-.47.04-.66-.12a.58.58 0 01-.14-.17c-1.13-1.43-1.31-3.48-.55-5.12C5.78 10 4.87 12.3 5 14.47c.06.5.12 1 .29 1.5.14.6.41 1.2.71 1.73 1.08 1.73 2.95 2.97 4.96 3.22 2.14.27 4.43-.12 6.07-1.6 1.83-1.66 2.47-4.32 1.53-6.6l-.13-.26c-.21-.46-.77-1.26-.77-1.26m-3.16 6.3c-.28.24-.74.5-1.1.6-1.12.4-2.24-.16-2.9-.82 1.19-.28 1.9-1.16 2.11-2.05.17-.8-.15-1.46-.28-2.23-.12-.74-.1-1.37.17-2.06.19.38.39.76.63 1.06.77 1 1.98 1.44 2.24 2.8.04.14.06.28.06.43.03.82-.2 1.72-.93 2.27z"/></svg>
    </div>
    <div class="nav-name">Sat<span>Set</span></div>
  </div>
  <ul class="nav-links">
    <li><a href="#" class="active">Beranda</a></li>
    <li><a href="#">Layanan</a></li>
    <li><a href="#">Cara Kerja</a></li>
    <li><a href="#">Harga</a></li>
    <li><a href="#">Kontak</a></li>
  </ul>
  <a href="#" class="nav-cta">Hubungi Kami</a>
  <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <a href="#" class="active">Beranda</a>
  <a href="#">Layanan</a>
  <a href="#">Cara Kerja</a>
  <a href="#">Harga</a>
  <a href="#">Kontak</a>
  <a href="#" class="mobile-cta">Hubungi Kami</a>
</div>

<!-- HERO -->
<section class="hero">
  <div class="hero-img-panel">
    <img src="https://picsum.photos/seed/acservice/900/1000" alt="Service AC"/>
  </div>
  <div class="hero-tag">Jasa Service Profesional</div>
  <h1>Ahli <em>AC</em> &<br>Elektronik Rumah</h1>
  <p>Solusi perawatan dan perbaikan AC serta perangkat elektronik Anda. Teknisi berpengalaman, bergaransi, dan tepat waktu.</p>
  <div class="hero-actions">
    <a href="#" class="btn-primary">Pesan Servis Sekarang</a>
    <a href="#" class="btn-outline">Lihat Semua Layanan</a>
  </div>
  <div class="hero-infobar">
    <div class="info-item">
      <div class="info-label">Jam Operasional</div>
      <div class="info-value">Senin – Minggu, 08.00–20.00</div>
    </div>
    <div class="info-item">
      <div class="info-label">Respon Cepat</div>
      <div class="info-value">Teknisi tiba dalam 2–3 jam</div>
    </div>
    <div class="info-item">
      <div class="info-label">Garansi Servis</div>
      <div class="info-value">30 hari garansi pengerjaan</div>
    </div>
    <div class="info-item">
      <div class="info-label">Cakupan Area</div>
      <div class="info-value">Jabodetabek & Sekitarnya</div>
    </div>
  </div>
</section>

<!-- LAYANAN UTAMA -->
<section class="layanan-section">
  <div class="section-label">Layanan Unggulan</div>
  <div class="section-title">Yang Kami <em>Kerjakan</em></div>
  <div class="section-sub">Tiga layanan utama kami yang paling banyak dibutuhkan pelanggan setiap harinya.</div>
  <div class="layanan-grid">
    <div class="layanan-card">
      <div class="layanan-img">
        <img src="https://picsum.photos/seed/ac-unit/600/400" alt="Service AC"/>
        <div class="layanan-img-overlay"></div>
      </div>
      <div class="layanan-body">
        <div class="layanan-num">01</div>
        <div class="layanan-title">Service & Cuci AC</div>
        <div class="layanan-desc">Pembersihan menyeluruh unit AC — evaporator, kondensor, dan filter. Termasuk pengecekan freon dan komponen listrik.</div>
        <div class="layanan-tags">
          <span class="tag">AC Split</span>
          <span class="tag">AC Cassette</span>
          <span class="tag">AC Central</span>
          <span class="tag">Floor Standing</span>
        </div>
      </div>
    </div>
    <div class="layanan-card">
      <div class="layanan-img">
        <img src="https://picsum.photos/seed/electronics-repair/600/400" alt="Perbaikan Elektronik"/>
        <div class="layanan-img-overlay"></div>
      </div>
      <div class="layanan-body">
        <div class="layanan-num">02</div>
        <div class="layanan-title">Perbaikan Elektronik</div>
        <div class="layanan-desc">Diagnosa dan perbaikan perangkat elektronik rumah tangga: televisi, kulkas, mesin cuci, microwave, dan lainnya.</div>
        <div class="layanan-tags">
          <span class="tag">Televisi</span>
          <span class="tag">Kulkas</span>
          <span class="tag">Mesin Cuci</span>
          <span class="tag">Microwave</span>
        </div>
      </div>
    </div>
    <div class="layanan-card">
      <div class="layanan-img">
        <img src="https://picsum.photos/seed/ac-install/600/400" alt="Instalasi AC"/>
        <div class="layanan-img-overlay"></div>
      </div>
      <div class="layanan-body">
        <div class="layanan-num">03</div>
        <div class="layanan-title">Instalasi & Bongkar Pasang</div>
        <div class="layanan-desc">Pemasangan unit AC baru, pemindahan unit lama ke lokasi baru, serta instalasi kabel dan pipa freon yang rapi dan aman.</div>
        <div class="layanan-tags">
          <span class="tag">Pasang Baru</span>
          <span class="tag">Bongkar Pasang</span>
          <span class="tag">Pipa Freon</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEMUA LAYANAN -->
<section class="all-layanan-section">
  <div class="section-label">Semua Layanan</div>
  <div class="section-title">Lebih Banyak <em>Solusi</em> untuk Anda</div>
  <div class="section-sub">Selain AC, kami juga menangani berbagai perangkat elektronik rumah tangga lainnya.</div>
  <div class="all-grid">
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/refrigerator/400/300" alt="Kulkas"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Elektronik Dapur</div>
        <div class="all-card-title">Kulkas & Freezer</div>
        <div class="all-card-text">Perbaikan kompresor, kebocoran freon, pintu tidak menutup rapat, dan permasalahan pendinginan lainnya.</div>
        <a href="#" class="all-card-link">Detail layanan</a>
      </div>
    </div>
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/washing-machine/400/300" alt="Mesin Cuci"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Elektronik Rumah</div>
        <div class="all-card-title">Mesin Cuci</div>
        <div class="all-card-text">Service mesin cuci top loading dan front loading. Perbaikan motor, pompa air, bearing, dan papan kontrol.</div>
        <a href="#" class="all-card-link">Detail layanan</a>
      </div>
    </div>
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/television-repair/400/300" alt="TV"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Hiburan</div>
        <div class="all-card-title">Televisi & Monitor</div>
        <div class="all-card-text">Perbaikan TV LED, LCD, OLED. Masalah gambar, suara, panel rusak, backlight mati, dan mainboard.</div>
        <a href="#" class="all-card-link">Detail layanan</a>
      </div>
    </div>
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/water-heater/400/300" alt="Water Heater"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Sanitasi</div>
        <div class="all-card-title">Water Heater</div>
        <div class="all-card-text">Perbaikan dan penggantian elemen pemanas, thermostat, safety valve, dan instalasi water heater baru.</div>
        <a href="#" class="all-card-link">Detail layanan</a>
      </div>
    </div>
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/microwave-oven/400/300" alt="Microwave"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Elektronik Dapur</div>
        <div class="all-card-title">Microwave & Oven</div>
        <div class="all-card-text">Service microwave tidak panas, magnetron lemah, pintu bermasalah, dan kerusakan komponen lainnya.</div>
        <a href="#" class="all-card-link">Detail layanan</a>
      </div>
    </div>
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/exhaust-fan/400/300" alt="Exhaust Fan"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Ventilasi</div>
        <div class="all-card-title">Exhaust Fan & Kipas</div>
        <div class="all-card-text">Perbaikan dan penggantian exhaust fan, kipas angin, dan ceiling fan. Termasuk instalasi baru.</div>
        <a href="#" class="all-card-link">Detail layanan</a>
      </div>
    </div>
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/dispenser/400/300" alt="Dispenser"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Elektronik Rumah</div>
        <div class="all-card-title">Dispenser & Pompa Air</div>
        <div class="all-card-text">Service dispenser tidak panas/dingin, kebocoran, dan perbaikan pompa air rumah tangga berbagai merk.</div>
        <a href="#" class="all-card-link">Detail layanan</a>
      </div>
    </div>
    <div class="all-card">
      <div class="all-card-img">
        <img src="https://picsum.photos/seed/maintenance-contract/400/300" alt="Kontrak"/>
      </div>
      <div class="all-card-body">
        <div class="all-card-label">Paket Hemat</div>
        <div class="all-card-title">Kontrak Perawatan</div>
        <div class="all-card-text">Paket perawatan berkala untuk rumah, kantor, atau kos-kosan. Hemat biaya, perangkat lebih awet.</div>
        <a href="#" class="all-card-link">Lihat paket</a>
      </div>
    </div>
  </div>
</section>

<!-- PROSES KERJA -->
<section class="proses-section">
  <div class="section-label">Cara Kerja</div>
  <div class="section-title">Proses <em>Servis</em> Kami</div>
  <div class="section-sub">Transparan, cepat, dan dapat diandalkan — dari pemesanan hingga selesai.</div>
  <div class="proses-grid">
    <div class="proses-card">
      <div class="proses-num">01</div>
      <div class="proses-title">Hubungi & Jadwalkan</div>
      <div class="proses-desc">Hubungi kami via WhatsApp atau telepon. Ceritakan keluhan perangkat Anda, dan kami akan menjadwalkan kunjungan teknisi.</div>
    </div>
    <div class="proses-card">
      <div class="proses-num">02</div>
      <div class="proses-title">Kunjungan & Diagnosa</div>
      <div class="proses-desc">Teknisi kami datang ke lokasi, melakukan pemeriksaan menyeluruh, dan memberikan estimasi biaya sebelum pengerjaan dimulai.</div>
    </div>
    <div class="proses-card">
      <div class="proses-num">03</div>
      <div class="proses-title">Pengerjaan & Perbaikan</div>
      <div class="proses-desc">Servis dilakukan di tempat menggunakan peralatan standar industri dan suku cadang berkualitas. Transparan tanpa biaya tersembunyi.</div>
    </div>
    <div class="proses-card">
      <div class="proses-num">04</div>
      <div class="proses-title">Uji Coba & Garansi</div>
      <div class="proses-desc">Setelah selesai, perangkat diuji di hadapan pelanggan. Kami memberikan garansi 30 hari untuk setiap pengerjaan.</div>
    </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section class="keunggulan-section">
  <div class="keunggulan-layout">
    <div class="keunggulan-img">
      <img src="https://picsum.photos/seed/technician-work/700/600" alt="Teknisi Bekerja"/>
      <div class="keunggulan-badge">
        <div class="keunggulan-badge-num">10+</div>
        <div class="keunggulan-badge-text">Tahun Pengalaman</div>
      </div>
    </div>
    <div>
      <div class="section-label">Mengapa Kami</div>
      <div class="section-title">Dipercaya <em>Ribuan</em><br>Pelanggan</div>
      <div class="section-sub" style="margin-bottom:32px;">Kami membangun reputasi dari kepercayaan — bukan sekadar transaksi.</div>
      <div class="keunggulan-list">
        <div class="keunggulan-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div>
            <div class="keunggulan-item-title">Teknisi Bersertifikat</div>
            <div class="keunggulan-item-text">Semua teknisi kami telah melalui pelatihan dan bersertifikat dari produsen AC terkemuka seperti Daikin, Panasonic, dan Sharp.</div>
          </div>
        </div>
        <div class="keunggulan-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div>
            <div class="keunggulan-item-title">Respons Cepat 2–3 Jam</div>
            <div class="keunggulan-item-text">Teknisi kami siap berangkat dalam hitungan jam setelah pemesanan dikonfirmasi, 7 hari seminggu termasuk hari libur.</div>
          </div>
        </div>
        <div class="keunggulan-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
          </div>
          <div>
            <div class="keunggulan-item-title">Estimasi Biaya Transparan</div>
            <div class="keunggulan-item-text">Harga disampaikan sebelum pengerjaan. Tidak ada biaya tersembunyi atau penambahan biaya tanpa persetujuan pelanggan.</div>
          </div>
        </div>
        <div class="keunggulan-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          </div>
          <div>
            <div class="keunggulan-item-title">Garansi 30 Hari</div>
            <div class="keunggulan-item-text">Setiap servis dijamin dengan garansi 30 hari. Jika masalah yang sama muncul kembali, kami akan kembali tanpa biaya tambahan.</div>
          </div>
        </div>
      </div>
      <a href="#" class="btn-primary">Hubungi Teknisi Sekarang</a>
    </div>
  </div>
</section>

<!-- HARGA -->
<section class="harga-section">
  <div class="section-label">Paket Harga</div>
  <div class="section-title">Harga <em>Transparan</em></div>
  <div class="section-sub">Tidak ada kejutan. Harga sudah termasuk biaya kunjungan teknisi ke lokasi Anda.</div>
  <div class="harga-grid">
    <div class="harga-card">
      <div class="harga-name">Paket Standar</div>
      <div class="harga-price">Rp 150.000</div>
      <div class="harga-period">per unit AC</div>
      <div class="harga-desc">Cocok untuk perawatan rutin AC yang masih berfungsi normal, setiap 3–6 bulan sekali.</div>
      <ul class="harga-items">
        <li class="harga-item">Cuci unit indoor & outdoor</li>
        <li class="harga-item">Cek tekanan freon</li>
        <li class="harga-item">Cek komponen kelistrikan</li>
        <li class="harga-item">Laporan kondisi unit</li>
      </ul>
      <a href="#" class="btn-outline" style="width:100%;text-align:center;color:var(--navy);border-color:var(--border);">Pesan Paket Ini</a>
    </div>
    <div class="harga-card featured">
      <div class="harga-badge-top">Terpopuler</div>
      <div class="harga-name" style="color:var(--gold-light);">Paket Lengkap</div>
      <div class="harga-price">Rp 300.000</div>
      <div class="harga-period">per unit AC</div>
      <div class="harga-desc">Paket terlengkap untuk AC yang sudah lama tidak diservis atau mengalami penurunan performa.</div>
      <ul class="harga-items">
        <li class="harga-item">Semua layanan paket standar</li>
        <li class="harga-item">Isi ulang freon R32/R410A</li>
        <li class="harga-item">Bersihkan drain pan</li>
        <li class="harga-item">Cek & kencangkan koneksi listrik</li>
        <li class="harga-item">Garansi 30 hari pengerjaan</li>
      </ul>
      <a href="#" class="btn-primary" style="width:100%;text-align:center;">Pesan Paket Ini</a>
    </div>
    <div class="harga-card">
      <div class="harga-name">Kontrak Tahunan</div>
      <div class="harga-price">Rp 800.000</div>
      <div class="harga-period">per unit / tahun</div>
      <div class="harga-desc">Servis berkala 4 kali dalam setahun. Hemat 40% dibanding servis satuan, cocok untuk kantor dan kos-kosan.</div>
      <ul class="harga-items">
        <li class="harga-item">4x service per tahun</li>
        <li class="harga-item">Prioritas jadwal teknisi</li>
        <li class="harga-item">Diskon spare part 15%</li>
        <li class="harga-item">Laporan servis digital</li>
        <li class="harga-item">Garansi sepanjang kontrak</li>
      </ul>
      <a href="#" class="btn-outline" style="width:100%;text-align:center;color:var(--navy);border-color:var(--border);">Pesan Paket Ini</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div>
      <div class="footer-brand-name">Sat<span>Set</span></div>
      <p style="font-size:13.5px;line-height:1.8;margin-bottom:18px;">Jasa service AC dan elektronik profesional, bergaransi, dan terpercaya untuk kebutuhan rumah dan bisnis Anda di Jabodetabek.</p>
      <div class="contact-line">
        <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        0812-3456-7890
      </div>
      <div class="contact-line">
        <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
        info@SatSet.id
      </div>
      <div class="contact-line">
        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        Jl. Raya Bekasi No. 45, Jakarta Timur
      </div>
    </div>
    <div>
      <div class="footer-col-title">Halaman</div>
      <ul class="footer-links">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Layanan</a></li>
        <li><a href="#">Paket Harga</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
    <div>
      <div class="footer-col-title">Layanan AC</div>
      <ul class="footer-links">
        <li><a href="#">Cuci AC</a></li>
        <li><a href="#">Isi Freon</a></li>
        <li><a href="#">Pasang AC Baru</a></li>
        <li><a href="#">Bongkar Pasang</a></li>
        <li><a href="#">Kontrak Perawatan</a></li>
      </ul>
    </div>
    <div>
      <div class="footer-col-title">Elektronik</div>
      <ul class="footer-links">
        <li><a href="#">Service Kulkas</a></li>
        <li><a href="#">Service Mesin Cuci</a></li>
        <li><a href="#">Service TV</a></li>
        <li><a href="#">Service Water Heater</a></li>
        <li><a href="#">Service Microwave</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 SatSet. Semua hak dilindungi.</span>
    <span>Dibangun dengan Laravel & dedikasi</span>
  </div>
</footer>

<script>
  const toggle = document.getElementById('navToggle');
  const menu = document.getElementById('mobileMenu');

  toggle.addEventListener('click', () => {
    toggle.classList.toggle('open');
    menu.classList.toggle('open');
  });

  // Close menu on link click
  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      toggle.classList.remove('open');
      menu.classList.remove('open');
    });
  });
</script>

</body>
</html>