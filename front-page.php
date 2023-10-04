<?php 
    //get header.php file
    get_header();
?>

<!-- *****************************\
             Main header
    \******************************/-->
<section class="main__header">
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
        
        <?php if (is_active_sidebar('custom-sidebar')) : ?>
            <div id="sidebar" class="widget-area">
                <?php dynamic_sidebar('custom-sidebar'); ?>
            </div>
        <?php endif; ?>
        
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
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[30], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[30]->name ;?> <!--Impressoras HP--></a></li>
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
                                    <li class="poduct__submenu"><a href="<?php echo get_term_link($product_categories[24], 'product_cat'); ?>" class="product__type"><?php echo $product_categories[24]->name ;?> <!--Fujitsu--></a></li>
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
        <?php $carrossel = get_field('carrossel'); ?>
        <div class="main__caroussel">
            <div class="caroussel__imgs fade" style="display: block">
                <div class="img_txt">
                    <h1><?php echo $carrossel['carrossel_grupo1']['titulo_carrossel']; ?></h1>
                    <p><?php echo $carrossel['carrossel_grupo1']['paragrafo_carrossel']; ?>.</p>
                </div>
                <img src="<?php echo get_theme_file_uri('assets/img/S1.webp')?>" alt="">
            </div>

            <div class="caroussel__imgs fade">
                <div class="img_txt">
                    <h1><?php echo $carrossel['carrossel_grupo2']['titulo_carrossel']; ?></h1>
                    <p><?php echo $carrossel['carrossel_grupo2']['paragrafo_carrossel']; ?></p>
                </div>
                <img src="<?php echo get_theme_file_uri('assets/img/Netflix-ok.jpg')?>" alt="">
            </div>

            <div class="caroussel__imgs fade">
                <div class="img_txt">
                    <h1><?php echo $carrossel['carrossel_grupo3']['titulo_carrossel']; ?></h1>
                    <p><?php echo $carrossel['carrossel_grupo3']['paragrafo_carrossel']; ?></p>
                </div>
                <img src="<?php echo get_theme_file_uri('assets/img/Artg-Android-TV-3-1.jpg')?>" alt="">
            </div>

            <div class="caroussel__imgs fade">
                <div class="img_txt">
                    <h1><?php echo $carrossel['carrossel_grupo4']['titulo_carrossel']; ?></h1>
                    <p><?php echo $carrossel['carrossel_grupo4']['paragrafo_carrossel']; ?></p>
                </div>
                <img src="<?php echo get_theme_file_uri('assets/img/Slider2.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/macbook%20Pro.png')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/iPhone%20X.png')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/HP%20OMEN.png')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/nikko camera.png')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/product02.png')?>" alt="">
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
                    <img src="<?php echo get_theme_file_uri('assets/img/Left-banner-3.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/37-300x300.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/22-300x300.jpg')?>" alt="">
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
            <div class="new__products-containerHome">
                <div class="new__products-header">
                    <span class="products__header-title">Novos Produtos</span>
                </div>
                <div class="new__products-list">
                    
                    <?php
                            
                            //configurando os argumentos
                            $args = array(
                                'limit' => 8,
                                'orderby' => 'date',
                                'order' => 'DESC'
                            );
                            
                            //Execução da query
                            $query = new WC_Product_Query($args);
                                    
                            //Vector de produtos
                            $products = $query->get_products();
                            
                            if(! empty($products)){
                                 $i= 1;
                                //Loop para listar todos os produtos        
                                foreach( $products as $product){
                                    //Obter os dados do vector
                                    $product_id = $product->get_id();
                                    $product_name = $product->get_name();
                                    $product_price = $product->get_regular_price();
                                    $product_sale_price = $product->get_sale_price();
                                    $product_img_id = $product->get_image_id();
                                    /*echo $val;*/
                                    
                                    
                                    ?>

                                    <div class="product__card" >                                        
                                        <div class="product__img">
                                            <a href="<?php echo get_permalink($product_id); ?>" class="product__link1">
                                                <?php if($product_sale_price):?>
                                                <div class="product__discount">
                                                    <?php echo round((1-($product_sale_price/$product_price))*100); ?>%
                                                </div>
                                                <?php endif?>
                                                <?php echo wp_get_attachment_image($product_img_id);?> 

                                            </a>

                                        </div>
                                        <div class="product__details">
                                            <a href="<?php echo get_permalink($product_id); ?>" class="product__link2">
                                                <span class="product__name"><?php echo $product_name; ?></span>
                                                <div class="rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                </div>
                                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                                <div class="price__holder">
                                                    <div class="product__price">AKZ <?php echo number_format($product_price, 2, ',', '.'); ?></div>
                                                    <?php if($product_sale_price):?>
                                                    <div class="product__price-old"><del>AKZ <?php echo number_format($product_sale_price, 2, ',', '.'); ?></del></div>
                                                    <?php endif?>
                                                </div>
                                            </a>
                                            <div class="product__buttons">
                                                <button class="product__btn info" id="infoProductModal" data-name="p-<?php echo $i;?>"><i class="material-icons">remove_red_eye</i></button>
                                                <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                                <button class="product__btn addToCart"> <i class="material-icons">shopping_cart</i></button >
                                                <!-- onclick="rudrAddToCart(< ?php echo $product_id; ?>, 1)" -->
                                            </div>
                                        </div>
                                        <div class="product_id" id="<?php echo $product_id; ?>" ></div>                                        
                                    </div>
                                    <?php
                                        $i++;
                                }
                            }   
                            
                         ?>
                </div>


            </div>

            <div class="new__products-containerHome">

                <div class="new__product-advertising">
                    <img src="<?php echo get_theme_file_uri('assets/img/1530x300_e63ad3f2-5417-47ac-bbe2-8027e34d83c6.webp')?>" alt="">
                </div>
                <div class="new__products-header">
                    <span class="products__header-title">Melhores avaliados</span>
                </div>
                <div class="new__products-list">
                    <div class="product__card">
                        <div class="product__img">
                            <div class="product__discount">10%</div>
                            <img src="<?php echo get_theme_file_uri('assets/img/1-300x300.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/7.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/12-300x300.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/26.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/Left-banner-1-1.jpg')?>" alt="">
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
                            <img src="<?php echo get_theme_file_uri('assets/img/product03.png')?>" alt="">
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
        Modal de produtos
\******************************/-->
<div class="bg-modal">
    <div class="modal__content">
        <div class="modal__close">
            <div class="modal__close-btn">+</div>
        </div>
         <?php
            $i=1;
            foreach( $products as $product){
                //Obter os dados do vector
                $product_id = $product->get_id();
                $product_name = $product->get_name();
                $product_price = $product->get_regular_price();
                $product_sale_price = $product->get_sale_price();
                $product_img_id = $product->get_image_id();
                /*echo $val;*/


                ?>
                <div class="modal__container-info" data-target="p-<?php echo $i;?>">
                    <div class="modal__product-img">
                        <!--img src="< ?php echo get_theme_file_uri('assets/img/8.jpg')?>" alt=""-->
                        <?php echo wp_get_attachment_image($product_img_id);?>
                    </div>
                    <div class="modal__product-info">
                        <div class="modal__product-title">
                            <h3 class="modal__title"><?php echo $product_name;?></h3>
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
                                if($product->get_sale_price()):?>
                                    <h3 class="modal__price">AKZ <?php echo number_format($product->get_sale_price(), 2, ',', '.');?></h3>
                                    <del>AKZ <?php echo number_format($product->get_regular_price(),  2, ',', '.'); ?></del>
                                <?php else:?>
                                    <h3 class="modal__price">AKZ <?php echo number_format($product->get_regular_price(),  2, ',', '.');?></h3>
                                <?php endif?>
                        </div>
                        <div class="modal__product-stock">
                            <span class="modal__stock-txt">
                                <?php                                        
                                    if($product->get_stock_status()=="instock"){
                                        echo "Em Estoque"; 
                                    }elseif($product->get_stock_status()=="outofstock"){
                                        echo "Esgotado"; 
                                    }elseif($product->get_stock_status()=="onbackorder"){
                                        echo "Por Encomenda"; 
                                    }
                                ?> 
                            </span>
                        </div>
                        <div class="modal__product-qtde">
                            <label for="Quantidade">Qtde:</label>
                            <input type="number" min="1" value="1" max="100" class="modal__quantity">
                            <button class="modal__product-cart" >
                                <!-- onclick="rudrAddToCart(< ?php echo $product->get_ID(); ?>, 1)"-->
                                <i class="material-icons">shopping_cart</i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                        <div class="modal__product-description">
                            <?php echo $product->get_short_description();?>
                        </div>
                    </div>
                    <div class="modal__product-id" id="<?php echo $product->get_ID(); ?>"></div>
                </div>
            <?php
                $i++;
            } ?>
    </div>        
</div>

<!--div id="cart-contents"></div-->
<?php 
    //get footer.php file
    get_footer();
    //print_r($product_categories);
    print_r($woocommerce->cart->get_cart());        
?>
