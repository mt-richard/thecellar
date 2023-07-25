
    <div>
        <div class="md:flex gap-6 bg-gray-950 px-5 md:px-60 py-10 w-full pt-20">
            <div class="md:w-1/4 mb-5">
                <h3 class="text-white font-bold text-3xl pb-5 ">The Cellar Restraurant</h3>
                <p class="text-gray-400 font-light leading-2 pb-4">The cellar restaurant is bright, airy, and lively. Our goal is to produce meals that engage all of our senses, restoring, challenging, and enriching our customers’ lives.</p>

                <div>
                    <a href="./admin/" class="flex gap-2">
                        <img src="./icons/icons8-user-30.png" alt="" srcset="" class="w-6">
                        <span class="text-white">Login</span>
                    </a>
                </div>

                <div class="flex gap-2 pt-5">
                    <div class="bg-main w-8 rounded-full p-2">
                        <a href="" class="">
                            <img src="./icons/icons8-facebook.svg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="bg-main w-8 rounded-full p-2">
                        <a href="" class="">
                            <img src="./icons/icons8-twitter.svg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="bg-main w-8 rounded-full p-2">
                        <a href="" class="">
                            <img src="./icons/icons8-instagram.svg" alt="" srcset="">
                        </a>
                    </div>
                   
                </div>
            </div>

            <div class="md:w-1/4 mb-5">
                <h3 class="text-white font-bold text-3xl pb-5 ">Opening Hours</h3>
                <p class="text-gray-400 font-light leading-2 pb-4">We open 7 days a week from 7: 00 AM up to 00:00 PM.</p>
            </div>

            <div class="md:w-1/4 mb-5">
                <h3 class="text-white font-bold text-3xl pb-5 ">Instagram</h3>
                <div>
                    <div class="slideshow-container relative md:h-auto h-[180px]">
                        <div class="slide w-full h-[180px] absolute ">
                        <img src="./images/footer1.jpg" class="w-full h-full object-cover" alt="Image 1">
                        </div>
                        <div class="slide w-full h-[180px] absolute ">
                        <img src="./images/footer2.jpg" class="w-full h-full object-cover" alt="Image 2">
                        </div>
                        <div class="slide w-full h-[180px] absolute ">
                        <img src="./images/fotter3.jpg" class="w-full h-full object-cover" alt="Image 3" >
                        </div>
                    </div>
                    
                    <script src="./script/slides.js"></script>
                </div>

            </div>

            <div class="md:w-1/4 mb-5">
                <h3 class="text-white font-bold text-3xl pb-5 ">Newsletter</h3>
                <p class="text-gray-400 font-light leading-2 pb-4">Join our newsletter and be the first one to get the latest offers and promotions</p>
                <?php
                        if(isset($_POST['addsub'])){
                            require_once('./models/subscribe.php');
                            $sub = new subscribe(null,$_POST['email']);
                            $result = $sub->save();
                            echo "<script>alert('$result');</script>";
                        }
                ?>
                <form method="POST" action="" class="w-full">
                    <input type="email" required name="email" placeholder="Enter Email Address" class="p-3 px-5 outline-none  text-sm w-full mb-3 ">
                    <input type="submit" value="Subscribe" name="addsub" class="bg-main w-full outline-none text-white font-bold p-3">
                </form>
                
            </div>
        </div>

        <div class="w-full bg-main  items-center py-6">
            <p class="text-white text-center">Copyright ©2023 All rights reserved | The Cellar Restaurant |</p>
            
            <button class="absolute bottom-6 bg-main rounded  right-6 fixed font-[500] py-1.5 px-1">
                <img src="./icons/icons8-chevron-up-64.png" alt="" srcset="" class="w-7">
            </button>
        </div>
    </div>
</body>
