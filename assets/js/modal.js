$('.modal-closer').each(function() {
    $(this).on('click', function() {
       let closer = $(this)
       closeModal(closer)
    })
})

$('.modal-opener').each(function(){
    $(this).on('click', function() {
        let opener = $(this)
        if(opener.attr('data-modal') == 'about_modal'){
            let about_person = opener.children('.about-person').html() 
            let about_snippet = opener.children('.about-snippet').html() 
            let about_img = opener.children('img').attr('src') 
            let about_linkedin = opener.children('.about-linkedin').html()
            $('#about_person_modal').html(about_person)
            $('#about_snippet_modal').html(about_snippet)
            $('#about_img_modal').attr('src', about_img)
            $('#about_linkedin_modal').attr('href', about_linkedin)
        }
        openModal(opener)
    })
})


function openModal(opener){
    $('body').addClass('overflow-y-hidden max-h-screen')
    $('body').css({
        "max-height": "100vh",
        "overflow-y": "hidden",
    })
    let current_modal = $(opener).attr('data-modal')
    // alert(current_modal)
    $('#' + current_modal).addClass('flex')
    $('#' + current_modal).removeClass('hidden')
}


function closeModal(closer){
    let current_modal = closer.attr('data-modal-close')
    // alert(current_modal)
    $('body').removeClass('overflow-y-hidden max-h-screen')
    $('body').css({
        "max-height": "none",
        "overflow-y": "auto"
    })
    $('#' + current_modal).removeClass('flex')
    $('#' + current_modal).addClass('hidden')
}
