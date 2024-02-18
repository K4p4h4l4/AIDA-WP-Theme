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
                                <?php 
                                    if($product->get_average_rating()==5){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                <?php
                                    }else if(($product->get_average_rating()>4) && ($product->get_average_rating()<5)){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                <?php
                                    }else if($product->get_average_rating() == 4){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if(($product->get_average_rating()>3) && ($product->get_average_rating()<4)){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if($product->get_average_rating() == 3){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if(($product->get_average_rating()>2) && ($product->get_average_rating()<3)){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if($product->get_average_rating() == 2){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if(($product->get_average_rating()>1) && ($product->get_average_rating()<2)){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if($product->get_average_rating() == 1){
                                ?>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if(($product->get_average_rating()>0) && ($product->get_average_rating()<1)){
                                ?>
                                        <i class="material-icons">star_half</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }else if($product->get_average_rating() == 0){
                                ?>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                        <i class="material-icons">star_outline</i>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="product__totalReviews">
                                <a href="" class="product__reviews-link">
                                    <?php echo $product->get_review_count();?> Avaliações
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
                            <?php

                                if($product->get_stock_status()=="instock"){
                                    echo "<div class='product__stock' style='color:var(--default-green);'><h4>Em Estoque</h4></div>"; 
                                }elseif($product->get_stock_status()=="outofstock"){
                                    echo "<div class='product__stock' style='color:var(--default-red);'><h4>Esgotado</h4></div>"; 
                                }elseif($product->get_stock_status()=="onbackorder"){
                                    echo "<div class='product__stock' style='color:var(--default-yellow);'><h4>Por Encomenda</h4></div>"; 
                                }
                            ?> 
                        </div>
                        <div class="product__quantities-holder">
                            <h4>Quantidade :</h4>
                            <div class="quantities__buttons-holder">
                                <button class="qtde__button" id="remove-qty">-</button>
                                <input type="number" value="1" min="1" step="1" class="qtde__number" id="qtde__number">
                                <button class="qtde__button" id="add-qty">+</button>
                            </div>
                        </div>
                        <div class="product__buttons-holder">
                            <button class="product__wishlist-button">
                                <i class="material-icons">favorite_border</i>
                                Gostei
                            </button>
                            <button class="product__addlist-button" id="addToCart">
                                <i class="material-icons">shopping_cart</i>
                                adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    <div class="single__product-id" id="<?php echo $product->get_ID(); ?>"></div>
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
                        <?php
                            
                                //configurando os argumentos
                                $args = array(
                                    'limit' => 2,
                                    'meta_key' => 'total_sales',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'DESC'
                                );

                                //Execução da query
                                $query = new WC_Product_Query($args);

                                //Vector de produtos
                                $products = $query->get_products();

                                if(! empty($products)){
                                     $i= 1;
                                    //Loop para listar todos os produtos        
                                    foreach( $products as $product2){
                                        //Obter os dados do vector
                                        $product_id = $product2->get_id();
                                        $product_name = $product2->get_name();
                                        $product_price = $product2->get_regular_price();
                                        $product_sale_price = $product2->get_sale_price();
                                        $product_img_id = $product2->get_image_id();
                                        /*echo $val;*/


                                        ?>
                                        <div class="bestsold__product-card">
                                            <div class="bestsold__product-img">
                                                <a href="<?php echo get_permalink($product_id); ?>" class="product__link1">
                                                    <?php echo wp_get_attachment_image($product_img_id);?>
                                                </a>                                            
                                            </div>
                                            <div class="bestsold__product-details">
                                                <a href="<?php echo get_permalink($product_id); ?>" class="product__link2">
                                                <div class="bestsold__product-name">
                                                    <span><?php echo $product_name; ?></span>
                                                </div>
                                                <div class="bestsold__product-rating">
                                                    <?php 
                                                        if($product2->get_average_rating()==5){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                    <?php
                                                        }else if(($product2->get_average_rating()>4) && ($product2->get_average_rating()<5)){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_half</i>
                                                    <?php
                                                        }else if($product2->get_average_rating() == 4){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if(($product2->get_average_rating()>3) && ($product2->get_average_rating()<4)){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_half</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if($product2->get_average_rating() == 3){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if(($product2->get_average_rating()>2) && ($product2->get_average_rating()<3)){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_half</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if($product2->get_average_rating() == 2){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if(($product2->get_average_rating()>1) && ($product2->get_average_rating()<2)){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_half</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if($product2->get_average_rating() == 1){
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if(($product2->get_average_rating()>0) && ($product2->get_average_rating()<1)){
                                                    ?>
                                                            <i class="material-icons">star_half</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }else if($product2->get_average_rating() == 0){
                                                    ?>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <div class="bestsold__product-price">
                                                    <p>AKZ <?php echo number_format($product_price, 2, ',', '.'); ?></p>
                                                </div>
                                                </a>
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
            
            <!-- *****************************\
                    Detalhes do Produto
            \******************************/-->
            <div class="details__info">
                <div class="tabs">
                    <div class="tab__header">
                        <button class="tab__button" id="btn1" onclick="openProductDetails()">Detalhes</button >
                        <button class="tab__button" id="btn2" onclick="openProductSpecs()">Especificações</button >
                        <button class="tab__button" id="btn3" onclick="openProductReviews()">Avaliações <span>(<?php echo $product->get_review_count();?>)</span></button >
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
                        <?php
                            // Get an array of rating counts for each rating (1 star, 2 stars, 3 stars, etc.)
                            $rating_counts = $product->get_rating_counts();

                            // Now you can access the rating count for each rating
                            if(isset($rating_counts[1])){
                                $rating_1_count = $rating_counts[1];
                            }else{
                                $rating_1_count = 0;
                            }
                            if(isset($rating_counts[2])){
                                $rating_2_count = $rating_counts[2];
                            }else{
                                $rating_2_count = 0;
                            }
                            if(isset($rating_counts[3])){
                                $rating_3_count = $rating_counts[3];
                            }else{
                                $rating_3_count = 0;
                            }
                            if(isset($rating_counts[4])){
                                $rating_4_count = $rating_counts[4];
                            }else{
                                $rating_4_count = 0;
                            }
                            if(isset($rating_counts[5])){
                                $rating_5_count = $rating_counts[5];
                            }else{
                                $rating_5_count = 0;
                            }
                            
                        ?>
                        <div class="product__details-body">
                            <div class="overall__ratting-container">
                                <div class="overall__rating-holder">
                                    <div class="overall__ratting-box">
                                        <div class="overall__ratting-total">
                                            <h4><?php echo $product->get_average_rating();?></h4>
                                        </div>
                                        <div class="overall__ratting-stars">
                                            <?php 
                                                if($product->get_average_rating()==5){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                            <?php
                                                }else if(($product->get_average_rating()>4) && ($product->get_average_rating()<5)){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                            <?php
                                                }else if($product->get_average_rating() == 4){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if(($product->get_average_rating()>3) && ($product->get_average_rating()<4)){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if($product->get_average_rating() == 3){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if(($product->get_average_rating()>2) && ($product->get_average_rating()<3)){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if($product->get_average_rating() == 2){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if(($product->get_average_rating()>1) && ($product->get_average_rating()<2)){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if($product->get_average_rating() == 1){
                                            ?>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if(($product->get_average_rating()>0) && ($product->get_average_rating()<1)){
                                            ?>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }else if($product->get_average_rating() == 0){
                                            ?>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                                    <i class="material-icons">star_outline</i>
                                            <?php
                                                }
                                            ?>
                                            
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
                                                    <div class="stars__progress-bar" id="bar5" style="width:<?php if($product->get_review_count()==0){echo 0;}else{echo $rating_5_count/$product->get_review_count();} ?>"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    <?php echo $rating_5_count;?>
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
                                                    <div class="stars__progress-bar" id="bar4" style="width:<?php if($product->get_review_count()==0){echo 0;}else{echo $rating_4_count/$product->get_review_count();} ?>"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    <?php echo $rating_4_count;?>
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
                                                    <div class="stars__progress-bar" id="bar3" style="width:<?php if($product->get_review_count()==0){echo 0;}else{echo $rating_3_count/$product->get_review_count();} ?>"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    <?php echo $rating_3_count;?>
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
                                                    <div class="stars__progress-bar" id="bar2" style="width:<?php if($product->get_review_count()==0){echo 0;}else{echo $rating_2_count/$product->get_review_count();} ?>"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    <?php echo $rating_2_count;?>
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
                                                    <div class="stars__progress-bar" id="bar1" style="width:<?php if($product->get_review_count()==0){echo 0;}else{echo $rating_1_count/$product->get_review_count();} ?>"></div>
                                                </div>
                                            </div>
                                            <div class="ratting__votes">
                                                <div class="ratting__votes-number">
                                                    <?php echo $rating_1_count;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="reviews__holder">
                                    <div class="reviews__messages">
                                        <?php
                                            // Get the product reviews
                                            $reviews = get_comments(array(
                                                'post_id' => $product->get_ID(),
                                                'status' => 'approve', // Only approved reviews
                                                /*'type' => 'product_review', // Specify the review type used by WooCommerce*/
                                            ));
                                            if ($reviews) :
                                                foreach ($reviews as $review) :
                                                    // Get review data
                                                    $rating = get_comment_meta($review->comment_ID, 'rating', true);
                                                    $author = $review->comment_author;
                                                    $comment = $review->comment_content;
                                                    $date = get_comment_date('', $review->comment_ID);
                                        ?>
                                        <div class="review__card">
                                            <div class="review__person-container">
                                                <div class="review__person-name">
                                                    <?php echo esc_html($author); ?>
                                                </div>
                                                <div class="review__date">
                                                    <?php echo esc_html($date); ?>
                                                </div>
                                                <div class="review__rattings">
                                                    <?php
                                                        if($rating == 5){                                                        
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                    
                                                    <?php
                                                        }
                                                    ?>
                                                    <?php
                                                        if($rating == 4){                                                        
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                    
                                                    <?php
                                                        }
                                                    ?>
                                                    <?php
                                                        if($rating == 3){                                                        
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    
                                                    <?php
                                                        }
                                                    ?>
                                                    <?php
                                                        if($rating == 2){                                                        
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    
                                                    <?php
                                                        }
                                                    ?>
                                                    <?php
                                                        if($rating == 1){                                                        
                                                    ?>
                                                            <i class="material-icons">star</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                            <i class="material-icons">star_outline</i>
                                                    
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="review__message-container">
                                                <div class="review__message">
                                                    <?php echo esc_html($comment); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                endforeach;
                                            else :
                                                echo '<p style="font-size:var(--font-size13);">Ainda sem avaliações. Seja o primeiro, a sua opinião é muito importante para nós!</p>';
                                            endif;
                                        ?>

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
                                        <div class="product_id" id="<?php echo $upsell_product->get_ID(); ?>" ></div> 
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
         
                <div class="modal__container-info" data-target="p-1">
                    <div class="modal__product-img">
                        <img class="img" >
                    </div>
                    <div class="modal__product-info">
                        <div class="modal__product-title">
                            <h3 class="modal__title"></h3>
                        </div>
                        <div class="modal__product-rating">
                            

                            <span class="modal__rating-value"></span>
                            <span class="modal__rating-total"></span>
                        </div>
                        <div class="modal__product-price">                            
                            
                        </div>
                        <div class="modal__product-stock">
                            <span class="modal__stock-txt">
                                 
                            </span>
                        </div>
                        <div class="modal__product-qtde">
                            <label for="Quantidade">Qtde:</label>
                            <input type="number" min="1" value="1" max="100" class="modal__quantity">
                            <button class="modal__product-cart" >
                                
                                <i class="material-icons">shopping_cart</i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                        <div class="modal__product-description">
                            
                        </div>
                    </div>
                    <div class="modal__product-id" id=""></div>
                </div>
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
                    <input type="number" name="rating2" id="productRating" hidden>                    
                    <i class="material-icons" style="--i: 0">star_outline</i>
                    <i class="material-icons" style="--i: 1">star_outline</i>
                    <i class="material-icons" style="--i: 2">star_outline</i>
                    <i class="material-icons" style="--i: 3">star_outline</i>
                    <i class="material-icons" style="--i: 4">star_outline</i>                    
                </div>
                <textarea name="opinion" id="productPost" cols="30" rows="5" placeholder="Sua opinião ..."></textarea>
                <div class="btn-group">
                    <button type="submit" class="btn submit" id="submitReview">Enviar</button>
                    <button type="submit" class="btn cancel" id="closeReviewModal">Cancelar</button>
                </div>
                <input type="number" name="productID" id="productID" value="<?php echo $product->get_ID(); ?>" hidden>
            <!--/form-->
        </div>
    </div>
</div>


<?php
    get_footer();
?>