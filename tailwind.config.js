/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#000000',
        secondary: '#ffffff',
        accent: '#1a1a1a',
        'input-bg': '#1a1a1a',
        'card-bg': '#1a1a1a',
        'footer-bg': '#1a1a1a',
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Arial', 'sans-serif']
      },
      animation: {
        'bubble-float': 'bubble 1.5s ease-out infinite',
      },
      keyframes: {
        bubble: {
          '0%': { transform: 'translateY(0) scale(1)', opacity: 0.8 },
          '100%': { transform: 'translateY(-15px) scale(0.8)', opacity: 0 },
        }
      }
    },
  },
  plugins: [],
}