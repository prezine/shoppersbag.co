let toggle_menu = () => $('#hamburger').on('click', function(){
    $(this).children('.ham-two').toggleClass('float-right')
    let body_color = $('body').css('background-color')
    $('#nav_menu').css('background-color', body_color)
    if($('#nav_menu').hasClass('-right-hundredPercent')){
        $('#nav_menu').removeClass('hidden')
        $('#nav_menu').animate({
            right: '0',
        }, 250)
        setTimeout(() => {
            $('#nav_menu').removeClass('-right-hundredPercent').addClass('right-0').css('background-color', body_color)
        }, 250);
    }else{
        $('#nav_menu').animate({
            right: '-=100%',
        }, 250)
        setTimeout(() => {
            $('#nav_menu').addClass('hidden -right-hundredPercent').removeClass('right-0').css('background-color', body_color)
        }, 250);
    }

})

toggle_menu()

$(document).on('click',function(e){
    if(!(($(e.target).closest('.filter').length > 0 ) || ($(e.target).closest('#hamburger').length > 0))){
        $('#nav_menu').animate({
            right: '-100%'
        }, 250)
        setTimeout(() => {
        $('#nav_menu').addClass('hidden -right-hundredPercent').removeClass('right-0')
        $('.ham-two').removeClass('float-right').addClass('float-left')
       }, 250);
   }
});