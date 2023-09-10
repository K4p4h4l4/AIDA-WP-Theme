<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIDA - Loja Online de Tecnologia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"-->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/logo/logo.JPG">
</head>

<body>
    
    <!-- *******************\
             button menu
    \*******************/-->
    <button class="menu__button">
        <i class="material-icons">list</i>
    </button>

    <!-- *******************\
             Topo
    \*******************/-->
    <div class="info__header">
        <div class="info__header-contacts">
            <div class="header__contact">
                <i class="material-icons">phone</i>
                <span>+244-923-695-077</span>
            </div>
            <div class="header__contact">
                <i class="material-icons">email</i>
                <span>geral@aida.ao</span>
            </div>
            <div class="header__contact">
                <i class="material-icons">room</i>
                <span>Zango 0, Vila Chinesa</span>
            </div>
        </div>
        <div class="info__header-account">
            <div class="header__contact">
                <i class="material-icons">account_circle</i>
                <span>
                    <a href="register.php">Registar</a>
                </span>
                <span>
                    <a href="login.php">Login</a>
                </span>
            </div>
        </div>
    </div>

    <!-- *****************************\
             Meus interesses
    \******************************/-->
    <div class="my__interests">
        <a href="index.php" class="my__logo">
            <img src="./img/logo/aid_logo.png" alt="AIDA">
        </a>

        <div class="my__insterests-search">
            <div class="my__search-details">
                <select name="categorias" id="categorias" class="categories">
                    <option value="0">Todas categorias</option>
                    <option value="1">Informática</option>
                    <option value="2">Tv box</option>
                    <option value="3">Smartphones e Tablets</option>
                    <option value="4">Consumíveis e Papel</option>
                    <option value="4">Jogos e Consola</option>
                    <option value="4">Impressoras e Scaners</option>
                </select>
                <input type="text" class="search__text" placeholder="Procurar aqui">
                <button class="search-btn"> <i class="material-icons">search</i> </button>
            </div>
        </div>

        <!-- *****************************\
              Lista de desejos e compras
        \******************************/-->
        <div class="my__interests-wishes">
            <div class="interests__wishes">
               
                <!-- *****************************\
                         Lista de desejos
                \******************************/-->
                <div class="wishes__content">
                    <div class="wishes__number">
                        <span>2</span>
                    </div>
                    <a href="#" class="wishes__content-btn" id="products__wish">
                        <i class="material-icons">favorite_border</i>
                        <span>Desejos</span>
                    </a>
                    
                    <!-- ************************************\
                          Lista de produtos das compras
                    \*************************************/--> 
                    <div class="wish__list-holder">
                        <div class="wish__list-container">
                            <div class="wish__list-card">
                                <div class="wish__list-img">
                                    <img src="./img/13-300x300.jpg" alt="">
                                </div>
                                <div class="wish__txt-container">
                                    <div class="wish__poduct-name">
                                        <span>Samsung LED TV</span>
                                    </div>
                                    <div class="wish__product-price">
                                        <div class="wish__product-qtde">
                                            <span>1</span>X
                                        </div>
                                        <span>AOA 890.000</span>
                                    </div>   
                                </div>
                                <div class="wish__close-btn">
                                    +
                                </div>
                            </div>
                            
                            <div class="wish__list-card">
                                <div class="wish__list-img">
                                    <img src="./img/33-300x300.jpg" alt="">
                                </div>
                                <div class="wish__txt-container">
                                    <div class="wish__poduct-name">
                                        <span>Fujifilm Instax Mini</span>
                                    </div>
                                    <div class="wish__product-price">
                                        <div class="wish__product-qtde">
                                            <span>1</span>X
                                        </div>
                                        <span>AOA 90.000</span>
                                    </div>   
                                </div>
                                <div class="wish__close-btn">
                                    +
                                </div>
                            </div>
                            
                        </div>
                        <div class="wish__btn-holder">
                            <div class="wish__btn-container">
                                <button class="wish__view">Adicionar ao carrinho</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- *****************************\
                         Lista de compras
                \******************************/-->
                <div class="wishes__content">
                    <div class="wishes__number">
                        <span>6</span>
                    </div>
                    <a href="#" class="wishes__content-btn" id="products__cart">
                        <i class="material-icons">local_grocery_store</i>
                        <span>Carrinho</span>
                    </a>
                     
                    <!-- ************************************\
                          Lista de produtos das compras
                    \*************************************/--> 
                    <div class="cart__list-holder">
                        <div class="cart__list-container">
                            <div class="cart__list-card">
                                <div class="cart__list-img">
                                    <img src="./img/12-300x300.jpg" alt="">
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span>Sony Beats</span>
                                    </div>
                                    <div class="cart__product-price">
                                        <div class="cart__product-qtde">
                                            <span>1</span>X
                                        </div>
                                        <span>AOA 90.000</span>
                                    </div>   
                                </div>
                                <div class="cart__close-btn">
                                    +
                                </div>
                            </div>
                            <div class="cart__list-card">
                                <div class="cart__list-img">
                                    <img src="./img/7-300x300.jpg" alt="">
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span>Apple Watch M4</span>
                                    </div>
                                    <div class="cart__product-price">
                                        <div class="cart__product-qtde">
                                            <span>1</span>X
                                        </div>
                                        <span>AOA 350.000</span>
                                    </div>   
                                </div>
                                <div class="cart__close-btn">
                                    +
                                </div>
                            </div>
                            <div class="cart__list-card">
                                <div class="cart__list-img">
                                    <img src="./img/1-300x300.jpg" alt="">
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span>Pie Headsets</span>
                                    </div>
                                    <div class="cart__product-price">
                                        <div class="cart__product-qtde">
                                            <span>1</span>X
                                        </div>
                                        <span>AOA 35.000</span>
                                    </div>   
                                </div>
                                <div class="cart__close-btn">
                                    +
                                </div>
                            </div>
                            <div class="cart__list-card">
                                <div class="cart__list-img">
                                    <img src="./img/product03.png" alt="">
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span>Macbook Pro</span>
                                    </div>
                                    <div class="cart__product-price">
                                        <div class="cart__product-qtde">
                                            <span>1</span>X
                                        </div>
                                        <span>AOA 2.390.000</span>
                                    </div>   
                                </div>
                                <div class="cart__close-btn">
                                    +
                                </div>
                            </div>
                            <div class="cart__list-card">
                                <div class="cart__list-img">
                                    <img src="./img/iPhone%20X.png" alt="">
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span>iPhone 14</span>
                                    </div>
                                    <div class="cart__product-price">
                                        <div class="cart__product-qtde">
                                            <span>1</span>X
                                        </div>
                                        <span>AOA 1.200.000</span>
                                    </div>   
                                </div>
                                <div class="cart__close-btn">
                                    +
                                </div>
                            </div>
                        </div>
                        <div class="cart__btn-holder">
                            <div class="cart__total-container">
                                <span class="cart__total-txt">Valor Total:</span>
                                <span class="cart__total-value" id="total">AOA 4.065.000</span>
                            </div>
                            <div class="cart__btn-container">
                                <button class="cart__view" id="cart__view" onclick="location.href='carrinho.php'">Ver carrinho</button>
                                <button class="cart__view" onclick="location.href='checkout.php'">Finalizar Compra</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- *****************************\
             Menu
    \******************************/-->
    <div class="menu">
        <div class="menu__container">
            <ul class="nav__bar">
                <li class="menu__btn-container"><a href="#" class="menu__btn active">Home</a></li>
                <li class="menu__btn-container"><a href="promocao.php" class="menu__btn">Em promoção</a></li>
                <li class="menu__btn-container"><a href="sobre.php" class="menu__btn">Sobre Nós</a></li>
                <li class="menu__btn-container"><a href="contactos.php" class="menu__btn">Contacte-nos</a></li>
            </ul>
        </div>
    </div>
    
    <!-- *****************************\
             Main header
    \******************************/-->
    <section class="main__header">
        <div class="header__container">
            <!-- *****************************\
                     Menu Principal
            \******************************/-->
            <div class="main__menu">
                <ul class="menu__options">
                    <li class="main__options informatic">
                        <i class="material-icons">computer</i> 
                        Informática
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-informatic ">
                            <li class="main__category-holder informatic-submenu">
                                <a href="categorias.php" class="main__category">Computadores</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="categorias.php" class="product__type">Computadores Portáteis</a></li>
                                        <li class="poduct__submenu"><a href="categorias.php" class="product__type">Computadores de Mesa</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Armazenamento</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Disco Externo</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Pen USB</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Rede</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Extensor de Sinal</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Router</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Switch</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Telefone</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options tvbox">
                        <i class="material-icons">airplay</i>
                        TV Box
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-tvbox">
                            <li class="main__category-holder tvbox-submenu">
                                <a href="" class="main__category">Android Box</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Android box 1</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Android box 2</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Amazon</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Fire Stick</a></li>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options tablet">
                        <i class="material-icons">stay_current_portrait</i>
                        Smartphones e Tablets
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-tablet">
                            <li class="main__category-holder tablet-submenu">
                                <a href="" class="main__category">Smartphones</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">iPhone</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Android</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Smart Wathes</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Apple</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Android</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Tablet</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">iPad</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Android</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Surface</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options paper">
                        <i class="material-icons">library_books</i>
                        Consumívies e Papel
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-paper">
                            <li class="main__category-holder paper-submenu">
                                <a href="" class="main__category">Tinteiros</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">HP</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Cannon</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Toner</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">HP</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Ricoh</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Kyocera</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Papel</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Papel A4</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Papel A3</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options games">
                        <i class="material-icons">sports_esports</i>
                        Jogos e Consola
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-games">
                            <li class="main__category-holder games-submenu">
                                <a href="" class="main__category">Jogos</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">PS5</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">PS4</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Consolas</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">PS5</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">XBOX</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">PS4</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Acessórios</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Headphones</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Capas PS5</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Capas PS4</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Comandos PS5</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Comandos PS4</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options printer">
                        <i class="material-icons">adf_scanner</i>
                        Impressoras e Scaners
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-printer">
                            <li class="main__category-holder printer-submenu">
                                <a href="" class="main__category">Impressoras</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">HP</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Ricoh</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Kyocera</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Scanners</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">HP</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Brother</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Fujitsu</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <!-- *****************************\
                     Caroussel Section
            \******************************/-->
            <div class="main__caroussel">
               <div class="caroussel__imgs fade" style="display: block">
                   <div class="img_txt">
                       <h1>Imagem I</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam culpa illum.</p>
                   </div>
                   <img src="./img/S1.webp" alt="">
               </div>
               
               <div class="caroussel__imgs fade">
                   <div class="img_txt">
                       <h1>Imagem II</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam culpa illum.</p>
                   </div>
                   <img src="./img/Netflix-ok.jpg" alt="">
               </div>
               
               <div class="caroussel__imgs fade">
                   <div class="img_txt">
                       <h1>Imagem III</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam culpa illum.</p>
                   </div>
                   <img src="./img/Artg-Android-TV-3-1.jpg" alt="">
               </div>
               
               <div class="caroussel__imgs fade">
                   <div class="img_txt">
                       <h1>Imagem IV</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam culpa illum.</p>
                   </div>
                   <img src="./img/Slider2.jpg" alt="">
               </div>
               
               <a href="#" class="prev" onclick="plusSlides(-1)">&#10094</a>
               <a href="#" class="next" onclick="plusSlides(1)">&#10095</a>
               
               <div class="dotsbox">
                   <span class="dot" onclick="currentSlide(1)"></span>
                   <span class="dot" onclick="currentSlide(2)"></span>
                   <span class="dot" onclick="currentSlide(3)"></span>
                   <span class="dot" onclick="currentSlide(4)"></span>
               </div>
            </div>
        </div>
    </section>
    
    <!-- *****************************\
             Main products section
    \******************************/-->
    <section class="products">
        <div class="main__products">
            <div class="popular__products-section">
                <!-- *****************************\
                         Produtos Populares
                \******************************/-->
                <div class="popular__products-container">
                    <div class="popular__products-header">
                        <span>Produtos Populares</span>
                    </div>
                    <div class="popular__products-list">
                        <div class="popular__product-card">
                            <div class="popular__product-img">
                                <img src="./img/macbook%20Pro.png" alt="">
                            </div>
                            <div class="popular__product-details">
                                <div class="popular__product-name">
                                    <span>MacBook Pro</span>
                                </div>
                                <div class="popular__product-rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_border</i>
                                    <i class="material-icons">star_border</i>
                                </div>
                                <div class="popular__product-price">
                                    <p>AOA 300.000</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular__product-card">
                            <div class="popular__product-img">
                                <img src="./img/iPhone%20X.png" alt="">
                            </div>
                            <div class="popular__product-details">
                                <div class="popular__product-name">
                                    <span>iPhone X</span>
                                </div>
                                <div class="popular__product-rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_border</i>
                                    <i class="material-icons">star_border</i>
                                </div>
                                <div class="popular__product-price">
                                    <p>AOA 100.000</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular__product-card">
                            <div class="popular__product-img">
                                <img src="./img/HP%20OMEN.png" alt="">
                            </div>
                            <div class="popular__product-details">
                                <div class="popular__product-name">
                                    <span>HP OMEN</span>
                                </div>
                                <div class="popular__product-rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_border</i>
                                    <i class="material-icons">star_border</i>
                                </div>
                                <div class="popular__product-price">
                                    <p>AOA 2.300.000</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular__product-card">
                            <div class="popular__product-img">
                                <img src="./img/nikko camera.png" alt="">
                            </div>
                            <div class="popular__product-details">
                                <div class="popular__product-name">
                                    <span>Nikon</span>
                                </div>
                                <div class="popular__product-rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_border</i>
                                    <i class="material-icons">star_border</i>
                                </div>
                                <div class="popular__product-price">
                                    <p>AOA 630.000</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular__product-card">
                            <div class="popular__product-img">
                                <img src="./img/product02.png" alt="">
                            </div>
                            <div class="popular__product-details">
                                <div class="popular__product-name">
                                    <span>MacBook Pro</span>
                                </div>
                                <div class="popular__product-rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_border</i>
                                    <i class="material-icons">star_border</i>
                                </div>
                                <div class="popular__product-price">
                                    <p>AOA 495.000</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- *****************************\
                         left advertising
                \******************************/-->
                <div class="product__advertising">
                    <div class="product__advertising-img">
                        <div class="product__advertising-txt">
                            <h3>Smartphone</h3>
                            <p>Até 30% de desconto</p>
                        </div>
                        <img src="./img/Left-banner-3.jpg" alt="">
                    </div>
                </div>
                
                <!-- *****************************\
                         Best sold products
                \******************************/-->
                <div class="bestsold__product-container">
                    <div class="popular__products-header">
                        <span>Mais Vendidos</span>
                    </div>
                    <div class="bestsold__product-list">
                        <div class="bestsold__product-card">
                            <div class="bestsold__product-img">
                                <img src="./img/37-300x300.jpg" alt="">
                            </div>
                            <div class="bestsold__product-details">
                                <div class="bestsold__product-name">
                                    <span>Mivi Roam 2 Wireless</span>
                                </div>
                                <div class="bestsold__product-rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_border</i>
                                    <i class="material-icons">star_border</i>
                                </div>
                                <div class="bestsold__product-price">
                                    <p>AOA 300.000</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bestsold__product-card">
                            <div class="bestsold__product-img">
                                <img src="./img/22-300x300.jpg" alt="">
                            </div>
                            <div class="bestsold__product-details">
                                <div class="bestsold__product-name">
                                    <span>OPPO A74 5G</span>
                                </div>
                                <div class="bestsold__product-rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_border</i>
                                    <i class="material-icons">star_border</i>
                                </div>
                                <div class="bestsold__product-price">
                                    <p>AOA 100.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- *****************************\
                     New Products section
            \******************************/-->
            <div class="new__products-section">
                <div class="new__products-container">
                    <div class="new__products-header">
                        <span class="products__header-title">Novos Produtos</span>
                    </div>
                    <div class="new__products-list">
                        <div class="product__card">
                            <div class="product__img">
                                <a href="./produto.php">
                                    <div class="product__discount">10%</div>
                                    <img src="./img/product09.png" alt="">
                                </a>
                                
                            </div>
                            <div class="product__details">
                                <a href="./produto.php">
                                    <span>Canon Canonet</span>
                                    <div class="rating">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                    </div>
                                    <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                    <div class="price__holder">
                                        <div class="product__price">AOA 90.000</div>
                                        <div class="product__price-old"><del>AOA 100.000</del></div>
                                    </div>
                                </a>
                                <div class="product__buttons">
                                    <button class="product__btn" id="infoProductModal"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/product08.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>ASUS Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 495.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/product07.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Samsung A3</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 220.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/product06.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Gaming Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 1.090.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">33%</div>
                                <img src="./img/product05.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Best Beats</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 110.000</div>
                                    <div class="product__price-old"><del>AOA 180.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">15%</div>
                                <img src="./img/product04.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Good Tablet</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 100.000</div>
                                    <div class="product__price-old"><del>AOA 120.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">10%</div>
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Macbook Pro</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 2.090.000</div>
                                    <div class="product__price-old"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/product02.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Pro Headset</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 495.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/product01.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Macbook Pro Air</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 1.200.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="new__products-container">
                   
                    <div class="new__product-advertising">
                        <img src="./img/1530x300_e63ad3f2-5417-47ac-bbe2-8027e34d83c6.webp" alt="">
                    </div>
                    <div class="new__products-header">
                        <span class="products__header-title">Melhores avaliados</span>
                    </div>
                    <div class="new__products-list">
                        <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">10%</div>
                                <img src="./img/1-300x300.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Canon Canonet</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 90.000</div>
                                    <div class="product__price-old"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn" id="infoProductModal"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/7.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>ASUS Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 495.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/12-300x300.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Samsung A3</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 220.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/26.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Gaming Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 1.090.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">33%</div>
                                <img src="./img/Left-banner-1-1.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Best Beats</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 110.000</div>
                                    <div class="product__price-old"><del>AOA 180.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">15%</div>
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Good Tablet</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 100.000</div>
                                    <div class="product__price-old"><del>AOA 120.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>                        
                         
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- *****************************\
             Footer
    \******************************/-->
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Categorias</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Informática</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">TV Box</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Smarthphones e Tablets</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Consumíveis e Papel</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Informação</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Sobre nós</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Contacte-nos</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Política de Privacidade</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Termos & Condições</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Serviços</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Minha conta</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Carrinho</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Lista de desejos</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Contacte-nos</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                       
                        <a href="#" class="option"><i class="material-icons">phone</i> +244-923-695-077</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">email</i> geral@aida.ao</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">room</i> Zango 0, Vila Chinesa</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    <!-- *****************************\
             Footer bottom
    \******************************/-->
    <div class="footer__bottom">
        <div class="footer__bottom-details">
            <span>© 2023 AIDA - Advanced Internet Design Angola™ . Todos os Direitos Reservados</span>
        </div>
    </div>
    
    <div class="bg-modal">
        <div class="modal__content">
            <div class="modal__close">
                <div class="modal__close-btn">+</div>
            </div>
            <div class="modal__container-info">
                <div class="modal__product-img">
                    <img src="./img/8.jpg" alt="">
                </div>
                <div class="modal__product-info">
                    <div class="modal__product-title">
                        <h3>New Apple Watch SE (GPS, 44mm)</h3>
                    </div>
                    <div class="modal__product-rating">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star_half</i>
                        
                        <span class="modal__rating-value">4.4</span>
                        <span class="modal__rating-total"> 75 Avaliações</span>
                    </div>
                    <div class="modal__product-price">
                        <h3>AOA 300.000</h3>
                    </div>
                    <div class="modal__product-stock">
                        <span class="modal__stock-txt">Em Estoque</span>
                    </div>
                    <div class="modal__product-qtde">
                        <label for="Quantidade">Qtde:</label>
                        <input type="number" min="0" value="1" max="100">
                        <button class="modal__product-cart">
                            <i class="material-icons">shopping_cart</i>
                            Adicionar ao carrinho
                        </button>
                    </div>
                    <div class="modal__product-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ex iure fugit minus nihil recusandae, beatae perspiciatis aut quibusdam architecto sapiente sed harum! Quae, consectetur?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/home.js"></script>
    <script src="js/default.js"></script>
</body>

</html>
