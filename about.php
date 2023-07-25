
<!doctype html>
<html>
<head>
  <?php 
  include './component/includes/head.php'; ?>
</head>
<body class="relative">
    <?php include './component/header.php'; ?>

    <div class="main">
        <section>
           <div class="bgabout h-96 md:h-80 smclipabout md:clipabout"></div>
        </section>
        <section class="text-gray body-font overflow-hidden   md:px-56 z-1 mx-auto">
            <div class="container px-5 md:px-10 mx-auto text-center ">
                <div class="w-full">
                    <h1 class="headtxt text-[35px] font-bold text-black ">About Us</h1>   
                </div>
                <p class="text-gray-600 font-[400] py-5">
                    We are Kigali’s best restaurant, and we accept the interesting task of identifying unique ingredients, as well as fantastic comfort food cultures, traditions, and history. Above all, while dining at our restaurant, we want to interact with nature that tells stories.
                </p>
            </div>
        </section>

        <section class="text-gray body-font overflow-hidden md:px-32 pb-10 z-1 mx-auto">
            <div class="container px-5 mx-auto ">
              <div class="text-center mb-10">
                <h1 class="headtxt text-[35px] font-bold text-black pt-10">Best way to eat healthy food</h1>
                <p class="text-[15px] leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500 pt-2">We serve everything in our restaurant daily, including our famous seasonal menu.</p>
              </div>
              <div class="md:flex gap-10 md:px-40">
                <div class="p-4 md:w-1/3 text-center items-center border border-gray-200 rounded-xl mb-2">
                  <div class="w-16 h-16 inline-flex items-center justify-center rounded-xl bg-main  mb-5 flex-shrink-0">
                    <img src="./icons/icons8-carrot-30.png"  class="w-12 h-12" alt="">
                  </div>
                  <div class="flex-grow">
                    <h2 class="headtxt font-bold text-2xl text-gray-950 mb-3">Healthy Meal</h2>
                    <p class=" text-base text-gray-500">We serve base meals on higher fibre starchy foods like potatoes, bread, rice or pasta. We also have some dairy or dairy alternatives (such as soya drinks) eat some beans, pulses, fish, eggs, meat and other protein.</p>
                   
                  </div>
                </div>
                <div class="p-4 md:w-1/3 text-center items-center border border-gray-200 rounded-xl mb-2">
                  <div class="w-16 h-16 inline-flex items-center justify-center rounded-xl bg-main  mb-5 flex-shrink-0">
                  <img src="./icons/icons8-hamburger-30.png"  class=" h-10" alt="">
                  </div>
                  <div class="flex-grow">
                    <h2 class="headtxt font-bold text-2xl text-gray-950 mb-3">Fast Food</h2>
                    <p class="leading-relaxed text-base text-gray-500">We also have mass-produced food with a strong priority placed on "speed of service" versus other relevant factors involved in culinary science. </p>
                    
                  </div>
                </div>
                <div class="p-4 md:w-1/3 text-center items-center border border-gray-200 rounded-xl mb-2">
                  <div class="w-16 h-16 inline-flex items-center justify-center rounded-xl bg-main  mb-5 flex-shrink-0">
                  <img src="./icons/icons8-coffee-30.png" class=" h-10" alt="">
                  </div>
                  <div class="flex-grow">
                    <h2 class="headtxt font-bold text-2xl text-gray-950 mb-3">Delicious Drinks</h2>
                    <p class="leading-relaxed text-base text-gray-500">In addition to our food, we serve drinks that play important roles in human culture. we have plain drinking water, milk, juice and soft drinks, beverages include coffee, tea, and hot chocolate. Alcohol contained drinks like beer, liquor and wines</p>
                  </div>
                </div>
              </div>
            </div>
        </section>
        
        <!-- Background Image -->

        <section>
          <div class="w-full h-80 bgphoto ">
          </div>
        </section>

        <!-- Book a table -->

        <section id="booktable" class="text-gray body-font overflow-hidden p-5 md:px-56 z-1 mx-auto">
          <div class="w-full mx-auto md:py-20 md:flex gap-5 container  md:px-40">
            <div class="md:w-3/5 ">
              <img src="./images/wpcontent/table.png" alt="ecommerce" class="w-full h-[450px] object-cover rounded" >
            </div>

                      <?php
                        if(isset($_POST['book'])){
                            require_once('./models/booking.php');
                            $cat = new booking(null,$_POST['email'],$_POST['name'],$_POST['phone'],$_POST['time'],$_POST['checkin'],$_POST['guests'],$_POST['space']);
                            $result = $cat->save();
                            echo "<script>alert('$result');</script>";
                        }
                      ?>

            <div class="md:w-1/2 w-full lg:py-6 mt-6 lg:mt-0 text-gray-400">
                  <h2 class="headtxt font-black text-4xl text-black mb-4 ">Book a table</h2>
                <form action="" method="post">
                  <div class="">
                    <input type="text" id="name" required name="name" placeholder="Name" class="w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mb-5">
                  </div>
                  <div class="md:flex flex-wrap -m-2">
                    <div class="p-2 md:w-1/2">
                      <div class="">
                        <input type="number" id="phone" required name="phone" placeholder="Phone Number" class="w-full bg-opacity-50 rounded border border-gray-300   text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                    </div>
                    <div class="p-2 md:w-1/2">
                      <div class="">
                        <input type="email" id="email" required  name="email" placeholder="Email" class="w-full bg-opacity-50 rounded border border-gray-300   text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                    </div>
                  </div>
                  <div class="pt-4">
                    <input type="date" id="checkin" required name="checkin" placeholder="Checkin" class="w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                <div class=" pt-4">
                  <input type="time" id="time" required name="time" placeholder="Time" class="w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mb-5">
                </div>
                <div class="md:flex flex-wrap -m-2">
                    <div class="p-2 md:w-1/2">
                      <div class="">
                      <select
                          type="text"
                          name="space"
                          id="space"
                          required
                          class="w-full  py-3 px-6 border outline-none">
                          <option value="" label="Select Space"></option>
                          <option value="VIP">VIP</option>
                          <option value="Balcony">Balcony</option>
                          <option value="Garden">Garden</option>
                          <option value="Coffee Terrace">Coffee Terrace</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="p-2 md:w-1/2">
                      <div class="">
                      <select
                          type="text"
                          name="guests"
                          id="guests"
                          required
                          class="w-full  py-3 px-6 border outline-none" >
                          <option value="" label="Geusts"></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                        </select>
                      </div>
                    </div>
                  </div>
                
                  <button name="book" class="text-white font-[500] bg-main mt-8 border-0 py-2 w-full px-6 focus:outline-none rounded text-">Book Your Table Now</button>
                  </div>

                </form>
            </div>
          </div>
        </section>

        <!-- Whats Customer says -->
        
        <section class="text-gray bg-gray-100 md:px-32 py-20 z-1 mx-auto">
            <div class="container px-5 mx-auto ">
              <div class="text-center mb-10">
                <h1 class="headtxt text-[35px] font-bold text-black pt-5">What customer say</h1>
                <p class="text-[15px] leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500 pt-2">Our customers from different places have appreciated our services and were happy to give us their thoughts on google reviews and other review platforms. <a href="#" class="text-main font-[500]">Click here to write your review.</p>
              </div>
              <div class="md:flex md:gap-10 md:px-40">
                <div class=" w-full text-center items-center ">
                  
                <!-- Slide show -->
                  <style>
                    .feedback-card {
                      display: none;
                    }
                    
                  </style>

                  <div class="slide-show md:flex md:gap-3 justify-center w-full border-none">
                    <div class="w-full feedback-card md:w-1/3 text-center items-center p-5 border border-gray-300 mb-2 rounded ">
                      <p class="text-gray-500 font-[500] italic pb-6">Excellent food, very fair prices. Awesome atmosphere. Definitrly recommend!</p>
                      <h2 class="headtxt text-black font-bold text-[16px]">Patrick Muhire</h2>
                    </div>
                    <div class="w-full feedback-card md:w-1/3 text-center items-center p-5 border border-gray-300 mb-2 rounded ">
                      <p class="text-gray-500 font-[500] italic pb-6">The  best place in Kigali. It is quiet and clean. With the best servicce</p>
                      <h2 class="headtxt text-black font-bold text-[16px]">Green One</h2>
                    </div>
                    <div class="w-full feedback-card md:w-1/3 text-center items-center p-5 border border-gray-300 mb-2 rounded ">
                      <p class="text-gray-500 font-[500] italic pb-6">Everything ther is excellent. From their service to their products</p>
                      <h2 class="headtxt text-black font-bold text-[16px]">Howard Isaacson</h2>
                    </div>
                    <div class="w-full feedback-card md:w-1/3 text-center items-center p-5 border border-gray-300 mb-2 rounded ">
                      <p class="text-gray-500 font-[500] italic pb-6">Excellent food, very fair prices. Awesome atmosphere. Definitrly recommend!</p>
                      <h2 class="headtxt text-black font-bold text-[16px]">Bertin HARELIMANA</h2>
                    </div>
                    <div class="w-full feedback-card md:w-1/3 text-center items-center p-5 border border-gray-300 mb-2 rounded ">
                      <p class="text-gray-500 font-[500] italic pb-6">Everything ther is excellent. From their service to their products</p>
                      <h2 class="headtxt text-black font-bold text-[16px]">Patrick Muhire</h2>
                    </div>
                  </div>

                  <script>
                          function defaultSlide() {
                            for (var i = 0; i < feedbackCards.length; i++) {
                              feedbackCards[i].style.display = 'none';
                            }
                            for (var i = index; i < index + 3; i++) {
                              var cardIndex = i % feedbackCards.length;
                              feedbackCards[cardIndex].style.display = 'block';
                            }
                          }
                          setInterval(defaultSlide, 50); 
                          var feedbackCards = document.getElementsByClassName('feedback-card');
                          var index = 0;

                          function showNextCards() {
                            for (var i = 0; i < feedbackCards.length; i++) {
                              feedbackCards[i].style.display = 'none';
                            }

                            for (var i = index; i < index + 3; i++) {
                              var cardIndex = i % feedbackCards.length;
                              feedbackCards[cardIndex].style.display = 'block';
                            }

                            index = (index + 1) % feedbackCards.length;
                          }
                          setInterval(showNextCards, 3000); 

                  </script>

                </div>
              </div>
            </div>
        </section>

         <!-- Background Image -->

         <section>
            <div class="w-full h-80 bgphoto2 mx-auto flex justify-center items-center">
              <div class="px-6 py-2 flex gap-2 bg-white rounded-xl w-48 items-center ">
                <img src="./icons/icons8-instagram-50.png" class=" w-8">
                <span class="headtxt text-gray-600 text-black hover:text-main">@thecellarresto</span>
              </div>
            </div>
          </section>
    
    
    
    
        </div>

    <?php include './component/footer.php'; ?>

