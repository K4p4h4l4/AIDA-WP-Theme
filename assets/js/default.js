document.getElementById('products__cart').addEventListener('click', function () {
    document.querySelector('.cart__list-holder').classList.toggle("cart__list-active");
} );

document.getElementById('products__wish').addEventListener('click', function () {
    document.querySelector('.wish__list-holder').classList.toggle("wish__list-active");
});

const informatic = document.querySelector('.informatic');

informatic.addEventListener('click', function(){
    document.querySelector('.main__options-informatic').classList.toggle("submenu__active");
});

const tvbox = document.querySelector('.tvbox');

tvbox.addEventListener('click', function(){
    document.querySelector('.main__options-tvbox').classList.toggle("submenu__active");
});

const tablet = document.querySelector('.tablet');

tablet.addEventListener('click', function(){
    document.querySelector('.main__options-tablet').classList.toggle("submenu__active");
});

const paper = document.querySelector('.paper');

paper.addEventListener('click', function(){
    document.querySelector('.main__options-paper').classList.toggle("submenu__active");
});

const games = document.querySelector('.games');

games.addEventListener('click', function(){
    document.querySelector('.main__options-games').classList.toggle("submenu__active");
});

const printer = document.querySelector('.printer');

printer.addEventListener('click', function(){
    document.querySelector('.main__options-printer').classList.toggle("submenu__active");
});

const menu = document.querySelector('.menu__button');

menu.addEventListener('click', function(e){
    console.log(e);
   document.querySelector('.main__menu').classList.toggle("show__menu"); 
});


/*function updateTotal(){
    let cartContent = document.getElementsByClassName('cart__list-container')[0];
    let cartBoxes = cart.getElementsByClassName('cart__list-card');
    let total = 0;
    
    for(let i=0; i < cartBoxes.length; i++){
        let carBox = cartBoxes[i];
        let priceElement = cartBox.getElementsByClassName('product__price')[0];
        let quantityElement = cartBox.getElementsByClassName('product__quantity')[0];
        let price = parseFloat(priceElement.innerText.replace("Kz", ""));
        let quantity = quantityElement.value;
        total = total + (price * quantity);
        
        document.getElementsByClassName('cart__total-value')[0].innerText = 'Kz ' + total;
    }
}*/