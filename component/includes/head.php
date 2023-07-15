
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
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
            
        }
        .section{
            width: 100%;
            height: 45vh;
            display: flex;
            justify-content: center;
            align-items: center;
            clip-path: circle(260vh at 50% -220vh);
        }
        .section:before {
            
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('./images/IMG_8942.jpg');
            background-size: cover;
            background-attachment: fixed;
            position: relative;
        }
        .bgphoto{
            background-image: url('./images/IMG_8942.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
        .bgphoto2{
            background-image: url('./images/wpcontent/wine-about.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
        .bgfoodmenu{
          background-image: url('./images/wpcontent/foodmenu.jpg');
            background-size: cover;
            background-attachment: fixed;
        }

        .clip{
          clip-path: ellipse(70% 90% at 50% 0%);
        }
        .bgabout{
            width: 100%;
            height: 45vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
            background-size: cover;
            background-position: bottom;
            background-image: url('./images/wpcontent/IMG_8908-1-1024x720.jpg');
            clip-path: circle(260vh at 50% -220vh);
        }
        
        .clipabout{
          clip-path: ellipse(60% 70% at 50% 0%);
        }

        .bgcatering{
          background-size: cover;
          background-position:bottom;
          background-attachment: fixed;
          background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('./images/wpcontent/IMG_8879-1024x720.jpg');
          background-repeat: no-repeat;

        }
        .bgcateringvan{
          
          background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.4)), url('./images/wpcontent/IMG_8879-1024x720.jpg');;
          background-size: cover;
        }
        .bgcateringbike {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.4)), url('./images/wpcontent/istockphoto-502765260-612x612-1.jpeg');
            background-size: cover;
          }

          .bgcoffee{
            background-image: url('./images/wpcontent/cookies-g458e5beda_1920.jpg');
            background-size: cover;
            background-attachment: fixed;

          }
          .bgsupermarket{
            background-image: url('./images/wpcontent/IMG_8955-1024x720.jpg');
            background-size: cover;
            background-attachment: fixed;
          }
          .coffeeclip{
            clip-path: ellipse(80% 100% at 50% 0%);
          }

          .bgbakery{
          background-size: cover;
          background-position:bottom;
          background-attachment: fixed;
          background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('./images/wpcontent/IMG_8918-1024x720.jpg');
          background-repeat: no-repeat;

        }



.modal {
  display: none;
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, .9);
}

.slideshow {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 100%;
  
  
}

.slideshow img{
  width: 60%;
  height: 60%;
  object-fit: cover;
}


.close {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 30px;
  color: #fff;
  cursor: pointer;
}

.prev, .next{
  cursor: pointer;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


        
  </style>
  <title>The Cellar</title>
</head>
