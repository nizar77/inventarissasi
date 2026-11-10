<!DOCTYPE html>

<html class="dark" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="web_dashboard" name="shell-type"/>
<title>InventaEdu - Dashboard Admin Sarpras</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "surface-variant": "#373246",
            "secondary-fixed-dim": "#ffb690",
            "on-error": "#690005",
            "tertiary-fixed-dim": "#ddb8ff",
            "background": "#151023",
            "on-secondary-container": "#4a1c00",
            "on-primary": "#68001a",
            "surface-bright": "#3c364a",
            "on-secondary-fixed": "#341100",
            "on-background": "#e8def9",
            "error": "#ffb4ab",
            "error-container": "#93000a",
            "surface-container-highest": "#373246",
            "on-tertiary": "#490080",
            "on-primary-container": "#fffaf9",
            "primary-container": "#e11d48",
            "on-tertiary-fixed-variant": "#6800b4",
            "on-primary-fixed": "#40000c",
            "inverse-on-surface": "#332d41",
            "tertiary-fixed": "#f0dbff",
            "on-error-container": "#ffdad6",
            "secondary-fixed": "#ffdbca",
            "surface-tint": "#ffb3b6",
            "surface": "#151023",
            "primary-fixed": "#ffdada",
            "primary": "#ffb3b6",
            "surface-dim": "#151023",
            "tertiary": "#ddb8ff",
            "on-secondary": "#552100",
            "on-surface": "#e8def9",
            "on-tertiary-container": "#fffafa",
            "secondary": "#ffb690",
            "surface-container-lowest": "#100b1d",
            "on-secondary-fixed-variant": "#783200",
            "on-primary-fixed-variant": "#920028",
            "inverse-surface": "#e8def9",
            "primary-fixed-dim": "#ffb3b6",
            "outline": "#ac8889",
            "on-tertiary-fixed": "#2c0051",
            "surface-container-low": "#1e192b",
            "inverse-primary": "#be0037",
            "on-surface-variant": "#e5bdbe",
            "outline-variant": "#5c3f40",
            "surface-container-high": "#2c273a",
            "surface-container": "#221d2f",
            "tertiary-container": "#9d40f4",
            "secondary-container": "#ec6a06"
          },
          borderRadius: {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          spacing: {
            "margin": "2rem",
            "margin-mobile": "1rem",
            "space-md": "1rem",
            "space-xs": "0.25rem",
            "space-xl": "2rem",
            "gutter": "1.5rem",
            "gutter-mobile": "1rem",
            "space-lg": "1.5rem",
            "space-sm": "0.5rem",
            "space-2xl": "3rem"
          },
          fontFamily: {
            "headline-xl": ["Manrope", "sans-serif"],
            "display-lg": ["Manrope", "sans-serif"],
            "headline-xl-mobile": ["Manrope", "sans-serif"],
            "label-sm": ["Hanken Grotesk", "sans-serif"],
            "title-sm": ["Manrope", "sans-serif"],
            "body-md": ["Hanken Grotesk", "sans-serif"],
            "body-lg": ["Hanken Grotesk", "sans-serif"],
            "headline-md": ["Manrope", "sans-serif"],
            "headline-lg": ["Manrope", "sans-serif"],
            "label-md": ["Hanken Grotesk", "sans-serif"],
            "body-sm": ["Hanken Grotesk", "sans-serif"]
          },
          fontSize: {
            "headline-xl": ["32px", { lineHeight: "40px", letterSpacing: "-0.025em", fontWeight: "700" }],
            "display-lg": ["40px", { lineHeight: "48px", letterSpacing: "-0.03em", fontWeight: "800" }],
            "headline-xl-mobile": ["26px", { lineHeight: "34px", letterSpacing: "-0.02em", fontWeight: "700" }],
            "label-sm": ["11px", { lineHeight: "14px", letterSpacing: "0.06em", fontWeight: "600" }],
            "title-sm": ["16px", { lineHeight: "24px", letterSpacing: "-0.01em", fontWeight: "600" }],
            "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
            "headline-md": ["20px", { lineHeight: "28px", letterSpacing: "-0.015em", fontWeight: "600" }],
            "headline-lg": ["24px", { lineHeight: "32px", letterSpacing: "-0.02em", fontWeight: "600" }],
            "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.04em", fontWeight: "600" }],
            "body-sm": ["12px", { lineHeight: "18px", fontWeight: "400" }]
          }
        }
      }
    };
  </script>
<style>
    @layer base {
      html, body {
        margin: 0;
        padding: 0;
      }
      body {
        overscroll-behavior: none;
      }
    }
    /* Custom sleek scrollbar for table container */
    .custom-scroll::-webkit-scrollbar {
      height: 6px;
      width: 6px;
    }
    .custom-scroll::-webkit-scrollbar-track {
      background: #151023;
    }
    .custom-scroll::-webkit-scrollbar-thumb {
      background: #373246;
      border-radius: 9999px;
    }
    .custom-scroll::-webkit-scrollbar-thumb:hover {
      background: #5c3f40;
    }

    /* Collapsed rail transitions and label behavior */
    .sidebar-collapsed .nav-text,
    .sidebar-collapsed .logo-text,
    .sidebar-collapsed .scan-btn-text,
    .sidebar-collapsed .footer-text {
      display: none !important;
    }
    .sidebar-collapsed .nav-item {
      justify-content: center !important;
      padding-left: 0.5rem !important;
      padding-right: 0.5rem !important;
    }
    .sidebar-collapsed .scan-btn {
      padding-left: 0 !important;
      padding-right: 0 !important;
      justify-content: center !important;
    }
    .sidebar-collapsed .user-box {
      justify-content: center !important;
      padding: 0.5rem !important;
    }
  </style>
</head>
<body class="bg-background font-body-md text-on-surface antialiased overflow-x-hidden">
<!-- Mobile Backdrop Overlay -->
<div class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 hidden transition-opacity duration-300 opacity-0 lg:hidden" id="sidebar-backdrop"></div>
<!-- Sidebar Component -->
<aside class="fixed top-0 bottom-0 left-0 z-50 w-72 lg:w-72 bg-surface-container-low flex flex-col justify-between shadow-[0_1px_12px_rgba(0,0,0,0.35)] transition-all duration-300 ease-in-out -translate-x-full lg:translate-x-0 border-r border-surface-container-high/60" id="main-sidebar">
<div class="flex flex-col flex-1 min-h-0">
<!-- Sidebar Header -->
<div class="h-16 px-4 flex items-center justify-between bg-surface-container-low border-b border-surface-container/50">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-9 h-9 rounded-xl bg-primary-container flex items-center justify-center shadow-[0_0_16px_rgba(225,29,72,0.35)] shrink-0">
<span class="material-symbols-outlined text-on-primary-container text-[20px]">inventory_2</span>
</div>
<div class="flex flex-col logo-text transition-opacity duration-200">
<span class="font-title-sm text-title-sm text-on-surface leading-tight font-bold">InventaEdu</span>
<span class="font-label-sm text-label-sm text-secondary tracking-wider uppercase">Asset Suite</span>
</div>
</div>
<div class="flex items-center gap-1">
<!-- Toggle Collapse Button (Desktop) -->
<button class="hidden lg:flex w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright items-center justify-center text-on-surface-variant hover:text-on-surface transition-colors" id="sidebar-toggle-desktop" title="Kecilkan/Perluas Sidebar" type="button">
<span class="material-symbols-outlined text-[18px]" id="collapse-icon">menu_open</span>
</button>
<!-- Close Button (Mobile & Tablet) -->
<button aria-label="Tutup Menu" class="flex lg:hidden w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright items-center justify-center text-on-surface-variant hover:text-on-surface transition-colors" id="sidebar-close-mobile" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
</div>
<!-- Quick Action Scan Button -->
<div class="px-space-md py-space-sm">
<button class="scan-btn w-full flex items-center justify-center gap-space-sm py-2.5 px-space-md rounded-xl bg-secondary-container text-on-secondary font-label-md text-label-md hover:bg-secondary hover:text-surface-container-lowest transition-all shadow-[0_0_12px_rgba(236,106,6,0.25)] group" title="Pindai Barcode Cepat" type="button">
<span class="material-symbols-outlined text-[18px] group-hover:scale-110 transition-transform">qr_code_scanner</span>
<span class="scan-btn-text font-semibold">Pindai Barcode Cepat</span>
</button>
</div>
<!-- Nav Links -->
<nav class="flex-1 px-space-md py-space-xs space-y-1.5 overflow-y-auto overflow-x-hidden custom-scroll" data-active-classes="bg-primary-container text-on-primary-container font-title-sm font-semibold rounded-xl shadow-[0_0_16px_rgba(225,29,72,0.25)]">
<a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl bg-primary-container text-on-primary-container font-title-sm font-semibold shadow-[0_0_16px_rgba(225,29,72,0.25)] transition-all" data-path="dashboard" href="#" title="Dashboard">
<span class="material-symbols-outlined text-[20px] shrink-0">dashboard</span>
<span class="nav-text truncate">Dashboard</span>
</a>
<a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all" data-path="daftar-barang" href="#" title="Daftar Barang">
<span class="material-symbols-outlined text-[20px] shrink-0">category</span>
<span class="nav-text truncate">Daftar Barang</span>
</a>
<a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all" data-path="peminjaman-dan-pengembalian" href="#" title="Peminjaman &amp; Pengembalian">
<span class="material-symbols-outlined text-[20px] shrink-0">sync_alt</span>
<span class="nav-text truncate">Peminjaman &amp; Pengembalian</span>
</a>
<a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all" data-path="lokasi-dan-ruang" href="#" title="Lokasi &amp; Ruang">
<span class="material-symbols-outlined text-[20px] shrink-0">meeting_room</span>
<span class="nav-text truncate">Lokasi &amp; Ruang</span>
</a>
<a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all" data-path="jadwal-servis-dan-perawatan" href="#" title="Jadwal Servis &amp; Perawatan">
<span class="material-symbols-outlined text-[20px] shrink-0">build_circle</span>
<span class="nav-text truncate">Jadwal Servis &amp; Perawatan</span>
</a>
<a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all" data-path="laporan-dan-audit-sarpras" href="#" title="Laporan &amp; Audit Sarpras">
<span class="material-symbols-outlined text-[20px] shrink-0">assignment_turned_in</span>
<span class="nav-text truncate">Laporan &amp; Audit Sarpras</span>
</a>
</nav>
</div>
<!-- Sidebar Footer / User Profile -->
<div class="p-space-sm sm:p-space-md bg-surface-container-lowest/80 backdrop-blur-md flex flex-col gap-space-sm border-t border-surface-container/40">
<div class="footer-text flex items-center justify-between px-space-sm py-space-xs rounded-lg bg-surface-container-high">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[16px]">school</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">TA 2024/2025 Genap</span>
</div>
<span class="font-label-sm text-label-sm text-secondary bg-surface-container px-space-xs py-0.5 rounded-lg">Aktif</span>
</div>
<div class="user-box flex items-center justify-between gap-space-sm pt-space-xs">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center ring-2 ring-primary/40 shrink-0">
<span class="material-symbols-outlined text-on-primary-container text-[18px]">person</span>
</div>
<div class="footer-text flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface truncate font-semibold">Ibu Sari Dewi</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">Kepala Sarpras</span>
</div>
</div>
<a class="footer-text w-8 h-8 rounded-lg bg-surface-container-high hover:bg-error-container hover:text-on-error-container flex items-center justify-center text-on-surface-variant transition-colors shrink-0" data-path="login" href="#" title="Keluar Sistem">
<span class="material-symbols-outlined text-[18px]">logout</span>
</a>
</div>
</div>
</aside>
<!-- Main Content Wrapper (Adapts with sidebar state) -->
<div class="min-h-screen flex flex-col transition-all duration-300 lg:pl-72" id="content-wrapper">
<!-- Top Header Navigation -->
<header class="sticky top-0 z-30 h-16 bg-surface/90 backdrop-blur-xl border-b border-surface-container/50 shadow-[0_1px_8px_rgba(0,0,0,0.2)]">
<div class="h-16 w-full px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-2 sm:gap-4">
<!-- Left: Mobile Hamburger & Search -->
<div class="flex items-center gap-3 flex-1 min-w-0">
<!-- Mobile Hamburger Toggle -->
<button aria-label="Buka Menu Sidebar" class="flex lg:hidden w-9 h-9 rounded-xl bg-surface-container-high hover:bg-surface-bright items-center justify-center text-on-surface transition-colors shrink-0" id="sidebar-toggle-mobile" type="button">
<span class="material-symbols-outlined text-[20px]">menu</span>
</button>
<!-- Search Input -->
<div class="relative flex items-center w-full max-w-xs sm:max-w-md md:max-w-lg">
<span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px] sm:text-[20px]">search</span>
<input class="w-full pl-9 sm:pl-10 pr-12 sm:pr-20 py-2 rounded-xl bg-surface-container-low text-on-surface placeholder:text-on-surface-variant/70 font-body-sm text-body-sm border border-transparent focus:border-primary-container focus:outline-none focus:bg-surface-container focus:ring-1 focus:ring-primary-container transition-all" placeholder="Cari aset, serial no, atau ruangan..." type="text"/>
<span class="hidden sm:inline-block absolute right-2.5 px-1.5 py-0.5 rounded-lg bg-surface-container-high text-on-surface-variant font-label-sm text-[11px]">Ctrl+K</span>
</div>
</div>
<!-- Right: Realtime status, notifications, action & user icon -->
<div class="flex items-center gap-2 sm:gap-3 shrink-0">
<div class="hidden xl:flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-surface-container-low border border-surface-container-high">
<span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
<span class="font-label-sm text-label-sm text-secondary">Tersinkronisasi Realtime</span>
</div>
<button class="relative w-9 h-9 rounded-xl bg-surface-container-low hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant hover:text-on-surface transition-colors" title="Notifikasi" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1 right-1 w-2.5 h-2.5 rounded-full bg-primary-container ring-2 ring-surface"></span>
</button>
<button class="flex items-center gap-1 sm:gap-space-xs px-3 sm:px-space-md py-2 rounded-xl bg-primary-container hover:bg-inverse-primary text-on-primary-container font-label-md text-label-md transition-all shadow-[0_0_16px_rgba(225,29,72,0.35)]" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
<span class="hidden sm:inline">Tambah Aset</span>
</button>
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm shrink-0">
<span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
</div>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 w-full p-4 sm:p-6 lg:p-8 flex flex-col gap-6">
<!-- Top Header Welcome & Quick Action Buttons -->
<div class="flex flex-col xl:flex-row xl:items-center justify-between gap-4">
<div class="flex flex-col gap-1.5">
<div class="flex items-center gap-2 flex-wrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-surface-container-high text-secondary font-label-sm text-[11px] shadow-sm">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
              Sinkronisasi Server Realtime
            </span>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-[11px] border border-surface-container-high/40">
<span class="material-symbols-outlined text-[13px] text-tertiary">calendar_today</span>
              TA 2024/2025 Genap
            </span>
</div>
<h1 class="font-headline-xl text-2xl sm:text-headline-xl text-on-surface tracking-tight">
            Selamat Datang kembali, <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-primary-fixed">Ibu Sari Dewi</span>
</h1>
<p class="font-body-md text-body-sm sm:text-body-md text-on-surface-variant">
            Kepala Bagian Sarana &amp; Prasarana — SMKN 1 Prestasi Nusantara. Pusat kontrol &amp; pelacakan inventaris aktif.
          </p>
</div>
<div class="flex items-center gap-2 sm:gap-3 flex-wrap">
<button class="flex items-center gap-1.5 px-3 sm:px-4 py-2 rounded-xl bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-all shadow-sm" type="button">
<span class="material-symbols-outlined text-[18px] text-secondary">qr_code_scanner</span>
<span>Scan Barcode</span>
</button>
<button class="flex items-center gap-1.5 px-3 sm:px-4 py-2 rounded-xl bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-all shadow-sm" type="button">
<span class="material-symbols-outlined text-[18px] text-primary">download</span>
<span>Audit Sarpras</span>
</button>
<button class="flex items-center gap-1.5 px-4 sm:px-5 py-2 rounded-xl bg-gradient-to-r from-primary-container via-secondary-container to-secondary text-on-primary font-label-md text-label-md font-semibold transition-all shadow-[0_0_20px_rgba(225,29,72,0.35)] hover:shadow-[0_0_24px_rgba(236,106,6,0.45)]" type="button">
<span class="material-symbols-outlined text-[18px]">add_circle</span>
<span>+ Tambah Barang Baru</span>
</button>
</div>
</div>
<!-- Filter Controls Bar -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-3 p-2.5 sm:p-3 rounded-xl bg-surface-container-low border border-surface-container/60 shadow-sm">
<div class="flex items-center gap-2 flex-wrap">
<div class="flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[16px] text-on-surface-variant">tune</span>
<span class="text-on-surface-variant hidden sm:inline">Filter:</span>
</div>
<select class="px-2.5 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-body-sm text-body-sm border border-transparent focus:outline-none focus:border-primary-container">
<option selected="">Semua Gedung &amp; Lab (7 Zona)</option>
<option>Gedung A - Lab Komputer &amp; Robotik</option>
<option>Gedung B - Laboratorium Sains</option>
<option>Gedung C - Studio Multimedia</option>
<option>Gedung D - Ruang Teori &amp; Kelas</option>
</select>
<select class="px-2.5 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-body-sm text-body-sm border border-transparent focus:outline-none focus:border-primary-container">
<option selected="">Kondisi: Semua Kondisi</option>
<option>Baik &amp; Terkalibrasi (90.2%)</option>
<option>Sedang Dipinjam (256 Unit)</option>
<option>Perlu Kalibrasi &amp; Servis (86 Unit)</option>
<option>Afkir / Usulan Mutasi</option>
</select>
<div class="hidden xl:flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] text-secondary">date_range</span>
<span>Periode Audit: 01 Jan 2025 - 28 Feb 2025</span>
</div>
</div>
<div class="flex items-center gap-2 self-end md:self-auto">
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Segarkan" type="button">
<span class="material-symbols-outlined text-[18px]">refresh</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Layar Penuh" type="button">
<span class="material-symbols-outlined text-[18px]">fullscreen</span>
</button>
</div>
</div>
<!-- KPI Stat Metric Cards (Responsive Grid: 1 col mobile -> 2 col tablet -> 4 col desktop) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Card 1: Total Aset -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
<div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary-container to-secondary"></div>
<div class="flex items-start justify-between gap-3 mb-4">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Aset Sekolah</span>
<span class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">3.482</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary group-hover:scale-105 transition-transform shadow-sm shrink-0">
<span class="material-symbols-outlined text-[26px]">inventory_2</span>
</div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span>
              +42 unit
            </span>
<span class="font-body-sm text-xs sm:text-body-sm text-on-surface-variant">Audit Terverifikasi 100%</span>
</div>
</div>
<!-- Card 2: Kondisi Prima -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
<div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-500 to-teal-400"></div>
<div class="flex items-start justify-between gap-3 mb-4">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kondisi Prima &amp; Siap Pakai</span>
<span class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">3.140</span>
</div>
<div class="relative w-12 h-12 flex items-center justify-center shrink-0">
<svg class="w-12 h-12 -rotate-90" viewbox="0 0 36 36">
<path class="text-surface-container-high" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3.5"></path>
<path class="text-emerald-400" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="90.2, 100" stroke-linecap="round" stroke-width="3.5"></path>
</svg>
<span class="absolute font-label-sm text-label-sm text-emerald-400 font-bold">90%</span>
</div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-emerald-400 bg-emerald-950/60 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">check_circle</span>
              Siap Operasional
            </span>
<span class="font-body-sm text-xs sm:text-body-sm text-on-surface-variant">Standar BNSP</span>
</div>
</div>
<!-- Card 3: Perlu Servis & Perawatan -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
<div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
<div class="flex items-start justify-between gap-3 mb-4">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Perlu Servis &amp; Perawatan</span>
<span class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">86</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-secondary group-hover:scale-105 transition-transform shadow-sm shrink-0">
<span class="material-symbols-outlined text-[26px]">build_circle</span>
</div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">pending_actions</span>
              12 Antre Bengkel
            </span>
<span class="font-body-sm text-xs sm:text-body-sm text-on-surface-variant">74 Jadwal Servis</span>
</div>
</div>
<!-- Card 4: Sedang Dipinjam Aktif -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
<div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-tertiary to-primary"></div>
<div class="flex items-start justify-between gap-3 mb-4">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Sedang Dipinjam Aktif</span>
<span class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">256</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-tertiary group-hover:scale-105 transition-transform shadow-sm shrink-0">
<span class="material-symbols-outlined text-[26px]">sync_saved_locally</span>
</div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary bg-primary-container/20 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">warning</span>
              18 Jatuh Tempo
            </span>
<span class="font-body-sm text-xs sm:text-body-sm text-on-surface-variant">Peminjam QR</span>
</div>
</div>
</div>
<!-- Main Layout: 2 Columns on Desktop (lg:grid lg:grid-cols-3) -> Stacked on Tablet/Mobile -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
<!-- Left Main Column (2 of 3 columns on large screens) -->
<div class="lg:col-span-2 flex flex-col gap-6">
<!-- Distribusi Kategori Visual Overview -->
<div class="rounded-xl bg-surface-container-low p-4 sm:p-6 shadow-sm border border-surface-container/60 flex flex-col gap-4">
<div class="flex items-center justify-between flex-wrap gap-2">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-[22px]">donut_small</span>
<h2 class="font-headline-md text-lg sm:text-headline-md text-on-surface">Distribusi Aset Menurut Kategori</h2>
</div>
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors flex items-center gap-1" href="#">
<span>Detail Klasifikasi</span>
<span class="material-symbols-outlined text-[14px]">arrow_forward</span>
</a>
</div>
<!-- Mini Stats Grid with Progress Bars -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 pt-1">
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant truncate">IT &amp; Lab Komputer</span>
<span class="text-on-surface font-semibold shrink-0">1.240 Unit</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-primary-container rounded-full" style="width: 35.6%"></div>
</div>
<span class="font-body-sm text-[11px] text-on-surface-variant">35.6% • 98.4% Normal</span>
</div>
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant truncate">Audio Visual &amp; Studio</span>
<span class="text-on-surface font-semibold shrink-0">685 Unit</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-secondary-container rounded-full" style="width: 19.6%"></div>
</div>
<span class="font-body-sm text-[11px] text-on-surface-variant">19.6% • 91.0% Normal</span>
</div>
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant truncate">Laboratorium IPA</span>
<span class="text-on-surface font-semibold shrink-0">912 Unit</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-tertiary-container rounded-full" style="width: 26.2%"></div>
</div>
<span class="font-body-sm text-[11px] text-on-surface-variant">26.2% • 88.5% Normal</span>
</div>
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant truncate">Olahraga &amp; Seni</span>
<span class="text-on-surface font-semibold shrink-0">645 Unit</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-emerald-500 rounded-full" style="width: 18.5%"></div>
</div>
<span class="font-body-sm text-[11px] text-on-surface-variant">18.5% • 94.2% Normal</span>
</div>
</div>
</div>
<!-- Tabel Inventaris Sekolah Terkini -->
<div class="rounded-xl bg-surface-container-low p-4 sm:p-6 shadow-sm border border-surface-container/60 flex flex-col gap-4">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
<div>
<h2 class="font-headline-md text-lg sm:text-headline-md text-on-surface">Tabel Inventaris Sekolah Terkini</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pelacakan nomor registrasi aset resmi, ketersediaan unit, dan status pemakaian</p>
</div>
<div class="flex items-center gap-2 self-start sm:self-auto">
<button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-sm text-label-sm transition-all" type="button">
<span class="material-symbols-outlined text-[16px] text-secondary">file_download</span>
<span>Export CSV/Excel</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright flex items-center justify-center text-on-surface-variant" title="Cetak Tabel" type="button">
<span class="material-symbols-outlined text-[18px]">print</span>
</button>
</div>
</div>
<!-- Filter Tabs & Quick Search -->
<div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
<div class="flex items-center gap-1.5 overflow-x-auto pb-1 md:pb-0 custom-scroll">
<button class="px-3 py-1.5 rounded-lg bg-primary-container text-on-primary-container font-label-md text-label-md font-semibold whitespace-nowrap shadow-sm">
                  Semua Aset (3.482)
                </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-md text-label-md whitespace-nowrap">
                  Elektronik &amp; Lab (1.240)
                </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-md text-label-md whitespace-nowrap">
                  Praktikum Sains (912)
                </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-md text-label-md whitespace-nowrap">
                  Sarana Kelas (1.330)
                </button>
</div>
<div class="relative flex items-center min-w-[200px]">
<span class="material-symbols-outlined absolute left-2.5 text-on-surface-variant text-[18px]">search</span>
<input class="w-full pl-8 pr-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface placeholder:text-on-surface-variant/60 font-body-sm text-body-sm border border-surface-container-high/40 focus:outline-none focus:ring-1 focus:ring-primary-container" placeholder="Cari barcode / SKU..." type="text"/>
</div>
</div>
<!-- Responsive Table Container -->
<div class="overflow-x-auto rounded-xl border border-surface-container custom-scroll">
<table class="w-full text-left border-collapse min-w-[650px]">
<thead>
<tr class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-3 px-4">SKU / Kode</th>
<th class="py-3 px-4">Nama Barang &amp; Spesifikasi</th>
<th class="py-3 px-4">Kategori &amp; Lokasi</th>
<th class="py-3 px-4">Stok (Ada / Total)</th>
<th class="py-3 px-4">Kondisi Status</th>
<th class="py-3 px-4 text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container font-body-sm text-body-sm">
<!-- Row 1: Proyektor EPSON -->
<tr class="hover:bg-surface-container/70 transition-colors">
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-title-sm text-body-md text-on-surface font-semibold">PRJ-014-SMK</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">BC: 899120488102</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[20px]">videocam</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Proyektor EPSON EB-E500</span>
<span class="font-body-sm text-xs text-on-surface-variant line-clamp-1">3300 Lumens, HDMI, XGA 1024x768</span>
</div>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="text-on-surface">Audio Visual</span>
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">meeting_room</span> Ruang Multimedia 02
                        </span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-semibold text-on-surface">3 / 4 Unit</span>
<span class="font-label-sm text-label-sm text-secondary">1 Unit Dipinjam</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                        Sebagian Dipinjam
                      </span>
</td>
<td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Cetak Label QR">
<span class="material-symbols-outlined text-[16px]">qr_code</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Detail Riwayat">
<span class="material-symbols-outlined text-[16px]">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Menu Opsi">
<span class="material-symbols-outlined text-[16px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Laptop Asus ROG -->
<tr class="hover:bg-surface-container/70 transition-colors">
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-title-sm text-body-md text-on-surface font-semibold">LPT-088-LAB</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">BC: 899120488219</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary shrink-0">
<span class="material-symbols-outlined text-[20px]">laptop_mac</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Laptop Workstation Asus Strix G16</span>
<span class="font-body-sm text-xs text-on-surface-variant line-clamp-1">Core i7-13650HX, 32GB RAM, RTX 4060</span>
</div>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="text-on-surface">IT &amp; Lab Komputer</span>
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">meeting_room</span> Lab Komputer 1 (Gedung A)
                        </span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-semibold text-on-surface">18 / 18 Unit</span>
<span class="font-label-sm text-label-sm text-emerald-400">100% Siap Praktikum</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-950/60 text-emerald-400 font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        Baik &amp; Siap Pakai
                      </span>
</td>
<td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Cetak Label QR">
<span class="material-symbols-outlined text-[16px]">qr_code</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Detail Riwayat">
<span class="material-symbols-outlined text-[16px]">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Menu Opsi">
<span class="material-symbols-outlined text-[16px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 3: Mikroskop Binokuler -->
<tr class="hover:bg-surface-container/70 transition-colors">
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-title-sm text-body-md text-on-surface font-semibold">MIC-003-BIO</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">BC: 899120489311</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-tertiary shrink-0">
<span class="material-symbols-outlined text-[20px]">biotech</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Mikroskop Binokuler Olympus CX23</span>
<span class="font-body-sm text-xs text-on-surface-variant line-clamp-1">LED Illumination, 4x, 10x, 40x, 100x</span>
</div>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="text-on-surface">Praktikum Sains</span>
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">meeting_room</span> Lab IPA Terpadu (Ged. B)
                        </span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-semibold text-on-surface">14 / 16 Unit</span>
<span class="font-label-sm text-label-sm text-primary">2 Unit Kalibrasi</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary-container/20 text-primary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                        Perlu Servis
                      </span>
</td>
<td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Cetak Label QR">
<span class="material-symbols-outlined text-[16px]">qr_code</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Detail Riwayat">
<span class="material-symbols-outlined text-[16px]">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Menu Opsi">
<span class="material-symbols-outlined text-[16px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 4: Sound System Yamaha -->
<tr class="hover:bg-surface-container/70 transition-colors">
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-title-sm text-body-md text-on-surface font-semibold">SND-012-AUL</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">BC: 899120489950</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary-container shrink-0">
<span class="material-symbols-outlined text-[20px]">speaker</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Sound System Yamaha StagePas 600BT</span>
<span class="font-body-sm text-xs text-on-surface-variant line-clamp-1">Portable PA System 680W, 10-Channel Mixer</span>
</div>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="text-on-surface">Sarana Acara &amp; Aula</span>
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">meeting_room</span> Gudang Utama Aula
                        </span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-semibold text-on-surface">2 / 2 Set</span>
<span class="font-label-sm text-label-sm text-emerald-400">Siap Pakai Upacara</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-950/60 text-emerald-400 font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        Baik &amp; Siap Pakai
                      </span>
</td>
<td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Cetak Label QR">
<span class="material-symbols-outlined text-[16px]">qr_code</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Detail Riwayat">
<span class="material-symbols-outlined text-[16px]">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Menu Opsi">
<span class="material-symbols-outlined text-[16px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 5: Kamera Sony Cinema FX30 -->
<tr class="hover:bg-surface-container/70 transition-colors">
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-title-sm text-body-md text-on-surface font-semibold">CAM-005-MMD</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">BC: 899120490104</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary shrink-0">
<span class="material-symbols-outlined text-[20px]">photo_camera</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Kamera Sinema Sony FX30 + Lens 18-105mm</span>
<span class="font-body-sm text-xs text-on-surface-variant line-clamp-1">4K 120p, XLR Handle Unit, 2x SDXC V90 128GB</span>
</div>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="text-on-surface">Studio Broadcast</span>
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">meeting_room</span> Studio Broadcasting (Ged. C)
                        </span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<div class="flex flex-col">
<span class="font-semibold text-on-surface">0 / 2 Unit</span>
<span class="font-label-sm text-label-sm text-primary">Dipinjam Eskul Film</span>
</div>
</td>
<td class="py-3.5 px-4 align-middle whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                        Sedang Dipinjam
                      </span>
</td>
<td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Cetak Label QR">
<span class="material-symbols-outlined text-[16px]">qr_code</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface" title="Detail Riwayat">
<span class="material-symbols-outlined text-[16px]">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Menu Opsi">
<span class="material-symbols-outlined text-[16px]">more_vert</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Pagination -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-1">
<span class="font-body-sm text-body-sm text-on-surface-variant text-center sm:text-left">
                Menampilkan <span class="text-on-surface font-semibold">1 - 5</span> dari <span class="text-on-surface font-semibold">3.482</span> Barang Terdaftar
              </span>
<div class="flex items-center gap-1 sm:gap-1.5 flex-wrap justify-center">
<button class="px-2.5 py-1 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface-variant font-label-sm text-label-sm disabled:opacity-50" disabled="">
                  Sebelumnya
                </button>
<button class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-primary-container text-on-primary-container font-label-sm text-label-sm font-semibold">
                  1
                </button>
<button class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                  2
                </button>
<button class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                  3
                </button>
<span class="text-on-surface-variant px-1">…</span>
<button class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                  69
                </button>
<button class="px-2.5 py-1 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                  Selanjutnya
                </button>
</div>
</div>
</div>
</div>
<!-- Right Side Panel (1 of 3 columns on large screens) -->
<div class="lg:col-span-1 flex flex-col gap-6">
<!-- Aktivitas Sarpras Hari Ini -->
<div class="rounded-xl bg-surface-container-low p-4 sm:p-5 shadow-sm border border-surface-container/60 flex flex-col gap-3.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-[20px]">history</span>
<h2 class="font-headline-md text-base sm:text-headline-md text-on-surface font-bold">Aktivitas Sarpras Hari Ini</h2>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-[11px] text-secondary">
                Live Feed
              </span>
</div>
<div class="flex flex-col gap-3">
<!-- Item 1 -->
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
<div class="flex items-center justify-between">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Pak Budi Hartono, S.Pd</span>
<span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">09:15 WIB</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Meminjam <span class="text-on-surface font-medium">1x Proyektor EPSON EB-E500</span> untuk pembelajaran Fisika Kelas XI TKJ 2.
                </p>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-[11px] text-secondary">
<span class="material-symbols-outlined text-[13px]">alarm</span>
                    Batas: 14:00 WIB
                  </span>
<span class="px-1.5 py-0.5 rounded bg-secondary-container/20 text-secondary font-label-sm text-[11px]">
                    Sedang Dipinjam
                  </span>
</div>
</div>
<!-- Item 2 -->
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
<div class="flex items-center justify-between">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Ibu Ratna Kumala, M.Kom</span>
<span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">10:40 WIB</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Mengembalikan <span class="text-on-surface font-medium">20x Samsung Galaxy Tab A9</span> pasca asesmen formatif RPL.
                </p>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-[11px] text-emerald-400">
<span class="material-symbols-outlined text-[13px]">verified</span>
                    Kondisi Lengkap &amp; Bersih
                  </span>
<span class="px-1.5 py-0.5 rounded bg-emerald-950/60 text-emerald-400 font-label-sm text-[11px]">
                    Diverifikasi
                  </span>
</div>
</div>
<!-- Item 3 -->
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
<div class="flex items-center justify-between">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Dwi Santoso (Ketua OSIS)</span>
<span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">11:05 WIB</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Peminjaman <span class="text-on-surface font-medium">2x Mic Wireless Shure SVX</span> untuk Gladi Resik Pentas Seni.
                </p>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-[11px] text-tertiary">
<span class="material-symbols-outlined text-[13px]">event_seat</span>
                    Aula Utama
                  </span>
<span class="px-1.5 py-0.5 rounded bg-tertiary-container/30 text-tertiary font-label-sm text-[11px]">
                    Disetujui
                  </span>
</div>
</div>
<!-- Item 4 -->
<div class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
<div class="flex items-center justify-between">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Tim Teknisi IT Rekanan</span>
<span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">11:30 WIB</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Pemeriksaan unit <span class="text-on-surface font-medium">Sound System Yamaha StagePas</span> terkait kendala channel 3.
                </p>
<div class="flex items-center justify-between pt-1">
<span class="inline-flex items-center gap-1 font-label-sm text-[11px] text-primary">
<span class="material-symbols-outlined text-[13px]">confirmation_number</span>
                    Tiket #SRV-902
                  </span>
<span class="px-1.5 py-0.5 rounded bg-primary-container/20 text-primary font-label-sm text-[11px]">
                    Investigasi
                  </span>
</div>
</div>
</div>
<a class="w-full pt-2.5 pb-1 text-center font-label-md text-label-md text-secondary hover:text-primary transition-colors flex items-center justify-center gap-1 border-t border-surface-container" href="#">
<span>Lihat Semua Riwayat (256)</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<!-- Jadwal Servis & Kalibrasi Mendatang -->
<div class="rounded-xl bg-surface-container-low p-4 sm:p-5 shadow-sm border border-surface-container/60 flex flex-col gap-3.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]">calendar_clock</span>
<h2 class="font-headline-md text-base sm:text-headline-md text-on-surface font-bold">Jadwal Kalibrasi &amp; Servis</h2>
</div>
<button class="w-7 h-7 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface" title="Tambah Jadwal" type="button">
<span class="material-symbols-outlined text-[16px]">add</span>
</button>
</div>
<div class="flex flex-col gap-2.5">
<!-- Alert 1: Urgent -->
<div class="p-3 rounded-xl bg-surface-container border-l-4 border-l-primary-container flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate pr-2">Kalibrasi Lensa Mikroskop Bio</span>
<span class="px-1.5 py-0.5 rounded bg-primary-container/20 text-primary font-label-sm text-[11px] whitespace-nowrap">2 Hari Lagi</span>
</div>
<p class="font-body-sm text-xs text-on-surface-variant">16 Unit Mikroskop Olympus — PT. LabSains</p>
</div>
<!-- Alert 2: Moderate -->
<div class="p-3 rounded-xl bg-surface-container border-l-4 border-l-secondary-container flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate pr-2">Perawatan Filter &amp; Thermal PC</span>
<span class="px-1.5 py-0.5 rounded bg-secondary-container/20 text-secondary font-label-sm text-[11px] whitespace-nowrap">5 Hari Lagi</span>
</div>
<p class="font-body-sm text-xs text-on-surface-variant">36 Unit PC Client + 1 Server Lab Komputer</p>
</div>
<!-- Alert 3: Routine -->
<div class="p-3 rounded-xl bg-surface-container border-l-4 border-l-tertiary-container flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate pr-2">Servis Genset &amp; UPS Ruang Server</span>
<span class="px-1.5 py-0.5 rounded bg-tertiary-container/20 text-tertiary font-label-sm text-[11px] whitespace-nowrap">12 Hari Lagi</span>
</div>
<p class="font-body-sm text-xs text-on-surface-variant">Inspeksi kapasitas baterai &amp; cadangan daya darurat</p>
</div>
</div>
</div>
<!-- Petugas Piket Sarpras Hari Ini -->
<div class="rounded-xl bg-surface-container-low p-4 sm:p-5 shadow-sm border border-surface-container/60 flex flex-col gap-3.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-[20px]">badge</span>
<h2 class="font-headline-md text-base sm:text-headline-md text-on-surface font-bold">Petugas Piket Sarpras</h2>
</div>
<span class="font-label-sm text-label-sm text-emerald-400 flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                2 Online
              </span>
</div>
<div class="flex flex-col gap-2.5">
<!-- Staff 1 -->
<div class="p-2.5 rounded-xl bg-surface-container flex items-center justify-between gap-2 border border-surface-container-high/40">
<div class="flex items-center gap-2.5 min-w-0">
<div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary font-bold font-title-sm text-body-md shrink-0">
                    AH
                  </div>
<div class="flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Agus Hidayat, A.Md</span>
<span class="font-label-sm text-[11px] text-on-surface-variant truncate">Teknisi Lab Komputer &amp; Jaringan</span>
</div>
</div>
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright flex items-center justify-center text-on-surface shrink-0" title="Hubungi Petugas">
<span class="material-symbols-outlined text-[18px]">chat</span>
</button>
</div>
<!-- Staff 2 -->
<div class="p-2.5 rounded-xl bg-surface-container flex items-center justify-between gap-2 border border-surface-container-high/40">
<div class="flex items-center gap-2.5 min-w-0">
<div class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-on-primary font-bold font-title-sm text-body-md shrink-0">
                    SW
                  </div>
<div class="flex flex-col min-w-0">
<span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Siti Wulandari, S.Si</span>
<span class="font-label-sm text-[11px] text-on-surface-variant truncate">Laboran Lab Sains Kimia/Biologi</span>
</div>
</div>
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright flex items-center justify-center text-on-surface shrink-0" title="Hubungi Petugas">
<span class="material-symbols-outlined text-[18px]">chat</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
<!-- Interactive JavaScript for Responsive Sidebar & Drawer Behavior -->
<script>
    (function() {
      const sidebar = document.getElementById('main-sidebar');
      const backdrop = document.getElementById('sidebar-backdrop');
      const contentWrapper = document.getElementById('content-wrapper');
      const mobileToggleBtn = document.getElementById('sidebar-toggle-mobile');
      const mobileCloseBtn = document.getElementById('sidebar-close-mobile');
      const desktopToggleBtn = document.getElementById('sidebar-toggle-desktop');
      const collapseIcon = document.getElementById('collapse-icon');

      let isCollapsedDesktop = false;
      let isMobileOpen = false;

      // Handle Mobile/Tablet Slide-over Drawer
      function openMobileSidebar() {
        isMobileOpen = true;
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
        backdrop.classList.remove('hidden');
        // Small delay for fade-in effect
        setTimeout(() => {
          backdrop.classList.remove('opacity-0');
          backdrop.classList.add('opacity-100');
        }, 10);
        document.body.classList.add('overflow-hidden');
      }

      function closeMobileSidebar() {
        isMobileOpen = false;
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('-translate-x-full');
        backdrop.classList.remove('opacity-100');
        backdrop.classList.add('opacity-0');
        setTimeout(() => {
          if (!isMobileOpen) {
            backdrop.classList.add('hidden');
          }
        }, 300);
        document.body.classList.remove('overflow-hidden');
      }

      // Handle Desktop Collapse / Rail Mode
      function toggleDesktopCollapse() {
        isCollapsedDesktop = !isCollapsedDesktop;
        if (isCollapsedDesktop) {
          sidebar.classList.add('sidebar-collapsed');
          sidebar.classList.remove('w-72', 'lg:w-72');
          sidebar.classList.add('w-[72px]', 'lg:w-[72px]');
          contentWrapper.classList.remove('lg:pl-72');
          contentWrapper.classList.add('lg:pl-[72px]');
          collapseIcon.textContent = 'menu';
          desktopToggleBtn.setAttribute('title', 'Perluas Sidebar');
        } else {
          sidebar.classList.remove('sidebar-collapsed');
          sidebar.classList.remove('w-[72px]', 'lg:w-[72px]');
          sidebar.classList.add('w-72', 'lg:w-72');
          contentWrapper.classList.remove('lg:pl-[72px]');
          contentWrapper.classList.add('lg:pl-72');
          collapseIcon.textContent = 'menu_open';
          desktopToggleBtn.setAttribute('title', 'Kecilkan Sidebar');
        }
      }

      // Event Listeners
      if (mobileToggleBtn) {
        mobileToggleBtn.addEventListener('click', openMobileSidebar);
      }
      if (mobileCloseBtn) {
        mobileCloseBtn.addEventListener('click', closeMobileSidebar);
      }
      if (backdrop) {
        backdrop.addEventListener('click', closeMobileSidebar);
      }
      if (desktopToggleBtn) {
        desktopToggleBtn.addEventListener('click', toggleDesktopCollapse);
      }

      // Auto close mobile drawer when viewport resized to desktop
      window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
          if (isMobileOpen) {
            closeMobileSidebar();
          }
        }
      });
    })();
  </script>
</body></html>