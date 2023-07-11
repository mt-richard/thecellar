
<!doctype html>
<html>
<head>
  <?php include './component/includes/head.php'; ?>
</head>
<body class="relative">
    <?php include './component/header.php'; ?>

    <div class="main">
       
        <section class=" py-20 md:px-56 z-1 mx-auto">
            <div class="container md:px-32 mx-auto text-center ">
                <div class="w-full">
                    <h1 class="headtxt text-[40px] font-black text-black ">Contact Us</h1>   
                </div>
                <p class="text-gray-600 font-[400] text-lg py-5">
                If you have any question or need more information, fill the form to send us a quick message or use below contacts to get in touch with us. You can navigate using the provided map too
                </p>
            </div>
    
            <div class="container  w-full mx-auto pt-5">
              
              <div class="flex gap-2 md:px-32">
                <div class="lg:w-1/2 md:w-1/4 px-5 py-3  bg-main text-white rounded-xl">
                  <h2 class="text-lg sm:text-xl  font-bold title-font mb-2">ADDRESS</h2>
                  <hr class="pt-3">
                  <p class="leading-relaxed font-[500] mb-4 pt-3 ">KIGALI Rwanda <br>Remera taxi station <br> The Cellar Coffee Shop</p>
                
                </div>
                <div class="lg:w-1/2 md:w-1/4 px-5 py-3  bg-main text-white rounded-xl">
                  <h2 class="text-lg sm:text-xl  font-bold title-font mb-2">EMAIL</h2>
                  <hr class="pt-3">
                  <p class="leading-relaxed font-[500] mb-4 pt-3">thecellarrestaurant@yahoo.com</p>
                  
                </div>
                <div class="lg:w-1/2 md:w-1/4 px-5 py-3  bg-main text-white rounded-xl">
                  <h2 class="text-lg sm:text-xl  font-bold title-font mb-2">PHONE</h2>
                  <hr class="pt-3">
                  <p class="leading-relaxed font-[500] mb-4 pt-3">+250782363423</p>
                
                </div>
                <div class="lg:w-1/2 md:w-1/4 px-5 py-3  bg-main text-white rounded-xl">
                  <h2 class="text-lg sm:text-xl  font-medium title-font mb-2 ">WEBSITE</h2>
                  <hr class="pt-3">
                  <p class="leading-relaxed font-[500] mb-4 pt-3">https://thecellar.rw</p>
                
                </div>
              </div>
            
            </div>
          </section>

        <!-- contact Form -->

        <section class=" body-font overflow-hidden py-20  md:px-56 z-1 mx-auto text-gray-600 bg-gray-100 body-font  ">
              <div class="container md:px-32 py-5 mx-auto flex gap-2 sm:flex-nowrap flex-wrap">
                <div class=" rounded md:w-1/2 flex flex-col w-full">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63799.804218620935!2d30.077356550322918!3d-1.958448011594433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x19dca7789623ec0f%3A0x8c6133280a86657f!2sThe%20Cellar%20Restaurant%206%20KG%20109%20St%20Kigali!3m2!1d-1.9585343!2d30.118556199999997!5e0!3m2!1sen!2srw!4v1688920953447!5m2!1sen!2srw" width="w-full" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
              
                <div class=" md:w-1/2 flex flex-col w-full">
                      <div class=" mb-4 px-3">
                          <input type="text" id="name" name="name" placeholder="Name" class="w-full  py-1.5 px-6 bg-white outline-none border border-gray-400 rounded ">
                        </div>
                        <div class=" mb-4 px-3">
                          <input type="email" id="email" name="email" placeholder="Email" class="w-full  py-1.5 px-6 bg-white outline-none border border-gray-400 rounded ">
                        </div>
                        <div class=" mb-4 px-3">
                          <input type="number" id="number" name="number" placeholder="Phone Number" class="w-full  py-1.5 px-6 bg-white outline-none border border-gray-400 rounded ">
                        </div>
                        <div class=" mb-4 px-3">
                          
                          <textarea id="message" placeholder="Message" name="message" class="w-full h-44  py-2 px-6 bg-white outline-none border border-gray-400 rounded"></textarea>
                        </div>
                        <div class=" mb-4 px-3">
                          
                        <button class="text-white bg-main  py-2 rounded font-[500] w-full">Send</button>
                        </div>
                        
                      </div>
              </div>
              </div>
            </section>

    
        </div>

    <?php include './component/footer.php'; ?>

