const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            // backgroundImage: {
            //     'sasmec-iium' : "url('images/sasmec-iium.jpg')",
            // }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            display: ["group-hover"],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};