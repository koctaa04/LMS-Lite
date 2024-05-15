/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
        },
        fontFamily: {
            montserrat: ["Montserrat", "sans-serif"],
            poppins: ["Poppins", "sans-serif"],
            playfair: ["Playfair", "serif"],
        },
        extend: {},
    },
    plugins: [],
};
