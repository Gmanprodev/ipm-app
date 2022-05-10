module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'hero-image': "url('/images/hero-image.png')",
            }
        },
    },
    plugins: [require('@tailwindcss/forms')],
}