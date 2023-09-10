<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIDA - Loja Online de Tecnologia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/sobrenos.css">
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
                                <button class="cart__view" onclick="location.href='carrinho.php'">Ver carrinho</button>
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
                <li class="menu__btn-container"><a href="index.php" class="menu__btn">Home</a></li>
                <li class="menu__btn-container"><a href="promocao.php" class="menu__btn">Em promoção</a></li>
                <li class="menu__btn-container"><a href="sobre.php" class="menu__btn active">Sobre Nós</a></li>
                <li class="menu__btn-container"><a href="contactos.php" class="menu__btn ">Contacte-nos</a></li>
            </ul>
        </div>
    </div>
    
    <!-- *****************************\
             Secção sobre nós
    \******************************/-->
    <section class="aboutUs__section">
        <div class="aboutUs__container">
            <!-- *****************************\
                         Sobre Nós
            \******************************/-->
            <div class="about__header-holder">
                <div class="about__header-title">
                    <h2 class="about__title">Sobre Nós</h2>
                </div>                
            </div>
            <div class="about__info-holder">
                <div class="about__company-holder">
                    <img src="img/igor-miske-Px3iBXV-4TU-unsplash.jpg" alt="">
                </div>
                <div class="about__intro-holder">
                    <p>Bem-vindo à nossa loja online de material de TI! Na AIDA, somos apaixonados por tecnologia e comprometidos em fornecer as soluções de TI mais avançadas para atender às suas necessidades. Com anos de experiência na indústria, nossa equipe dedicada de especialistas em TI trabalha incansavelmente para oferecer produtos de alta qualidade e um serviço excepcional aos nossos clientes.</p>
                    <br>
                    <p>Nossa jornada começou em 2019, quando um grupo de entusiastas de tecnologia decidiu criar um espaço online onde os amantes de TI pudessem encontrar os melhores produtos, desde componentes de hardware até software e acessórios. Desde então, crescemos e evoluímos, estabelecendo parcerias com os principais fabricantes de tecnologia e expandindo nossa gama de produtos para atender às demandas em constante mudança do mercado de TI.</p>
                </div>
            </div>
            <div class="about__columns">
                <div class="about__column-card grid__col-span-2">
                    <div class="column__header">Visão</div>
                    <div class="column__body">
                        <p>Na AIDA, nossa visão é ser a primeira escolha dos clientes quando se trata de soluções de TI. Buscamos liderar o mercado de comércio eletrônico de tecnologia, oferecendo uma ampla gama de produtos de qualidade, conhecimento especializado e um serviço excepcional. Visualizamos um mundo onde a tecnologia é acessível e capacitadora para todos.</p>
                    </div>
                    <div class="column__footer">
                        <span class="material-symbols-outlined">visibility</span>
                    </div>
                </div>
                <div class="about__column-card black">
                    <div class="column__header">Missão</div>
                    <div class="column__body">
                        <p>Nossa missão na AIDA é simplificar o mundo da tecnologia. Fornecemos produtos de TI de alta qualidade, desde componentes de hardware até software e acessórios, para atender às necessidades de nossos clientes. Estamos empenhados em oferecer um ambiente de compras online confiável, informativo e amigável, onde nossos clientes possam encontrar as soluções certas para seus projetos e objetivos.</p>
                    </div>
                    <div class="column__footer">
                        <span class="material-symbols-outlined">target</span>
                    </div>
                </div>
                <div class="about__column-card black">
                    <div class="column__header">Compromisso</div>
                    <div class="column__body">
                        <p>Nosso compromisso é com a qualidade, a inovação e a satisfação do cliente. Selecionamos cuidadosamente cada produto em nosso catálogo, trabalhamos com os principais fabricantes de tecnologia e investimos continuamente em pesquisa e desenvolvimento. Estamos empenhados em fornecer informações precisas, orientação especializada e um serviço de suporte eficaz para garantir que nossos clientes obtenham o máximo valor de suas compras conosco.</p>
                    </div>
                    <div class="column__footer">
                        <span class="material-symbols-outlined">handshake</span>
                    </div>
                </div>
                <div class="about__column-card grid__col-span-2">
                    <div class="column__header">Valores</div>
                    <div class="column__body">
                        <ul class="about__values-list">
                            <li class="about__list">
                                <p><span>Qualidade:</span> Buscamos a excelência em tudo o que fazemos, garantindo que todos os produtos em nosso catálogo atendam aos mais altos padrões de desempenho e confiabilidade.</p>
                            </li>
                            <li class="about__list">
                                <p><span>Inovação:</span> Abraçamos a mudança e estamos constantemente buscando novas soluções de TI para atender às demandas em evolução do mercado.</p>
                            </li>
                            <li class="about__list">
                                <p><span>Confiabilidade:</span> Construímos relacionamentos de confiança com nossos clientes, fornecedores e parceiros, mantendo nossas promessas e cumprindo nossos compromissos.</p>
                            </li>
                            <li class="about__list">
                                <p><span>Conhecimento:</span> Valorizamos a expertise de nossa equipe e compartilhamos conhecimento especializado para capacitar nossos clientes a tomar decisões informadas.</p>
                            </li>
                            <li class="about__list">
                                <p><span>Atendimento ao Cliente:</span> Priorizamos a satisfação do cliente, oferecendo um serviço eficaz, suporte técnico competente e uma experiência de compra amigável.</p>
                            </li>
                            <li class="about__list">
                                <p><span>Acessibilidade:</span> Acreditamos que a tecnologia deve ser acessível a todos, e trabalhamos para oferecer preços competitivos e opções de pagamento flexíveis.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="column__footer">
                        <span class="material-symbols-outlined">trophy</span>
                    </div>
                </div>
            </div>
            <div class="about__info-holder">
                <div class="about__intro-holder">
                    <p>Nossa equipe é composta por entusiastas de TI apaixonados e experientes. Cada membro da equipe traz conhecimento e experiência únicos para o nosso negócio, garantindo que possamos atender às necessidades mais exigentes de nossos clientes. Estamos aqui para ajudá-lo a encontrar as melhores soluções de TI para seus projetos e objetivos, e estamos ansiosos para compartilhar nossa paixão pela tecnologia com você.</p>
                </div>
                <div class="about__company-holder">
                    <img src="img/desola-lanre-ologun-IgUR1iX0mqM-unsplash.jpg" alt="">
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
    
    <script src="js/default.js"></script>
</body>

</html>
