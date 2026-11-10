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

        html,
        body {
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