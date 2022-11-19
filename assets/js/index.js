function showUserCategoryDetail(event){
    document.querySelectorAll(".users-category-detail").forEach(function(userCat){
        userCat.classList.remove('showing')
    })
    // const userCategorySelector = document.querySelector('#users-categories');

    const targetId = event.target.value;
    console.log(targetId)
    document.querySelector("#"+targetId).classList.add('showing');
}