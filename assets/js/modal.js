var player;
var currentTime;

function storeCurrentTime() {
    if (player) {
      currentTime = player.getCurrentTime();
    }
}

function onYouTubeIframeAPIReady() {
  player = new YT.Player('iframe_video', {
    height: '315',
    width: '100%',
    videoId: '825tVcsLE1I',
    events: {
      'onReady': onPlayerReady,
    //   'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady() {
    player.pauseVideo();
}
  
//   function onPlayerStateChange(event) {
//     if (event.data === YT.PlayerState.PLAYING) {
//       console.log("Video is playing");
//     }
//   }

$('.modal-closer').each(function() {
    $(this).on('click', function() {
       let closer = $(this)
       if(closer.attr('data-modal-close') == 'youtube_modal'){
            storeCurrentTime()
            player.pauseVideo()
        }
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
            let name = about_person.split('-')[0]
            let about_personality = opener.children('.about-personality').html()
            $('#about_person_modal').html(about_person)
            $('#about_snippet_modal').html(about_snippet)
            $('#about_name_modal').html(name)
            $('#about_personality_modal').html(about_personality)
            $('#about_img_modal').attr('src', about_img)
            $('#about_linkedin_modal').attr('href', about_linkedin)
        }else if(opener.attr('data-modal') == 'youtube_modal'){
            if(currentTime > 0){
                player.seekTo(currentTime)
                player.pauseVideo()
            }
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



