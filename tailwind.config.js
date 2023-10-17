/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            'white': '#ffffff',
            'gray': '#F5F5F5',
            'pink': '#ffadeb',
            'lightpink': '#FDE7E5',
            'fuschia': '#FF66C4',
            'violet': '#774362',
            'lightgray': '#cccccc',
            'darkgray' : '#343333',

        },
        extend: {
            fontFamily: {
                'tahoma': "Tahoma",
              },
        },
    },
    plugins: [],
};
