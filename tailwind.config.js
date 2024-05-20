/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/views/pages/*.blade.php",
        "./resources/views/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                invalid: "#f56565",
            },
        },
    },
    plugins: [],
};
