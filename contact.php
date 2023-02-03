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
            <section class="pt-10">
            <form action="" method="post" class="rounded-fifty bg-brandPeach3x text-sm md:text-base w-ninetyPercent max-w-lg lg:w-sixtyPercent lg:max-w-2xl px-5 sm:px-10 md:px-20 py-10 mx-auto space-y-5 sm:space-y-8 md:space-y-10">
         <h1 class="font-avenirHeavy text-center text-2xl lg:text-3xl">Contact Shoppers Bag</h1>
         <div>
            <label for="fullName" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                  Enter Your Name
                  <input type="text" name="full-name" id="fullName" placeholder="John Doe" class="placeholder:text-brandGray29x focus:outline-none text-black">
            </label>
         </div>
         <div>
            <label for="email" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                  Enter Your Email Address
                  <input type="text" name="email" id="email" placeholder="example@example.com" class="placeholder:text-brandGray29x focus:outline-none text-black">
            </label>
         </div>
         <div>
            <label for="subject" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                  Enter Your Subject
                  <input type="text" name="subject" id="subject" placeholder="How do I partner with Shoppersbag?" class="placeholder:text-brandGray29x focus:outline-none text-black">
            </label>
         </div>
         <div>
            <label for="message" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                   Enter Your Message
                   <textarea name="message" id="message" cols="30" rows="5" placeholder="I am Interested in how you work to make the earth a better place I run a startup involved in climate and blah blah..." class="placeholder:text-brandGray29x resize-none focus:outline-none text-black"></textarea>
            </label>
         </div>
         <div class="flex justify-end">
            <button class="bg-brandGreen4x w-fit rounded-fifty py-2 md:py-4 px-5 sm:px-10 text-white text-sm sm:text-lg md:text-xl hover:scale-90 hover:shadow-sm transition-all duration-500 ease-in-out">Leave us a message</button>
         </div>
         </form>
      </section>
    
      </main>
      <?php include_once './widgets/footer.php'; ?>
      <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="./assets/js/tabs.js"></script> -->
    <script src="./assets/js/blogs.js"></script>
    <!-- <script src="./assets/js/accordion_faq.js"></script> -->
    <script src="./assets/js/nav.js"></script>
   </body>
</html>