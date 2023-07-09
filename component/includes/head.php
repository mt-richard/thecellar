
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
           
            main: '#E94259',
            black : '#000'
          }
        }
      }
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap');
      h3, .headtxt {
        font-family: 'Ropa Sans', sans-serif;
        font-weight: 500;
      }
      .navlink ul li:hover > ul{
        display: block;
        position: absolute;
      }
      .hslideshow-container {
            background-size: cover;
            height:90vh;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
        }
        .section{
            position: relative;
            width: 100%;
            height: 45vh;
            display: flex;
            justify-content: center;
            align-items: center;
            clip-path: circle(260vh at 50% -220vh);
        }
        .section:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('./images/IMG_8942.jpg');
            background-size: cover;
            background-attachment: fixed;
            filter: blur(4px);
            z-index: -1;
        }
        
  </style>
  <title>The Cellar</title>
</head>
