/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/js/**/*.{vue,js}", "./resources/**/*.blade.php"],
    theme: {
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
