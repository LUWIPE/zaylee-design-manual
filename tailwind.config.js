import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                light: 'rgb(var(--light) / <alpha-value>)',
                dark: 'rgb(var(--dark) / <alpha-value>)',
                primary: 'rgb(var(--primary) / <alpha-value>)',
                'primary-light': 'rgb(var(--primary-light) / <alpha-value>)',
                'primary-dark': 'rgb(var(--primary-dark) / <alpha-value>)',
                secondary: 'rgb(var(--secondary) / <alpha-value>)',
                'secondary-light': 'rgb(var(--secondary-light) / <alpha-value>)',
                'secondary-dark': 'rgb(var(--secondary-dark) / <alpha-value>)',
                info: 'rgb(var(--info) / <alpha-value>)',
                'info-light': 'rgb(var(--info-light) / <alpha-value>)',
                'info-dark': 'rgb(var(--info-dark) / <alpha-value>)',
                success: 'rgb(var(--success) / <alpha-value>)',
                'success-light': 'rgb(var(--success-light) / <alpha-value>)',
                'success-dark': 'rgb(var(--success-dark) / <alpha-value>)',
                warning: 'rgb(var(--warning) / <alpha-value>)',
                'warning-light': 'rgb(var(--warning-light) / <alpha-value>)',
                'warning-dark': 'rgb(var(--warning-dark) / <alpha-value>)',
                error: 'rgb(var(--error) / <alpha-value>)',
                'error-light': 'rgb(var(--error-light) / <alpha-value>)',
                'error-dark': 'rgb(var(--error-dark) / <alpha-value>)',
            }
        },
    },
    plugins: [],
};
