<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/css/tailwind.css">
      <link rel="stylesheet" href="./assets/css/fonts.css">
      <link rel="shortcut icon" href="./assets/images/logos/logo-round.png" type="image/x-icon">
      <title>Shoppers Bag | Blog</title>
   </head>
   <body class="box-border overflow-x-hidden bg-brandGray3x" data-what-page='blog'>
      <?php include_once './widgets/header.php'; ?>
      <main class="overflow-x-hidden">
         <section id="featured_blog" class="px-5 md:px-20 py-10 space-y-20">
            <div class="relative w-full mx-auto">
                  <div class="z-30 relative py-10 px-5 sm:px-10 lg:px-16 mx-auto rounded-twenty bg-white w-full flex flex-col md:flex-row items-start gap-5">
                     <div class="space-y-3 flex flex-row pb-5 md:pb-0 gap-5 items-end md:block w-full md:w-twentyFivePercent lg:w-fifteenPercent">
                        <img src="./assets/images/avatars/avatar-blue-blonde-hair.png" alt="avatar-blue-blonde-hair" class="h-12 w-12 sm:h-16 sm:w-16 md:h-28 md:w-28">
                        <div class="space-y md:space-y-3">
                              <h1 class="text-brandGray23x font-normal font-moderat">Precious Tom</h1>
                              <p class="text-black font-moderat font-extrabold">Read time: <span class="font-normal text-brandGray23x">2 mins</span></p>
                        </div>
                     </div>
                     <div class="space-y-3 w-full md:w-seventyFivePercent lg:w-eightyFivePercent md:pr-5">
                        <h1 class="font-milligramBold700 text-brandDarkGreen1x text-2xl md:text-3xl lg:text-5xl">
                              Permanent Solution to Plastic Waste on  <span class="shadow-green-text pr-2"> Earth</span>
                        </h1>
                        <p class="font-avenirRegular text-brandGray23x text-sm sm:text-base md:text-lg">
                              Eco-Girls support scheme is designed to train, equip and empower girls with practical bag design and making skills using recyclable and biodegradable materials. Eco-Girls support scheme is designed to train, equip and empower girls with practical bag design and making skills using recyclable and biodegradable materials.                    
                        </p>
                        <div class="flex flex-col-reverse lg:flex-row items-start gap-2 md:justify-between">
                              <div class="blog-tag-wrap flex flex-row flex-wrap items-center gap-5 py-3">
                                 <div class="blog-tag py-tenPixel px-5 lg:px-7 font-moderat font-normal text-white h-fit w-fit text-sm md:text-lg lg:text-xl rounded-fifty whitespace-nowrap">
                                    News
                                 </div>
                                 <div class="blog-tag py-tenPixel px-5 lg:px-7 font-moderat font-normal text-white h-fit w-fit text-sm md:text-lg lg:text-xl rounded-fifty whitespace-nowrap">
                                    Partner's Story
                                 </div>
                                 <div class="blog-tag py-tenPixel px-5 lg:px-7 font-moderat font-normal text-white h-fit w-fit text-sm md:text-lg lg:text-xl rounded-fifty whitespace-nowrap">
                                    Ads
                                 </div>
                              </div>
                              <a href="#" class="underline pt-5 lg:pl-5 text-brandRed1x font-moderat font-normal">Learn more about this</a>
                        </div>
                     </div>
                  </div>
                  <div class="absolute w-full bg-brandGray22x h-full rounded-twenty -left-2 -bottom-2"></div>
            </div>
         </section>
         <p class="hidden max-h-52">
            <div id="" class="hidden flex-col py-4 md:flex-row gap-10">
                  <div class="blog-post-img w-307 md:w-fortyPercent h-48 md:max-h-52">
                     <div class="relative w-full md:w-eightyPercent h-full max-w-xl">
                        <div class="z-30 w-full relative h-full py-10 px-5 sm:px-10 lg:px-16 mx-auto rounded-twenty bg-white flex flex-col md:flex-row items-start gap-5">
                        
                        </div>
                        <div class="absolute w-full bg-brandGray22x h-full rounded-twenty -left-2 -bottom-2"></div>
                     </div>
                  </div>
                  <div class="space-y-3 w-full md:w-sixtyPercent md:pr-5">
                     <h1 class="font-milligramBold700 text-brandDarkGreen1x text-2xl md:text-3xl lg:text-5xl">
                        <span class="shadow-green-text pr-2"></span>
                     </h1>
                     <div class="flex flex-row gap-3">
                        <p class="text-black font-moderat font-extrabold">Author: <span class="font-normal text-brandGray23x">${element.author}</span></p>
                        <p class="text-black font-moderat font-extrabold">Read time: <span class="font-normal text-brandGray23x">${element.readTime}</span></p>
                     </div>
                     <div class="blog-tag-wrap flex flex-row flex-wrap items-center gap-5 py-3">
                        
                     </div>
                     <p class="font-avenirRegular text-brandGray23x text-sm sm:text-base md:text-lg">
                     </p>
                     <div class="py-2">
                        <a href="${element.url}" class="underline pt-5 text-brandRed1x font-moderat font-normal">Read more</a>
                     </div>
                  </div>
            </div>
         </p>
         <section id="blog_posts_wrap" class="py-5 space-y-10 px-10 md:px-20">
            
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