<?php 
    /* Template Name: contacte-nos */
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
            <?php get_sidebar(); ?>
            
            <div class="catgories__container">
                <div class="categories__container-header">
                    <span class="categories__container-title">Promoção</span>
                    
                    <div class="categories__buttons-holder">
                        <button class="button__view">
                            <i class="material-icons">grid_view</i>
                        </button>
                        <button class="button__view">
                            <i class="material-icons">view_list</i>
                        </button>
                        <select name="ordenar" id="" class="orderBy">
                            <option value="0">Ordenar por</option>
                            <option value="1">Preço: mais barato primeiro</option>
                            <option value="2">Preço: mais caro primeiro</option>
                            <option value="3">Data: mais recente primeiro</option>
                            <option value="4">Data: mais antigo primeiro</option>
                            <option value="3">Mais vendidos</option>
                            <option value="4">Melhores avaliados</option>
                        </select>
                    </div>
                </div>
                
                
                <div class="new__products-list">
                      
                       <?php

                            // Check rows existexists.
                            $args = array(
                                'status' => 'publish', // To retrieve only published products
                                'limit' => -1, // To retrieve all products that match the criteria
                                'on_sale' => true, // To retrieve products that are on sale
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
                                    
                                    
                                    if($product_sale_price){
                                    ?>
                                    <div class="product__card">
                                        <div class="product__img">
                                            <a href="<?php echo get_permalink($product_id); ?>">
                                                <?php if($product_sale_price):?>
                                                    <div class="product__discount">
                                                        <?php echo round((1-($product_sale_price/$product_price))*100); ?>%
                                                    </div>
                                                <?php endif?>
                                                <?php echo wp_get_attachment_image($product_img_id);?>
                                            </a>

                                        </div>
                                        <div class="product__details">
                                             <a href="<?php echo get_permalink($product_id); ?>">
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
                                                 <button class="product__btn" id="infoProductModal" data-name="p-<?php echo $i;?>"><i class="material-icons">remove_red_eye</i></button>
                                                 <button class="product__btn addtoWishlist"><i class="material-icons">favorite_border</i></button>
                                                 <button class="product__btn addToCart"><i class="material-icons">shopping_cart</i></button>

                                             </div>
                                         </div>
                                         <div class="product_id" id="<?php echo $product_id; ?>" ></div>
                                     </div>
                                     <?php
                                    }
                                        $i++;
                                }
                            }   
                            
                         ?>                    
                         
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
                
                echo $product_sale_price;
                //if(isset($product_sale_price)){
                ?>
                <div class="modal__container-info" data-target="p-<?php echo $i;?>">
                    
                    <div class="modal__product-img">
                        <?php echo wp_get_attachment_image($product_img_id);?>
                    </div>
                    <div class="modal__product-info">
                        <div class="modal__product-title">
                            <h3 class="modal__title"><?php echo $product_name;?></h3>
                        </div>
                        <div class="modal__product-rating">
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

                            <span class="modal__rating-value"><?php echo $product->get_average_rating();?></span>
                            <span class="modal__rating-total"> (<?php echo $product->get_review_count();?>) - Avaliações</span>
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
               // }
                $i++;
            } ?>
    </div>        
</div>
    
<?php 
    //get footer.php file
    get_footer();
?>