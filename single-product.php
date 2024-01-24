<?php 
    /* Template Name: produto */
    
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
            <?php get_sidebar(); ?>
            
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
                            <?php 
                                if(is_user_logged_in()){
                                    echo '<div class="product__reviewButton-holder">
                                            <button class="add__review" id="openReviewModal">Avaliar</button>
                                        </div>';
                                }
                            ?>
                            
                        </div>
                        <div class="produt__status">
                            <div class="product__price-holder">
                                
                                <?php if($product->get_sale_price()):?>
                                    <h3>AKZ <?php echo number_format($product->get_sale_price(), 2, ',', '.');?></h3>
                                    <del>AKZ <?php echo number_format($product->get_regular_price(), 2, ',', '.'); ?></del>
                                <?php else:?>
                                    <h3>AKZ <?php echo number_format($product->get_regular_price(), 2, ',', '.');?></h3>
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
                                                    <div class="product__price">AKZ <?php echo number_format($upsell_product->get_regular_price(), 2, ',', '.'); ?></div>
                                                    <?php if($upsell_product->get_sale_price()):?>
                                                    <div class="product__price-old"><del>AKZ <?php echo number_format($upsell_product->get_sale_price(), 2, ',', '.'); ?></del></div>
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
                                    <h3>AKZ <?php echo number_format($upsell_product->get_sale_price(), 2, ',', '.');?></h3>
                                    <del>AKZ <?php echo number_format($upsell_product->get_regular_price(),  2, ',', '.'); ?></del>
                                <?php else:?>
                                    <h3>AKZ <?php echo number_format($upsell_product->get_regular_price(),  2, ',', '.');?></h3>
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

<!-- *********************************\
     Modal de avaliaçãode produto
\**********************************/-->
<div class="review__bg-modal">
    <div class="review__modal-content">
        <div class="wrapper">
            <h3>Deixe a sua avaliação</h3>
            <!--form action="#"-->
                <div class="rating2">
                    <input type="number" name="rating2" id="" hidden>                    
                    <i class="material-icons" style="--i: 0">star_outline</i>
                    <i class="material-icons" style="--i: 1">star_outline</i>
                    <i class="material-icons" style="--i: 2">star_outline</i>
                    <i class="material-icons" style="--i: 3">star_outline</i>
                    <i class="material-icons" style="--i: 4">star_outline</i>                    
                </div>
                <textarea name="opinion" id="" cols="30" rows="5" placeholder="Sua opinião ..."></textarea>
                <div class="btn-group">
                    <button type="submit" class="btn submit">Enviar</button>
                    <button type="submit" class="btn cancel">Cancelar</button>
                </div>
            <!--/form-->
        </div>
    </div>
</div>


<?php 
    get_footer();    
?>