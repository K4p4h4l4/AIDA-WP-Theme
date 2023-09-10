/*const product = [
    {
        id: 0,
        image: 'img/product09.png',
        title: 'Canon Canonet',
        price: 90000,
    },
    {
        id: 1,
        image: 'img/product08.png',
        title: 'ASUS Laptop',
        price: 495000,
    },
    {
        id: 2,
        image: 'img/product07.png',
        title: 'Samsung A3',
        price: 220000,
    },
    {
        id: 3,
        image: 'img/product06.png',
        title: 'Gaming Laptop',
        price: 1090000,
    },
    {
        id: 4,
        image: 'img/product05.png',
        title: 'Best Beats',
        price: 110000,
    },
    {
        id: 5,
        image: 'img/product04.png',
        title: 'Good Tablet',
        price: 100000,
    },
    {
        id: 6,
        image: 'img/product03.png',
        title: 'Macbook Pro',
        price: 2090000,
    },
    {
        id: 7,
        image: 'img/product02.png',
        title: 'Pro Headset',
        price: 495000,
    },
    {
        id: 8,
        image: 'img/product01.png',
        title: 'Macbook Pro Air',
        price: 1200000,
    }
];

const categories = [...new Set(product.map((item)=>
                                          {return item}))]
let i=0;
document.getElementById('root').innerHTML =0 categories.map((item)=>{
    var {image, title, price} = item;
    return(
        `<div class="cart__list-card">
            <div class="cart__list-img">
                <img src=${image} alt="">
            </div>
            <div class="cart__txt-container">
                <div class="cart__poduct-name">
                    <span>${title}</span>
                </div>
                <div class="cart__product-price">
                    <div class="cart__product-qtde">
                        <span>1</span>X
                    </div>
                    <span>${price}</span>
                </div>   
            </div>
            <div class="cart__close-btn">
                +
            </div>
        </div>`
    )
})*/


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

/*document.querySelector('body').addEventListener('click', function(){
    document.querySelector('.cart__list-holder').style.display ='none';
});*/

/*document.getElementById('cart__view').addEventListener('click', function(){
   window.open("http://localhost:81/aida3/carrinho.php"); 
    console.log('Clicado');
});*/