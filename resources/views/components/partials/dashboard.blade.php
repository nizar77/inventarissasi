    <div class="flex flex-col xl:flex-row xl:items-center justify-between gap-4">
                <div class="flex flex-col gap-1.5">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span
                            class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-surface-container-high text-secondary font-label-sm text-[11px] shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                            Sinkronisasi Server Realtime
                        </span>
                        <span
                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-[11px] border border-surface-container-high/40">
                            <span class="material-symbols-outlined text-[13px] text-tertiary">calendar_today</span>
                            TA 2024/2025 Genap
                        </span>
                    </div>
                    <h1 class="font-headline-xl text-2xl sm:text-headline-xl text-on-surface tracking-tight">
                        Selamat Datang kembali, <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-primary-fixed">Ibu
                            Sari Dewi</span>
                    </h1>
                    <p class="font-body-md text-body-sm sm:text-body-md text-on-surface-variant">
                        Kepala Bagian Sarana &amp; Prasarana — SMKN 1 Prestasi Nusantara. Pusat kontrol &amp; pelacakan
                        inventaris aktif.
                    </p>
                </div>
                <div class="flex items-center gap-2 sm:gap-3 flex-wrap">
                    <button
                        class="flex items-center gap-1.5 px-3 sm:px-4 py-2 rounded-xl bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-all shadow-sm"
                        type="button">
                        <span class="material-symbols-outlined text-[18px] text-secondary">qr_code_scanner</span>
                        <span>Scan Barcode</span>
                    </button>
                    <button
                        class="flex items-center gap-1.5 px-3 sm:px-4 py-2 rounded-xl bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-all shadow-sm"
                        type="button">
                        <span class="material-symbols-outlined text-[18px] text-primary">download</span>
                        <span>Audit Sarpras</span>
                    </button>
                    <button
                        class="flex items-center gap-1.5 px-4 sm:px-5 py-2 rounded-xl bg-gradient-to-r from-primary-container via-secondary-container to-secondary text-on-primary font-label-md text-label-md font-semibold transition-all shadow-[0_0_20px_rgba(225,29,72,0.35)] hover:shadow-[0_0_24px_rgba(236,106,6,0.45)]"
                        type="button">
                        <span class="material-symbols-outlined text-[18px]">add_circle</span>
                        <span>+ Tambah Barang Baru</span>
                    </button>
                </div>
            </div>
            <!-- Filter Controls Bar -->
            <div
                class="flex flex-col md:flex-row md:items-center justify-between gap-3 p-2.5 sm:p-3 rounded-xl bg-surface-container-low border border-surface-container/60 shadow-sm">
                <div class="flex items-center gap-2 flex-wrap">
                    <div
                        class="flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-on-surface-variant">tune</span>
                        <span class="text-on-surface-variant hidden sm:inline">Filter:</span>
                    </div>
                    <select
                        class="px-2.5 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-body-sm text-body-sm border border-transparent focus:outline-none focus:border-primary-container">
                        <option selected="">Semua Gedung &amp; Lab (7 Zona)</option>
                        <option>Gedung A - Lab Komputer &amp; Robotik</option>
                        <option>Gedung B - Laboratorium Sains</option>
                        <option>Gedung C - Studio Multimedia</option>
                        <option>Gedung D - Ruang Teori &amp; Kelas</option>
                    </select>
                    <select
                        class="px-2.5 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-body-sm text-body-sm border border-transparent focus:outline-none focus:border-primary-container">
                        <option selected="">Kondisi: Semua Kondisi</option>
                        <option>Baik &amp; Terkalibrasi (90.2%)</option>
                        <option>Sedang Dipinjam (256 Unit)</option>
                        <option>Perlu Kalibrasi &amp; Servis (86 Unit)</option>
                        <option>Afkir / Usulan Mutasi</option>
                    </select>
                    <div
                        class="hidden xl:flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary">date_range</span>
                        <span>Periode Audit: 01 Jan 2025 - 28 Feb 2025</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 self-end md:self-auto">
                    <button
                        class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                        title="Segarkan" type="button">
                        <span class="material-symbols-outlined text-[18px]">refresh</span>
                    </button>
                    <button
                        class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                        title="Layar Penuh" type="button">
                        <span class="material-symbols-outlined text-[18px]">fullscreen</span>
                    </button>
                </div>
            </div>
            <!-- KPI Stat Metric Cards (Responsive Grid: 1 col mobile -> 2 col tablet -> 4 col desktop) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1: Total Aset -->
                <div
                    class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary-container to-secondary">
                    </div>
                    <div class="flex items-start justify-between gap-3 mb-4">
                        <div class="flex flex-col">
                            <span
                                class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total
                                Aset Sekolah</span>
                            <span
                                class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">3.482</span>
                        </div>
                        <div
                            class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary group-hover:scale-105 transition-transform shadow-sm shrink-0">
                            <span class="material-symbols-outlined text-[26px]">inventory_2</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-1">
                        <span
                            class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary bg-surface-container-high px-2 py-0.5 rounded">
                            <span class="material-symbols-outlined text-[14px]">arrow_upward</span>
                            +42 unit
                        </span>
                        <span class="font-body-sm text-xs sm:text-body-sm text-on-surface-variant">Audit Terverifikasi
                            100%</span>
                    </div>
                </div>
                <!-- Card 2: Kondisi Prima -->
                <div
                    class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-500 to-teal-400"></div>
                    <div class="flex items-start justify-between gap-3 mb-4">
                        <div class="flex flex-col">
                            <span
                                class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kondisi
                                Prima &amp; Siap Pakai</span>
                            <span
                                class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">3.140</span>
                        </div>
                        <div class="relative w-12 h-12 flex items-center justify-center shrink-0">
                            <svg class="w-12 h-12 -rotate-90" viewbox="0 0 36 36">
                                <path class="text-surface-container-high"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none" stroke="currentColor" stroke-width="3.5"></path>
                                <path class="text-emerald-400"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none" stroke="currentColor" stroke-dasharray="90.2, 100"
                                    stroke-linecap="round" stroke-width="3.5"></path>
                            </svg>
                            <span class="absolute font-label-sm text-label-sm text-emerald-400 font-bold">90%</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-1">
                        <span
                            class="inline-flex items-center gap-1 font-label-sm text-label-sm text-emerald-400 bg-emerald-950/60 px-2 py-0.5 rounded">
                            <span class="material-symbols-outlined text-[14px]">check_circle</span>
                            Siap Operasional
                        </span>
                        <span class="font-body-sm text-xs sm:text-body-sm text-on-surface-variant">Standar BNSP</span>
                    </div>
                </div>
                <!-- Card 3: Perlu Servis & Perawatan -->
                <div
                    class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container">
                    </div>
                    <div class="flex items-start justify-between gap-3 mb-4">
                        <div class="flex flex-col">
                            <span
                                class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Perlu
                                Servis &amp; Perawatan</span>
                            <span
                                class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">86</span>
                        </div>
                        <div
                            class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-secondary group-hover:scale-105 transition-transform shadow-sm shrink-0">
                            <span class="material-symbols-outlined text-[26px]">build_circle</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-1">
                        <span
                            class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary bg-surface-container-high px-2 py-0.5 rounded">
                            <span class="material-symbols-outlined text-[14px]">pending_actions</span>
                            12 Antre Bengkel
                        </span>
                        <span class="font-body-sm text-xs sm:text-body-sm text-on-surface-variant">74 Jadwal
                            Servis</span>
                    </div>
                </div>
                <!-- Card 4: Sedang Dipinjam Aktif -->
                <div
                    class="relative overflow-hidden rounded-xl bg-surface-container-low p-5 flex flex-col justify-between shadow-sm group hover:bg-surface-container transition-all border border-surface-container/50">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-tertiary to-primary"></div>
                    <div class="flex items-start justify-between gap-3 mb-4">
                        <div class="flex flex-col">
                            <span
                                class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Sedang
                                Dipinjam Aktif</span>
                            <span
                                class="font-display-lg text-3xl sm:text-display-lg text-on-surface mt-1 font-bold">256</span>
                        </div>
                        <div
                            class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-tertiary group-hover:scale-105 transition-transform shadow-sm shrink-0">
                            <span class="material-symbols-outlined text-[26px]">sync_saved_locally</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-1">
                        <span
                            class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary bg-primary-container/20 px-2 py-0.5 rounded">
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
                    <div
                        class="rounded-xl bg-surface-container-low p-4 sm:p-6 shadow-sm border border-surface-container/60 flex flex-col gap-4">
                        <div class="flex items-center justify-between flex-wrap gap-2">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-[22px]">donut_small</span>
                                <h2 class="font-headline-md text-lg sm:text-headline-md text-on-surface">Distribusi Aset
                                    Menurut Kategori</h2>
                            </div>
                            <a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors flex items-center gap-1"
                                href="#">
                                <span>Detail Klasifikasi</span>
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Mini Stats Grid with Progress Bars -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 pt-1">
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
                                <div class="flex items-center justify-between font-label-sm text-label-sm">
                                    <span class="text-on-surface-variant truncate">IT &amp; Lab Komputer</span>
                                    <span class="text-on-surface font-semibold shrink-0">1.240 Unit</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
                                    <div class="h-full bg-primary-container rounded-full" style="width: 35.6%"></div>
                                </div>
                                <span class="font-body-sm text-[11px] text-on-surface-variant">35.6% • 98.4%
                                    Normal</span>
                            </div>
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
                                <div class="flex items-center justify-between font-label-sm text-label-sm">
                                    <span class="text-on-surface-variant truncate">Audio Visual &amp; Studio</span>
                                    <span class="text-on-surface font-semibold shrink-0">685 Unit</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
                                    <div class="h-full bg-secondary-container rounded-full" style="width: 19.6%"></div>
                                </div>
                                <span class="font-body-sm text-[11px] text-on-surface-variant">19.6% • 91.0%
                                    Normal</span>
                            </div>
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
                                <div class="flex items-center justify-between font-label-sm text-label-sm">
                                    <span class="text-on-surface-variant truncate">Laboratorium IPA</span>
                                    <span class="text-on-surface font-semibold shrink-0">912 Unit</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
                                    <div class="h-full bg-tertiary-container rounded-full" style="width: 26.2%"></div>
                                </div>
                                <span class="font-body-sm text-[11px] text-on-surface-variant">26.2% • 88.5%
                                    Normal</span>
                            </div>
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1.5 border border-surface-container-high/40">
                                <div class="flex items-center justify-between font-label-sm text-label-sm">
                                    <span class="text-on-surface-variant truncate">Olahraga &amp; Seni</span>
                                    <span class="text-on-surface font-semibold shrink-0">645 Unit</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
                                    <div class="h-full bg-emerald-500 rounded-full" style="width: 18.5%"></div>
                                </div>
                                <span class="font-body-sm text-[11px] text-on-surface-variant">18.5% • 94.2%
                                    Normal</span>
                            </div>
                        </div>
                    </div>
                    <!-- Tabel Inventaris Sekolah Terkini -->
                    <div
                        class="rounded-xl bg-surface-container-low p-4 sm:p-6 shadow-sm border border-surface-container/60 flex flex-col gap-4">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                            <div>
                                <h2 class="font-headline-md text-lg sm:text-headline-md text-on-surface">Tabel
                                    Inventaris Sekolah Terkini</h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pelacakan nomor registrasi
                                    aset resmi, ketersediaan unit, dan status pemakaian</p>
                            </div>
                            <div class="flex items-center gap-2 self-start sm:self-auto">
                                <button
                                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-sm text-label-sm transition-all"
                                    type="button">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-secondary">file_download</span>
                                    <span>Export CSV/Excel</span>
                                </button>
                                <button
                                    class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright flex items-center justify-center text-on-surface-variant"
                                    title="Cetak Tabel" type="button">
                                    <span class="material-symbols-outlined text-[18px]">print</span>
                                </button>
                            </div>
                        </div>
                        <!-- Filter Tabs & Quick Search -->
                        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
                            <div class="flex items-center gap-1.5 overflow-x-auto pb-1 md:pb-0 custom-scroll">
                                <button
                                    class="px-3 py-1.5 rounded-lg bg-primary-container text-on-primary-container font-label-md text-label-md font-semibold whitespace-nowrap shadow-sm">
                                    Semua Aset (3.482)
                                </button>
                                <button
                                    class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-md text-label-md whitespace-nowrap">
                                    Elektronik &amp; Lab (1.240)
                                </button>
                                <button
                                    class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-md text-label-md whitespace-nowrap">
                                    Praktikum Sains (912)
                                </button>
                                <button
                                    class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-md text-label-md whitespace-nowrap">
                                    Sarana Kelas (1.330)
                                </button>
                            </div>
                            <div class="relative flex items-center min-w-[200px]">
                                <span
                                    class="material-symbols-outlined absolute left-2.5 text-on-surface-variant text-[18px]">search</span>
                                <input
                                    class="w-full pl-8 pr-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface placeholder:text-on-surface-variant/60 font-body-sm text-body-sm border border-surface-container-high/40 focus:outline-none focus:ring-1 focus:ring-primary-container"
                                    placeholder="Cari barcode / SKU..." type="text" />
                            </div>
                        </div>
                        <!-- Responsive Table Container -->
                        <div class="overflow-x-auto rounded-xl border border-surface-container custom-scroll">
                            <table class="w-full text-left border-collapse min-w-[650px]">
                                <thead>
                                    <tr
                                        class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
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
                                                <span
                                                    class="font-title-sm text-body-md text-on-surface font-semibold">PRJ-014-SMK</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">BC:
                                                    899120488102</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
                                                    <span class="material-symbols-outlined text-[20px]">videocam</span>
                                                </div>
                                                <div class="flex flex-col min-w-0">
                                                    <span
                                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Proyektor
                                                        EPSON EB-E500</span>
                                                    <span
                                                        class="font-body-sm text-xs text-on-surface-variant line-clamp-1">3300
                                                        Lumens, HDMI, XGA 1024x768</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="text-on-surface">Audio Visual</span>
                                                <span
                                                    class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                    <span
                                                        class="material-symbols-outlined text-[13px]">meeting_room</span>
                                                    Ruang Multimedia 02
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="font-semibold text-on-surface">3 / 4 Unit</span>
                                                <span class="font-label-sm text-label-sm text-secondary">1 Unit
                                                    Dipinjam</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm font-semibold">
                                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                                Sebagian Dipinjam
                                            </span>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
                                            <div class="inline-flex items-center gap-1">
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Cetak Label QR">
                                                    <span class="material-symbols-outlined text-[16px]">qr_code</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Detail Riwayat">
                                                    <span
                                                        class="material-symbols-outlined text-[16px]">visibility</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                                                    title="Menu Opsi">
                                                    <span class="material-symbols-outlined text-[16px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 2: Laptop Asus ROG -->
                                    <tr class="hover:bg-surface-container/70 transition-colors">
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-title-sm text-body-md text-on-surface font-semibold">LPT-088-LAB</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">BC:
                                                    899120488219</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary shrink-0">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">laptop_mac</span>
                                                </div>
                                                <div class="flex flex-col min-w-0">
                                                    <span
                                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Laptop
                                                        Workstation Asus Strix G16</span>
                                                    <span
                                                        class="font-body-sm text-xs text-on-surface-variant line-clamp-1">Core
                                                        i7-13650HX, 32GB RAM, RTX 4060</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="text-on-surface">IT &amp; Lab Komputer</span>
                                                <span
                                                    class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                    <span
                                                        class="material-symbols-outlined text-[13px]">meeting_room</span>
                                                    Lab Komputer 1 (Gedung A)
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="font-semibold text-on-surface">18 / 18 Unit</span>
                                                <span class="font-label-sm text-label-sm text-emerald-400">100% Siap
                                                    Praktikum</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-950/60 text-emerald-400 font-label-sm text-label-sm font-semibold">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                                Baik &amp; Siap Pakai
                                            </span>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
                                            <div class="inline-flex items-center gap-1">
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Cetak Label QR">
                                                    <span class="material-symbols-outlined text-[16px]">qr_code</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Detail Riwayat">
                                                    <span
                                                        class="material-symbols-outlined text-[16px]">visibility</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                                                    title="Menu Opsi">
                                                    <span class="material-symbols-outlined text-[16px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 3: Mikroskop Binokuler -->
                                    <tr class="hover:bg-surface-container/70 transition-colors">
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-title-sm text-body-md text-on-surface font-semibold">MIC-003-BIO</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">BC:
                                                    899120489311</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-tertiary shrink-0">
                                                    <span class="material-symbols-outlined text-[20px]">biotech</span>
                                                </div>
                                                <div class="flex flex-col min-w-0">
                                                    <span
                                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Mikroskop
                                                        Binokuler Olympus CX23</span>
                                                    <span
                                                        class="font-body-sm text-xs text-on-surface-variant line-clamp-1">LED
                                                        Illumination, 4x, 10x, 40x, 100x</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="text-on-surface">Praktikum Sains</span>
                                                <span
                                                    class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                    <span
                                                        class="material-symbols-outlined text-[13px]">meeting_room</span>
                                                    Lab IPA Terpadu (Ged. B)
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="font-semibold text-on-surface">14 / 16 Unit</span>
                                                <span class="font-label-sm text-label-sm text-primary">2 Unit
                                                    Kalibrasi</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary-container/20 text-primary font-label-sm text-label-sm font-semibold">
                                                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                                Perlu Servis
                                            </span>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
                                            <div class="inline-flex items-center gap-1">
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Cetak Label QR">
                                                    <span class="material-symbols-outlined text-[16px]">qr_code</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Detail Riwayat">
                                                    <span
                                                        class="material-symbols-outlined text-[16px]">visibility</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                                                    title="Menu Opsi">
                                                    <span class="material-symbols-outlined text-[16px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 4: Sound System Yamaha -->
                                    <tr class="hover:bg-surface-container/70 transition-colors">
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-title-sm text-body-md text-on-surface font-semibold">SND-012-AUL</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">BC:
                                                    899120489950</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary-container shrink-0">
                                                    <span class="material-symbols-outlined text-[20px]">speaker</span>
                                                </div>
                                                <div class="flex flex-col min-w-0">
                                                    <span
                                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Sound
                                                        System Yamaha StagePas 600BT</span>
                                                    <span
                                                        class="font-body-sm text-xs text-on-surface-variant line-clamp-1">Portable
                                                        PA System 680W, 10-Channel Mixer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="text-on-surface">Sarana Acara &amp; Aula</span>
                                                <span
                                                    class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                    <span
                                                        class="material-symbols-outlined text-[13px]">meeting_room</span>
                                                    Gudang Utama Aula
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="font-semibold text-on-surface">2 / 2 Set</span>
                                                <span class="font-label-sm text-label-sm text-emerald-400">Siap Pakai
                                                    Upacara</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-950/60 text-emerald-400 font-label-sm text-label-sm font-semibold">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                                Baik &amp; Siap Pakai
                                            </span>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
                                            <div class="inline-flex items-center gap-1">
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Cetak Label QR">
                                                    <span class="material-symbols-outlined text-[16px]">qr_code</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Detail Riwayat">
                                                    <span
                                                        class="material-symbols-outlined text-[16px]">visibility</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                                                    title="Menu Opsi">
                                                    <span class="material-symbols-outlined text-[16px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 5: Kamera Sony Cinema FX30 -->
                                    <tr class="hover:bg-surface-container/70 transition-colors">
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-title-sm text-body-md text-on-surface font-semibold">CAM-005-MMD</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">BC:
                                                    899120490104</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary shrink-0">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">photo_camera</span>
                                                </div>
                                                <div class="flex flex-col min-w-0">
                                                    <span
                                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Kamera
                                                        Sinema Sony FX30 + Lens 18-105mm</span>
                                                    <span
                                                        class="font-body-sm text-xs text-on-surface-variant line-clamp-1">4K
                                                        120p, XLR Handle Unit, 2x SDXC V90 128GB</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="text-on-surface">Studio Broadcast</span>
                                                <span
                                                    class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                    <span
                                                        class="material-symbols-outlined text-[13px]">meeting_room</span>
                                                    Studio Broadcasting (Ged. C)
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span class="font-semibold text-on-surface">0 / 2 Unit</span>
                                                <span class="font-label-sm text-label-sm text-primary">Dipinjam Eskul
                                                    Film</span>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm font-semibold">
                                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                                Sedang Dipinjam
                                            </span>
                                        </td>
                                        <td class="py-3.5 px-4 align-middle text-right whitespace-nowrap">
                                            <div class="inline-flex items-center gap-1">
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Cetak Label QR">
                                                    <span class="material-symbols-outlined text-[16px]">qr_code</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface"
                                                    title="Detail Riwayat">
                                                    <span
                                                        class="material-symbols-outlined text-[16px]">visibility</span>
                                                </button>
                                                <button
                                                    class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-bright flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                                                    title="Menu Opsi">
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
                                Menampilkan <span class="text-on-surface font-semibold">1 - 5</span> dari <span
                                    class="text-on-surface font-semibold">3.482</span> Barang Terdaftar
                            </span>
                            <div class="flex items-center gap-1 sm:gap-1.5 flex-wrap justify-center">
                                <button
                                    class="px-2.5 py-1 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface-variant font-label-sm text-label-sm disabled:opacity-50"
                                    disabled="">
                                    Sebelumnya
                                </button>
                                <button
                                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-primary-container text-on-primary-container font-label-sm text-label-sm font-semibold">
                                    1
                                </button>
                                <button
                                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                                    2
                                </button>
                                <button
                                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                                    3
                                </button>
                                <span class="text-on-surface-variant px-1">…</span>
                                <button
                                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                                    69
                                </button>
                                <button
                                    class="px-2.5 py-1 rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface font-label-sm text-label-sm">
                                    Selanjutnya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Side Panel (1 of 3 columns on large screens) -->
                <div class="lg:col-span-1 flex flex-col gap-6">
                    <!-- Aktivitas Sarpras Hari Ini -->
                    <div
                        class="rounded-xl bg-surface-container-low p-4 sm:p-5 shadow-sm border border-surface-container/60 flex flex-col gap-3.5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-[20px]">history</span>
                                <h2 class="font-headline-md text-base sm:text-headline-md text-on-surface font-bold">
                                    Aktivitas Sarpras Hari Ini</h2>
                            </div>
                            <span
                                class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-[11px] text-secondary">
                                Live Feed
                            </span>
                        </div>
                        <div class="flex flex-col gap-3">
                            <!-- Item 1 -->
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
                                <div class="flex items-center justify-between">
                                    <span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Pak
                                        Budi Hartono, S.Pd</span>
                                    <span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">09:15
                                        WIB</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Meminjam <span class="text-on-surface font-medium">1x Proyektor EPSON EB-E500</span>
                                    untuk pembelajaran Fisika Kelas XI TKJ 2.
                                </p>
                                <div class="flex items-center justify-between pt-1">
                                    <span
                                        class="inline-flex items-center gap-1 font-label-sm text-[11px] text-secondary">
                                        <span class="material-symbols-outlined text-[13px]">alarm</span>
                                        Batas: 14:00 WIB
                                    </span>
                                    <span
                                        class="px-1.5 py-0.5 rounded bg-secondary-container/20 text-secondary font-label-sm text-[11px]">
                                        Sedang Dipinjam
                                    </span>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
                                <div class="flex items-center justify-between">
                                    <span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Ibu
                                        Ratna Kumala, M.Kom</span>
                                    <span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">10:40
                                        WIB</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Mengembalikan <span class="text-on-surface font-medium">20x Samsung Galaxy Tab
                                        A9</span> pasca asesmen formatif RPL.
                                </p>
                                <div class="flex items-center justify-between pt-1">
                                    <span
                                        class="inline-flex items-center gap-1 font-label-sm text-[11px] text-emerald-400">
                                        <span class="material-symbols-outlined text-[13px]">verified</span>
                                        Kondisi Lengkap &amp; Bersih
                                    </span>
                                    <span
                                        class="px-1.5 py-0.5 rounded bg-emerald-950/60 text-emerald-400 font-label-sm text-[11px]">
                                        Diverifikasi
                                    </span>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
                                <div class="flex items-center justify-between">
                                    <span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Dwi
                                        Santoso (Ketua OSIS)</span>
                                    <span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">11:05
                                        WIB</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Peminjaman <span class="text-on-surface font-medium">2x Mic Wireless Shure
                                        SVX</span> untuk Gladi Resik Pentas Seni.
                                </p>
                                <div class="flex items-center justify-between pt-1">
                                    <span
                                        class="inline-flex items-center gap-1 font-label-sm text-[11px] text-tertiary">
                                        <span class="material-symbols-outlined text-[13px]">event_seat</span>
                                        Aula Utama
                                    </span>
                                    <span
                                        class="px-1.5 py-0.5 rounded bg-tertiary-container/30 text-tertiary font-label-sm text-[11px]">
                                        Disetujui
                                    </span>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div
                                class="p-3 rounded-xl bg-surface-container flex flex-col gap-1 border border-surface-container-high/40">
                                <div class="flex items-center justify-between">
                                    <span class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Tim
                                        Teknisi IT Rekanan</span>
                                    <span class="font-label-sm text-[11px] text-on-surface-variant shrink-0">11:30
                                        WIB</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Pemeriksaan unit <span class="text-on-surface font-medium">Sound System Yamaha
                                        StagePas</span> terkait kendala channel 3.
                                </p>
                                <div class="flex items-center justify-between pt-1">
                                    <span class="inline-flex items-center gap-1 font-label-sm text-[11px] text-primary">
                                        <span class="material-symbols-outlined text-[13px]">confirmation_number</span>
                                        Tiket #SRV-902
                                    </span>
                                    <span
                                        class="px-1.5 py-0.5 rounded bg-primary-container/20 text-primary font-label-sm text-[11px]">
                                        Investigasi
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a class="w-full pt-2.5 pb-1 text-center font-label-md text-label-md text-secondary hover:text-primary transition-colors flex items-center justify-center gap-1 border-t border-surface-container"
                            href="#">
                            <span>Lihat Semua Riwayat (256)</span>
                            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                    </div>
                    <!-- Jadwal Servis & Kalibrasi Mendatang -->
                    <div
                        class="rounded-xl bg-surface-container-low p-4 sm:p-5 shadow-sm border border-surface-container/60 flex flex-col gap-3.5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[20px]">calendar_clock</span>
                                <h2 class="font-headline-md text-base sm:text-headline-md text-on-surface font-bold">
                                    Jadwal Kalibrasi &amp; Servis</h2>
                            </div>
                            <button
                                class="w-7 h-7 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface"
                                title="Tambah Jadwal" type="button">
                                <span class="material-symbols-outlined text-[16px]">add</span>
                            </button>
                        </div>
                        <div class="flex flex-col gap-2.5">
                            <!-- Alert 1: Urgent -->
                            <div
                                class="p-3 rounded-xl bg-surface-container border-l-4 border-l-primary-container flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate pr-2">Kalibrasi
                                        Lensa Mikroskop Bio</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded bg-primary-container/20 text-primary font-label-sm text-[11px] whitespace-nowrap">2
                                        Hari Lagi</span>
                                </div>
                                <p class="font-body-sm text-xs text-on-surface-variant">16 Unit Mikroskop Olympus — PT.
                                    LabSains</p>
                            </div>
                            <!-- Alert 2: Moderate -->
                            <div
                                class="p-3 rounded-xl bg-surface-container border-l-4 border-l-secondary-container flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate pr-2">Perawatan
                                        Filter &amp; Thermal PC</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded bg-secondary-container/20 text-secondary font-label-sm text-[11px] whitespace-nowrap">5
                                        Hari Lagi</span>
                                </div>
                                <p class="font-body-sm text-xs text-on-surface-variant">36 Unit PC Client + 1 Server Lab
                                    Komputer</p>
                            </div>
                            <!-- Alert 3: Routine -->
                            <div
                                class="p-3 rounded-xl bg-surface-container border-l-4 border-l-tertiary-container flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="font-title-sm text-body-sm text-on-surface font-semibold truncate pr-2">Servis
                                        Genset &amp; UPS Ruang Server</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded bg-tertiary-container/20 text-tertiary font-label-sm text-[11px] whitespace-nowrap">12
                                        Hari Lagi</span>
                                </div>
                                <p class="font-body-sm text-xs text-on-surface-variant">Inspeksi kapasitas baterai &amp;
                                    cadangan daya darurat</p>
                            </div>
                        </div>
                    </div>
                    <!-- Petugas Piket Sarpras Hari Ini -->
                    <div
                        class="rounded-xl bg-surface-container-low p-4 sm:p-5 shadow-sm border border-surface-container/60 flex flex-col gap-3.5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-[20px]">badge</span>
                                <h2 class="font-headline-md text-base sm:text-headline-md text-on-surface font-bold">
                                    Petugas Piket Sarpras</h2>
                            </div>
                            <span class="font-label-sm text-label-sm text-emerald-400 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                2 Online
                            </span>
                        </div>
                        <div class="flex flex-col gap-2.5">
                            <!-- Staff 1 -->
                            <div
                                class="p-2.5 rounded-xl bg-surface-container flex items-center justify-between gap-2 border border-surface-container-high/40">
                                <div class="flex items-center gap-2.5 min-w-0">
                                    <div
                                        class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary font-bold font-title-sm text-body-md shrink-0">
                                        AH
                                    </div>
                                    <div class="flex flex-col min-w-0">
                                        <span
                                            class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Agus
                                            Hidayat, A.Md</span>
                                        <span class="font-label-sm text-[11px] text-on-surface-variant truncate">Teknisi
                                            Lab Komputer &amp; Jaringan</span>
                                    </div>
                                </div>
                                <button
                                    class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright flex items-center justify-center text-on-surface shrink-0"
                                    title="Hubungi Petugas">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                            <!-- Staff 2 -->
                            <div
                                class="p-2.5 rounded-xl bg-surface-container flex items-center justify-between gap-2 border border-surface-container-high/40">
                                <div class="flex items-center gap-2.5 min-w-0">
                                    <div
                                        class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-on-primary font-bold font-title-sm text-body-md shrink-0">
                                        SW
                                    </div>
                                    <div class="flex flex-col min-w-0">
                                        <span
                                            class="font-title-sm text-body-sm text-on-surface font-semibold truncate">Siti
                                            Wulandari, S.Si</span>
                                        <span class="font-label-sm text-[11px] text-on-surface-variant truncate">Laboran
                                            Lab Sains Kimia/Biologi</span>
                                    </div>
                                </div>
                                <button
                                    class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright flex items-center justify-center text-on-surface shrink-0"
                                    title="Hubungi Petugas">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>