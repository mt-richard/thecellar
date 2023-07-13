<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">  <script src="https://cdn.tailwindcss.com"></script>
  

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            main: '#E94259',
            black: '#000',
            gray:'#ECECEC',
            col:'#7A7A7A',
            lg: '#7A7A7A',

          }
        }
      }
    }
  </script>
</head>
<body>
<section class="text-col body-font overflow-hidden px-20 mx-auto">
  <div class="container py-10 bg-gray ">
    <div class="lg:w-full px-10  flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full  h-[500px] object-cover object-center rounded" src="./images/wpcontent/image-120.jpeg">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

        <h1 class="h1c text-black text-3xl title-font font-medium mb-1">Book a table</h1>
        <div>
          <br>
        </div>
        <p class="leading-relaxed leading-1.5">We are Kigali’s best restaurant, and we accept the interesting task of identifying unique ingredients, as well as fantastic comfort food cultures, traditions, and history. Above all, while dining at our restaurant, we want to interact with nature</p>
        <div class="flex items-center justify-center py-5">

  <div class="mx-auto w-full max-w-[550px] ">
    <form action="" method="POST">
      <div class="-mx-3 flex flex-wrap py-3">
        <div class="w-full sm:w-1/2">
          <div class="mb-2">
            
            <input
              type="text"
              name="Name"
              id="Name"
              placeholder="Name"
              class="w-full  py-3 px-6 bg-gray outline-none border-0"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-2">
           
            <input
              type="text"
              name="PhoneNumber"
              id="phoneNumber"
              placeholder="Phone Number"
              class="w-full  py-3 px-6 bg-gray outline-none border-0"
            />
          </div>
        </div>
      </div>
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-2">
            
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              class="w-full  py-3 px-6 bg-gray outline-none border-0"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-2">
           
            <input
              type="date"
              name="checkin"
              id="checkin"
              placeholder="Checkin"
              class="w-full  py-3 px-6 bg-gray outline-none border-0"
            />
          </div>
        </div>
      </div>
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-2">
            
            <input
              type="time"
              name="time"
              id="time"
              
              class="w-full  py-3 px-6 bg-gray outline-none border-0"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-2">
           
            <select
              type="text"
              name="guests"
              id="guests"
              
              class="w-full  py-3 px-6 bg-gray outline-none border-0"
            >
              <option value="" label="Geusts"></option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
              <option value="">6</option>
              <option value="">7</option>
              <option value="">8</option>
              <option value="">9</option>
              <option value="">10</option>
              <option value="">11</option>
            </select>
          </div>
        </div>
      </div>
      <div class="-mx-3 flex flex-wrap">
        
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-2">
           
            <select
              type="text"
              name="space"
              id="space"
            
              class="w-full  py-3 px-6 bg-gray outline-none border-0"
            >
              <option value="" label="Select Space"></option>
              <option value="">VIP</option>
              <option value="">Balcony</option>
              <option value="">Garden</option>
              <option value="">Coffee Terrace</option>
             
            </select>
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-2">
            
            <input
              type="button"
              name="submit"
              id="submit"
              value="Book a table now"
              class="w-full bg-main rounded  py-3 px-6 text-base font-medium text-white outline-none "
            />
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
  
</section>
<section class="text-gray-600 body-font relative">
  <div class="container px-52 py-40 mx-auto flex sm:flex-nowrap flex-wrap">
  <div class="grid grid-rows-3 w-3/5">
        <h1 class="text-3xl font-bold">Get In Touch with us</h1>
        <p class=" leading-1.5">If you have any question or need more information, fill the form to send us a quick message or use below contacts to get in touch with us. You can navigate using the provided map too.</p>
        <div class="grid grid-cols-3 gap-1 w-full">
            <div class="  bg-gray">
                <h2 class="text-lg mb-2">Address</h2>
                <p>Kigali Rwanda,</p>
                <p>Remera Taxi Station</p>
            </div>
            <div class="  bg-gray">
                <h2 class="text-lg  mb-2">Phone Number</h2>
                <p>+250 782 363 423</p>
            </div>
            <div class=" bg-gray">
                <h2 class="text-lg  mb-2">Email Address</h2>
                <p>thecellarrestaurant@yahoo.com</p>
            </div>
        </div>
    </div>
    <div class="lg:w-1/3 md:w-2/5 bg-gray flex flex-col md:ml-auto w-full md:py-5 mt-8 md:mt-0 p">
     
    <div class="-mx-3 px-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-3">
            
            <input
              type="text"
              name="Name"
              id="Name"
              placeholder="Name"
              class="w-full  py-3 px-6 bg-white outline-none border-0"
            />
          </div>
        </div>
        <div class="w-full  px-3 sm:w-1/2">
          <div class="mb-3">
           
            <input
              type="text"
              name="PhoneNumber"
              id="phoneNumber"
              placeholder="Phone Number"
              class="w-full  py-3 px-6 bg-white outline-none border-0"
            />
          </div>
        </div>
      </div>
      <div class="relative mb-4 px-3">
        <input type="email" id="email" name="email" placeholder="Email" class="w-full  py-3 px-6 bg-white outline-none border-0 ">
      </div>
      <div class="relative mb-4 px-3">
        
        <textarea id="message" placeholder="Message" name="message" class="w-full h-44  py-3 px-6 bg-white outline-none border-0"></textarea>
      </div>
      <button class="text-white bg-main border-0 ml-3 py-2 px-3 rounded w-1/2">Button</button>
    </div>
  </div>
</section>
<section class="">
<div class="relative w-full h-96">
    <iframe class="absolute top-0 left-0 w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.487571076464!2d30.115981275768107!3d-1.9585289367319896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7789623ec0f%3A0x8c6133280a86657f!2sThe%20Cellar%20Restaurant!5e0!3m2!1sen!2srw!4v1688902210326!5m2!1sen!2srw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
</div>
</section>
-----------------------------------------------------
<section class="text-gray-600 body-font relative ">
  <div class="container px-40 py-40 mx-auto flex sm:flex-nowrap flex-wrap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63799.804218620935!2d30.077356550322918!3d-1.958448011594433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x19dca7789623ec0f%3A0x8c6133280a86657f!2sThe%20Cellar%20Restaurant%206%20KG%20109%20St%20Kigali!3m2!1d-1.9585343!2d30.118556199999997!5e0!3m2!1sen!2srw!4v1688920953447!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
    <div class=" md:w-1/2  flex flex-col md:ml-auto w-full  mt-8 md:mt-0 p">
     
          
          <div class="relative mb-4 px-3">
              <input type="text" id="name" name="name" placeholder="Name" class="w-full  py-3 px-6 bg-white outline-none border ">
            </div>
            <div class="relative mb-4 px-3">
              <input type="number" id="number" name="number" placeholder="Phone Number" class="w-full  py-3 px-6 bg-white outline-none border ">
            </div>
            <div class="relative mb-4 px-3">
              <input type="email" id="email" name="email" placeholder="Email" class="w-full  py-3 px-6 bg-white outline-none border ">
            </div>
            <div class="relative mb-4 px-3">
              
              <textarea id="message" placeholder="Message" name="message" class="w-full h-44  py-3 px-6 bg-white outline-none border"></textarea>
            </div>
            <div class="relative mb-4 px-3">
              
            <button class="text-white bg-main  py-2  w-full">Button</button>
            </div>
            
          </div>
  </div>
  </div>
</section>
--------------------------------------------------------
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="./images/wpcontent/table.png">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
      <h2 class="text-gray-900 text-lg mb-14 font-medium title-font ">BOOK A TABLE</h2>
     
      <div class="relative mb-4">
       
        <input type="text" id="name" name="name" placeholder="Name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mb-5">
      </div>
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <input type="number" id="phone" name="phone" placeholder="Phone Number" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <input type="email" id="email" name="email" placeholder="Email" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
      </div>
      <div class="relative mb-4 pt-4">
      <label for="checkin" class="leading-7 text-sm text-gray-600">Checkin</label>

       <input type="date" id="checkin" name="checkin" placeholder="Checkin" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
     </div>
     <div class="relative mb-4 pt-4">
      <label for="time" class="leading-7 text-sm text-gray-600">Time</label>

       <input type="time" id="time" name="time" placeholder="Time" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mb-5">
     </div>
     <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
          <select
              type="text"
              name="space"
              id="space"
            
              class="w-full  py-3 px-6 border outline-none border-0"
            >
              <option value="" label="Select Space"></option>
              <option value="">VIP</option>
              <option value="">Balcony</option>
              <option value="">Garden</option>
              <option value="">Coffee Terrace</option>
             
            </select>
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
          <select
              type="text"
              name="guests"
              id="guests"
              
              class="w-full  py-3 px-6 border outline-none border-0"
            >
              <option value="" label="Geusts"></option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
              <option value="">6</option>
              <option value="">7</option>
              <option value="">8</option>
              <option value="">9</option>
              <option value="">10</option>
              <option value="">11</option>
            </select>
          </div>
        </div>
      </div>
     
      <button class="text-white bg-main mt-8 border-0 py-2 w-full px-6 focus:outline-none rounded text-lg">Book Your Table Now</button>
      
   
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-20 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20 " >
     
      <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed ">If you have any question or need more information, fill the form to send us a quick message or use below contacts to get in touch with us. You can navigate using the provided map too. </p>
    </div>
    <div class="flex gap-2 px-20">
      <div class="xl:w-1/4 lg:w-1/2 md:w-1/4 px-8 py-6  bg-main text-white rounded-xl">
        <h2 class="text-lg sm:text-xl  font-bold title-font mb-2">ADDRESS</h2>
        <hr class="pt-3">
        <p class="leading-relaxed font-bold mb-4 pt-3 ">KIGALI Rwanda <br>Remera taxi station <br> The Cellar Coffee Shop</p>
       
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-1/4 px-8 py-6  bg-main text-white rounded-xl">
        <h2 class="text-lg sm:text-xl  font-bold title-font mb-2">EMAIL</h2>
        <hr class="pt-3">
        <p class="leading-relaxed font-bold mb-4 pt-3">thecellarrestaurant@yahoo.com</p>
        
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-1/4 px-8 py-6  bg-main text-white rounded-xl">
        <h2 class="text-lg sm:text-xl  font-bold title-font mb-2">PHONE</h2>
        <hr class="pt-3">
        <p class="leading-relaxed font-bold mb-4 pt-3">+250782363423</p>
      
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-1/4 px-8 py-6  bg-main text-white rounded-xl">
        <h2 class="text-lg sm:text-xl  font-medium title-font mb-2 ">WEBSITE</h2>
        <hr class="pt-3">
        <p class="leading-relaxed font-bold mb-4 pt-3">https://thecellar.rw</p>
       
      </div>
    </div>
   
  </div>
</section>

<section class="text-gray-600 body-font ">
  <div class="container px-5 py-24 mx-auto ">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Best way to eat healthy food</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">We serve everything in our restaurant daily, including our famous seasonal menu.</p>
     
    </div>
    <div class="flex  sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6 gap-2 px-40">
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center border border-gray-300 rounded-xl">
        <div class="w-1/3 h-20 inline-flex items-center justify-center rounded bg-main  mb-5 flex-shrink-0">
        <img src="./icons/icons8-carrot-30.png"  class=" h-10" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Healthy Meal</h2>
          <p class="leading-relaxed text-base">We serve base meals on higher fibre starchy foods like potatoes, bread, rice or pasta. We also have some dairy or dairy alternatives (such as soya drinks) eat some beans, pulses, fish, eggs, meat and other protein.</p>
         
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center  border border-gray-300 rounded-xl">
        <div class="w-1/3 h-20 inline-flex items-center justify-center rounded bg-main  mb-5 flex-shrink-0">
        <img src="./icons/icons8-hamburger-30.png"  class=" h-10" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Fast Food</h2>
          <p class="leading-relaxed text-base">We also have mass-produced food with a strong priority placed on "speed of service" versus other relevant factors involved in culinary science. </p>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center  border border-gray-300 rounded-xl">
        <div class="w-1/3 h-20 inline-flex items-center justify-center rounded bg-main  mb-5 flex-shrink-0">
        <img src="./icons/icons8-coffee-30.png" class=" h-10" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Delicious Drinks</h2>
          <p class="leading-relaxed text-base">In addition to our food, we serve drinks that play important roles in human culture. we have plain drinking water, milk, juice and soft drinks, beverages include coffee, tea, and hot chocolate. Alcohol contained drinks like beer, liquor and wines</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="text-gray-600 body-font">
  <div class="container px-20 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20 " >
     
      <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900">What's in the supermarket?</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed py-3 ">We have  a range of products that customers may choose from. We have all local, regional and international products. </p>
      <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-main border-0 py-2 px-8  rounded text-lg">View More Images</button>
      </div>
    </div>
<div class="container px-5  mx-auto">
    <div class="flex ">
      <div class="p-4 lg:w-1/4 ">
        <div class="h-full bg-gray-100 bg-opacity-75  rounded-5xl overflow-hidden text-center relative ">
          <img src="./icons/icons8-ice-cream-30.png" alt="">

          <h1 class="title-font sm:text-2xl text-xl  text-gray-900 mb-3">Fruits & Vegetables</h1>
        </div>
      </div>
      <div class="p-4 lg:w-1/4">
        <div class="h-full bg-gray-100 bg-opacity-75  rounded-5xl overflow-hidden text-center relative">
        <img src="./icons/icons8-ice-cream-30.png" alt="">
          <h1 class="title-font sm:text-2xl text-xl  text-gray-900 mb-3">Meat & Sea Food</h1>
        </div>
      </div>
      <div class="p-4 lg:w-1/4">
        <div class="h-full bg-gray-100 bg-opacity-75  rounded-5xl overflow-hidden text-center relative">
        <img src="./icons/icons8-ice-cream-30.png" alt="">
          <h1 class="title-font sm:text-2xl text-xl  text-gray-900 mb-3">Breakfast & Diary</h1>
        </div>
      </div>
      <div class="p-4 lg:w-1/4">
        <div class="h-full bg-gray-100 bg-opacity-75  rounded-5xl overflow-hidden text-center relative">
        <img src="./icons/icons8-ice-cream-30.png" alt="">
        <h1 class="title-font sm:text-2xl text-xl  text-gray-900 mb-3">Beverages</h1>
        </div>
      </div>
      
    </div>
    
  </div>
</section>

<!-- Map above coffee terrace page -->

<section class="text-gray-600 body-font relative">
  <div class="container gap-4 mx-auto flex sm:flex-nowrap flex-wrap">
    
    <div class="lg:w-1/4 md:w-1/2 px-4 bg-gray-100 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-main items-center text-lg mb-1 text-[35px] pb-5 font-bold title-font">Our Location & Contacts</h2>
      <p class="leading-relaxed mb-5 text-gray-600">If you have any question or need more information, fill the form to send us a quick message or use below contacts to get in touch with us. You can navigate using the provided map too. </p>
      <div class="social ml-0  pb-10" >
        <div class="flex">
          <img src="./icons/icons8-location-24.png" alt="">Kigali RWANDA, Kicukiro<br>
        </div>
        <div class="flex">
          <img src="./icons/icons8-call-24.png" alt=""> +250 788 888 888<br>
        </div>
        <div class="flex">
          <img src="./icons/icons8-email-50.png"  width="24" height="24">info@thecellar.rw
        </div>
      </div>
      <h1 class="text-main items-center text-lg mb-1 font-bold text-[35px] pb-2 title-font">Send a quick message</h1>

      <div class="relative mb-4">
        <input type="text" id="name" name="name" placeholder="Name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <input type="email" id="email" name="email" placeholder="Email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <textarea id="message" name="message" placeholder="Message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-main border-0 py-2 px-6  rounded text-lg">Send</button>
      
    </div>
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
    <iframe class="absolute top-0 left-0 w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.487571076464!2d30.115981275768107!3d-1.9585289367319896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7789623ec0f%3A0x8c6133280a86657f!2sThe%20Cellar%20Restaurant!5e0!3m2!1sen!2srw!4v1688902210326!5m2!1sen!2srw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
      
    </div>
  </div>
</section>

<!-- coffe-terrace page -->
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
  <div class="container mx-auto flex px-2 py-24 md:flex-row flex-col md:w-1/2 items-center">
      <div class="lg:flex-grow w-20 lg:pr-24 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">What's in the terrace?</h1>
        <p class="mb-8 leading-relaxed">We have a range of fresh coffee beans from motherland, roasted by our experienced roasters. A range of premium beverages like wines, liquors and beer from all around the world </p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-main border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">View more images</button>
      </div>
    </div>

   
  </div>
    
    <div class="flex flex-wrap px-40  -m-4 text-center">
      <div class="p-4  md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 bg-gray-100 flex py-6 rounded-full">
          <div class="img"><img src="./icons/icons8-coffee-96.png" width="50" height="50" alt=""></div>
          <div><p class="title-font font-medium  text-gray-900">Coffee & Tea</p></div>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 bg-gray-100 px-4 py-6 flex rounded-full">
          <div class="img w-[36px] h-[36px]">
            <img src="./icons/icons8-cd-96.png"  alt="">
          </div>
          <div>
            <p class="title-font font-medium  text-gray-900">Cookies & Muffins</p>
        </div>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 bg-gray-100 px-4 py-6 flex rounded-full">
        <div class="img w-[36px] h-[36px] flex">
          <img src="./icons/icons8-cd-96.png"  alt="">
        </div>
        <div>
          <p class="title-font font-medium  text-gray-900">Salads & Wraps</p>
        </div>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 bg-gray-100 px-4 py-6 flex rounded-full">
         <div class="img">
          <img src="./icons/icons8-blender-96.png"  width="40" height="40" alt="">
        </div>
        <div>
          <p class="title-font font-medium  text-gray-900">Yogurts Oatmeals</p>
        </div>

      </div>
    </div>
    <div class="flex flex-wrap px-40  -m-4 text-center">
      <div class="p-4  md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 bg-gray-100 flex py-6 flex rounded-full">
          <div class="img"><img src="./icons/icons8-toast-50.png" width="50" height="50" alt=""></div>
          <div><p class="title-font font-medium  text-gray-900">Cakes & Sandwitches</p></div>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 bg-gray-100 px-4 py-6 flex rounded-full">
          <div class="img"><img src="./icons/icons8-ice-cream-96.png" width="36" height="36" alt=""></div>
          <div><p class="title-font font-medium  text-gray-900">Frozen foods</p></div>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 bg-gray-100 px-4 py-6 flex rounded-full">
        <div class="img w-[36px] h-[36px]"><img src="./icons/icons8-cd-96.png"  alt=""></div>
          <div><p class="title-font font-medium  text-gray-900">Biscuits & Snacks</p></div>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 bg-gray-100 px-4 py-6 flex rounded-full">
          <div class="img w-[36px] h-[36px]"><img src="./icons/icons8-wine-bar-96.png"  alt=""></div>
          <div><p class="title-font font-medium  text-gray-900">Fruits Juice & Smothies</p></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- catering page -->
<section class="text-gray-600 body-font relative bg-gray-100">
  <div class="container px-20 py-12 mx-auto ">
          <div class="flex flex-col text-center w-full mb-6 " >
            
            <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900">Outside catering</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed py-3 ">We deliver all of our products to any place in Kigali. Our catering service is on the client satisfaction level. Get the most quality products and an amazing satisfaction with our catering service. </p>
            
          </div>
  
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 px-20">
    <div class="px-2 w-1/2">
          <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
            <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="./images/wpcontent/IMG_8703-768x768.jpg">
            <div class="text-center relative z-10 w-full">
              <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Catering Vans</h2>
              <p class="leading-relaxed">Our high end vans deliver our products and services to big, small or medium parties and gathering.</p>
              
            </div>
          </div>
        </div>
      <div class="px-2 w-1/2">
          <div class="flex flex-wrap w-full bg-gray-200 sm:py-24 py-16 sm:px-10 px-6 relative">
            <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="./images/wpcontent/istockphoto-502765260-612x612-1.jpeg">
            <div class="text-center relative z-10 w-full">
              <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Catering Bikes</h2>
              <p class="leading-relaxed">Our bikes deliver our products and services to customers in any place in Kigali. We deliver to your door</p>
              
            </div>
          </div>
        </div>
  </div>

  </div>
</section>
<!-- caterin menu section -->
<section class="text-gray-600 bg-gray-100 body-font">
  <div class="container  py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20 " >
     
      <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900">Order our products</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed py-3 ">We deliver all of our products to any place in Kigali. Our catering service is on the client satisfaction level. Get the most quality products and an amazing satisfaction with our catering service.</p>
      <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-main border-0 py-2 px-8  text-lg">Our menu</button>
      </div>
    </div>
  </div>
</section>

<!-- Bakery bakers delight page -->
<section class="text-gray-600 bg-gray-100 body-font">
  <div class="container px-60 py-24 mx-auto ">
      <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Bakers Delight</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We are the ideal place to eat at while on your way to or from a restaurant, or just stopping by for a little taste. We are a group of dedicated professionals and we are committed to being in business for the long haul.</p>
      </div>
        <div class="row  w-full px-20 flex">
              <div class="main1 w-1/2  p-5 ">
                <div class="im" >
                  <img src="./images/wpcontent/WhatsApp-Image-2021-12-28-at-10.03.18-AM-768x576.jpeg" alt="">
                </div>
                <div class="p">
                  <h1 class="font-bold text-2xl p-2">Remera Giporoso Kiosk</h1>
                  <b class="p-2">Call: 0785022598</b>
                  <p class="p-2">
                    Our Remera Kiosk is located aside of Remera Taxi station. Coming from main road, it's on your right opposite of Bank of Kigali, before right turn to Kimironko
                  </p>
                </div>
              </div>
              <div class="main1 w-1/2  p-5 ">
                <div class="im" >
                  <img src="./images/wpcontent/WhatsApp-Image-2021-12-28-at-10.03.18-AM-768x576.jpeg" alt="">
                </div>
                <div class="p">
                  <h1 class="font-bold text-2xl p-2">Remera Stade Kiosk</h1>
                  <b class="p-2">Call: 0780896907</b>
                  <p class="p-2">
                  Zigama CSS The Cellar Restaurant Kioske is located behind Zigama CSS Headquaters in remera. You can find all bakery products that we offer.
                  </p>
                </div>
              </div>
        </div>
        <div class="row  w-full px-20 flex">
              <div class="main1 w-1/2  p-5 ">
                <div class="im" >
                  <img src="./images/wpcontent/WhatsApp-Image-2021-12-28-at-10.03.18-AM-768x576.jpeg" alt="">
                </div>
                <div class="p">
                  <h1 class="font-bold text-2xl p-2">Kicukiro Kiosk</h1>
                  <b class="p-2">Call: 0783979503</b>
                  <p class="p-2">
                   
                  </p>
                </div>
              </div>
              <div class="main1 w-1/2  p-5 ">
                <div class="im" >
                  <img src="./images/wpcontent/WhatsApp-Image-2021-12-28-at-10.03.18-AM-768x576.jpeg" alt="">
                </div>
                <div class="p">
                  <h1 class="font-bold text-2xl p-2">Kimironko Kiosk</h1>
                  <b class="p-2">Call: 0791298629</b>
                  <p class="p-2">
                  
                  </p>
                </div>
              </div>
        </div>
        <div class="row  w-full px-20 flex">
              <div class="main1 w-1/2  p-5 ">
                <div class="im" >
                  <img src="./images/wpcontent/WhatsApp-Image-2021-12-28-at-10.03.18-AM-768x576.jpeg" alt="">
                </div>
                <div class="p">
                  <h1 class="font-bold text-2xl p-2">Nyamirambo Kiosk</h1>
                  <b class="p-2">coming soon</b>
                  <p class="p-2">
                   
                  </p>
                </div>
              </div>
              <div class="main1 w-1/2  p-5 ">
                <div class="im" >
                  <img src="./images/wpcontent/WhatsApp-Image-2021-12-28-at-10.03.18-AM-768x576.jpeg" alt="">
                </div>
                <div class="p">
                  <h1 class="font-bold text-2xl p-2">Nyabugogo Kiosk</h1>
                  <b class="p-2">Call: 0790138716</b>
                  <p class="p-2">
                  
                  </p>
                </div>
              </div>
        </div>
  </div>
</section>
<!-- Bakery our products page -->
<section class="text-gray-600 bg-white body-font">
  <div class="container  py-24 mx-auto">
    <div class="flex flex-col text-center w-3/4 pl-80 mb-20 " >
     
      <h1 class="sm:text-4xl text-2xl font-bold title-font mb-4 text-gray-900">Our products</h1>
      <h2 class="text-3xl font-bold title-font ">Sweet baked to perfection choices</h2>
      <p class="lg:w-2/3 mx-auto leading-relaxed py-3 ">Our bakery has a mix of different favours and so we do specialise in a little of each. We’re also full of surprises and so it’s fun to experiment with new favours everyday.</p>
      <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-main border-0 py-2 px-8  text-lg">Our menu</button>
      </div>
    </div>
    <div class="main w-full ">
      <div class="list flex items-center font-bold justify-center pb-20 gap-4 px-60 ">
          <!-- holdz the div cols -->
          <div class="hold ">
              <div class="im">
                <img src="./images/wpcontent/IMG_8927-300x300.jpg" alt="">
              </div>
              <div class="text-center">
                <h2 class="text-2xl ">Sandwich Vanille</h2>
                <p class="text-main text-3xl ">600Rwf</p>
              </div>
          </div>
          <div class="hold ">
              <div class="im">
                <img src="./images/wpcontent/MG_8929-300x300.jpg" alt="">
              </div>
              <div class="text-center">
                <h2 class="text-2xl ">Sandwiches</h2>
                <p class="text-main text-3xl ">900Rwf</p>
              </div>
          </div><div class="hold ">
              <div class="im">
                <img src="./images/wpcontent/p2.png" width="350" height="450" alt="">
              </div>
              <div class="text-center">
                <h2 class="text-2xl ">Pain coupé</h2>
                <p class="text-main text-3xl ">1200Rwf</p>
              </div>
          </div><div class="hold ">
              <div class="im">
                <img src="./images/wpcontent/IMG_8920-300x300.jpg" alt="">
              </div>
              <div class="text-center">
                <h2 class="text-2xl ">Paint Coupé Brioche</h2>
                <p class="text-main text-3xl ">1200Rwf</p>
              </div>
          </div>
        </div>
        <div class="list flex items-center font-bold justify-center  gap-4 px-60 ">
             <!-- holdz the div cols -->
            <div class="hold ">
                <div class="im">
                  <img src="./images/wpcontent/p1.png" width="500" height="500" alt="">
                </div>
                <div class="text-center">
                  <h2 class="text-2xl ">Paint Coupé Vienois</h2>
                  <p class="text-main text-3xl ">500Rwf</p>
                </div>
            </div>
            <div class="hold ">
                <div class="im">
                  <img src="./images/wpcontent/IMG_8932.jpg" alt="">
                </div>
                <div class="text-center">
                  <h2 class="text-2xl ">Petit Pain Au Lait</h2>
                  <p class="text-main text-3xl ">250Rwf</p>
                </div>
            </div>
            <div class="hold ">
                <div class="im">
                  <img src="./images/wpcontent/IMG_8967.jpg" alt="">
                </div>
                <div class="text-center">
                  <h2 class="text-2xl ">Baguette</h2>
                  <p class="text-main text-3xl ">600Rwf</p>
                </div>
            </div>
            <div class="hold ">
                <div class="im">
                  <img src="./images/wpcontent/IMG_8935.jpg" alt="">
                </div>
                <div class="text-center">
                  <h2 class="text-2xl ">Cake</h2>
                  <p class="text-main text-3xl ">400Rwf</p>
                </div>
            </div>
          </div>  
    </div>
  </div>
</section>
<!-- Bakery image page -->
<section class="text-gray-600 bg-gray-100 body-font">
  <div class="container py-12 mx-auto">
    <div class="flex text-center  mb-20 gap-5 px-0" >
      <div class="im">
        <img src="./images/wpcontent/IMG_8916.jpg" alt="">
      </div>
      <div class="im">
        <img src="./images/wpcontent/IMG_8974.jpg" alt="">
      </div>
      <div class="im">
        <img src="./images/wpcontent/IMG_8909.jpg" alt="">
      </div>
      <div class="im">
        <img src="./images/wpcontent/IMG_8918.jpg" alt="">
      </div>
    </div>
    <div class="container px-40  mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Bakery gallery</h1>
     
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8883-1024x720.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/WhatsApp-Image-2021-12-28-at-10.03.18-AM-768x576.jpeg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/table.png" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8974-768x540.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8964-1024x720.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8943.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8937-1024x720.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8916.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8908-1024x720.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8888.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8895.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="./images/wpcontent/IMG_8878.jpg" alt="">
    </div>
  </div>
  </div>
  </div>
</section>
<!-- Bakery sub-footer page -->
<section class="text-gray-600 bg-white  body-font">
  <div class="flex w-full">
    <div class="text-center py-20 px-40">
      <h1 class="font-bold text-3xl pb-5">Address</h1>
      <p>Kigali Rwanda, Remera Taxi Park</p>
    </div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63799.804218620935!2d30.07735655032291!3d-1.958448011594433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x19dca7789623ec0f%3A0x8c6133280a86657f!2sThe%20Cellar%20Restaurant%2C%206%20KG%20109%20St%2C%20Kigali%2C%20Rwanda!3m2!1d-1.9585343!2d30.118556199999997!5e0!3m2!1sen!2sus!4v1689094292361!5m2!1sen!2sus" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="text-center py-20 px-[40px]">
      <h1 class="font-bold text-3xl pb-5">Opening time</h1>
      <p>We open 7 days a week from 7: 00 am up to 00:00 pm</p>
    </div>
    <div class="news py-2">
      <h1 class="font-bold text-3xl pb-3">Join Our Newsletter</h1>
      <p class="mb-2 pb-3">join Our newsletter to know what’s coming in the store</p>
      
      <div class="mb-2">
            
            <input type="email" name="email" id="email" placeholder="Enter Email Address"
              class="w-full mb-3 py-3 px-6  outline-none border border-gray-200 "/>
            <input type="button"name="subscribe"id="subscribe" value="subscribe" placeholder="subscribe"
              class="w-full  py-3 px-6 bg-main outline-none border-0 text-white"/>
          </div>
      
    </div>
  </div>
</section>
</body>
</html>