<!-- 
    <div class="sticky top-0 z-2">
        <div class="md:flex items-center justify-between mx-auto bg-black px-5 md:px-28  ">
            <div class="">
                <img src="./images/logo.png" alt="" srcset="" class="w-80">
            </div>

            <div class="navlink pt-10 md:pt-0 px-3 md:px-0 md:bg-black">
                <ul class="text-gray-400 md:flex gap-5 items-center">
                    <li class="w-full md:w-14 py-3 capitalize md:py-10 text-main font-bold md:uppercase hover:text-main cursor-pointer"><a href="index.php">home</a></li>
                    <li class="w-full  md:w-20 py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer"><a href="about.php">about us</a></li>
                    <li class="w-full  md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer  "><span class="items-center flex justify-between">menu <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
                    </svg></span> 
                        <ul class="absolute bg-gray-800 hidden px-2 mt-10 text-white capitalize w-40 ">
                            <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed"><a href="foodmenu.php">food</a></li>
                            <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed"><a href="drinksmenu.php">drinks</a></li>
                        </ul>
                    </li>
                    <li  class="w-full  md:w-auto  md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer"><span class="items-center flex justify-between">other services <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
                    </svg></span> 
                        <ul class="absolute bg-gray-800 mt-10 hidden px-2 text-white capitalize w-56">
                            <li class="px-2 py-3 text-sm hover:text-main cursor-pointer  font-[400] border-b border-gray-700 border-dashed">the cellar supermarket</li>
                            <li class="px-2 py-3 text-sm hover:text-main cursor-pointer  font-[400] border-b border-gray-700 border-dashed">the cellar bakery</li>
                            <li class="px-2 py-3 text-sm hover:text-main cursor-pointer  font-[400] border-b border-gray-700 border-dashed">the cellar coffee Terrace</li>
                            <li class="px-2 py-3 text-sm hover:text-main cursor-pointer  font-[400] border-b border-gray-700 border-dashed">outside catering</li>
                        </ul>
                    </li>
                    <li  class="w-full md:w-auto py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer"><a href="contact.php">contact us</a></li>
                
                    <li class="py-3 md:py-0">
                        <div class="flex gap-3">
                          <div class="w-5">
                              <a href="" class="">
                                  <img src="./icons/icons8-facebook.svg" alt="" srcset="">
                              </a>
                          </div>
                          <div class="w-5">
                              <a href="" class="">
                                  <img src="./icons/icons8-twitter.svg" alt="" srcset="">
                              </a>
                          </div>
                          <div class="w-5">
                              <a href="" class="">
                                  <img src="./icons/icons8-instagram.svg" alt="" srcset="">
                              </a>
                          </div>
                        </div>
                    </li>
                    <li class="py-3 md:py-0">
                        <div>
                          <div class="bg-main rounded-3xl px-5  p-2">
                              <span class="font-[500] text-white">+250 782 363 423</span>
                          </div>
                        </div>
                    </li>
                
                  </ul>
            </div>

        </div>
    </div>

     -->

<!DOCTYPE html>
<html>
<head>
  <style>
    .sticky {
      position: sticky;
      top: 0;
      z-index: 2;
    }

    .navlink ul li:hover,
    .navlink ul li.active {
      color: #main;
    }

    .navlink ul li:hover > ul,
    .navlink ul li.active > ul {
      display: block;
    }

    .navlink ul ul {
      position: absolute;
      top: 100%;
      left: 0;
      display: none;
      background-color: #gray-800;
      padding: 2px;
      margin-top: 10px;
      width: 40px;
    }

    .navlink ul ul li {
      border-bottom: 1px dashed #gray-700;
      padding: 2px;
    }

    .navlink ul ul li:hover {
      color: #main;
    }

    .navlink ul ul.sub-menu {
      width: 56px;
    }

    .social-icons img {
      width: 5px;
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

      <div class="navlink pt-10 md:pt-0 px-3 md:px-0 md:bg-black">
        <ul class="text-gray-400 md:flex gap-5 items-center">
          <li class="w-full md:w-14 py-3 capitalize md:py-10 text-main font-bold md:uppercase hover:text-main cursor-pointer active">
            <a href="index.php">home</a>
          </li>
          <li class="w-full md:w-20 py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer">
            <a href="about.php">about us</a>
          </li>
          <li class="w-full md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer">
            <span class="items-center flex justify-between">menu
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
              </svg>
            </span>
            <ul class="absolute bg-gray-800 hidden px-2 mt-10 text-white capitalize w-40">
              <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                <a href="foodmenu.php">food</a>
              </li>
              <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                <a href="drinksmenu.php">drinks</a>
              </li>
            </ul>
          </li>
          <li class="w-full md:w-auto md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer">
            <span class="items-center flex justify-between">other services
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
              </svg>
            </span>
            <ul class="absolute bg-gray-800 mt-10 hidden px-2 text-white capitalize w-56 sub-menu">
              <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">the cellar supermarket</li>
              <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">the cellar bakery</li>
              <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">the cellar coffee Terrace</li>
              <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">outside catering</li>
            </ul>
          </li>
          <li class="w-full md:w-auto py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer">
            <a href="contact.php">contact us</a>
          </li>
        
          <li class="py-3 md:py-0">
            <div class="flex gap-3 social-icons">
              <div class="w-5">
                <a href="" class="">
                  <img src="./icons/icons8-facebook.svg" alt="" srcset="" class="w-10">
                </a>
              </div>
              <div class="w-5">
                <a href="" class="">
                  <img src="./icons/icons8-twitter.svg" alt="" srcset="" class="w-10">
                </a>
              </div>
              <div class="w-5">
                <a href="" class="">
                  <img src="./icons/icons8-instagram.svg" alt="" srcset="" class="w-10">
                </a>
              </div>
            </div>
          </li>
          <li class="py-3 md:py-0">
            <div class="contact-info">
              <div class="bg-main rounded-3xl px-5 py-5">
                <span class="font-[500] text-white">+250 782 363 423</span>
              </div>
            </div>
          </li>
        
        </ul>
      </div>
    </div>
  </div>
</body>
</html>


<!-- 
        <!DOCTYPE html>
        <html>
        <head>
        <style>
            .sticky {
            position: sticky;
            top: 0;
            z-index: 2;
            }

            .navlink ul li:hover,
            .navlink ul li.active {
            color: #main;
            }

            .navlink ul li:hover > ul,
            .navlink ul li.active > ul {
            display: block;
            }

            .navlink ul ul {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            background-color: #gray-800;
            padding: 2px;
            margin-top: 10px;
            width: 40px;
            }

            .navlink ul ul li {
            border-bottom: 1px dashed #gray-700;
            padding: 2px;
            }

            .navlink ul ul li:hover {
            color: #main;
            }

            .navlink ul ul.sub-menu {
            width: 56px;
            }

            .social-icons img {
            width: 5px;
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

            <div class="navlink pt-10 md:pt-0 px-3 md:px-0 md:bg-black">
                <ul class="text-gray-400 md:flex gap-5 items-center">
                <li class="w-full md:w-14 py-3 capitalize md:py-10 text-main font-bold md:uppercase hover:text-main cursor-pointer <?php echo ($_SERVER['PHP_SELF'] == '/index.php') ? 'active' : ''; ?>">
                    <a href="index.php">home</a>
                </li>
                <li class="w-full md:w-20 py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer <?php echo ($_SERVER['PHP_SELF'] == '/about.php') ? 'active' : ''; ?>">
                    <a href="about.php">about us</a>
                </li>
                <li class="w-full md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer <?php echo ($_SERVER['PHP_SELF'] == '/menu.php' || $_SERVER['PHP_SELF'] == '/foodmenu.php' || $_SERVER['PHP_SELF'] == '/drinksmenu.php') ? 'active' : ''; ?>">
                    <a href="menu.php">menu
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
                    </svg>
                    </a>
                    <ul class="absolute bg-gray-800 hidden px-2 mt-10 text-white capitalize w-40">
                    <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                        <a href="foodmenu.php">food</a>
                    </li>
                    <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                        <a href="drinksmenu.php">drinks</a>
                    </li>
                    </ul>
                </li>
                <li class="w-full md:w-auto md:w-auto py-3 capitalize md:py-10 text-white md:uppercase hover:text-main font-bold cursor-pointer <?php echo ($_SERVER['PHP_SELF'] == '/supermarket.php' || $_SERVER['PHP_SELF'] == '/bakery.php' || $_SERVER['PHP_SELF'] == '/coffee.php' || $_SERVER['PHP_SELF'] == '/catering.php') ? 'active' : ''; ?>">
                    <a href="#">other services
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4"/>
                    </svg>
                    </a>
                    <ul class="absolute bg-gray-800 mt-10 hidden px-2 text-white capitalize w-56 sub-menu">
                    <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                        <a href="supermarket.php">the cellar supermarket</a>
                    </li>
                    <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                        <a href="bakery.php">the cellar bakery</a>
                    </li>
                    <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                        <a href="coffee.php">the cellar coffee Terrace</a>
                    </li>
                    <li class="px-2 py-3 text-sm hover:text-main cursor-pointer font-[400] border-b border-gray-700 border-dashed">
                        <a href="catering.php">outside catering</a>
                    </li>
                    </ul>
                </li>
                <li class="w-full md:w-auto py-3 capitalize md:py-10 text-white font-bold md:uppercase hover:text-main cursor-pointer <?php echo ($_SERVER['PHP_SELF'] == '/contact.php') ? 'active' : ''; ?>">
                    <a href="contact.php">contact us</a>
                </li>
                
                <li class="py-3 md:py-0">
                    <div class="flex gap-3 social-icons">
                    <div class="w-5">
                        <a href="" class="">
                        <img src="./icons/icons8-facebook.svg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="w-5">
                        <a href="" class="">
                        <img src="./icons/icons8-twitter.svg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="w-5">
                        <a href="" class="">
                        <img src="./icons/icons8-instagram.svg" alt="" srcset="">
                        </a>
                    </div>
                    </div>
                </li>
                <liclass="py-3 md:py-0">
                    <div>
                    <div class="bg-main rounded-3xl px-5 p-2">
                        <span class="font-[500] text-white">+250 782 363 423</span>
                    </div>
                    </div>
                </li>
                
                </ul>
            </div>

            </div>
        </div>
        </body>
        </html> 
    
    -->