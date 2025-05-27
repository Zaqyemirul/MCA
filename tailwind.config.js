/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    // Pastikan jalur ini mencakup semua file yang menggunakan kelas Tailwind Anda
  ],
  theme: {
    extend: {
      fontFamily: {
        'montserrat': ['Montserrat', ...defaultTheme.fontFamily.sans],
        // Pastikan nama ini cocok dengan yang Anda gunakan di HTML
        'hidayatullah': ['Hidayatullah', 'sans-serif'],
        'open-sans': ['Open Sans', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'purple-800': '#6B21A8',
        'amber-300': '#FCD34D',
        'zinc-800': '#27272A',
        'zinc-500': '#71717A',
      },
    },
  },
  plugins: [],
};
