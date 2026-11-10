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