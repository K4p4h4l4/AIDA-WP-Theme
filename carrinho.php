<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIDA - Loja Online de Tecnologia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"-->
    <link rel="stylesheet" href="css/carrinho.css">
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
                                <button class="cart__view" >Ver carrinho</button>
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
                <li class="menu__btn-container"><a href="index.php" class="menu__btn active">Home</a></li>
                <li class="menu__btn-container"><a href="promocao.php" class="menu__btn">Em promoção</a></li>
                <li class="menu__btn-container"><a href="sobre.php" class="menu__btn">Sobre Nós</a></li>
                <li class="menu__btn-container"><a href="contactos.php" class="menu__btn">Contacte-nos</a></li>
            </ul>
        </div>
    </div>
    
    <!-- *****************************\
        Secção de lista de carrinho
    \******************************/-->
    <section class="cart__container">
        <div class="cart__table-holder">
            <table>
                <thead>
                    <tr>
                        <th>
                            Produto
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Preço
                        </th>
                        <th>
                            Qtde
                        </th>
                        <th>
                            Total
                        </th>
                        <th>
                            <div class="cart__action">
                                <i class="material-icons">settings</i>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Produto">
                            <a href="produto.php">
                                <img src="./img/12-300x300.jpg" alt="">
                            </a>
                        </td>
                        <td data-label="Nome">
                            Sony beats
                        </td>
                        <td data-label="Preço">
                            AOA 90.000
                        </td>
                        <td data-label="Qtde">
                            <input type="number" min="1" value="1" class="qtde__number">
                        </td>
                        <td data-label="Total">
                            AOA 90.000
                        </td>
                        <td>
                            <a class="action__remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Produto">
                            <a href="produto.php">
                                <img src="./img/7-300x300.jpg" alt="">
                            </a>
                        </td>
                        <td data-label="Nome">
                            Apple Watch M4
                        </td>
                        <td data-label="Preço">
                            AOA 350.000
                        </td>
                        <td data-label="Qtde">
                            <input type="number" min="1" value="1" class="qtde__number">
                        </td>
                        <td data-label="Total">
                            AOA 350.000
                        </td>
                        <td>
                            <a class="action__remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Produto">
                            <a href="produto.php">
                                <img src="./img/1-300x300.jpg" alt="">
                            </a>
                            
                        </td>
                        <td data-label="Nome">
                            Pie Headsets
                        </td>
                        <td data-label="Preço">
                            AOA 35.000
                        </td>
                        <td data-label="Qtde">
                            <input type="number" min="1" value="1" class="qtde__number">
                        </td>
                        <td data-label="Total">
                            AOA 35.000
                        </td>
                        <td>
                            <a class="action__remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Produto">
                            <a href="produto.php">
                                <img src="./img/product03.png" alt="">
                            </a>                            
                        </td>
                        <td data-label="Nome">
                            Macbook Pro
                        </td>
                        <td data-label="Preço">
                            AOA 2.390.000
                        </td>
                        <td data-label="Qtde">
                            <input type="number" min="1" value="1" class="qtde__number">
                        </td>
                        <td data-label="Total">
                            AOA 2.390.000
                        </td>
                        <td>
                            <a class="action__remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Produto">
                            <a href="produto.php">
                                <img src="./img/iPhone%20X.png" alt="">
                            </a>                            
                        </td>
                        <td data-label="Nome">
                            iPhone 14
                        </td>
                        <td data-label="Preço">
                            AOA 1.200.000
                        </td>
                        <td data-label="Qtde">
                            <input type="number" min="1" value="1" class="qtde__number">
                        </td>
                        <td data-label="Total">
                            AOA 1.200.000
                        </td>
                        <td>
                            <a class="action__remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Produto">
                            <a href="produto.php">
                                <img src="./img/12-300x300.jpg" alt="">
                            </a>                            
                        </td>
                        <td data-label="Nome">
                            Sony beats
                        </td>
                        <td data-label="Preço">
                            AOA 90.000
                        </td>
                        <td data-label="Qtde">
                            <input type="number" min="1" value="1" class="qtde__number">
                        </td>
                        <td data-label="Total">
                            AOA 90.000
                        </td>
                        <td>
                            <a class="action__remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
        
        <div class="cart__totals">
            <div class="cart__totals-table">
                <div class="totals__resume-title">
                    Resumo
                </div>
                <div class="subtotals__holder">
                    <div class="subtotals__title">
                        Subtotal
                    </div>
                    <div class="subtotals__number">
                        AOA 4.155.000,00
                    </div>
                </div>
                <div class="shippement__holder">
                    <div class="shippement__title">
                        Entrega
                    </div>
                    <div class="shippement__number">
                        AOA 3.000
                    </div>
                </div>
                <div class="totals__holder">
                    <div class="totals__title">
                        Total
                    </div>
                    <div class="totals__number">
                        AOA 4.158.000,00
                    </div>
                </div>
                <div class="cart__buttons-holder">
                    <button class="button__actions" onclick="location.href='index.php'"> <i class="material-icons">arrow_back</i> Continuar a comprar</button>
                    <button class="button__actions"> <i class="material-icons">article</i> Consultar preço</button>
                    <button class="button__actions" onclick="location.href='checkout.php'"> <i class="material-icons">done</i> Finalizar compra</button>
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
    
    <!--script src="./js/home.js"></script-->
    <script src="js/default.js"></script>
</body>

</html>
