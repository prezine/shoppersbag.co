let toggle_menu = () => $('#hamburger').on('click', function(){
    $(this).children('.ham-two').toggleClass('float-right')
    let body_color = $('body').css('background-color')
    $('#nav_menu').toggleClass('hidden -right-hundredPercent').toggleClass('right-0').css('background-color', body_color)
})

toggle_menu()