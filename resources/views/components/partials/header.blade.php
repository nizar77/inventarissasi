<header
    class="sticky top-0 z-30 h-16 bg-surface/90 backdrop-blur-xl border-b border-surface-container/50 shadow-[0_1px_8px_rgba(0,0,0,0.2)]">
    <div class="h-16 w-full px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-2 sm:gap-4">
        <!-- Left: Mobile Hamburger & Search -->
        <div class="flex items-center gap-3 flex-1 min-w-0">
            <!-- Mobile Hamburger Toggle -->
            <button aria-label="Buka Menu Sidebar"
                class="flex lg:hidden w-9 h-9 rounded-xl bg-surface-container-high hover:bg-surface-bright items-center justify-center text-on-surface transition-colors shrink-0"
                id="sidebar-toggle-mobile" type="button">
                <span class="material-symbols-outlined text-[20px]">menu</span>
            </button>
            <!-- Search Input -->
            <div class="relative flex items-center w-full max-w-xs sm:max-w-md md:max-w-lg">
                <span
                    class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px] sm:text-[20px]">search</span>
                <input
                    class="w-full pl-9 sm:pl-10 pr-12 sm:pr-20 py-2 rounded-xl bg-surface-container-low text-on-surface placeholder:text-on-surface-variant/70 font-body-sm text-body-sm border border-transparent focus:border-primary-container focus:outline-none focus:bg-surface-container focus:ring-1 focus:ring-primary-container transition-all"
                    placeholder="Cari aset, serial no, atau ruangan..." type="text" />
                <span
                    class="hidden sm:inline-block absolute right-2.5 px-1.5 py-0.5 rounded-lg bg-surface-container-high text-on-surface-variant font-label-sm text-[11px]">Ctrl+K</span>
            </div>
        </div>
        <!-- Right: Realtime status, notifications, action & user icon -->
        <div class="flex items-center gap-2 sm:gap-3 shrink-0">
            <div
                class="hidden xl:flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-surface-container-low border border-surface-container-high">
                <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
                <span class="font-label-sm text-label-sm text-secondary">Tersinkronisasi Realtime</span>
            </div>
            <button
                class="relative w-9 h-9 rounded-xl bg-surface-container-low hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant hover:text-on-surface transition-colors"
                title="Notifikasi" type="button">
                <span class="material-symbols-outlined text-[20px]">notifications</span>
                <span
                    class="absolute top-1 right-1 w-2.5 h-2.5 rounded-full bg-primary-container ring-2 ring-surface"></span>
            </button>
            <button
                class="flex items-center gap-1 sm:gap-space-xs px-3 sm:px-space-md py-2 rounded-xl bg-primary-container hover:bg-inverse-primary text-on-primary-container font-label-md text-label-md transition-all shadow-[0_0_16px_rgba(225,29,72,0.35)]"
                type="button">
                <span class="material-symbols-outlined text-[18px]">add</span>
                <span class="hidden sm:inline">Tambah Aset</span>
            </button>
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm shrink-0">
                <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
            </div>
        </div>
    </div>
</header>