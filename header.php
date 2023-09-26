<!DOCTYPE html>
<html  <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
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
            <img src="<?php bloginfo('template_directory');?>/assets/img/logo/aid_logo.png'" alt="AIDA">
            
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
                                    <img src="<?php echo get_theme_file_uri('assets/img/13-300x300.jpg')?>" alt="">
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
                                    <img src="<?php echo get_theme_file_uri('assets/img/33-300x300.jpg')?>" alt="">
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
                <?php
                    global $woocommerce;
                    $products = $woocommerce->cart->get_cart();
                    $total =0;
                ?>
                <div class="wishes__content">
                    <div class="wishes__number">
                        <span><?php echo WC()->cart->get_cart_contents_count();?></span>
                    </div>
                    <a href="#" class="wishes__content-btn" id="products__cart">
                        <i class="material-icons">local_grocery_store</i>
                        <span>Carrinho</span>
                    </a>
                     
                    <!-- ************************************\
                          Lista de produtos das compras
                    \*************************************/-->
                     
                    <div class="cart__list-holder">
                        <div class="cart__list-container" >
                            <?php 
                                foreach($products as $product => $values){
                                    $_product = wc_get_product($values['data']->get_id());
                            ?>
                            <div class="cart__list-card">
                                <div class="cart__list-img">
                                    <?php echo wp_get_attachment_image($_product->get_image_id());?>
                                    
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span><?php echo $_product->get_name(); ?></span>
                                        <span>(<?php echo $values['quantity']; ?>)</span>
                                    </div>
                                    <div class="cart__product-price">
                                        <div class="cart__product-qtde">
                                            
                                        </div>
                                        <span>
                                            Kz 
                                            <?php 
                                                echo number_format($values['line_subtotal'],  2, ',', '.');
                                                $total+=$values['line_subtotal'];
                                            ?>
                                        </span>
                                    </div>   
                                </div>
                                <?php
                                    $product_cart_id = WC()->cart->generate_cart_id( $_product->get_id() );
                                    $cart_item_key = WC()->cart->find_product_in_cart($product_cart_id); 
                                ?>
                                <div class="cart__close-btn" data-product-id="<?php echo $cart_item_key; ?>" >
                                   +                         
                                </div>
                            </div>
                            <?php 
                                }
                            ?>                             
                        </div>
                        <div class="cart__btn-holder">
                            <div class="cart__total-container">
                                <span class="cart__total-txt">Valor Total:</span>
                                <span class="cart__total-value" id="total">Kz <?php echo number_format($total, 2, ',', '.'); ?></span>
                            </div>
                            <div class="cart__btn-container">
                                <button class="cart__view" id="cart__view" onclick="location.href='<?php echo get_permalink(190); ?>'">Ver carrinho</button>
                                <button class="cart__view" onclick="location.href='<?php echo get_permalink(63); ?>'">Finalizar Compra</button>
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
            <!--?php 
                //display primary menu
                if(has_nav_menu('primary-menu')){
                    wp_nav_menu(array(
                        'theme_location'=>'top_menu',
                        'container'=>'',
                        'items_wrap'=>'<ul class="nav__bar">%3$s</ul>'
                    ));
                }
            ?-->
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'container' => '',
                        'menu_class' => 'nav__bar',
                        'itens_wrap' => '<li class="menu__btn-container">%3$s</li>',
                        'add_li_class' => 'menu__btn-container',
                        'items_wrap'=>'<ul class="nav__bar">%3$s</ul>'
                    )
                );
            ?>
            <!--ul class="nav__bar">
                <li class="menu__btn-container"><a href="#" class="menu__btn">Home</a></li>
                <li class="menu__btn-container"><a href="promocao.php" class="menu__btn">Em promoção</a></li>
                <li class="menu__btn-container"><a href="sobre.php" class="menu__btn">Sobre Nós</a></li>
                <li class="menu__btn-container"><a href="contactos.php" class="menu__btn">Contacte-nos</a></li>
            </ul-->
        </div>
    </div>