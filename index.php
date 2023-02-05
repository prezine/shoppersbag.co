<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/css/tailwind.css">
      <link rel="stylesheet" href="./assets/css/fonts.css">
      <link rel="shortcut icon" href="./assets/images/logos/logo-round.png" type="image/x-icon">
      <title>Shoppers Bag | Home</title>
   </head>
   <body class="box-border bg-white overflow-x-hidden">
      <?php include_once './widgets/header.php'; ?>
      <main class="">
         <section class="px-5 sm:px-10 md:px-20 mb-40 h-fit relative">
            <main class="relative rounded-hundred bg-brandDarkGreen1x px-5 lg:px-24 pt-32 lg:py-32  h-fit flex flex-col gap-6">
                  <div class="space-y-6 w-full">
                     <div class="text-center min-w-full lg:text-left text-4xl sm:text-5xl md:text-7xl container font-milligramBold700 space-y-2">
                        <span class="text-white static first">Say yes to a <br/></span>
                        <span class="text-brandGreen1x underline" id="change_text">reusable</span>
                     </div>
                     <p class="font-milligramRegular200 text-white text-base text-center w-ninetyPercent mx-auto lg:mx-0 lg:text-left md:text-3xl lg:w-sixtyPercent lg:pr-20">shopping bags, enabled with digital technology</p>
                     <div class="pt-10 pb-5 flex xs:flex-col flex-row items-center justify-center lg:justify-start lg:w-fit gap-4 sm:gap-10">
                        <a href="https://www.youtube.com/watch?v=825tVcsLE1I" target="_blank" class="font-avenirLight text-sm md:text-lg whitespace-nowrap text-white bg-brandBlue1x rounded-sixty py-4 px-7">Show me how</a>
                        <a href="./contact" class="text-white text-sm md:text-lg whitespace-nowrap font-moderat font-normal underline">Contact sales</a>
                     </div>
                  </div>
                  <img src="./assets/images/hero-img.jpg" alt="hero eco girl" class="lg:absolute w-ninetyPercent mx-auto md:w-500 lg:w-fortyPercent bottom-32 right-8">
            </main>
               <div class="absolute -bottom-60 sm:-bottom-20 md:-bottom-15 right-10 md:right-36 ">
                  <div class="relative h-fit w-fit flex flex-col">
                     <div class="relative z-30 px-6 shadow-lg py-9 bg-brandPeach1x rounded-fifty w-60 sm:w-350 md:w-410 space-y-4">
                        <div class="relative h-fit w-fit px-5 py-2 mx-auto">
                              <h1 class="font-milligramBold700 text-xl md:text-3xl text-center">Our Mission</h1>
                              <img loading="lazy" src="./assets/images/patterns/sun-rays.png" alt="sun-rays" class="w-6 h-6 absolute right-0 top-0">
                        </div>
                        <p class="font-milligramLight300 text-brandBlack text-sm md:text-sm">At ShoppersBag, we are on a mission to support shoppers maintain a sustainable shopping lifestyle, reduce the number of single-use plastic bags in circulation, and improve the livelihood of women and girls.</p>
                     </div>
                     <div class="absolute w-full bg-brandYellow4x h-full rounded-fifty -left-3 -bottom-3"></div>
                  </div>
               </div>
               <!-- <div class="min-h-full min-w-full bg-red-500">
                  <p>hi</p>
               </div> -->
         </section>
         <section class="pt-20 overflow-x-hidden h-fit px-10 md:px-20 space-y-20 md:space-y-32 pb-8 flex flex-col justify-center">
            <section class="relative py-5 h-fit flex flex-row flex-wrap items-start gap-10 lg:gap-5">
                  <div class="w-full sm:w-2/3 lg:w-twentyFivePercent space-y-4">
                     <h1 class="font-moderat font-bold text-3xl text-brandDarkGreen2x">300 million</h1>
                     <p class="font-moderat font-normal text-brandGray2x text-md">tonnes of waste generated globally are plastics</p>
                  </div>
                  <div class="w-full sm:w-2/3 lg:w-twentyFivePercent space-y-4">
                     <h1 class="font-moderat font-bold text-3xl text-brandDarkGreen2x">50%</h1>
                     <p class="font-moderat font-normal text-brandGray2x text-md">tonnes of plastic waste generated in Nigeria can be reused</p>
                  </div>
                  <div class="w-full sm:w-2/3 lg:w-twentyFivePercent space-y-4">
                     <h1 class="font-moderat font-bold text-3xl text-brandDarkGreen2x">100,000</h1>
                     <p class="font-moderat font-normal text-brandGray2x text-md">
                        shoppers using ShoppersBag App annually can save 38.4 tonnes of single-use plastic from entering the planet
                     </p>
                     <div class="font-moderat font-normal flex flex-row items-center gap-2">
                        <a href="https://play.google.com/store/apps/details?id=co.shoppersbag.shoppersbag" class="text-brandGreen1x text-sm underline">Get the App</a>
                        <svg class="-rotate-45" width="24" height="24" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M23.3981 9.7627L33.1354 19.5L23.3981 29.2373" stroke="#009933" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              <path opacity="0.4" d="M5.86459 19.5H32.8627" stroke="#009933" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </div>        
                  </div>
                  <div class="translate-x-20 sm:absolute -right-28 md:-right-20 top-2">
                     <a href="https://www.youtube.com/watch?v=825tVcsLE1I" target="_blank" class="flex flex-row items-center justify-center gap-3 w-60 sm:w-80 aspect-square rounded-fiftyPercent border border-brandGray26x">
                        <p class="font-avenirRegular text-brandPurple1x md:text-lg">Watch video</p>
                        <button type="button">                
                              <img src="./assets/images/icons/vuesax/play-cricle.svg" alt="play video" class="w-10 h-10">
                        </button>
                     </a>
                  </div>
            </section>
            <section class="mx-auto w-full space-y-8">
                  <img loading="lazy" src="./assets/images/icons/FactBG.010f11141.png" alt="fact" class="w-60px h-60px mx-auto">
                  <p class="text-center text-brandGreen1x font-avenirRegular text-xl max-w-md mx-auto">Trusted by brands and eco-friendly shopping bag producers serving 100,000+ shoppers</p>
            </section>
         </section>
         <section class="bg-brandGray3x py-28 px-tenPercent">
         <div class="flex flex-wrap md:grid grid-cols-4 flex-row justify-center items-center w-full gap-10">
            <div class="col-span-1 w-eightyPercent">
                  <img loading="lazy" src="./assets/images/eko-carbon.png" alt="eko-carbon">
            </div>
            <div class="col-span-1 w-eightyPercent">
                  <img loading="lazy" src="./assets/images/challenge-work.png" alt="challenge-work">
            </div>
            <div class="col-span-1 w-eightyPercent">
                  <img loading="lazy" src="./assets/images/propak.png" alt="propak">
            </div>
            <div class="col-span-1 w-eightyPercent">
                  <img loading="lazy" src="./assets/images/gov-ak.png" alt="gov-ak" class="max-w-160px mx-auto">
            </div>
         </div>
         </section>
         <section class="py-20 px-10 md:px-20 flex flex-col gap-10 items-center box-border h-fit ">
            <div class="font-avenirHeavy space-y-4 text-black text-center">
                  <h1 class="text-3xl lg:text-4xl">How ShoppersBag Works</h1>
                  <h3 class="text-base font-avenirRegular text-black max-w-xs md:max-w-xl" id="how_text">Use ShoppersBag to shop, earn and save the planet</h3>
            </div>
            <section class="w-full xl:px-20">
                  <div class="w-full overflow-x-auto md:w-ninetyPercent mx-auto lg:justify-center  flex flex-row pt-24 font-avenirHeavy text-black">
                     <button data-what-section="for_shoppers" class="how-tab tab-toggle-btn whitespace-nowrap px-5 md:px-10 md:w-fit border-b-4 border-brandBlue2x pb-3" type="button">For shoppers</button>
                     <button data-what-section="for_malls_and_stores" class="how-tab tab-toggle-btn whitespace-nowrap px-5 md:px-10 md:w-fit border-b-4 border-brandGray4x pb-3" type="button">For malls and stores</button>
                     <button data-what-section="for_eco_friendly" class="how-tab tab-toggle-btn whitespace-nowrap px-5 md:px-10 md:w-fit border-b-4 border-brandGray4x pb-3" type="button">For Eco-friendly Bag Producers</button>
                     <button data-what-section="for_brands" class="how-tab tab-toggle-btn whitespace-nowrap px-5 md:px-10 md:w-fit border-b-4 border-brandGray4x pb-3" type="button">For brands</button>
                  </div>
                  <main class="tab-wrap pt-20">
                     <!-- For shoppers section start -->
                     <section class="tab first:flex hidden flex-col-reverse lg:flex-row items-center w-full gap-10" id="for_shoppers">
                        <div class="slide-text-wrap w-full lg:w-fiftyPercent space-y-5 font-avenirLight mx-auto">
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGreen2x border border-brandGray4x rounded-twenty">Download ShoppersBag App & Register</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Locate Nearby Mall, Store, and Purchase ShoppersBag</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Scan QR Code to Activate ShoppersBag</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Connect with Eco-conscious Community in-App</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Shop and Gain Reward from Partnering Mall & Stores</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Participate in Brand Campaigns, in-Store, & Online Task to Earn Incentives </div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Share Experience on Social Media, Get More People to Use ShopperBag and Protect Our Planet</div>
                        </div>
                        <div class="w-fit lg:w-fiftyPercent pb-10 lg:pb-0">
                              <div class="relative mx-auto w-60 h-60 sm:w-80 sm:h-80 lg:h-auto lg:w-full aspect-square bg-brandBlue3x flex flex-col items-start lg:items-center lg:justify-center rounded-fiftyPercent">
                                 <div class="slide-length hidden absolute bottom-4 right-4 flex-row item-center gap-1 bg-black/50 text-white shadow-md rounded-thirty px-2 py-1 w-fit h-fit">
                                    <p class="current-slide">1</p>
                                 </div>
                                 <div class="lg:w-500px lg:h-500 slide-wrap flex flex-row items-start pt-10 justify-center">
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/shoppers/download-5621273-4673817 1.png" alt="download"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/shoppers/shopping-love-3025711-2526909 1.png" alt="locate"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/shoppers/template_uiux_icon_finance-03_4x 1.png" alt="qr code"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/shoppers/teamwork-4373085-3626708 1.png" alt="teamwork"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/shoppers/open-gift-box-surprise-earn-point-and-get-rewards-special-offer-concept-3d-rendering-illustration-png 1.png" alt="special offer"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/shoppers/cash-flow-4721295-3931549 1.png" alt="cash flow"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/shoppers/3d-illustration-of-social-media-icons-message-ok-search-like-icon-vector 1.png" alt="3d social icons"/>
                                 </div>
                                 <div class="absolute flex flex-row items-center gap-5 left-fiftyPercent -translate-x-fiftyPercent -bottom-12 lg:bottom-32 z-20">
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">app store</p>
                                          <img loading="lazy" src="./assets/images/icons/social/AppStore-green.png" alt="previous" class="">
                                    </a>
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">google play</p>
                                          <img loading="lazy" src="./assets/images/icons/social/GooglePlay-blue.png" alt="next" class="">
                                    </a>
                                 </div>
                                 <div class="slide-btn-wrap absolute flex flex-row items-center gap-10 left-fiftyPercent -translate-x-fiftyPercent bottom-6 lg:bottom-12 z-20">
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple2x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="backward">
                                          <p class="hidden">Previous</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-left.svg" alt="previous" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple3x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="forward">
                                          <p class="hidden">Next</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-right.svg" alt="next" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                 </div>
                              </div>
                        </div>
                     </section>
                     <!-- For shoppers section end -->

                     <!-- For malls and stores section start -->
                     <section class="tab first:flex hidden flex-col-reverse lg:flex-row items-center w-full gap-10" id="for_malls_and_stores">
                        <div class="slide-text-wrap w-full lg:w-fiftyPercent space-y-5 font-avenirLight mx-auto">
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGreen2x border border-brandGray4x rounded-twenty">Register on ShoppersBag as a Reseller Outlet</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Make Orders for ShoppersBag on App</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Scan 2D barcode to verify ShoppersBag usage in-store</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Manage eco-conscious customer's loyalty and rewards program</div>
                        </div>
                        <div class="w-fit lg:w-fiftyPercent pb-10 lg:pb-0">
                              <div class="relative mx-auto w-60 h-60 sm:w-80 sm:h-80 lg:h-auto lg:w-full aspect-square bg-brandYellow2x flex flex-col items-start lg:items-center lg:justify-center rounded-fiftyPercent">
                                 <div class="slide-length hidden absolute bottom-4 right-4 flex-row item-center gap-1 bg-black/50 text-white shadow-md rounded-thirty px-2 py-1 w-fit h-fit">
                                    <p class="current-slide">1</p>
                                 </div>
                                 <div class="lg:w-500px lg:h-500 slide-wrap flex flex-row items-start pt-10 justify-center">
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/malls-and-stores/minimal-cartoon-buy-sell-shop-store.png" alt="shop"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/malls-and-stores/online-shopping-3d-illustration.png" alt="phone"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/malls-and-stores/template_uiux_icon_finance-03_4x 1.png" alt="qr code"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/malls-and-stores/cash-flow-4721295-3931549 1.png" alt="cash flow"/>
                                 </div>
                                 <div class="absolute flex flex-row items-center gap-5 left-fiftyPercent -translate-x-fiftyPercent -bottom-12 lg:bottom-32 z-20">
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">app store</p>
                                          <img loading="lazy" src="./assets/images/icons/social/AppStore-green.png" alt="previous" class="">
                                    </a>
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">google play</p>
                                          <img loading="lazy" src="./assets/images/icons/social/GooglePlay-blue.png" alt="next" class="">
                                    </a>
                                 </div>
                                 <div class="slide-btn-wrap absolute flex flex-row items-center gap-10 left-fiftyPercent -translate-x-fiftyPercent  bottom-12 z-20">
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple2x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="backward">
                                          <p class="hidden">Previous</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-left.svg" alt="previous" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple3x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="forward">
                                          <p class="hidden">Next</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-right.svg" alt="next" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                 </div>
                              </div>
                        </div>
                     </section>
                     <!-- For malls and stores section end -->

                     <!-- For Eco-friendly Bag Producers section start -->
                     <section class="tab first:flex hidden flex-col-reverse lg:flex-row items-center w-full gap-10" id="for_eco_friendly">
                        <div class="slide-text-wrap w-full lg:w-fiftyPercent space-y-5 font-avenirLight mx-auto">
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGreen2x border border-brandGray4x rounded-twenty">Partner with ShoppersBag as an Eco-friendly Bag Producer</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Access to Receive ShoppersBag Supply Order from Brands, Malls & Stores for Distribution</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Integrates eco-friendly and reusable shopping bags to ShoppersBag Distribution system</div>
                        </div>
                        <div class="w-fit lg:w-fiftyPercent pb-10 lg:pb-0">
                              <div class="relative mx-auto w-60 h-60 sm:w-80 sm:h-80 lg:h-auto lg:w-full aspect-square bg-brandGreen3x flex flex-col items-start lg:items-center lg:justify-center rounded-fiftyPercent">
                                 <div class="slide-length hidden absolute bottom-4 right-4 flex-row item-center gap-1 bg-black/50 text-white shadow-md rounded-thirty px-2 py-1 w-fit h-fit">
                                    <p class="current-slide">1</p>
                                 </div>
                                 <div class="lg:w-500px lg:h-500 slide-wrap flex flex-row items-start pt-10 justify-center">
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/bag-producers/business-partnership-5706045-4755487 1.png" alt="business-partnership"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/bag-producers/giving-access-6753243-5528871 1.png" alt="giving-access"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/bag-producers/global-logistics-delivery-cargo-transportation-3d-illustration_68971-1359 1.png" alt="global-logistics"/>
                                 </div>
                                 <div class="absolute flex flex-row items-center gap-5 left-fiftyPercent -translate-x-fiftyPercent -bottom-12 lg:bottom-32 z-20">
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">app store</p>
                                          <img loading="lazy" src="./assets/images/icons/social/AppStore-green.png" alt="previous" class="">
                                    </a>
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">google play</p>
                                          <img loading="lazy" src="./assets/images/icons/social/GooglePlay-blue.png" alt="next" class="">
                                    </a>
                                 </div>
                                 <div class="slide-btn-wrap absolute flex flex-row items-center gap-10 left-fiftyPercent -translate-x-fiftyPercent  bottom-12 z-20">
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple2x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="backward">
                                          <p class="hidden">Previous</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-left.svg" alt="previous" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple3x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="forward">
                                          <p class="hidden">Next</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-right.svg" alt="next" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                 </div>
                              </div>
                        </div>
                     </section>
                     <!-- For Eco-friendly Bag Producers section end -->
                     <!-- For brands section start -->
                     <section class="tab first:flex hidden flex-col-reverse lg:flex-row items-center w-full gap-10" id="for_brands">
                        <div class="slide-text-wrap w-full lg:w-fiftyPercent space-y-5 font-avenirLight mx-auto">
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGreen2x border border-brandGray4x rounded-twenty">Partner with ShoppersBag to drive Sustainability in the Retail Value Chain</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Order for Branded Bags for Distribution to Staff and Customers</div>
                              <div class="first:text-white text-black slide-text cursor-pointer py-4 px-10 bg-brandGray5x border border-brandGray4x rounded-twenty">Setup Campaign and Incentives to Drive ShoppersBag usage, and Encourage a Sustainability Lifestyle among your Staff and Customers</div>
                        </div>
                        <div class="w-fit lg:w-fiftyPercent pb-10 lg:pb-0">
                              <div class="relative mx-auto w-60 h-60 sm:w-80 sm:h-80 lg:h-auto lg:w-full aspect-square bg-brandRed3x flex flex-col items-start lg:items-center lg:justify-center rounded-fiftyPercent">
                                 <div class="slide-length hidden absolute bottom-4 right-4 flex-row item-center gap-1 bg-black/50 text-white shadow-md rounded-thirty px-2 py-1 w-fit h-fit">
                                    <p class="current-slide">1</p>
                                 </div>
                                 <div class="lg:w-500px lg:h-500 slide-wrap flex flex-row items-start pt-10 justify-center">
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/brands/business-partnership-5706045-4755487 1.png" alt="business-partnership"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/brands/delivery-scooter-5815003-4874075 1.png" alt="delivery-scooter"/>
                                    <img class="first:block hidden slides max-h-410 w-seventyPercent" src="./assets/images/icons/brands/open-gift-box-surprise-earn-point-and-get-rewards-special-offer-concept-3d-rendering-illustration-png 1.png" alt="special-offer"/>
                                 </div>
                                 <div class="absolute flex flex-row items-center gap-5 left-fiftyPercent -translate-x-fiftyPercent -bottom-12 lg:bottom-32 z-20">
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">app store</p>
                                          <img loading="lazy" src="./assets/images/icons/social/AppStore-green.png" alt="previous" class="">
                                    </a>
                                    <a href="#" class="w-28 max-w-160px rounded-fifty flex flex-row items-center justify-center">
                                          <p class="hidden">google play</p>
                                          <img loading="lazy" src="./assets/images/icons/social/GooglePlay-blue.png" alt="next" class="">
                                    </a>
                                 </div>
                                 <div class="slide-btn-wrap absolute flex flex-row items-center gap-10 left-fiftyPercent -translate-x-fiftyPercent  bottom-12 z-20">
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple2x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="backward">
                                          <p class="hidden">Previous</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-left.svg" alt="previous" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                    <button type="button" class="h-8 lg:h-14 w-8 lg:w-14 bg-brandPurple3x rounded-fifty flex flex-row items-center justify-center slide-btn" data-slide-control="forward">
                                          <p class="hidden">Next</p>
                                          <img loading="lazy" src="./assets/images/icons/vuesax/arrow-right.svg" alt="next" class="h-6 lg:h-9 w-6 lg:w-9">
                                    </button>
                                 </div>
                              </div>
                        </div>
                     </section>
                     <!-- For brands section end -->
                  </main>
            </section>
            <a href="#" class="bg-brandBlue1x rounded-sixty text-white mx-auto text-sm sm:text-base text-center py-4 px-5 md:px-12 font-avenirHeavy" id="how_cta">Start Earning rewards from your favorite brands</a>
         </section>
         <section class="relative bg-brandGray7x py-32 px-10 lg:px-20 flex flex-col md:flex-row gap-10 items-start">
            <section class="md:w-thirtyFivePercent lg:w-fortyPercent space-y-10">
                  <h1 class="text-center md:text-left text-3xl lg:text-5xl font-milligramBold700 text-brandDarkGreen2x">Why ShoppersBag?</h1>
                  <p class="text-center md:text-left font-avenirRegular md:text-lg lg:text-2xl text-brandGray8x">
                     ShoppersBag is an enabler of reusable and recyclable shopping bags in the retail value chain. Wherever it is adopted by eco-friendly bag producers, retail stores, brands, and shoppers, it promotes sustainability and circularity.
                  </p>
            </section>
            <section class="w-full md:w-sixtyFivePercent lg:w-sixtyPercent flex flex-col">
                  <div class="w-full overflow-x-scroll lg:overflow-x-hidden gap-5 md:gap-0 mx-auto flex flex-row font-avenirHeavy text-black">
                     <button data-what-section="environment" class="why-tab md:text-sm whitespace-nowrap px-10 text-base py-6 tab-toggle-btn md:w-fit bg-black hover:rounded-hundred hover:bg-brandGray9x hover:text-brandGray8x rounded-hundred text-white" type="button">Environment</button>
                     <button data-what-section="economic" class="why-tab md:text-sm whitespace-nowrap px-10 text-base py-6 tab-toggle-btn md:w-fit text-black hover:rounded-hundred hover:bg-brandGray9x hover:text-brandGray8x" type="button">Economic</button>
                     <button data-what-section="social" class="why-tab md:text-sm whitespace-nowrap px-10 text-base py-6 tab-toggle-btn md:w-fit text-black hover:rounded-hundred hover:bg-brandGray9x hover:text-brandGray8x" type="button">Social</button>
                     <button data-what-section="tech_driven" class="why-tab md:text-sm whitespace-nowrap px-10 text-base py-6 tab-toggle-btn md:w-fit text-black hover:rounded-hundred hover:bg-brandGray9x hover:text-brandGray8x" type="button">Tech-driven</button>
                  </div>
                  <main class="tab-wrap pt-10">
                     <!-- environment section start -->
                     <section class="tab first:flex hidden w-full" id="environment">
                        <div class="bg-brandGray9x rounded-forty w-full space-y-3 pb-20">
                              <img loading="lazy" src="./assets/images/icons/why-shoppers-bag/earth.png" alt="earth" class="max-w-2xl w-seventyPercent mx-auto">
                              <p class="text-center text-xl md:text-2xl font-avenirRegular px-5 md:px-20">
                                 Reducing single-use plastic waste and promoting an environment that is safe from plastic pollution
                              </p>
                        </div>
                     </section>
                     <!-- environment section end -->

                     <!-- economic section start -->
                     <section class="tab first:flex hidden w-full" id="economic">
                        <div class="bg-brandPeach2x rounded-forty w-full space-y-3 pb-20">
                              <img loading="lazy" src="./assets/images/icons/why-shoppers-bag/cash-man.png" alt="man and cash" class="max-w-2xl w-seventyPercent mx-auto">
                              <p class="text-center text-xl md:text-2xl font-avenirRegular px-5 md:px-20">
                                 Improved livelihoods of women and girls through production of ShoppersBag, and participation in the circular economy</p>
                        </div>
                     </section>
                     <!-- economic section end -->

                     <!-- social section start -->
                     <section class="tab first:flex hidden w-full" id="social">
                        <div class="bg-white rounded-forty w-full space-y-3 pb-20">
                              <img loading="lazy" src="./assets/images/icons/why-shoppers-bag/shopping-bag-discount.png" alt="man and cash" class="max-w-2xl w-seventyPercent mx-auto">
                              <p class="text-center text-xl md:text-2xl font-avenirRegular px-5 md:px-20">
                                 Establishing incentive-based behavioral change for shoppers in reducing the consumption of single-use plastic</div>
                     </section>
                     <!-- social section end -->

                     <!-- tech_driven section start -->
                     <section class="tab first:flex hidden w-full" id="tech_driven">
                        <div class="bg-brandBlue4x rounded-forty w-full space-y-3 pb-20">
                              <img loading="lazy" src="./assets/images/icons/why-shoppers-bag/astronauts.png" alt="man and cash" class="max-w-2xl w-seventyPercent mx-auto">
                              <p class="text-center text-xl md:text-2xl font-avenirRegular px-5 md:px-20">
                                 Scalable with technology
                              </p>
                        </div>
                     </section>
                     <!-- tech_driven section end -->
                  </main>
            </section>
            <div class="absolute w-thirtyFivePercent -left-28 bottom-10">
                  <img loading="lazy" src="./assets/images/patterns/HeroSectionLeftShapes.61b72bd3 1.png" alt="">
            </div>
         </section>
         <section class="px-5 sm:px-10 md:px-20 py-20 ">
            <main class="relative rounded-hundred bg-brandDarkGreen1x px-2 md:px-24 py-20 h-fit flex flex-col gap-6 text-center">
                  <h1 class="font-milligramBold700 text-white text-3xl md:text-6xl">Want to try <a  href="#" class="text-brandGreen1x underline">ShoppersBag</a>?</h1>
                  <p class="font-avenirLight text-xl md:text-3xl text-white">Now it's <span class="text-brandGreen1x">time</span> to imbibe a <span class="text-brandPurple1x">sustainable</span> lifestyle</p>
                  <div class="flex flex-row items-center gap-5 mx-auto py-3">
                     <a href="#" class="w-20 md:w-40">                
                        <img loading="lazy" src="./assets/images/icons/social/AppStore.png" alt="app store">
                     </a>
                     <a href="https://play.google.com/store/apps/details?id=co.shoppersbag.shoppersbag" class="w-20 md:w-40">                
                        <img loading="lazy" src="./assets/images/icons/social/GooglePlay-purple.png" alt="app store">
                     </a>
                  </div>
                  <p class="w-ninetyFivePercent sm:w-full font-avenirLight text-base md:text-xl text-white">You earn rewards whenever you scan QR code to activate your shopping bag</p>
            </main>
         </section>
         <h1 class="font-milligramBold700 text-black text-3xl md:text-6xl text-center pb-10">KEY METRICS</h1>
         <section class="w-full text-center grid grid-rows-2 auto-rows-fr auto-cols-fr px-2 md:px-20 divide-y divide-brandGray10x">
            <div class=" grid grid-cols-3 w-full auto-cols-fr auto-rows-fr divide-x divide-brandGray10x">
               <div class="w-full px-2 sm:pl-5 py-10 sm:py-20 space-y-2">
                  <h1 class='font-avenirHeavy text-xl sm:text-2xl md:text-3xl lg:text-5xl pb-tenPixel text-center'>6,500</h1>
                  <p class='font-avenirRegular text-sm sm:text-base md:text-xl lg:text-2xl'>Number of</p>
                  <h1 class='font-avenirHeavy text-sm sm:text-base md:text-xl lg:text-2xl'>ShoppersBag in Circulation</h1>
               </div>
               <div class="w-full px-2 sm:pl-5 py-10 sm:py-20 space-y-2">
                  <h1 class='font-avenirHeavy text-xl sm:text-2xl md:text-3xl lg:text-5xl pb-tenPixel text-center'>20</h1>
                  <p class='font-avenirRegular text-sm sm:text-base md:text-xl lg:text-2xl'>Number of</p>
                  <h1 class='font-avenirHeavy text-sm sm:text-base md:text-xl lg:text-2xl'>Partnering Stores</h1>
               </div>
               <div class="w-full px-2 sm:pl-5 py-10 sm:py-20 space-y-2">
                  <h1 class='font-avenirHeavy text-xl sm:text-2xl md:text-3xl lg:text-5xl pb-tenPixel text-center'>70</h1>
                  <p class='font-avenirRegular text-sm sm:text-base md:text-xl lg:text-2xl'>Number of</p>
                  <h1 class='font-avenirHeavy text-sm sm:text-base md:text-xl lg:text-2xl'>Women and Girls Impacted</h1>
               </div>
            </div>
            <div class="grid grid-cols-3 w-full auto-cols-fr auto-rows-fr divide-x divide-brandGray10x">
                  <div class="w-full px-2 sm:pl-5 py-10 sm:py-20 space-y-2">
                     <h1 class='font-avenirHeavy text-xl sm:text-2xl md:text-3xl lg:text-5xl pb-tenPixel text-center'>1.6 tons</h1>
                     <p class='font-avenirRegular text-sm sm:text-base md:text-xl lg:text-2xl'>Number of</p>
                     <h1 class='font-avenirHeavy text-sm sm:text-base md:text-xl lg:text-2xl'>Single-use Plastic Reduction</h1>
                  </div>
                  <div class="w-full px-2 sm:pl-5 py-10 sm:py-20 space-y-2">
                     <h1 class='font-avenirHeavy text-xl sm:text-2xl md:text-3xl lg:text-5xl pb-tenPixel text-center'>15</h1>
                     <p class='font-avenirRegular text-sm sm:text-base md:text-xl lg:text-2xl'>Number of</p>
                     <h1 class='font-avenirHeavy text-sm sm:text-base md:text-xl lg:text-2xl'>Eco-friendly Bag Producers</h1>
                  </div>
                  <div class="w-full px-2 sm:pl-5 py-10 sm:py-20 space-y-2">
                     <h1 class='font-avenirHeavy text-xl sm:text-2xl md:text-3xl lg:text-5xl pb-tenPixel text-center'>11</h1>
                     <p class='font-avenirRegular text-sm sm:text-base md:text-xl lg:text-2xl'>Number of</p>
                     <h1 class='font-avenirHeavy text-sm sm:text-base md:text-xl lg:text-2xl'>Partnering Brands</h1>
                  </div>
            </div>
         </section>
         <section class="px-10 md:px-20 pt-28 md:pt-40 mx-auto w-full lg:w-seventyPercent" >
            <h1 class="font-avenirHeavy text-center text-2xl md:text-4xl">Frequently Asked Questions</h1>
            <main class="py-16" id="index_faq_wrap">
               
            </main>
            <div class="w-full text-right">
                  <a href="./faq" class="text-brandRed1x text-base md:text-xl font-avenirHeavy underline text-right w-fit">FIND MORE ANSWERS</a>
            </div>
         </section>
      </main>
      <?php include_once './widgets/footer.php'; ?>
   <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./assets/js/tabs.js"></script>
    <script src="./assets/js/slides.js"></script>
    <script src="./assets/js/accordion_faq.js"></script>
    <script src="./assets/js/nav.js"></script>
    <script src="./assets/js/text.js"></script>
   </body>
</html>
