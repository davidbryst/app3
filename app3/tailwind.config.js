module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      montserrat: ['Montserrat', 'sans-serif'],
    },
    colors: {
      primary: 'var(--primary)',
      secondary: 'var(--secondary)',
      one: 'var(--one)',
      two: 'var(--two)',
      three: 'var(--three)',
      four: 'var(--four)',
      five: 'var(--five)',
      six: 'var(--six)',
      seven: 'var(--seven)',
      eight: 'var(--eight)',
      nine: 'var(--nine)',
      ten: 'var(--ten)',
      inherit: 'inherit',

      green: 'rgb(34 197 94)',
      orange: 'rgb(251 146 60)',
      yellow: 'rgb(253 224 71)',
      blue: '#1e3a8a',
      rose: 'rgb(244 63 94)',
      popup: 'rgba(0, 0, 0, 0.5)',

      white: '#ffffff',
    },
    extend: {
        // that is animation class
        keyframes: {
            'fade-in-right': {
                '0%': {
                    opacity: '0',
                    transform: 'translateX(10px)'
                },
                '100%': {
                    opacity: '1',
                    transform: 'translateX(0)'
                },
            },
            'fade-out-right': {
                '0%': {
                    opacity: '1',
                    transform: 'translateX(0)'
                },
                '100%': {
                    opacity: '0',
                    transform: 'translateX(10px)'
                },
            }
        },
        animation: {
            'fade-in-right': 'fade-in-right 0.5s ease-out',
            'fade-out-right': 'fade-out-right 0.5s ease-out',
        }
    },
  },
  plugins: [
    require("autoprefixer"),
    require('tailwind-scrollbar-hide')
  ],
}
