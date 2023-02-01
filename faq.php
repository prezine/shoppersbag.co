<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/css/tailwind.css">
      <link rel="stylesheet" href="./assets/css/fonts.css">
      <link rel="shortcut icon" href="./assets/images/logos/logo-round.png" type="image/x-icon">
      <title>Shoppers Bag | FAQ</title>
   </head>
   <body class="box-border bg-white" data-what-page='faq'>
        <?php include_once './widgets/header.php'; ?>
        <main class="overflow-x-hidden">
            <section class="px-10 md:px-20 py-16 md:py-20 mx-auto w-full space-y-5 lg:w-seventyPercent" >
                <p class="text-brandGray17x text-lg sm:text-xl font-avenirRegular text-center">FAQs</p>
                <h1 class="font-avenirHeavy text-center text-2xl sm:text-4xl">Frequently Asked Questions</h1>
                <p class="text-brandGray17x text-lg sm:text-xl font-avenirRegular text-center">Have a question? We're here to help</p>
                <div class="w-full sm:w-eightyPercent mx-auto py-5">
                    <label for="search_faq" class="w-fit relative rounded-ten">
                        <input type="search" name="search-faq" id="search_faq" placeholder="Search Questions" class="rounded-ten placeholder:text-lg placeholder:sm:text-xl border border-brandGray20x texl-xl placeholder:text-brandGray19x font-avenirRegular bg-brandGray18x py-4 md:py-6 pl-7 w-full">
                        <svg class="cursor-pointer absolute right-5 top-fiftyPercent -translate-y-fiftyPercent w-6 h-6 sm:w-9 sm:h-9" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="search-lamp-path-1" opacity="0.4" d="M18.0001 11.835L16.3951 14.625C16.0351 15.24 16.3351 15.75 17.0401 15.75H18.9451C19.6651 15.75 19.9501 16.26 19.5901 16.875L18.0001 19.665" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="search-lamp-path-2" d="M12.45 27.06V25.32C9.00004 23.235 6.16504 19.17 6.16504 14.85C6.16504 7.425 12.99 1.605 20.7 3.285C24.09 4.035 27.06 6.285 28.605 9.39C31.74 15.69 28.44 22.38 23.595 25.305V27.045C23.595 27.48 23.76 28.485 22.155 28.485H13.89C12.24 28.5 12.45 27.855 12.45 27.06Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="search-lamp-path-3" opacity="0.4" d="M12.75 33C16.185 32.025 19.815 32.025 23.25 33" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </label>
                    <section class="search-message pt-4">
                    
                    </section>
                </div>
                <main class="py-2 md:py-5 w-full mx-auto" id="faq_wrap">
                    <!-- <div class="w-full h-fit py-5 border-b border-brandGray11x">
                        <div class="accordion-header flex flex-row items-center justify-between">
                            <h1 class="font-avenirHeavy text-black text-xl">Can I scan QR codes on shopping bags to activate them?</h1>
                            <button data-accordion="closed" type="button" class="accordion-btn">
                                <img loading="lazy" src="./assets/images/icons/vuesax/add-circle.svg" alt="open">
                            </button>
                        </div>
                        <div class="accordion-content text-brandGray12x font-avenirRegular text-lg pt-5 hidden">
                            <p>Yes, you can, Infact it is possible to also scan the QR Code from each shopping back with or without our App, we are that flexible.</p>
                        </div>
                    </div>
                    <div class="w-full h-fit py-5 border-b border-brandGray11x">
                        <div class="accordion-header flex flex-row items-center justify-between">
                            <h1 class="font-avenirHeavy text-black text-xl">What is the ecological advantage of eco-friendly bags over plastic bags?</h1>
                            <button data-accordion="closed" type="button" class="accordion-btn">
                                <img loading="lazy" src="./assets/images/icons/vuesax/add-circle.svg" alt="open">
                            </button>
                        </div>
                        <div class="accordion-content text-brandGray12x font-avenirRegular text-lg pt-5 hidden">
                            <p>Yes, you can, Infact it is possible to also scan the QR Code from each shopping back with or without our App, we are that flexible.</p>
                        </div>
                    </div>
                    <div class="w-full h-fit py-5 border-b border-brandGray11x">
                        <div class="accordion-header flex flex-row items-center justify-between">
                            <h1 class="font-avenirHeavy text-black text-xl">How do I earn from the ShoppersBag App?</h1>
                            <button data-accordion="closed" type="button" class="accordion-btn">
                                <img loading="lazy" src="./assets/images/icons/vuesax/add-circle.svg" alt="open">
                            </button>
                        </div>
                        <div class="accordion-content text-brandGray12x font-avenirRegular text-lg pt-5 hidden">
                            <p>Yes, you can, Infact it is possible to also scan the QR Code from each shopping back with or without our App, we are that flexible.
                                Thanks.
                            </p>
                        </div>
                    </div>
                    <div class="w-full h-fit py-5 border-b border-brandGray11x">
                        <div class="accordion-header flex flex-row items-center justify-between">
                            <h1 class="font-avenirHeavy text-black text-xl">What kind of rewards can I earn with ShoppersBag?</h1>
                            <button data-accordion="closed" type="button" class="accordion-btn">
                                <img loading="lazy" src="./assets/images/icons/vuesax/add-circle.svg" alt="open">
                            </button>
                        </div>
                        <div class="accordion-content text-brandGray12x font-avenirRegular text-lg pt-5 hidden">
                            <p>Yes, you can, Infact it is possible to also scan the QR Code from each shopping back with or without our App, we are that flexible.</p>
                        </div>
                    </div>
                    <div class="w-full h-fit py-5 border-b border-brandGray11x">
                        <div class="accordion-header flex flex-row items-center justify-between">
                            <h1 class="font-avenirHeavy text-black text-xl">Who gives out the rewards I earn from ShoppersBag?</h1>
                            <button data-accordion="closed" type="button" class="accordion-btn">
                                <img loading="lazy" src="./assets/images/icons/vuesax/add-circle.svg" alt="open">
                            </button>
                        </div>
                        <div class="accordion-content text-brandGray12x font-avenirRegular text-lg pt-5 hidden">
                            <p>Yes, you can, Infact it is possible to also scan the QR Code from each shopping back with or without our App, we are that flexible.</p>
                        </div>
                    </div>
                    <div class="w-full h-fit py-5 border-b border-brandGray11x">
                        <div class="accordion-header flex flex-row items-center justify-between">
                            <h1 class="font-avenirHeavy text-black text-xl"> How can I know reusable shopping bags I can scan with ShoppersBag?</h1>
                            <button data-accordion="closed" type="button" class="accordion-btn">
                                <img loading="lazy" src="./assets/images/icons/vuesax/add-circle.svg" alt="open">
                            </button>
                        </div>
                        <div class="accordion-content text-brandGray12x font-avenirRegular text-lg pt-5 hidden">
                            <p>Yes, you can, Infact it is possible to also scan the QR Code from each shopping back with or without our App, we are that flexible.</p>
                        </div>
                    </div>
                    <div class="w-full h-fit py-5 border-b border-brandGray11x">
                        <div class="accordion-header flex flex-row items-center justify-between">
                            <h1 class="font-avenirHeavy text-black text-xl">Is ShoppersBag available on Apple & Google Play Store?</h1>
                            <button data-accordion="closed" type="button" class="accordion-btn">
                                <img loading="lazy" src="./assets/images/icons/vuesax/add-circle.svg" alt="open">
                            </button>
                        </div>
                        <div class="accordion-content text-brandGray12x font-avenirRegular text-lg pt-5 hidden">
                            <p>Yes, you can, Infact it is possible to also scan the QR Code from each shopping back with or without our App, we are that flexible.</p>
                        </div>
                    </div> -->
                </main>
            </section>
            <section class="bg-brandGray3x py-16 md:py-24 px-10 md:px-20 space-y-10">
                <div class="relative w-fit h-fit flex flex-row items-center justify-center gap-8 sm:gap-12 md:gap-16 mx-auto">
                    <img src="./assets/images/avatars/avatar-pink.png" alt="avatar" class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24">
                    <img src="./assets/images/avatars/avatar-blue.png" alt="avatar" class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24">
                    <img src="./assets/images/avatars/avatar-green.png" alt="avatar" class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 absolute top-fiftypercent -translate-x-fiftyPercent left-fiftyPercent">
                </div>
                <div class="space-y-2">
                    <h1 class="font-avenirHeavy text-center text-2xl sm:text-4xl">Still have questions?</h1>
                    <p class="text-brandGray17x text-base sm:text-xl font-avenirRegular text-center">Can't find answers you're looking for? Chat with Rozie from ShoppersBag</p>
                </div>
            </section>
        </main>
      <?php include_once './widgets/footer.php'; ?>
      <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./assets/js/tabs.js"></script>
    <script src="./assets/js/slides.js"></script>
    <script src="./assets/js/accordion_faq.js"></script>
    <script src="./assets/js/nav.js"></script>
    <script src="./assets/js/search.js"></script>
   </body>
</html>