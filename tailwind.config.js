/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/inculde/header.blade.php",
        "./resources/views/inculde/sidebar.blade.php",
        "./resources/views/chart_center.blade.php",
        "./resources/views/coding_studio.blade.php",
       
      ],
    theme: {
      extend: {
        colors: {
          header500: "#B9C9DB",
          header400: "#6285AC",
  
          primary: {
            600: "#164B87",
            500: "#5A6B7F",
            400: "#7393B7",
            300: "#2D5D93",
          },
  
          secondary: {
            100: "#FFEFF2",
            200: "#F1F1F1",
            300: "#E6DEDF",
          },
  
          neutral: {
            100: "#CCCCCC",
            200: "#B3B3B3",
            300: "#999999",
            400: "#4C4C4C",
          },
  
          success: {
            600: "#4CAF50",
          },
  
          error: {
            500: "#f44336",
          },
        }
      }
    },
    plugins: [],
  }
  