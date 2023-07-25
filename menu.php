
<!doctype html>
<html>
<head>
  <?php include './component/includes/head.php'; ?>
</head>
<body class="relative">
  <?php include './component/header.php'; ?>

    <div class="relative">
        <div class="clip w-full h-80 bgfoodmenu mx-auto flex justify-center items-center">
          <div class="">
            <h1 class="headtxt font-black text-white text-4xl drop-shadow ">Browse our food menu</h1>
          </div>
        </div>
        <div class="h-20 bg-white  ">
            <div class="absolute top-56 flex justify-center items-center w-full ">
                <img src="./images/wpcontent/oie_Aw1JizUdOUP1.png" alt="" srcset="" class="w-32 h-full bg-white rounded-full">
            </div>
        </div>
      </div>
    </div>
   
   <!-- PDF Menu -->
   
  
   <div class="md:px-52 w-full pb-10 mx-auto flex justify-center items-center">
     

          


          <div class="md:px-40 w-full p-5 ">
            <div class="w-full py-2 pb-5">
              <h2 class="font-bold text-gray-500 text-2xl">FOOD MENU</h2>
            </div>
            <?php 
            require_once('./models/product.php');
            $product = new product();
            $result = $product->getALl();
            foreach ($result as $row){
              ?>
            
            <h3 class="font-bold text-gray-500 text-2xl"><?php //echo $row['p_category']; ?></h3>
            <div class="flex gap-3 md:gap-5 justify-between bg-white shadow px-4 py-2 items-center rounded mb-2">
                <div class="md:w-[100px] md:h-[100px] w-[80px] h-20 rounded">
                <?php
                  $newSrc = substr($row['p_img'], 1); 
                  ?>
                  <img src="<?php echo $newSrc; ?>" alt="" srcset="" class="object-cover w-full rounded h-full">
                </div>
                <div class="w-1/2 py-2 text-left">
                  <h class="font-semibold"><?php echo $row['p_name']; ?> (<?php echo $row['p_size']; ?>)</h2>
                  <p class="text-gray-500 font-light"><?php echo $row['p_desc']; ?></p>
                </div>

                <div class="items-center text-center py-2 px-2">
                  <h2 class="font-bold"><?php echo $row['p_price']; ?> Rwf</h2>
                </div>
              </div>
              <?php } ?>
          </div>
          

    </div>

    <?php include './component/footer.php'; ?>

