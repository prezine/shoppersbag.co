<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/css/tailwind.css">
      <link rel="stylesheet" href="./assets/css/fonts.css">
      <link rel="shortcut icon" href="./assets/images/logos/logo-round.png" type="image/x-icon">
      <title>Shoppers Bag | Contact Us</title>
   </head>
   <body class="box-border overflow-x-hidden bg-brandGray24x" data-what-page='contact'>
      <?php include_once './widgets/header.php'; ?>
      <main class="overflow-x-hidden">
         <section class="px-10 md:px-20 py-20 flex flex-col md:flex-row gap-20 md:gap-10">
            <div class="w-full md:w-fiftyPercent space-y-8 md:space-y-5">
                  <h1 class="text-black font-avenirHeavy text-5xl sm:text-6xl lg:text-7xl">Beautifully designed in Africa</h1>
                  <p class="text-2xl font-avenirLight">
                     Founded in the entrepreneurial city of Lagos, ShoppersBag has become an exceptional African innovation — designed and built by a team of innovative people.
                  </p>
                  <p class="text-2xl font-avenirLight"><a href="#">Visit our Office</a></p>
            </div>
            <div class="w-full md:w-fiftyPercent">
                  <img src="./assets/images/contact-us/africa.png" alt="africa" class="w-eightyPercent md:w-ninetyPercent">
            </div>
         </section>
         <section class="px-10 md:px-20 pb-10">
            <main class="grid sm:grid-cols-1 gap-5 md:gap-10">
                  <div class="h-fit w-fit col-span-1">
                     <img src="./assets/images/contact-us/map-of-shoppersbag-address.png" alt="map-of-shoppersbag-address" class="">
                  </div>
            </main>
         </section>
         <section class="px-10 md:px-20 py-5 flex flex-col gap-7 md:gap-20 sm:flex-row items-start">
            <div class="w-full md:w-fiftyPercent">
                  <p class="font-avenirLight text-lg md:text-2xl text-black">
                     <span class="font-avenirHeavy">Uyo Office:</span> Well of Science Limited 89 Edet Akpan Avenue,Uyo, Akwa Ibom State
                  </p>
            </div>
            <div class="w-full md:w-fiftyPercent">
                  <p class="font-avenirLight text-lg md:text-2xl text-black">
                     <span class="font-avenirHeavy">Lagos Office:</span> #7 Pilot Close, Off Bishop Kale Street, off Bode Thomas Street, Surulere, Lagos
                  </p>
            </div>
         </section>
            <?php 
               include_once './widgets/waitlist.widget.php'
            ?>
    
      </main>
      <?php include_once './widgets/footer.php'; ?>
      <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="./assets/js/tabs.js"></script> -->
    <script src="./assets/js/blogs.js"></script>
    <!-- <script src="./assets/js/accordion_faq.js"></script> -->
    <script src="./assets/js/nav.js"></script>
   </body>
</html>