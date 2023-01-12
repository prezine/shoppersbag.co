function showUserCategoryDetail(event){
    document.querySelectorAll(".users-category-detail").forEach(function(userCat){
        userCat.classList.remove('showing')
    })
    // const userCategorySelector = document.querySelector('#users-categories');

    const targetId = event.target.value;
    console.log(targetId)
    document.querySelector("#"+targetId).classList.add('showing');
}

// navs and tabs animation

const triggerTabList = document.querySelectorAll('#myTab button')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
})

// reuseable animation

const txts=document.querySelector(".animate-text").children,
txtsLen=txts.length;

let index=0;
const textInTimer=3000,
 textOutTimer=2800;

function animateText() {
for(let i=0; i<txtsLen; i++){
txts[i].classList.remove("text-in","text-out");  
}
txts[index].classList.add("text-in");

setTimeout(function(){
 txts[index].classList.add("text-out");              
},textOutTimer)

setTimeout(function(){

if(index == txtsLen-1){
   index=0;
 }
else{
    index++;
  }
 animateText();
},textInTimer); 
}

window.onload=animateText;
