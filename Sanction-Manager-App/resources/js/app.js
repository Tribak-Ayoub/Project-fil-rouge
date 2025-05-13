import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

// Import patterns
const modulePages = import.meta.glob(
    "../../modules/**/Resources/js/Pages/**/*.vue"
);
const defaultPages = import.meta.glob("./Pages/**/*.vue");

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async (name) => {
        console.log(`Resolving page: ${name}`);

        // First try to find exact matches in default pages
        const defaultPath = `./Pages/${name}.vue`;
        if (defaultPages[defaultPath]) {
            return await defaultPages[defaultPath]();
        }

        // Try module resolution if name contains :: or /
        const separator = name.includes("::")
            ? "::"
            : name.includes("/")
            ? "/"
            : null;
        if (separator) {
            const [module, page] = name.split(separator);
            const modulePath = `../../modules/${module}/Resources/js/Pages/${page}.vue`;

            if (modulePages[modulePath]) {
                return await modulePages[modulePath]();
            }
        }

        // Try index files
        const defaultIndexPath = `./Pages/${name}/Index.vue`;
        if (defaultPages[defaultIndexPath]) {
            return await defaultPages[defaultIndexPath]();
        }

        console.error("Available default pages:", Object.keys(defaultPages));
        console.error("Available module pages:", Object.keys(modulePages));
        throw new Error(`Page not found: ${name}`);
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: { color: "#4B5563" },
});
