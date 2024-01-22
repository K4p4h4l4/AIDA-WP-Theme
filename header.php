<?php 
    session_start();
?>
    
<!DOCTYPE html>
<html  <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body>
    <div class="loader__container" id="loader__container">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <span class="loading">Carregando...</span>
    </div>
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
                
                <?php
                    // Check if the user is logged in
                    if (is_user_logged_in()) {
                        $current_user = wp_get_current_user();
                        $nome = get_user_meta($current_user->ID, 'first_name', true);
                        $sobrenome = get_user_meta($current_user->ID, 'last_name', true);
                        
                        echo '<a href="#" class="user__profile" id="user__profile"><i class="material-icons">account_circle</i> Olá, ' . $nome . ' ' . $sobrenome.'</a>'; ?>
                        <div class="user__profile-holder">
                            <div class="profile__btn-holder">
                                <a href="./minha-conta/" class="user__profile">
                                    <i class="material-icons">person</i>
                                    <span>Perfil</span>
                                </a>
                            </div>
                            <div class="profile__btn-holder">
                                <a href="#" class="user__profile" id="logout">
                                    <i class="material-icons">logout</i>
                                    <span>Sair</span>
                                </a>
                            </div>
                        </div>
                        <?php 
                    }else{
                        echo '<span><a href="./registar/">Registar</a></span><span><a href="./login/">Login</a></span>';
                    }
                ?>
                
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
                        <span class="wishes__count">0</span>
                    </div>
                    <a href="#" class="wishes__content-btn" id="products__wish">
                        <i class="material-icons">favorite_border</i>
                        <span>Favoritos</span>
                    </a>
                    
                    <!-- ************************************\
                          Lista de produtos das compras
                    \*************************************/--> 
                    <div class="wish__list-holder">
                        <div class="wish__list-container">
                            
                        </div>
                        <div class="wish__btn-holder">
                            <div class="wish__btn-container">
                                <button class="wish__view" id="wish__view">Adicionar ao carrinho</button>
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
                        <span class="wishes__count cart__count"><?php echo count(WC()->cart->get_cart());?></span>
                    </div>
                    <a href="#" class="wishes__content-btn" id="products__cart">
                        <i class="material-icons">local_grocery_store</i>
                        <span>Carrinho</span>
                    </a>
                     
                    <!-- ************************************\
                          Lista de produtos das compras
                    \*************************************/-->
                     
                    <div class="cart__list-holder">
                        <div class="cart__list-container" id="cart-contents" >
                            <?php 
                                foreach($products as $product => $values){
                                    $_product = wc_get_product($values['data']->get_id());
                                    //print_r($_product);
                            ?>
                            <div class="cart__list-card">
                                <div class="cart__list-img">
                                    <?php echo wp_get_attachment_image($_product->get_image_id());?>
                                    
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span class="item__name"><?php echo $_product->get_name(); ?></span>                        
                                    </div>
                                    <div class="cart__product-qtde">
                                        <input type="number" value="<?php echo $values['quantity']; ?>" min="1" class="product__quantity">
                                        <!--?php echo $_product->get_quantity(); ?-->
                                    </div>
                                    <div class="cart__product-price">                                        
                                        <span class="product__price">
                                            AKZ 
                                            <?php
                                                if($_product->get_sale_price()):
                                                    echo number_format($_product->get_sale_price(),  2, ',', '.');
                                                else:
                                                    echo number_format($_product->get_regular_price(),  2, ',', '.');
                                                endif;
                                                //echo $values['line_subtotal'];
                                                $total+=$values['line_subtotal'];
                                            ?>
                                        </span>
                                    </div>   
                                </div>
                                <!--?php
                                    $product_cart_id = WC()->cart->generate_cart_id( $_product->get_id() );
                                    $cart_item_key = WC()->cart->find_product_in_cart($product_cart_id); 
                                ?-->
                                <div class="cart__close-btn" data-product-id="<?php echo $_product->get_id(); ?>" >
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
                                <span class="cart__total-value" id="total">AKZ <?php echo number_format($total, 2, ',', '.'); ?> </span>
                            </div>
                            <div class="cart__btn-container">
                                <button class="cart__view ver__carrinho" id="cart__view">Ver carrinho</button> <!-- onclick="location.href='< ?php echo get_permalink(190); ?>'" -->
                                <button class="cart__view" id="checkout__view">Finalizar Compra</button> <!--?php echo get_permalink(63); ?-->
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