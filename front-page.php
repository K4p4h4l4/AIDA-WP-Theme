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
        
        <?php get_sidebar(); ?>


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
                <img src="<?php echo esc_url($carrossel['carrossel_grupo1']['imagem_carrossel']['url']) ;?>" alt=""-->
            </div>

            <div class="caroussel__imgs fade">
                <div class="img_txt">
                    <h1><?php echo $carrossel['carrossel_grupo2']['titulo_carrossel']; ?></h1>
                    <p><?php echo $carrossel['carrossel_grupo2']['paragrafo_carrossel']; ?></p>
                </div>
                <img src="<?php echo esc_url($carrossel['carrossel_grupo2']['imagem_carrossel']['url'])?>" alt="">
            </div>

            <div class="caroussel__imgs fade">
                <div class="img_txt">
                    <h1><?php echo $carrossel['carrossel_grupo3']['titulo_carrossel']; ?></h1>
                    <p><?php echo $carrossel['carrossel_grupo3']['paragrafo_carrossel']; ?></p>
                </div>
                <img src="<?php echo esc_url($carrossel['carrossel_grupo3']['imagem_carrossel']['url'])?>" alt="">
            </div>

            <div class="caroussel__imgs fade">
                <div class="img_txt">
                    <h1><?php echo $carrossel['carrossel_grupo4']['titulo_carrossel']; ?></h1>
                    <p><?php echo $carrossel['carrossel_grupo4']['paragrafo_carrossel']; ?></p>
                </div>
                <img src="<?php echo esc_url($carrossel['carrossel_grupo4']['imagem_carrossel']['url'])?>" alt="">
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
                    <?php
                            
                            //configurando os argumentos
                            $args = array(
                                'limit' => 6,
                                'meta_key' => 'total_sales',
                                'visibility' => 'catalog',
                                'featured' => true,
                                'status' => 'publish'
                            );
                            
                            //Execução da query
                            $query = new WC_Product_Query($args);
                                    
                            //Vector de produtos
                            $products = $query->get_products();
                            
                            if(! empty($products)){
                                 $i= 1;
                                //Loop para listar todos os produtos        
                                foreach( $products as $product1){
                                    //Obter os dados do vector
                                    $product_id = $product1->get_id();
                                    $product_name = $product1->get_name();
                                    $product_price = $product1->get_regular_price();
                                    $product_sale_price = $product1->get_sale_price();
                                    $product_img_id = $product1->get_image_id();
                                    /*echo $val;*/
                                    
                                    
                                    ?>
                                    <div class="popular__product-card">
                                        <div class="popular__product-img">
                                            <a href="<?php echo get_permalink($product_id); ?>" class="product__link1">
                                                <?php echo wp_get_attachment_image($product_img_id, 'woocommerce_single');?>
                                            </a>
                                        </div>
                                        <div class="popular__product-details">
                                            <a href="<?php echo get_permalink($product_id); ?>" class="product__link2">
                                            <div class="popular__product-name">
                                                <span><?php echo $product_name; ?></span>
                                            </div>
                                            <div class="popular__product-rating">
                                                <?php 
                                                    if($product1->get_average_rating()==5){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                <?php
                                                    }else if(($product1->get_average_rating()>4) && ($product1->get_average_rating()<5)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                <?php
                                                    }else if($product1->get_average_rating() == 4){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product1->get_average_rating()>3) && ($product1->get_average_rating()<4)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product1->get_average_rating() == 3){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product1->get_average_rating()>2) && ($product1->get_average_rating()<3)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product1->get_average_rating() == 2){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product1->get_average_rating()>1) && ($product1->get_average_rating()<2)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product1->get_average_rating() == 1){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product1->get_average_rating()>0) && ($product1->get_average_rating()<1)){
                                                ?>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product1->get_average_rating() == 0){
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
                                            <div class="popular__product-price">
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

            <!-- *****************************\
                         left advertising
                \******************************/-->
            <?php 
                $left_advertising = get_field('left_advertising'); 
            ?>
            <div class="product__advertising">
                <div class="product__advertising-img">
                    <div class="product__advertising-txt">
                        <h3><?php echo $left_advertising['left_advertising_titulo'] ?></h3>
                        <p><?php echo $left_advertising['left_advertising_paragrafo'] ?></p>
                    </div>
                    <img src="<?php echo esc_url($left_advertising['left_advertising_imagem']);?>" alt="">
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
                                'order' => 'DESC',
                                'status' => 'publish'
                            );
                            
                            //Execução da query
                            $query = new WC_Product_Query($args);
                                    
                            //Vector de produtos
                            $products = $query->get_products();
                            
                            if(! empty($products)){
                                 $i= 1;
                                //Loop para listar todos os produtos        
                                foreach( $products as $product3){
                                    //Obter os dados do vector
                                    $product_id = $product3->get_id();
                                    $product_name = $product3->get_name();
                                    $product_price = $product3->get_regular_price();
                                    $product_sale_price = $product3->get_sale_price();
                                    $product_img_id = $product3->get_image_id();
                                    /*echo $val;*/
                                    
                                    
                                    ?>
                                    <div class="bestsold__product-card">
                                        <div class="bestsold__product-img">
                                            <a href="<?php echo get_permalink($product_id); ?>" class="product__link1">
                                                <?php echo wp_get_attachment_image($product_img_id, 'woocommerce_single');?>
                                            </a>                                            
                                        </div>
                                        <div class="bestsold__product-details">
                                            <a href="<?php echo get_permalink($product_id); ?>" class="product__link2">
                                            <div class="bestsold__product-name">
                                                <span><?php echo $product_name; ?></span>
                                            </div>
                                            <div class="bestsold__product-rating">
                                                <?php 
                                                    if($product3->get_average_rating()==5){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                <?php
                                                    }else if(($product3->get_average_rating()>4) && ($product3->get_average_rating()<5)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                <?php
                                                    }else if($product3->get_average_rating() == 4){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product3->get_average_rating()>3) && ($product3->get_average_rating()<4)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product3->get_average_rating() == 3){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product3->get_average_rating()>2) && ($product3->get_average_rating()<3)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product3->get_average_rating() == 2){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product3->get_average_rating()>1) && ($product3->get_average_rating()<2)){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product3->get_average_rating() == 1){
                                                ?>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if(($product3->get_average_rating()>0) && ($product3->get_average_rating()<1)){
                                                ?>
                                                        <i class="material-icons">star_half</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                        <i class="material-icons">star_outline</i>
                                                <?php
                                                    }else if($product3->get_average_rating() == 0){
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
                                'limit' => 12,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'status' => 'publish'
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
                                                <?php echo wp_get_attachment_image($product_img_id, 'woocommerce_single');?> 

                                            </a>

                                        </div>
                                        <div class="product__details">
                                            <a href="<?php echo get_permalink($product_id); ?>" class="product__link2">
                                                <span class="product__name"><?php echo $product_name; ?></span>
                                                <div class="rating">
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
                                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                                <div class="price__holder">
                                                    <?php if($product_sale_price):?>
                                                        <div class="product__price">AKZ <?php echo number_format($product_sale_price, 2, ',', '.'); ?></div>
                                                        <div class="product__price-old"><del>AKZ <?php echo number_format($product_price, 2, ',', '.'); ?></del></div>
                                                    <?php else:?>
                                                        <div class="product__price">AKZ <?php echo number_format($product_price, 2, ',', '.'); ?></div>
                                                    <?php endif?>
                                                </div>
                                            </a>
                                            <div class="product__buttons">
                                                <button class="product__btn info" id="infoProductModal" data-name="p-<?php echo $i;?>"><i class="material-icons">remove_red_eye</i></button>
                                                <button class="product__btn addtoWishlist"><i class="material-icons">favorite_border</i></button>
                                                <button class="product__btn addToCart"> <i class="material-icons">shopping_cart</i></button >
                                                
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
                <?php $middle_advertising = get_field('middle_advertising');?>
                <div class="new__product-advertising">
                    <img src="<?php echo esc_url($middle_advertising['middle_advertising_imagem'])?>" alt="">
                </div>
                <div class="new__products-header">
                    <span class="products__header-title">Melhores avaliados</span>
                </div>
                <div class="new__products-list">
                    <?php
                            
                        //configurando os argumentos
                        $args = array(
                            'limit' => 8,
                            'meta_key' => '_wc_average_rating',
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC',
                            'status' => 'publish'
                        );

                        //Execução da query
                        $query = new WC_Product_Query($args);

                        //Vector de produtos
                        $products2 = $query->get_products();

                        if(! empty($products2)){
                             $i= 1;
                            //Loop para listar todos os produtos        
                            foreach( $products2 as $product2){
                                //Obter os dados do vector
                                $product_id = $product2->get_id();
                                $product_name = $product2->get_name();
                                $product_price = $product2->get_regular_price();
                                $product_sale_price = $product2->get_sale_price();
                                $product_img_id = $product2->get_image_id();
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
                                            <?php echo wp_get_attachment_image($product_img_id, 'woocommerce_single');?> 

                                        </a>

                                    </div>
                                    <div class="product__details">
                                        <a href="<?php echo get_permalink($product_id); ?>" class="product__link2">
                                            <span class="product__name"><?php echo $product_name; ?></span>
                                            <div class="rating">
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
                                            <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                            <div class="price__holder">
                                                <?php if($product_sale_price):?>
                                                    <div class="product__price">AKZ <?php echo number_format($product_sale_price, 2, ',', '.'); ?></div>
                                                    <div class="product__price-old"><del>AKZ <?php echo number_format($product_price, 2, ',', '.'); ?></del></div>
                                                <?php else:?>
                                                    <div class="product__price">AKZ <?php echo number_format($product_price, 2, ',', '.'); ?></div>
                                                <?php endif?>
                                            </div>
                                        </a>
                                        <div class="product__buttons">
                                            <button class="product__btn info" id="infoProductModal" data-name="p-<?php echo $i;?>"><i class="material-icons">remove_red_eye</i></button>
                                            <button class="product__btn addtoWishlist"><i class="material-icons">favorite_border</i></button>
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

<?php 
    
    get_footer();
    
?>
