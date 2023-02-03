<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/css/tailwind.css">
      <link rel="stylesheet" href="./assets/css/fonts.css">
      <link rel="shortcut icon" href="./assets/images/logos/logo-round.png" type="image/x-icon">
      <title>Shoppers Bag | Waitlist</title>
   </head>
   <body class="box-border overflow-x-hidden bg-brandGray3x font-avenirRegular" data-what-page='impact'>
      <?php 
      include_once './widgets/header.php';
      ?>
      <section class="pb-20 md:pb-40 pt-10 md:pt-20 px-5 sm:px-10 md:px-20 h-fit">
        <form action="" method="post" class="rounded-fifty bg-brandPeach3x text-sm md:text-base w-ninetyPercent max-w-lg lg:w-sixtyPercent lg:max-w-2xl px-5 sm:px-10 md:px-20 py-10 mx-auto space-y-5 sm:space-y-8 md:space-y-10">
            <h1 class="font-avenirHeavy text-center text-2xl lg:text-3xl">Join ShoppersBag Waitlist</h1>
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
                <label for="gender" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                    Select Your Gender
                    <select name="gender" id="gender" class="text-brandGray29x focus:outline-none">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="not-saying">Prefer not to say</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="country" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                    Select Your Country
                    <select name="country" id="country" class="text-brandGray29x focus:outline-none">
                        <option value="NGN">Nigeria</option>
                        <option value="GH">Ghana</option>
                        <option value="ZA">South Africa</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="businessType" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                    Select Your Business Type
                    <select name="business-type" id="businessType" class="text-brandGray29x focus:outline-none">
                        <option value="Distributors ">Distributors </option>
                        <option value="Producers">Producers</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="address" class="rounded-ten bg-white border-0.5 border-brandGray27x w-full text-brandGray28x flex flex-col px-5 md:px-8 gap-1 md:gap-2 py-2 md:py-4 focus-within:outline focus-within:outline-1 focus-within:outline-brandGreen2x">
                    Enter Your Business Address
                    <input type="text"  name="address" id="address" placeholder="123 ABC Address, Nigeria" class="placeholder:text-brandGray29x focus:outline-none text-black"></input>
                </label>
            </div>
            <div class="flex justify-end">
                <button class="bg-brandGreen4x w-fit rounded-fifty py-2 md:py-4 px-5 sm:px-10 text-white text-sm sm:text-lg md:text-xl hover:scale-90 hover:shadow-sm transition-all duration-500 ease-in-out">Submit Application</button>
            </div>
        </form>
`   </section>
      
      <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="./assets/js/tabs.js"></script> -->
    <script src="./assets/js/slides.js"></script>
    <!-- <script src="./assets/js/accordion_faq.js"></script> -->
    <script src="./assets/js/nav.js"></script>
   </body>
</html>
