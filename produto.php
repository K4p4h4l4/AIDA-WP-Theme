<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIDA - Loja Online de Tecnologia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produto.css">
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
                                <button class="cart__view" onclick="location.href='carrinho.php'">Ver carrinho</button>
                                <button class="cart__view">Finalizar Compra</button>
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
                <li class="menu__btn-container"><a href="index.php" class="menu__btn active">Home</a></li>
                <li class="menu__btn-container"><a href="promocao.php" class="menu__btn">Em promoção</a></li>
                <li class="menu__btn-container"><a href="sobre.php" class="menu__btn">Sobre Nós</a></li>
                <li class="menu__btn-container"><a href="contactos.php" class="menu__btn">Contacte-nos</a></li>
            </ul>
        </div>
    </div>
    
    <!-- *****************************\
             Main header
    \******************************/-->
    <section class="main__header-container">
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
            
            <div class="product__container">
                <div class="product__sumary-info">
                    <div class="product__imgs">
                        <div class="main__img">
                            <img src="./img/8.jpg" alt="" id="main__img">
                        </div>
                        <div class="other__imgs">
                            <div class="other__img">
                                <img src="./img/7.jpg" alt="" onclick="changeImage('./img/7.jpg')">
                            </div>
                            <div class="other__img">
                                <img src="./img/8.jpg" alt="" onclick="changeImage('./img/8.jpg')">
                            </div>
                            <div class="other__img">
                                <img src="./img/26.jpg" alt="" onclick="changeImage('./img/26.jpg')">
                            </div>
                        </div>
                    </div>
                    <div class="product__sumary">
                        <div class="product__name-holder">
                            <h2>New Apple Watch SE (GPS, 44mm)</h2>
                        </div>
                        <div class="product__overallRating-holder">
                            <div class="product__overallRating">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                                <i class="material-icons">star_outline</i>
                                <i class="material-icons">star_outline</i>
                            </div>
                            <div class="product__totalReviews">
                                <a href="" class="product__reviews-link">
                                    10 Avaliações
                                </a>
                            </div>
                            <div class="product__reviewButton-holder">
                                <button class="add__review">Avaliar</button>
                            </div>
                        </div>
                        <div class="produt__status">
                            <div class="product__price-holder">
                                <h3>AOA 120.000</h3>
                                <del>AOA 210.000</del>
                            </div>
                            <div class="product__stock">
                                <h4>Em Estoque</h4>
                            </div>
                        </div>
                        <div class="product__quantities-holder">
                            <h4>Quantidade :</h4>
                            <div class="quantities__buttons-holder">
                                <button class="qtde__button">-</button>
                                <input type="number" value="1" min="1" step="1" class="qtde__number">
                                <button class="qtde__button">+</button>
                            </div>
                        </div>
                        <div class="product__buttons-holder">
                            <button class="product__wishlist-button">
                                <i class="material-icons">favorite_border</i>
                                eu desejo
                            </button>
                            <button class="product__addlist-button">
                                <i class="material-icons">shopping_cart</i>
                                adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- *****************************\
             Detalhes do produto
    \******************************/-->
    <section class="products__details">
        <div class="details__holder">
            <div class="popular__products-section">                
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
                    Detalhes do Produto
            \******************************/-->
            <div class="details__info">
                <div class="tabs">
                    <div class="tab__header">
                        <button class="tab__button" id="btn1" onclick="openProductDetails()">Detalhes</button >
                        <button class="tab__button" id="btn2" onclick="openProductSpecs()">Especificações</button >
                        <button class="tab__button" id="btn3" onclick="openProductReviews()">Avaliações <span>(10)</span></button >
                    </div>
                    
                    <div class="product__details-tab" id="content1">
                        <div class="product__details-title">
                            <h3>Apple Watch SE (GPS, 44mm) - Detalhes</h3>
                        </div>
                        <div class="product__details-body">
                            <ul class="product__description-list">
                                <li>44mm</li>
                                <li>Display Retina LTPO OLED, de até 100 nits</li>
                                <li>Display de vidro Ion-X</li>
                                <li>Modelo GPS e GPS + CELULAR</li>
                                <li>Processador S8 SiP de 64 bits Dual-Core</li>
                                <li>32 GB</li>
                                <li>Resistente a água até uma profundidade de 50 metros</li>
                                <li>Sensor cardíaco óptico de segunda geração</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product__details-tab" id="content2">
                        <div class="product__details-title">
                            <h3>Apple Watch SE (GPS, 44mm) - Especificações</h3>
                        </div>
                        <div class="product__details-body">
                            <div class="product__details-holder">
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Assistente de voz
                                    </div>
                                    <div class="product__specification-name">
                                        Sim
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Versão Compatível de Bluetooth 
                                    </div>
                                    <div class="product__specification-name">
                                        5.0
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Métricas mensuráveis
                                    </div>
                                    <div class="product__specification-name">
                                        Batimentos cardíacos, Monitor de sono
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Rastreador de Actividades
                                    </div>
                                    <div class="product__specification-name">
                                        Reastreador de passos, distância, calorias e actividades
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Categoria
                                    </div>
                                    <div class="product__specification-name">
                                        Smarth Wathes
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Band Detachable 
                                    </div>
                                    <div class="product__specification-name">
                                        Sim
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Possibilidade de Download de APPs
                                    </div>
                                    <div class="product__specification-name">
                                        Sim
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Batery Detachable
                                    </div>
                                    <div class="product__specification-name">
                                        Não
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Tipo de Movimento
                                    </div>
                                    <div class="product__specification-name">
                                        Electrônico
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Estilo 
                                    </div>
                                    <div class="product__specification-name">
                                        Desportivo
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Formatoa de Tela
                                    </div>
                                    <div class="product__specification-name">
                                        Quadrado
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Waterproof Grade
                                    </div>
                                    <div class="product__specification-name">
                                        Perpétuo
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Disponibilidade de Cartão SIM
                                    </div>
                                    <div class="product__specification-name">
                                        Não
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Mecanismo
                                    </div>
                                    <div class="product__specification-name">
                                        Não
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Multiple Dials
                                    </div>
                                    <div class="product__specification-name">
                                        Sim
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        GPS
                                    </div>
                                    <div class="product__specification-name">
                                        Sim
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Modo de Rede
                                    </div>
                                    <div class="product__specification-name">
                                        Nenhum
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Capacidade de bateria
                                    </div>
                                    <div class="product__specification-name">
                                        120mAh
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Camera traseira
                                    </div>
                                    <div class="product__specification-name">
                                        Nenhuma
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        RAM
                                    </div>
                                    <div class="product__specification-name">
                                        128MB
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        ROM
                                    </div>
                                    <div class="product__specification-name">
                                        128MB
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Sistema
                                    </div>
                                    <div class="product__specification-name">
                                        IOS
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Tipo
                                    </div>
                                    <div class="product__specification-name">
                                        Pulso
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Compatibilidade
                                    </div>
                                    <div class="product__specification-name">
                                        IOS
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Linguagens
                                    </div>
                                    <div class="product__specification-name">
                                        Inglês, Russo, Espanhol, Polonês, Português, Turco, Italiano, Francês, Alemão, Norueguês, Coreano, Japonês, Ucraniano, Hebráico, Holandês, Árabe
                                    </div>
                                </div>
                                <div class="product__details-card">
                                    <div class="product__specification-title">
                                        Funcionalidades
                                    </div>
                                    <div class="product__specification-name">
                                        Passômetro, Fitness tracker, sonímetro, Mood tracker, mensagem, lembrete, Call reminder, Controle remoto, Push Message, Alarme, rastreador de batimentos cardíacos, Música, Calendário e Calculadora 
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="product__details-tab" id="content3">
                        <div class="product__details-title">
                            <h3>Apple Watch SE (GPS, 44mm) - Avaliações</h3>
                        </div>
                        <div class="product__details-body">
                            <div class="overall__ratting-container">
                                <div class="overall__rating-holder">
                                    <div class="overall__ratting-box">
                                        <div class="overall__ratting-total">
                                            <h4>2,5</h4>
                                        </div>
                                        <div class="overall__ratting-stars">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_half</i>
                                            <i class="material-icons">star_outline</i>
                                            <i class="material-icons">star_outline</i>
                                        </div>
                                    </div>
                                    <div class="overall__ratting-numberBox">
                                        <div class="ratting__card">
                                            <div class="ratting__stars">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                            </div>
                                            <div class="ratting__stars-bar">
                                                <div class="stars__progress">
                                                    <div class="stars__progress-bar" id="bar5"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ratting__card">
                                            <div class="ratting__stars">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_outline</i>
                                            </div>
                                            <div class="ratting__stars-bar">
                                                <div class="stars__progress">
                                                    <div class="stars__progress-bar" id="bar4"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ratting__card">
                                            <div class="ratting__stars">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_outline</i>
                                                <i class="material-icons">star_outline</i>
                                            </div>
                                            <div class="ratting__stars-bar">
                                                <div class="stars__progress">
                                                    <div class="stars__progress-bar" id="bar3"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ratting__card">
                                            <div class="ratting__stars">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_outline</i>
                                                <i class="material-icons">star_outline</i>
                                                <i class="material-icons">star_outline</i>
                                            </div>
                                            <div class="ratting__stars-bar">
                                                <div class="stars__progress">
                                                    <div class="stars__progress-bar" id="bar2"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    3
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ratting__card">
                                            <div class="ratting__stars">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_outline</i>
                                                <i class="material-icons">star_outline</i>
                                                <i class="material-icons">star_outline</i>
                                                <i class="material-icons">star_outline</i>
                                            </div>
                                            <div class="ratting__stars-bar">
                                                <div class="stars__progress">
                                                    <div class="stars__progress-bar" id="bar1"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    3
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="reviews__holder">
                                    <div class="reviews__messages">
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Igor
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, eligendi tempore saepe expedita asperiores quasi? Eos eligendi libero doloribus, sint, recusandae iusto nam. Veritatis placeat ipsa voluptatum. Debitis, quia nisi.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Telmo
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, eligendi tempore saepe expedita asperiores quasi?
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Mafalda
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos obcaecati labore, enim inventore reprehenderit perferendis dicta quia dolore, animi ratione explicabo dolorum numquam porro nam odit doloribus deserunt quidem est, quod, itaque. Sequi iure cumque minus, maxime ullam, quam illo vero totam commodi quo earum odit quisquam nisi ipsum possimus?
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Rogério
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Mateus
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos obcaecati labore, enim inventore reprehenderit perferendis dicta quia dolore, animi ratione explicabo dolorum numquam porro nam odit doloribus deserunt quidem est, quod, itaque. Sequi iure cumque minus, maxime ullam, quam illo vero totam commodi quo earum odit quisquam nisi ipsum possimus?
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Igor
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Igor
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos obcaecati labore, enim inventore reprehenderit perferendis dicta quia dolore, animi ratione explicabo dolorum numquam porro nam odit doloribus deserunt quidem est, quod, itaque. Sequi iure cumque minus, maxime ullam, quam illo vero totam commodi quo earum odit quisquam nisi ipsum possimus?
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    Igor
                                                </div>
                                                <div class="review__date">
                                                    27/08/2023
                                                </div>
                                                <div class="review__rattings">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>   
                            </div>
                            
                            
                            
                        </div>
                        
                    </div>
                </div>
                
                <!-- *****************************\
                        Produtos relacionados
                \******************************/-->
                <div class="new__products-container">
                    <div class="new__products-header">
                        <span class="products__header-title">Pode também gostar ...</span>
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
    <script>
        function changeImage(fileName){
            let img = document.querySelector("#main__img");
            img.setAttribute('src', fileName);
        }
    </script>
    <script src="js/default.js"></script>
    <script src="js/product.js"></script>
</body>

</html>