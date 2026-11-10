<aside
    class="fixed top-0 bottom-0 left-0 z-50 w-72 lg:w-72 bg-surface-container-low flex flex-col justify-between shadow-[0_1px_12px_rgba(0,0,0,0.35)] transition-all duration-300 ease-in-out -translate-x-full lg:translate-x-0 border-r border-surface-container-high/60"
    id="main-sidebar">
    <div class="flex flex-col flex-1 min-h-0">
        <!-- Sidebar Header -->
        <div
            class="h-16 px-4 flex items-center justify-between bg-surface-container-low border-b border-surface-container/50">
            <div class="flex items-center gap-space-sm min-w-0">
                <div
                    class="w-9 h-9 rounded-xl bg-primary-container flex items-center justify-center shadow-[0_0_16px_rgba(225,29,72,0.35)] shrink-0">
                    <span class="material-symbols-outlined text-on-primary-container text-[20px]">inventory_2</span>
                </div>
                <div class="flex flex-col logo-text transition-opacity duration-200">
                    <span class="font-title-sm text-title-sm text-on-surface leading-tight font-bold">InventaEdu</span>
                    <span class="font-label-sm text-label-sm text-secondary tracking-wider uppercase">Asset
                        Suite</span>
                </div>
            </div>
            <div class="flex items-center gap-1">
                <!-- Toggle Collapse Button (Desktop) -->
                <button
                    class="hidden lg:flex w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright items-center justify-center text-on-surface-variant hover:text-on-surface transition-colors"
                    id="sidebar-toggle-desktop" title="Kecilkan/Perluas Sidebar" type="button">
                    <span class="material-symbols-outlined text-[18px]" id="collapse-icon">menu_open</span>
                </button>
                <!-- Close Button (Mobile & Tablet) -->
                <button aria-label="Tutup Menu"
                    class="flex lg:hidden w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-bright items-center justify-center text-on-surface-variant hover:text-on-surface transition-colors"
                    id="sidebar-close-mobile" type="button">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                </button>
            </div>
        </div>
        <!-- Quick Action Scan Button -->
        <div class="px-space-md py-space-sm">
            <button
                class="scan-btn w-full flex items-center justify-center gap-space-sm py-2.5 px-space-md rounded-xl bg-secondary-container text-on-secondary font-label-md text-label-md hover:bg-secondary hover:text-surface-container-lowest transition-all shadow-[0_0_12px_rgba(236,106,6,0.25)] group"
                title="Pindai Barcode Cepat" type="button">
                <span
                    class="material-symbols-outlined text-[18px] group-hover:scale-110 transition-transform">qr_code_scanner</span>
                <span class="scan-btn-text font-semibold">Pindai Barcode Cepat</span>
            </button>
        </div>
        <!-- Nav Links -->
        <nav class="flex-1 px-space-md py-space-xs space-y-1.5 overflow-y-auto overflow-x-hidden custom-scroll"
            data-active-classes="bg-primary-container text-on-primary-container font-title-sm font-semibold rounded-xl shadow-[0_0_16px_rgba(225,29,72,0.25)]">
            <a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl bg-primary-container text-on-primary-container font-title-sm font-semibold shadow-[0_0_16px_rgba(225,29,72,0.25)] transition-all"
                data-path="dashboard" href="#" title="Dashboard">
                <span class="material-symbols-outlined text-[20px] shrink-0">dashboard</span>
                <span class="nav-text truncate">Dashboard</span>
            </a>
            <a href="{{ route('barang.index') }}"
                class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all"
                data-path="daftar-barang" href="#" title="Daftar Barang">
                <span class="material-symbols-outlined text-[20px] shrink-0">category</span>
                <span class="nav-text truncate">Daftar Barang</span>
            </a>
            <a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all"
                data-path="peminjaman-dan-pengembalian" href="#" title="Peminjaman &amp; Pengembalian">
                <span class="material-symbols-outlined text-[20px] shrink-0">sync_alt</span>
                <span class="nav-text truncate">Peminjaman &amp; Pengembalian</span>
            </a>
            <a href="{{ route('kategori.index') }}"
                class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all"
                data-path="lokasi-dan-ruang" title="Lokasi &amp; Ruang">
                <span class="material-symbols-outlined text-[20px] shrink-0">category</span>
                <span class="nav-text truncate">kategori </span>
            </a>
            <a href="{{ route('lokasi.index') }}"
                class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all"
                data-path="lokasi-dan-ruang" title="Lokasi &amp; Ruang">
                <span class="material-symbols-outlined text-[20px] shrink-0">meeting_room</span>
                <span class="nav-text truncate">Lokasi &amp; Ruang</span>
            </a>
            <a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all"
                data-path="jadwal-servis-dan-perawatan" href="#" title="Jadwal Servis &amp; Perawatan">
                <span class="material-symbols-outlined text-[20px] shrink-0">build_circle</span>
                <span class="nav-text truncate">Jadwal Servis &amp; Perawatan</span>
            </a>
            <a class="nav-item flex items-center gap-space-sm px-space-md py-2.5 rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-body-md text-body-md transition-all"
                data-path="laporan-dan-audit-sarpras" href="#" title="Laporan &amp; Audit Sarpras">
                <span class="material-symbols-outlined text-[20px] shrink-0">assignment_turned_in</span>
                <span class="nav-text truncate">Laporan &amp; Audit Sarpras</span>
            </a>
        </nav>
    </div>
    <!-- Sidebar Footer / User Profile -->
    <div
        class="p-space-sm sm:p-space-md bg-surface-container-lowest/80 backdrop-blur-md flex flex-col gap-space-sm border-t border-surface-container/40">
        <div
            class="footer-text flex items-center justify-between px-space-sm py-space-xs rounded-lg bg-surface-container-high">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-secondary text-[16px]">school</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">TA 2024/2025 Genap</span>
            </div>
            <span
                class="font-label-sm text-label-sm text-secondary bg-surface-container px-space-xs py-0.5 rounded-lg">Aktif</span>
        </div>
        <div class="user-box flex items-center justify-between gap-space-sm pt-space-xs">
            <div class="flex items-center gap-space-sm min-w-0">
                <div
                    class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center ring-2 ring-primary/40 shrink-0">
                    <span class="material-symbols-outlined text-on-primary-container text-[18px]">person</span>
                </div>
                <div class="footer-text flex flex-col min-w-0">
                    <span class="font-title-sm text-body-sm text-on-surface truncate font-semibold">Ibu Sari
                        Dewi</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant truncate">Kepala Sarpras</span>
                </div>
            </div>
            <a class="footer-text w-8 h-8 rounded-lg bg-surface-container-high hover:bg-error-container hover:text-on-error-container flex items-center justify-center text-on-surface-variant transition-colors shrink-0"
                data-path="login" href="#" title="Keluar Sistem">
                <span class="material-symbols-outlined text-[18px]">logout</span>
            </a>
        </div>
    </div>
</aside>