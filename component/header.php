
<!DOCTYPE html>
<html>
<head>
  <style>
    .sticky {
      position: sticky;
      top: 0;
      z-index: 2;
    }

    .navlink ul li:hover > ul,
    .navlink ul li.active > ul {
      display: block;
    }

    .navlink ul ul {
      position: absolute;
      top: 100%;
      display: none;
    }
    .contact-info .bg-main {
      border-radius: 30px;
      padding: 2px 5px;
    }

  </style>
</head>
<body>
  <div class="sticky top-0 z-2">
    <div class="md:flex items-center justify-between mx-auto bg-black px-5 md:px-28">
      <div>
        <img src="./images/logo.png" alt="" class="w-80">
      </div>

      <div id="myTopnav" class="topnav navlink  md:pt-0 px-3 md:px-0 md:bg-black">
        <ul class="text-gray-400 md:flex gap-5 items-center">
          <li class=" w-full md:w-14 py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer">
            <a class="mynavlink " href="index.php">home</a>
          </li>
          <li class="  w-full md:w-20 py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer">
            <a class="mynavlink " href="about.php">about us</a>
          </li>
          <li class=" w-full md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer">
            <span class="items-center flex justify-between"><a class="mynavlink " href="#menu">menu</a>
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
              </svg>
            </span>
            <ul class="absolute bg-gray-800 hidden px-2 text-white capitalize w-full md:w-40">
              <li class=" px-2 py-3 hover:text-main text-[12px] cursor-pointer font-[500] border-b border-gray-700 border-dashed">
                <a class="mynavlink " href="foodmenu.php">food</a>
              </li>
              <li class=" px-2 py-3  hover:text-main text-[12px] cursor-pointer font-[500] border-b border-gray-700 border-dashed">
                <a class="mynavlink " href="drinksmenu.php">drinks</a>
              </li>
            </ul>
          </li>
          <li class=" w-full md:w-auto md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer">
            <span class="items-center flex justify-between"><a class="mynavlink " href="#services">other services</a>
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
              </svg>
            </span>
            <ul class="absolute bg-gray-800 hidden px-2 text-white capitalize w-52 sub-menu">
              <li class=" px-2 py-3 text-[12px] hover:text-main cursor-pointer font-[500] border-b border-gray-700 border-dashed"><a class="mynavlink " href="supermarket.php">the cellar supermarket</a></li>
              <li class=" px-2 py-3 text-[12px] hover:text-main cursor-pointer font-[500] border-b border-gray-700 border-dashed"><a class="mynavlink " href="bakery.php">the cellar bakery</a></li>
              <li class=" px-2 py-3 text-[12px] hover:text-main cursor-pointer font-[500] border-b border-gray-700 border-dashed"><a class="mynavlink " href="coffee.php">the cellar coffee Terrace</a></li>
              <li class=" px-2 py-3 text-[12px] hover:text-main cursor-pointer font-[500] border-b border-gray-700 border-dashed"><a class="mynavlink " href="catering.php">outside catering</a></li>
            </ul>
          </li>
          <li class=" w-full md:w-auto py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer">
            <a class="mynavlink " href="contact.php">contact us</a>
          </li>
        
          <li class=" py-3 md:py-0">
            <div class="px-5 flex gap-2 social-icons">
              <div class="w-5">
                <a class="mynavlink " href="" class="">
                  <img src="./icons/icons8-facebook.svg" alt="" srcset="" class="w-5">
                </a>
              </div>
              <div class="w-5">
                <a class="mynavlink " href="" class="">
                  <img src="./icons/icons8-twitter.svg" alt="" srcset="" class="w-5">
                </a>
              </div>
              <div class="w-5">
                <a class="mynavlink " href="" class="">
                  <img src="./icons/icons8-instagram.svg" alt="" srcset="" class="w-5">
                </a>
              </div>
            </div>
          </li>
          <li class=" py-3 md:py-0">
            <div class="">
              <div class="bg-main rounded-3xl px-5 py-2.5">
                <span class="font-[500] text-white">+250 782 363 423</span>
              </div>
            </div>
          </li>
        
        </ul>
      </div>
    </div>
  </div>

  <script>
          document.querySelectorAll(".mynavlink").forEach((link) => {
          if (link.href === window.location.href) {
              link.classList.add("text-main");
              link.setAttribute("aria-current", "page");
          }
          });

          
  </script>
</body>
</html>
