let current_slide;
let current_text;

$('.slide-btn').each(function(){
    $(this).on('click', function(){
        let move = $(this).attr('data-slide-control')
        current_slide = $(this).parents('.slide-btn-wrap').siblings('.slide-length').children('.current-slide')
        current_text = parseInt(current_slide.html(), 10)
        if (move == 'forward'){
            current_text += 1;
        }
        else if (move == 'backward'){
            current_text += -1;
        }
        let slide_wrap = $(this).parents('.slide-btn-wrap').siblings('.slide-wrap')
        let slides = slide_wrap.children('.slides')
        // let dot = $(this).parent('div').siblings('.slide-dots-wrap').children('.slide-dots') 
        if (current_text > (slides.length)) {current_text = 1}
        if (current_text < 1) {current_text = slides.length}
        for(let i = 0; i < slides.length; i++)
        {
            slides[i].style.display = 'none'
        }
        let slide_text = $(this).parents('.slide-btn-wrap')
        .parents('div')
        .parents('div')
        .siblings('.slide-text-wrap')
        .children('.slide-text')
        for(let i = 0; i < slides.length; i++)
        {
            slide_text[i].style.backgroundColor = '#F5F5F5'
            slide_text[i].style.color = '#000000'
        }
        slides[current_text-1].style.display = 'block'; 
        slide_text[current_text-1].style.backgroundColor = '#2DA771'; 
        slide_text[current_text-1].style.color = '#FFFFFF'; 
        

        current_slide.html(current_text)
        })
})

$('.slide-text-wrap').each(function(){
   let text =  $(this).children('.slide-text')
   let images = $(this).siblings('div').children('div').children('.slide-wrap').children('.slides')
   text.on('click', function(){
        current_slide = $(this).parent('.slide-text-wrap').siblings('div').children('div').children('.slide-length').children('.current-slide')
        current_text = parseInt($(this).index(), 10)
        let currentPlusOne = current_text + 1
        current_slide.html(currentPlusOne)
        for(let i = 0; i < text.length; i++){
            text[i].style.backgroundColor = '#F5F5F5'
            text[i].style.color = '#000000'
            images[i].style.display = 'none'
        }
        text[current_text].style.backgroundColor = '#2DA771'; 
        text[current_text].style.color = '#FFFFFF'; 
        images[current_text].style.display = 'block'
   })

})













var x = document.getElementsByClassName("slides-img");
var dot = document.getElementsByClassName("dots");
var impact_slide_text = document.getElementsByClassName('impact-slide-text')

// let slideImg = document.getElementsByClassName('slideimg')

var index = 1;
myShows(index)

// function myClick(n){
//    myShows(index += n)
// }

function myCurrent(n){
   myShows(index = n)
}


setInterval(() => {
    index++
    myShows(index)
}, 10000);



function myShows(){
   if (index > (x.length)) {index = 1}
   if (index < 1) {index = x.length}
   console.log(index-1)
   for(let i = 0; i < x.length; i++)
   {
    x[i].style.display = 'none'
   }
   x[index-1].style.display = 'block';
   for(let i = 0; i < dot.length; i++)
   {
      dot[i].style.backgroundColor = ''
   }
   dot[index-1].style.backgroundColor = '#123845'
   for(let i = 0; i < impact_slide_text.length; i++)
   {
      impact_slide_text[i].style.display = 'none'
   }
   impact_slide_text[index-1].style.display = 'flex'
   
   
}







