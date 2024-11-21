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
                <span>Viana, Zango 0, Vida Pacífica, Zona II</span>
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
                                <a href="<?php echo get_permalink( get_page_by_path( 'minha-conta' ) ); ?>" class="user__profile">
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
                        echo '<span><a href="' . get_permalink( get_page_by_path( 'registar' ) ) . '">Registar</a></span><span><a href="' . get_permalink( get_page_by_path( 'login' ) ) . '">Login</a></span>';
                    }
                ?>
                
            </div>
        </div>
    </div>

    <!-- *****************************\
             Meus interesses
    \******************************/-->
    <div class="my__interests">
        <a href="<?php echo home_url(); ?>" class="my__logo">
            <img src="<?php bloginfo('template_directory');?>/assets/img/logo/aid_logo.png'" alt="AIDA">
            
        </a>
        
        <form role="search" id="live-search-form" class="my__insterests-search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="my__search-details">
                <select name="category" id="categorias" class="categories">
                    <option value="">Todas categorias</option>
                    <option value="informatica">Informática</option>
                    <option value="Tv box">Tv box</option>
                    <option value="Smartphones e Tablets">Smartphones e Tablets</option>
                    <option value="Consumíveis e Papel">Consumíveis e Papel</option>
                    <option value="Jogos e Consola">Jogos e Consola</option>
                    <option value="Impressoras e Scaners">Impressoras e Scaners</option>
                    <!-- Add other categories here -->
                </select>
                <input type="text" name="s" class="search__text" placeholder="Procurar aqui" autocomplete="off">
                <button type="submit" class="search-btn"><i class="material-icons">search</i></button>
            </div>
        </form>
<div id="search-results"></div>

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
                        <span class="wishes__count">
                            
                            <?php
                                // Verifica se o usuário está logado
                                if (is_user_logged_in() && function_exists('YITH_WCWL')) {
                                    $user_id = get_current_user_id(); // ID do usuário atual

                                    // Busca as listas de desejos do usuário atual
                                    $wishlists = YITH_WCWL()->get_wishlists(['user_id' => $user_id]);
                                    $total_items = 0; // Inicializa o contador de itens

                                    // Verifica se existem listas de desejos
                                    if (!empty($wishlists)) {
                                        // Percorre todas as listas de desejos (Este exemplo soma os itens de todas as listas)
                                        foreach ($wishlists as $wishlist) {
                                            // Conta os produtos na lista de desejos
                                            $items = YITH_WCWL()->get_products(['wishlist_id' => $wishlist['ID']]);
                                            $total_items += count($items);
                                        }
                                    }

                                    echo $total_items;
                                } else {
                                    // Usuários não logados - usa sessão
                                    if(isset($_SESSION['user_wishlist']) && !empty($_SESSION['user_wishlist'])){
                                        echo count($_SESSION['user_wishlist']);
                                    } else {
                                        echo '0';
                                    }
                                }
                            ?>
                        </span>
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
                            <?php
                                if(isset($_SESSION['user_wishlist']) && !empty($_SESSION['user_wishlist'])){
                                    foreach($_SESSION['user_wishlist'] as $wishProductID){
                                        $wishProduct = wc_get_product($wishProductID);
                                        ?>
                                        <div class="wish__list-card">
                                            <div class="wish__list-img">
                                                <!-- img width="150" height="150" src="${image}" alt="" class="attachment-thumbnail size-thumbnail" decoding="async"-->
                                                <?php echo wp_get_attachment_image($wishProduct->get_image_id(), 'woocommerce_single');?>
                                            </div>
                                            <div class="wish__txt-container">
                                                <div class="wish__poduct-name">
                                                    <span class="item__name"><?php echo $wishProduct->get_name(); ?></span>

                                                </div>
                                                <div class="wish__product-qtde">
                                                    <input type="number" value="1" min="1" class="product__quantity" disabled>
                                                </div>
                                                <div class="wish__product-price">                                        
                                                    <span class="product__price">
                                                        AKZ 
                                                        <?php
                                                            if($wishProduct->get_sale_price()):
                                                                echo number_format($wishProduct->get_sale_price(),  2, ',', '.');
                                                            else:
                                                                echo number_format($wishProduct->get_regular_price(),  2, ',', '.');
                                                            endif;

                                                            //$total+=$values['line_subtotal'];
                                                        ?>
                                                    </span>
                                                </div>   
                                            </div>
                                            <div class="wish__close-btn" data-product-id="<?php echo $wishProduct->get_id(); ?>">
                                               +                         
                                            </div>
                                          </div>
                                      <?php  
                                    }
                                }
                                
                                // Verifica se o usuário está logado e a função do YITH Wishlist existe
                                if (is_user_logged_in() && function_exists('YITH_WCWL')) {
                                    $user_id = get_current_user_id(); // ID do usuário atual

                                    // Busca as listas de desejos do usuário atual (Você pode ajustar os critérios conforme necessário)
                                    $wishlists = YITH_WCWL()->get_wishlists(['user_id' => $user_id]);

                                    // Verifica se existem listas de desejos
                                    if (!empty($wishlists)) {
                                        // Percorre todas as listas de desejos (Este exemplo assume apenas uma lista por usuário)
                                        foreach ($wishlists as $wishlist) {
                                            // Busca os produtos na lista de desejos
                                            $items = YITH_WCWL()->get_products(['wishlist_id' => $wishlist['ID']]);

                                            // Verifica se existem itens
                                            if (!empty($items)) {
                                                foreach ($items as $item) {
                                                    // Supondo que $item['prod_id'] contenha o ID do produto
                                                    $product_id = $item['prod_id'];
                                                    $product = wc_get_product($product_id);

                                                    // Exibe o produto (ajuste a marcação HTML conforme necessário)
                                                    if ($product) {
                                                        ?>
                                                        <div class="wish__list-card">
                                                            <div class="wish__list-img">
                                                                <?php echo wp_get_attachment_image($product->get_image_id(), 'woocommerce_single'); ?>
                                                            </div>
                                                            <div class="wish__txt-container">
                                                                <div class="wish__product-name">
                                                                    <span class="item__name"><?php echo $product->get_name(); ?></span>
                                                                </div>
                                                                <div class="wish__product-qtde">
                                                                    <input type="number" value="1" min="1" class="product__quantity" disabled>
                                                                </div>
                                                                <div class="wish__product-price">
                                                                    <span class="product__price">
                                                                        AKZ
                                                                        <?php
                                                                            if($product->get_sale_price()):
                                                                                echo number_format($product->get_sale_price(),  2, ',', '.');
                                                                            else:
                                                                                echo number_format($product->get_regular_price(),  2, ',', '.');
                                                                            endif;
                                                                        ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="wish__close-btn" data-product-id="<?php echo $product_id; ?>">
                                                                +
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                
                            ?>
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
                                    <?php echo wp_get_attachment_image($_product->get_image_id(), 'woocommerce_single');?>
                                    
                                </div>
                                <div class="cart__txt-container">
                                    <div class="cart__poduct-name">
                                        <span class="item__name"><?php echo $_product->get_name(); ?></span>                        
                                    </div>
                                    <div class="cart__product-qtde">
                                        <input type="number" value="<?php echo $values['quantity']; ?>" min="1" class="product__quantity">
                                        
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
                                                
                                                $total+=$values['line_subtotal'];
                                            ?>
                                        </span>
                                    </div>   
                                </div>
                                
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
                                <button class="cart__view ver__carrinho" id="cart__view">Ver carrinho</button>
                                <button class="cart__view" id="checkout__view">Finalizar Compra</button> 
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
            
        </div>
    </div>