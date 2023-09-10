<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIDA - Loja Online de Tecnologia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"-->
    <link rel="stylesheet" href="css/envio.css">
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
                                <button class="cart__view">Ver carrinho</button>
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
                <li class="menu__btn-container"><a href="index.php" class="menu__btn">Home</a></li>
                <li class="menu__btn-container"><a href="promocao.php" class="menu__btn">Em promoção</a></li>
                <li class="menu__btn-container"><a href="sobre.php" class="menu__btn">Sobre Nós</a></li>
                <li class="menu__btn-container"><a href="contactos.php" class="menu__btn">Contacte-nos</a></li>
            </ul>
        </div>
    </div>
    
    <!-- *****************************\
             checkout container
    \******************************/-->
    <section class="checkout__holder">
        <div class="checkout__container">
            
            <!-- *****************************\
                Informações sobre o checkout
            \******************************/-->
            <div class="checkout__information-holder">
                <div class="checkout__information">
                    <div class="checkout__information-header">
                        <div class="checkout__information-logo">
                            <a href="index.php">
                                <img src="./img/logo/logo.jpg" alt="Logo" class="checkout__logo">
                            </a>                            
                        </div>
                    </div>
                    <div class="checkout__information-details">
                       <div class="information__links">
                           <div class="information__link-holder">
                               <a href="carrinho.php" class="information__link">Carrinho <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="checkout.php" class="information__link">Informações <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="#" class="information__link">Envio <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="#" class="information__link">Pagamento</a>
                           </div>
                       </div>
                       <div class="information__details-holder">
                           
                           <div class="information__contact-holder">
                               <div class="contact__header">
                                   Envio
                               </div>
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="netflix" class="radio">
                                            <input type="radio" id="netflix" class="information__radio" name="netflix">
                                            <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Serviço de streaming (Netflix, Disney+, HBO)</h4>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>Grátis</h4>                                       
                                   </div>
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="kilamba" class="radio">
                                           <input type="radio" id="kilamba" class="information__radio" name="kilamba">
                                           <div class="radio__radio"></div>
                                       </label>
                                       
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Centralidade do Kilamba e KK5000</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AOA 1.000</h4>                                       
                                   </div>
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="luanda_Ben_Cam_MorrB" class="radio">
                                           <input type="radio" id="luanda_Ben_Cam_MorrB" class="information__radio" name="luanda_Ben_Cam_MorrB">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Luanda - Fora da Cidade (Benfica/Camama/Morro Bento/Zango 0/Talatona/Gamek/ Patriota/Golf .)</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AOA 2.000</h4>                                       
                                   </div>
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="luanda_cidade" class="radio">
                                           <input type="radio" id="luanda_cidade" class="information__radio" name="luanda_cidade">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Luanda - Dentro da Cidade de Luanda (Maianga, Ingombotas, Rangel,etc.)</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AOA 2.500</h4>                                       
                                   </div>
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="luanda_Vi_ladS_Cac" class="radio">
                                           <input type="radio" id="luanda_Vi_ladS_Cac" class="information__radio" name="luanda_Vi_ladS_Cac">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Luanda - Fora da Cidade (Viana / Luanda Sul/Cacuaco)</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AOA 2.800</h4>
                                       <p></p>
                                   </div>
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="dhl" class="radio">
                                           <input type="radio" id="dhl" class="information__radio" name="dhl">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Outras Províncias de Angola (DHL)</h4>
                                       <p>Tempo de envio: Entrega até 72h após pagamento </p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AOA 6.500</h4>
                                       <p></p>
                                   </div>
                               </div>
                           </div>
                           
                           <div class="information__contact-holder">
                               <div class="contact__header">
                                   Termos de serviço
                               </div>
                               <div class="service__terms">
                                   <div class="deliver__radio-holder">
                                       <input type="checkbox" id="terms" class="information__checkbox">
                                   </div>
                                   <div class="service__terms-text">
                                       <p>Eu concordo e aceito incondicionalmente os termos de serviço. <a href="#" class="open__terms-modal">(ver termos de serviço)</a></p> 
                                   </div>
                                   
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
                
            </div>
            
            <!-- *****************************\
                    Produtos do checkout
            \******************************/-->
            <div class="checkout__products-holder">
                <div class="checkout__products-list">
                    <div class="checkout__product-card">
                        <div class="product__card-img">
                            <img src="./img/12-300x300.jpg" alt="">
                            <div class="checkout__product-qtde">
                                <span>1</span>
                            </div>                            
                        </div>
                        <div class="product__card-name">
                            Sony Beats
                        </div>
                        <div class="product__card-price">
                            AOA 90.000
                        </div>
                    </div>
                    <div class="checkout__product-card">
                        <div class="product__card-img">
                            <img src="./img/7-300x300.jpg" alt="">
                            <div class="checkout__product-qtde">
                                <span>1</span>
                            </div>                            
                        </div>
                        <div class="product__card-name">
                            Apple Watch M4
                        </div>
                        <div class="product__card-price">
                            AOA 350.000
                        </div>
                    </div>
                    <div class="checkout__product-card">
                        <div class="product__card-img">
                            <img src="./img/1-300x300.jpg" alt="">
                            <div class="checkout__product-qtde">
                                <span>1</span>
                            </div>                            
                        </div>
                        <div class="product__card-name">
                            Pie Headsets
                        </div>
                        <div class="product__card-price">
                            AOA 35.000
                        </div>
                    </div>
                    <div class="checkout__product-card">
                        <div class="product__card-img">
                            <img src="./img/product03.png" alt="">
                            <div class="checkout__product-qtde">
                                <span>1</span>
                            </div>                            
                        </div>
                        <div class="product__card-name">
                            Mackbook Pro
                        </div>
                        <div class="product__card-price">
                            AOA 2.390.000
                        </div>
                    </div>
                    <div class="checkout__product-card">
                        <div class="product__card-img">
                            <img src="./img/iPhone%20X.png" alt="">
                            <div class="checkout__product-qtde">
                                <span>1</span>
                            </div>                            
                        </div>
                        <div class="product__card-name">
                            iPhone 14
                        </div>
                        <div class="product__card-price">
                            AOA 1.200.000
                        </div>
                    </div>
                    <div class="checkout__product-card">
                        <div class="product__card-img">
                            <img src="./img/12-300x300.jpg" alt="">
                            <div class="checkout__product-qtde">
                                <span>1</span>
                            </div>                            
                        </div>
                        <div class="product__card-name">
                            Sony Beats
                        </div>
                        <div class="product__card-price">
                            AOA 90.000
                        </div>
                    </div>
                </div>
                
                <div class="checkout__total-holder">
                    <div class="checkout__subtotal-holder">
                        <div class="subtotal__text-holder">
                            Subtotal
                        </div>
                        <div class="subtotal__price-holder">
                            AOA 4.155.000,00
                        </div>
                    </div>
                    <div class="checkout__subtotal-holder">
                        <div class="subtotal__text-holder">
                            Envio
                        </div>
                        <div class="subtotal__price-holder">
                            AOA 3.000,00
                        </div>
                    </div>
                    <div class="checkout__total-container">
                        <div class="total__text-holder">
                            Total
                        </div>
                        <div class="total__price-holder">
                            AOA 4.158.000,00
                        </div>
                    </div>
                </div>
                
                <div class="button__shipping-holder">
                    <button class="button__shipping"><i class="material-icons">attach_money</i> Prosseguir para pagamento</button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- *****************************\
             Terms modal
    \******************************/-->
    <dialog class="terms__modal" id="terms__modal" >
       <div class="close__button-holder">
           <div class="close__terms-modal">+</div>
       </div>
       <div class="terms__modal-title">
           <h2>TERMOS E CONDIÇÕES GERAIS DE VENDA E UTILIZAÇÃO DO SITIO DE COMÉRCIO ELECTRÓNICO</h2>
       </div>
       <div class="terms__modal-body">
           <div class="subject__body">
               <div class="terms__sudtitle">
                   <h3>A. Informação Geral sobre os produtos comercializados</h3>
                   <h3>B. Condições Gerais de Venda</h3>
               </div>
               <div class="body__text">
                   Estas condições gerais são acordadas entre a sociedade AIDA – Lda., sociedade comercial de direito angolano, com sede na Vila Chinesa, Luanda, matriculada na Conservatória do Registo Comercial de Luanda sob o número 1957.2255 com o capital social de cem mil Kwanzas e com o número de identificação fiscal 5000374458 (doravante designada por “AIDA”) e entre qualquer pessoa que deseje efectuar uma compra através do Sítio de comércio electrónico www.aida.ao (doravante designada por “Cliente”). As partes acordam que as suas relações serão reguladas exclusivamente pelas condições gerais aqui descritas.
               </div>
           </div>
           
           <div class="subject__body">
               <div class="terms__sudtitle">
                   <h3>A. Informação Geral sobre os produtos comercializados</h3>
               </div>
               <div class="body__text">
                   <h4>1. Fotografias</h4>
                   As fotografias apresentadas ou usadas são meramente ilustrativas dos produtos e não têm valor contratual, não podendo dar origem a qualquer tipo de compromisso por parte da AIDA.
               </div>
               <div class="body__text">
                   <h4>2. Descrições</h4>
                   A AIDA declina qualquer responsabilidade quanto à validade do conteúdo das descrições dos produtos. Esta informação é inteiramente da responsabilidade dos nossos fornecedores e/ou respectivos fabricantes.
               </div>
               
               <div class="body__text">
                   <h4>3. Fichas Técnicas</h4>
                   <p> A AIDA isenta-se de qualquer responsabilidade quanto à validade do conteúdo das fichas técnicas dos produtos as quais são elaboradas exclusivamente pelos fornecedores dos produtos.</p>
                   <br>
                   <p> A informação técnica dos produtos comercializados é fornecida pela Open Icecat.Biz, ao abrigo da OpenContent License (OPL) que pode ser consultada em http://opencontent.org/opl.shtml. A Open Icecat detém todos os direitos de copyright sobre a informação das fichas técnicas.</p>
               </div>
               
               <div class="body__text">
                   <h4>4. Manual de Utilizador</h4>
                   Os manuais de utilizador fornecidos com cada um dos produtos comercializados pela AIDA são elaborados pelo fabricante e da sua exclusiva responsabilidade. A AIDA não pode ser responsabilizada por qualquer incorrecção e/ou omissão constante nos referidos manuais.
               </div>
               <div class="terms__sudtitle">
                   <h3>B. Condições Gerais de Venda</h3>
               </div>
               <div class="body__text">
                   <h4>1. Finalidade e âmbito de aplicação</h4>
                    <p> As presentes condições e estipulações têm como finalidade regular o uso dos serviços fornecidos pela AIDA, que opera através da internet a partir do Sítio de comércio electrónico www.aida.ao vendendo aos seus Clientes produtos de electrónica de consumo, informática, electrodomésticos, sistemas de áudio e vídeo, aparelhos de gravação de som e imagem, telemóveis, entre outros.</p>
                    <br>
                    <p>Para os efeitos das presentes condições e estipulações, são consideradas vendas da AIDA, todas as compras realizadas através do Site de comércio electrónico www.aida.ao, cujo pagamento seja realizado por transferência bancária ou depósito ou pagamento via Entidade/ referência Multicaixa, em Dólares Norte-Americanos (USD) ou Kwanzas Angolanos (AKZ), para as contas bancárias da AIDA, domiciliadas em Angola.</p>
                    <br>
                    <p>As cláusulas que compõem estas Condições Gerais vinculam ambas as partes e formam parte integrante e inseparável do contrato de compra e venda cuja eficácia opera com a confirmação do Cliente, dada na sequência do aviso de recepção da encomenda por parte da AIDA, através dos mecanismos de contratação que posteriormente se especificarão.</p>
                    <br>
                    <p>A AIDA, pode rever as presentes condições de venda, a todo o tempo e com efeitos imediatos após a sua exposição no Site de comércio eletrónico www.aida.ao. O Cliente fica vinculado às condições de venda vigentes na data da aceitação da sua encomenda, devendo para o efeito consultá-las periodicamente.</p>
               </div>
               <div class="body__text">
                   <h4>2. Objecto</h4>
                   As presentes Condições Gerais regulam a prestação dos serviços de vendas, contratação de produtos e serviços oferecidos pela AIDA e a publicidade da marca AIDA dirigida aos seus Clientes/utilizadores, através do de comércio eletrónico www.aida.ao, assim como os direitos e obrigações das partes que derivam das operações de compra e venda acordadas entre os mesmos.
               </div>
           </div>

      
      
       </div>

    </dialog>
    
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
    
    <script src="./js/envio.js"></script>
    <script src="js/default.js"></script>
</body>

</html>
