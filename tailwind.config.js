const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            keyframes: {
                image: {
                    '0%, 100%': { transform: 'translateY(-25%)' },
                    '50%': { transform: 'none' },
                },
                left: {
                    '0%, 100%': { transform: 'translateX(-25%)' },
                    '50%': { transform: 'none' },
                }
            }
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
