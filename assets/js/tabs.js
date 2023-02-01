$('.tab-toggle-btn').each(function(){
    $(this).on('click', function(){
        let current_tab = $(this).attr('data-what-section')
        $(this).parent('div').next('.tab-wrap').children('.tab').css('display', 'none')
        $('#'+current_tab).css('display', 'flex')
        if ($(this).hasClass('how-tab')){
            $('.how-tab').css('border-color', '#F2F2F2')
            $(this).css('border-color', '#00A1FF')
            if(current_tab == 'for_shoppers'){
                $('#how_text').html('Use ShoppersBag to shop, earn and save the planet')
                $('#how_cta').html('Download ShoppersBag App to Start Earning Rewards')
            }else if(current_tab == 'for_malls_and_stores'){
                $('#how_text').html('Use ShoppersBag to increase customer engagement, loyalty, and store revenue')
                $('#how_cta').html('Register to Become A Reseller')
            }else if(current_tab == 'for_eco_friendly'){
                $('#how_text').html('Use ShoppersBag Distribution System to meet eco-friendly bag demands for customers')
                $('#how_cta').html('Register To Receive your First Order')
            }else if(current_tab == 'for_brands'){
                $('#how_text').html('Use ShoppersBag')
                $('#how_cta').html('Register to Launch Reusable Shopping Bag Campaign')
            }
        }
        if ($(this).hasClass('why-tab')){
            $('.why-tab').css({
                'background-color': 'transparent',
                'color':'#000000',
                'border-radius':'none',
            }).addClass('hover:rounded-hundred hover:bg-brandGray9x hover:text-brandGray8x')
            $(this).css({
                'background-color': '#000000',
                'color':'#FFFFFF',
                'border-radius':'100px',
            }).addClass('hover:rounded-hundred hover:bg-brandGray9x hover:text-brandGray8x')
        }
    })
})