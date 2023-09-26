<?php 
    /* Template Name: produto */
    //get header.php file
    get_header();
?>
    
    <!-- *****************************\
             Main header
    \******************************/-->
    <section class="main__header-container">
        <div class="header__container">
            <!-- *****************************\
                     Menu Principal
            \******************************/-->
            <?php
            
            //$orderby = 'name';
            //$order = 'asc';
            //$hide_empty = false ;
            $args = array(
                //'orderby'    => 'name',
                //'order'      => 'DESC',
                'taxonomy'    => 'product_cat',
                'hide_empty' => 'false',
            );

            $product_categories = get_terms( $args );
           
            //print_r($product_categories);
        ?>
        <div class="main__menu">
            <ul class="menu__options">
                <li class="main__options informatic">
                    <a href="<?php echo get_term_link($product_categories[32], 'product_cat'); ?>" class="main__category-link">
                        <i class="material-icons">computer</i>
                        <?php echo $product_categories[32]->name; ?><!--Informática-->
                    </a>
                    <i class="material-icons expand">expand_more</i>
                    <ul class="main__options-informatic ">
                        <li class="main__category-holder informatic-submenu">
                            <a href="<?php echo get_term_link($product_categories[16], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[16]->name; ?><!--Computadores--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[17], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[17]->name; ?><!--Computadores de Mesa--></a></li>
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[18], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[18]->name; ?><!--Computadores Portáteis--></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="main__category-holder">
                            <a href="<?php echo get_term_link($product_categories[12], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[12]->name ?> <!--Armazenamento--> </a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="" class="product__type">Disco Externo</a></li>
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[40], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[40]->name; ?> <!--Pen Drive USB--></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="main__category-holder">
                            <a href="<?php echo get_term_link($product_categories[43], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[43]->name; ?> <!--Todos os equipamentos de Rede--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[22], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[22]->name; ?> <!--Extensor de sinal--></a></li>
                                    <li class="poduct__submenu"><a href="" class="product__type">Router</a></li>
                                    <li class="poduct__submenu"><a href="" class="product__type">Switch</a></li>
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[54], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[54]->name; ?> <!--Telefone--></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="main__options tvbox">
                    <a href="<?php echo get_term_link($product_categories[57], 'product_cat'); ?>" class="main__category-link">
                        <i class="material-icons">airplay</i>
                        <?php echo $product_categories[57]->name ;?> <!--TV Box--> 
                    </a>
                    
                    <i class="material-icons expand">expand_more</i>
                    <ul class="main__options-tvbox">
                        <li class="main__category-holder tvbox-submenu">
                            <a href="<?php echo get_term_link($product_categories[8], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[8]->name ;?> <!--Android Box--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="" class="product__type">Android box 1</a></li>
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[10], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[10]->name ;?> <!--Android Box 2--></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="main__category-holder">
                            <a href="<?php echo get_term_link($product_categories[4], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[4]->name ;?> <!--Amazon--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[23], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[4]->name ;?> <!--Fire Stick--></a></li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="main__options tablet">
                    <a href="<?php echo get_term_link($product_categories[49], 'product_cat'); ?>" class="main__category-link">
                        <i class="material-icons">stay_current_portrait</i>
                        <?php echo $product_categories[49]->name ;?> <!--Smartphones e tables-->
                    </a>
                    
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
                            <a href="<?php echo get_term_link($product_categories[48], 'product_cat'); ?>" class="main__category">  <?php echo $product_categories[48]->name; ?> <!--Smart Watches--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[11], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[11]->name ;?> <!--Apple--></a></li>
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
                    <a href="<?php echo get_term_link($product_categories[20], 'product_cat'); ?>" class="main__category-link">
                        <i class="material-icons">library_books</i>
                        <?php echo $product_categories[20]->name ;?> <!--Consumívies e Papel-->
                    </a>
                    
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
                            <a href="<?php echo get_term_link($product_categories[39], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[2]->name ;?> <!--Papel--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[2], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[2]->name ;?> <!--Papel A4--></a></li>
                                    <li class="poduct__submenu"><a href="" class="product__type">Papel A3</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="main__options games">
                    <a href="<?php echo get_term_link($product_categories[36], 'product_cat'); ?>" class="main__category-link">
                        <i class="material-icons">sports_esports</i>
                        <?php echo $product_categories[36]->name ;?> <!--Jogos e Consola-->
                    </a>
                    
                    
                    <i class="material-icons expand">expand_more</i>
                    <ul class="main__options-games">
                        <li class="main__category-holder games-submenu">
                            <a href="<?php echo get_term_link($product_categories[35], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[35]->name ;?> <!--Todos os jogos--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[42], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[42]->name ;?> <!--PS5--></a></li>
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
                    <a href="<?php echo get_term_link($product_categories[31], 'product_cat'); ?>" class="main__category-link">
                        <i class="material-icons">adf_scanner</i>
                        <?php echo $product_categories[31]->name ;?> <!--Impressoras e Scaners-->
                    </a>
                    
                    <i class="material-icons expand">expand_more</i>
                    <ul class="main__options-printer">
                        <li class="main__category-holder printer-submenu">
                            <a href="<?php echo get_term_link($product_categories[30], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[30]->name ;?> <!--Todas Impressoras--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[26], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[26]->name ;?> <!--Impressoras HP--></a></li>
                                    <li class="poduct__submenu"><a href="" class="product__type">Ricoh</a></li>
                                    <li class="poduct__submenu"><a href="" class="product__type">Kyocera</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="main__category-holder">
                            <a href="<?php echo get_term_link($product_categories[47], 'product_cat'); ?>" class="main__category"><?php echo $product_categories[47]->name ;?> <!--todas as Scanners--></a>
                            <div class="main__category-submenu">
                                <ul class="category__submenu-product">
                                    <li class="poduct__submenu"><a href="" class="product__type">HP</a></li>
                                    <li class="poduct__submenu"><a href="" class="product__type">Brother</a></li>
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[28], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[28]->name ;?> <!--Fujitsu--></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
            
            <?php 
            
                $product = wc_get_product( get_the_ID());
            
                /*echo $product;*/
            ?>
            <div class="product__container">
                <div class="product__sumary-info">
                    <div class="product__imgs">
                        <div class="main__img">
                            <?php echo wp_get_attachment_image($product->get_image_id());?>
                        </div>
                        <div class="other__imgs">
                            <?php
                                $i = 0;
                                $images = $product->get_gallery_image_ids();
                                
                                while($i < count($product->get_gallery_image_ids())){
                                    
                                
                            ?>
                                    <div class="other__img">
                                        <?php echo wp_get_attachment_image($images[$i]); ?>
                                    </div>
                            <?php
                                    $i++;
                                }
                            ?>
                            
                        </div>
                    </div>
                    <div class="product__sumary">
                        <div class="product__name-holder">
                            <h2><?php echo $product->get_name();?></h2>
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
                                    <?php echo $product->get_review_count()?> Avaliações
                                </a>
                            </div>
                            <div class="product__reviewButton-holder">
                                <button class="add__review">Avaliar</button>
                            </div>
                        </div>
                        <div class="produt__status">
                            <div class="product__price-holder">
                                
                                <?php if($product->get_sale_price()):?>
                                    <h3>Kz <?php echo number_format($product->get_sale_price(), 2, ',', '.');?></h3>
                                    <del>Kz <?php echo number_format($product->get_regular_price(), 2, ',', '.'); ?></del>
                                <?php else:?>
                                    <h3>Kz <?php echo number_format($product->get_regular_price(), 2, ',', '.');?></h3>
                                <?php endif?>
                            </div>
                            <div class="product__stock">
                                <h4><?php
                                        
                                        if($product->get_stock_status()=="instock"){
                                            echo "Em Estoque"; 
                                        }elseif($product->get_stock_status()=="outofstock"){
                                            echo "Esgotado"; 
                                        }elseif($product->get_stock_status()=="onbackorder"){
                                            echo "Por Encomenda"; 
                                        }
                                    ?> 
                                    
                                </h4>
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
                            <button class="product__addlist-button" onclick="rudrAddToCart(<?php echo $product->get_ID(); ?>, 1)">
                                <i class="material-icons">shopping_cart</i>
                                adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- **************************************\
        Detalhes e especificações do produto
    \***************************************/-->
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
                        <img src="<?php bloginfo('template_directory')?>/assets/img/Left-banner-3.jpg" alt="">
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
                                <img src="<?php bloginfo('template_directory')?>/assets/img/37-300x300.jpg" alt="">
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
                                <img src="<?php bloginfo('template_directory')?>/assets/img/22-300x300.jpg" alt="">
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
                        <button class="tab__button" id="btn3" onclick="openProductReviews()">Avaliações <span>(<?php echo $product->get_review_count()?>)</span></button >
                    </div>
                    
                    <div class="product__details-tab" id="content1">
                        <div class="product__details-title">
                            <h3><?php echo $product->get_name();?> - Detalhes</h3>
                        </div>
                        <div class="product__details-body">
                            <?php echo $product->get_short_description();?>
                        </div>
                    </div>
                    <div class="product__details-tab" id="content2">
                        <div class="product__details-title">
                            <h3><?php echo $product->get_name();?> - Especificações</h3>
                        </div>
                        <?php echo $product->get_description();?>
                    </div>
                    <div class="product__details-tab" id="content3">
                        <div class="product__details-title">
                            <h3><?php echo $product->get_name();?> - Avaliações</h3>
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
                <?php 
                    //print_r($product->get_upsell_ids());
                    $related_products = $product->get_upsell_ids(); 
                ?>
                <div class="new__products-container">
                    <div class="new__products-header">
                        <span class="products__header-title">Pode também gostar ...</span>
                    </div>
                    
                    <div class="new__products-list">
                        <?php
                        
                            if(! empty($related_products)){
                                $i= 1;

                                //loop para listar os produtos relacionados
                                foreach($related_products as $related_product){ 
                                    $upsell_product = wc_get_product($related_product);
                                
                        ?>
                                    <div class="product__card">
                                        <div class="product__img">
                                            <a href="<?php echo get_permalink($upsell_product->get_ID()); ?>">
                                                <?php if($upsell_product->get_sale_price()):?>
                                                <div class="product__discount">
                                                    <?php echo round((1-($upsell_product->get_sale_price()/$upsell_product->get_regular_price()))*100); ?>%
                                                </div>
                                                <?php endif?>
                                                <?php echo wp_get_attachment_image($upsell_product->get_image_id());?> 

                                            </a>
                                        </div>
                                        <div class="product__details">
                                            <a href="<?php echo get_permalink($upsell_product->get_ID()); ?>">
                                                <span><?php echo $upsell_product->get_name(); ?></span>
                                                <div class="rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                </div>
                                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                                <div class="price__holder">
                                                    <div class="product__price">Kz <?php echo number_format($upsell_product->get_regular_price(), 2, ',', '.'); ?></div>
                                                    <?php if($upsell_product->get_sale_price()):?>
                                                    <div class="product__price-old"><del>Kz <?php echo number_format($upsell_product->get_sale_price(), 2, ',', '.'); ?></del></div>
                                                    <?php endif?>
                                                </div>
                                            </a>
                                            <div class="product__buttons">
                                                <button class="product__btn info" id="infoProductModal" data-name="p-<?php echo $i;?>" type="submit" name="add"><i class="material-icons">remove_red_eye</i></button>
                                                <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                                <button class="product__btn" onclick="rudrAddToCart(<?php echo $upsell_product->get_ID(); ?>, 1)"><i class="material-icons">shopping_cart</i></button >

                                            </div>
                                        </div>
                                    </div>
                        <?php
                                    $i++;
                                }
                            }
                        ?>                        
                    </div>
                </div>
                
            </div>
            
            
            
            
            
        </div>
    </section>

<!-- *****************************\
        Modal de produtos
\******************************/-->
<div class="bg-modal">
    <div class="modal__content">
        <div class="modal__close">
            <div class="modal__close-btn">+</div>
        </div>
         <?php
            $i=1;
            foreach($related_products as $related_product){ 
                //Obter os dados do vector
                $upsell_product = wc_get_product($related_product);
                /*echo $val;*/


                ?>
                <div class="modal__container-info" data-target="p-<?php echo $i;?>">
                    <div class="modal__product-img">
                        
                        <?php echo wp_get_attachment_image($upsell_product->get_image_id());?>
                    </div>
                    <div class="modal__product-info">
                        <div class="modal__product-title">
                            <h3><?php echo $upsell_product->get_name();?></h3>
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
                            <?php 
                                if($upsell_product->get_sale_price()):?>
                                    <h3>Kz <?php echo number_format($upsell_product->get_sale_price(), 2, ',', '.');?></h3>
                                    <del>Kz <?php echo number_format($upsell_product->get_regular_price(),  2, ',', '.'); ?></del>
                                <?php else:?>
                                    <h3>Kz <?php echo number_format($upsell_product->get_regular_price(),  2, ',', '.');?></h3>
                                <?php endif?>
                        </div>
                        <div class="modal__product-stock">
                            <span class="modal__stock-txt">
                                <?php                                        
                                    if($upsell_product->get_stock_status()=="instock"){
                                        echo "Em Estoque"; 
                                    }elseif($upsell_product->get_stock_status()=="outofstock"){
                                        echo "Esgotado"; 
                                    }elseif($upsell_product->get_stock_status()=="onbackorder"){
                                        echo "Por Encomenda"; 
                                    }
                                ?> 
                            </span>
                        </div>
                        <div class="modal__product-qtde">
                            <label for="Quantidade">Qtde:</label>
                            <input type="number" min="0" value="1" max="100">
                            <button class="modal__product-cart" onclick="rudrAddToCart(<?php echo $upsell_product->get_ID(); ?>, 1)">
                                <i class="material-icons">shopping_cart</i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                        <div class="modal__product-description">
                            <?php echo $upsell_product->get_short_description();?>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            } ?>
    </div>        
</div>

<?php 
    //get footer.php file
    get_footer();
    print_r($product);
?>