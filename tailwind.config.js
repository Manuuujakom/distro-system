/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/**/*.php",
    "./src/js/**/*.js"
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#1E40AF",
        accent: "#F59E0B",
        surface: {
          light: "#F8FAFC",
          dark: "#0F172A",
        },
        sidebar: {
          light: "#1E293B",
          dark: "#0F172A",
        }
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
  safelist: [
    'translate-x-full',
    '-translate-x-full',
    'opacity-0',
    'hidden',
    'collapsed',
    'bg-primary/20',
    'text-white',
    'border-l-2',
    'border-accent',
    'bg-green-100',
    'bg-red-100',
    'bg-amber-100',
    'text-green-800',
    'text-red-800',
    'text-amber-800',
    'dark:bg-green-900/20',
    'dark:bg-red-900/20',
    'dark:bg-amber-900/20',
    'dark:text-green-400',
    'dark:text-red-400',
    'dark:text-amber-400'
  ],
}
