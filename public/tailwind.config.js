/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["./*.html"],
  theme: {
    screens: {
      sm: "576px",
      // => @media (min-width: 576px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "992px",
      // => @media (min-width: 992px) { ... }

      xl: "1200px",
      // => @media (min-width: 1200px) { ... }

      xxl: "1400px",
      // => @media (min-width: 1400px) { ... }
      xxxl: "1600px",
      // => @media (min-width: 1600px) { ... }
    },
    extend: {
      fontFamily: {
        // Add your custom fonts
        body: ["Inter", "sans-serif"],
        syne: ["Syne", "sans-serif"],
        clashGrotesk: ["ClashGrotesk", "sans-serif"],
        familjenGrotesk: ["Familjen Grotesk", "sans-serif"],
        arimo: ["Arimo", "sans-serif"],
        libreBaskerville: ["Libre Baskerville", "serif"],
        playfairDisplay: ["Playfair Display", "serif"],
        bricolageGrotesque: ["Bricolage Grotesque", "sans-serif"],
        outfit: ["Outfit", "sans-serif"],
        epilogue: ["Epilogue", "sans-serif"],
      },

      colors: {
        colorLightLime: "#86C332",
        colorButteryWhite: "#FDFDE1",
        colorIvory: "#F3F5F6",
        colorRedOrange: "#FF4612",
        colorGondola: "#22252A",
      },
    },
  },
  plugins: [],
};
