
window.addEventListener("load", () =>{
    const loader = document.querySelector(".loader__container");
    loader.classList.add("loader__hidden");
    
    loader.addEventListener("transitionend", () =>{
        //document.body.removeChild(loader);
        loader.classList.add("loader__hidden");
    });
});

document.getElementById('products__cart').addEventListener('click', function () {
    document.querySelector('.cart__list-holder').classList.toggle("cart__list-active");
} );

document.getElementById('products__wish').addEventListener('click', function () {
    document.querySelector('.wish__list-holder').classList.toggle("wish__list-active");
});

let user__profile = document.getElementById('user__profile')
if(user__profile){
    user__profile.addEventListener('click', function () {
        document.querySelector('.user__profile-holder').classList.toggle("user__menu-active");
    });
}

const informatic = document.querySelector('.informatic');
if(informatic){
    informatic.addEventListener('click', function(){
        document.querySelector('.main__options-informatic').classList.toggle("submenu__active");
    });
}

const streaming = document.querySelector('.streaming');
if(streaming){
    streaming.addEventListener('click', function(){
        document.querySelector('.main__options-streaming').classList.toggle("submenu__active");
    });
}

const tvbox = document.querySelector('.tvbox');
if(tvbox){
    tvbox.addEventListener('click', function(){
        document.querySelector('.main__options-tvbox').classList.toggle("submenu__active");
    });
}

const tablet = document.querySelector('.tablet');
if(tablet){
    tablet.addEventListener('click', function(){
        document.querySelector('.main__options-tablet').classList.toggle("submenu__active");
    });
}

const paper = document.querySelector('.paper');
if(paper){
    paper.addEventListener('click', function(){
        document.querySelector('.main__options-paper').classList.toggle("submenu__active");
    });
}

const games = document.querySelector('.games');
if(games){
    games.addEventListener('click', function(){
        document.querySelector('.main__options-games').classList.toggle("submenu__active");
    });
}

const printer = document.querySelector('.printer');
if(printer){
    printer.addEventListener('click', function(){
        document.querySelector('.main__options-printer').classList.toggle("submenu__active");
    });
}

const menu = document.querySelector('.menu__button');
if(menu){
    menu.addEventListener('click', function(e){
        console.log(e);
       document.querySelector('.main__menu').classList.toggle("show__menu"); 
    });
}