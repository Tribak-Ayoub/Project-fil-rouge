import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";
const modulePages = import.meta.glob(
    "../../modules/**/Resources/js/Pages/**/*.vue"
);
const defaultPages = import.meta.glob("./Pages/**/*.vue");

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async (name) => {
        if (name.includes("::")) {
            const [module, page] = name.split("::");

            // Try to find the matching module page path dynamically
            const match = Object.keys(modulePages).find((key) =>
                key.endsWith(
                    `/modules/${module}/Resources/js/Pages/${page}.vue`
                )
            );

            if (match) return modulePages[match]();

            throw new Error(`Module page not found: ${name}`);
        }

        // Same for default app pages
        const match = Object.keys(defaultPages).find((key) =>
            key.endsWith(`/Pages/${name}.vue`)
        );

        if (match) return defaultPages[match]();

        throw new Error(`App page not found: ${name}`);
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: { color: "#4B5563" },
});
