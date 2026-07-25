import './styles.css';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createRoot } from 'react-dom/client';

const defaultBrandName = 'App';

const getBrandName = () => {
    if (typeof document === 'undefined') {
        return defaultBrandName;
    }

    const value = document.documentElement?.dataset?.brand ?? '';
    const trimmed = value.trim();

    return trimmed || defaultBrandName;
};

createInertiaApp({
    title: (title) => {
        const brandName = getBrandName();

        return title ? `${title} - ${brandName}` : brandName;
    },
    resolve: (name) =>
        resolvePageComponent(`./Pages/${name}.tsx`, import.meta.glob('./Pages/**/*.tsx')),
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />);
    },
    progress: {
        color: '#10b981',
    },
});
