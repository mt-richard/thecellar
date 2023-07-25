<!doctype html>
<html>
<head>
<?php
include 'component/includes/head.php'; ?>

</head>
<body class="relative">
    <?php include './component/header.php'; ?> 
    

            
    <div class="w-full ">
        <div id="myDiv" class="hslideshow-container w-full items-center text-center mx-auto  md:py-10">
            <div class=" w-full h-20 md:h-40">
            </div>
            <div class=" w-full z-10 ">
                <div class=" text-center md:px-60">
                    <div class="">
                        <h4 class="headtxt drop-shadow-xl text-white font-bold text-3xl">Welcome to</h4>
                    </div>
                    <div  class="w-full items-center text-center md:px-60">
                        <h1 class="headtxt drop-shadow-xl text-white font-bold text-6xl  py-2">The Cellar Restaurant</h1>
                        <h1 class="headtxt drop-shadow-xl text-white font-bold text-6xl  py-2"> Resto - Pizzeria</h1>
                    </div>
                    <div class="md:px-60 pb-10">
                        <p class="headtxt text-white drop-shadow text-2xl py-2">The best restaurant in Kigali.  Our goal is to produce meals that engage all of our senses, restoring, challenging, and enriching our customers’ lives.</p>
                    </div>
                    
                    <a href="about.php#booktable" type="button"  class="bg-main px-6 rounded-3xl py-3 uppercase font-semibold text-white border-none outline-none hover:bg-white hover:text-main hover:shadow">book a table</a>
                </div>
            </div>
            
            <script src="./script/slides.js"></script>
        </div>

        <section class="text-col body-font overflow-hidden py-10  md:px-56 z-1 mx-auto">
            
                <div class="container px-5 md:px-10 py-10 bg-gray-200 mx-auto flex gap-4 sm:flex-nowrap flex-wrap">
                    <div class="md:w-1/2 rounded h-[480px]">
                        <img  src="./images/IMG_8942.jpg" alt="ecommerce" class="w-full h-full object-cover ">
                    </div>
                    <div id="xbooktable" class="md:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

                        <h1 class="headtxt text-black text-3xl title-font font-black pb-1">Book a table</h1>
                        <p class="leading-relaxed leading-4 text-gray-700 pt-2">We are Kigali’s best restaurant, and we accept the interesting task of identifying unique ingredients, as well as fantastic comfort food cultures, traditions, and history. Above all, while dining at our restaurant, we want to interact with nature</p>
                        <div class="flex items-center justify-center py-5">
                        
                        
                        <?php
                        if(isset($_POST['book'])){
                            require_once('./models/booking.php');
                            $cat = new booking(null,$_POST['email'],$_POST['name'],$_POST['phone'],$_POST['time'],$_POST['checkin'],$_POST['guests'],$_POST['space']);
                            $result = $cat->save();
                            echo "<script>alert('$result');</script>";
                        }
                        ?>
                        
                        
                        <div class="mx-auto w-full max-w-[550px] text-gray-500 ">
                            <form action="" method="POST">
                                <div class=" md:flex gap-3">
                                    <div class="w-full md:w-1/2">
                                    <div class="mb-2">
                                        <input
                                        type="text"
                                        name="name"
                                        id="Name"
                                        required
                                        placeholder="Name"
                                        class="w-full py-3 px-6 bg-gray-200 border outline-none border-gray-300 rounded"
                                        />
                                    </div>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                    <div class="mb-2">
                                    
                                        <input
                                        type="text"
                                        name="phone"
                                        id="phoneNumber"
                                        required
                                        placeholder="Phone Number"
                                        class="w-full  py-3 px-6 bg-gray-200 border outline-none border-gray-300 rounded"
                                        />
                                    </div>
                                    </div>
                                </div>
                                <div class="gap-3 md:flex">
                                    <div class="w-full  md:w-1/2">
                                    <div class="mb-2">
                                        
                                        <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        required
                                        placeholder="Email"
                                        class="w-full  py-3 px-6 bg-gray-200 border outline-none border-gray-300 rounded"
                                        />
                                    </div>
                                    </div>
                                    <div class="w-full  md:w-1/2">
                                    <div class="mb-2">
                                    
                                        <input
                                        type="date"
                                        name="checkin"
                                        id="checkin"
                                        required
                                        placeholder="Checkin"
                                        class="w-full  py-3 px-6 bg-gray-200 border outline-none border-gray-300 rounded"
                                        />
                                    </div>
                                    </div>
                                </div>
                                <div class="gap-3 md:flex">
                                    <div class="w-full  md:w-1/2">
                                    <div class="mb-2">
                                        
                                        <input
                                        type="time"
                                        name="time"
                                        id="time"
                                        required
                                        class="w-full  py-3 px-6 bg-gray-200 border outline-none border-gray-300 rounded"
                                        />
                                    </div>
                                    </div>
                                    <div class="w-full  md:w-1/2">
                                    <div class="mb-2">
                                    
                                        <select
                                        type="text"
                                        name="guests"
                                        id="guests"
                                        required
                                        class="w-full  py-3 px-6 bg-gray-200 border outline-none border-gray-300 rounded"
                                        >
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
                                <div class="gap-3 md:flex">
                                    
                                    <div class="w-full  md:w-1/2">
                                    <div class="mb-2">
                                    
                                        <select
                                        type="text"
                                        name="space"
                                        id="space"
                                        required
                                        class="w-full  py-3 px-6 bg-gray-200 border outline-none border-gray-300 rounded"
                                        >
                                        <option value="" label="Select Space"></option>
                                        <option value="VIP">VIP</option>
                                        <option value="Balcony">Balcony</option>
                                        <option value="Garden">Garden</option>
                                        <option value="Coffe Terrace">Coffee Terrace</option>
                                        
                                        </select>
                                    </div>
                                    </div>
                                    <div class="w-full  md:w-1/2">
                                    <div class="mb-2">
                                        
                                        <input
                                        type="submit"
                                        name="book"
                                        id="submit"
                                        value="Book a table now"
                                        class="w-full bg-main rounded  py-3 px-6 text-base font-medium text-white outline-none "
                                        />
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <div>
                </div>
            
        </section>


        <section class="text-gray body-font overflow-hidden py-10 px-5 md:px-56 z-1 mx-auto">
            <div class="container px-3 md:px-10 md:py-10 mx-auto flex gap-4 sm:flex-nowrap flex-wrap">
                <div class="md:w-3/5 md:pt-10">
                    <h1 class="headtxt text-3xl text-black font-bold pb-5 md:pt-10">Get In Touch with us</h1>
                    <p class=" leading-8 text-gray-600 pb-10 text-[16px]">If you have any question or need more information, fill the form to send us a quick message or use below contacts to get in touch with us. You can navigate using the provided map too.</p>
                    <div class="md:grid md:grid-cols-3 gap-2 w-full">
                        <div class="  bg-gray-200 rounded px-5 py-5 leading-4 w-full mb-2">
                            <h2 class="text-lg text-gray-500 mb-2">Address:</h2>
                            <p class="pb-2">Kigali Rwanda,</p>
                            <p class="pb-2">Remera Taxi Station</p>
                        </div>
                        <div class="  bg-gray-200 rounded px-5 py-5 leading-4 w-full mb-2">
                            <h2 class="text-lg text-gray-500  mb-2">Phone Number:</h2>
                            <p>+250 782 363 423</p>
                        </div>
                        <div class=" bg-gray-200 rounded px-5 py-5 leading-4 ">
                            <h2 class="text-lg text-gray-500  mb-2">Email Address:</h2>
                            <p class="break-words">thecellarrestaurant@yahoo.com</p>
                        </div>
                    </div>
                </div>

                <div class="md:w-2/5 bg-gray-200 md:ml-auto w-full py-5 md:py-5 mt-8 md:mt-0 p">
                <?php
                        if(isset($_POST['contactus'])){
                            require_once('./models/contact.php');
                            $con = new contact(null,$_POST['email'],$_POST['name'],$_POST['message'],$_POST['phone']);
                            $result = $con->save();
                            echo "<script>alert('$result');</script>";
                        }
                ?>
                    <form action="" method="post">
                        <div class="-mx-3 px-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-3">
                                
                                <input
                                type="text"
                                name="name"
                                id="Name"
                                placeholder="Name"
                                required
                                class="w-full  py-2 px-6 bg-white outline-none border-0"
                                />
                            </div>
                            </div>
                            <div class="w-full  px-3 sm:w-1/2">
                            <div class="mb-3">
                            
                                <input
                                type="text"
                                name="phone"
                                id="phoneNumber"
                                placeholder="Phone Number"
                                required
                                class="w-full  py-2 px-6 bg-white outline-none border-0"
                                />
                            </div>
                            </div>
                        </div>
                        <div class=" mb-4 px-3">
                            <input type="email" required id="email" name="email" placeholder="Email" class="w-full  py-2 px-6 bg-white outline-none border-0 ">
                        </div>
                        <div class=" mb-4 px-3">
                            
                            <textarea id="message" required placeholder="Message" name="message" class="w-full h-36 py-3 px-6 bg-white outline-none border-0"></textarea>
                        </div>
                        <button class="text-white bg-main border-0 ml-3 py-3 px-3 rounded w-1/2 font-[400]" name="contactus" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="z-1">
            <div class="w-full h-96">
                <iframe class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.487571076464!2d30.115981275768107!3d-1.9585289367319896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7789623ec0f%3A0x8c6133280a86657f!2sThe%20Cellar%20Restaurant!5e0!3m2!1sen!2srw!4v1688902210326!5m2!1sen!2srw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </section>

    </div>




    <?php include './component/footer.php'; ?>
    
</body>
</html>