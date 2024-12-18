<?php get_header(); ?>

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
                        <span class="categories__container-title">
                            <?php 
                                if ( is_tax( 'product_cat' ) ) {
                                    // Exibe o nome da categoria de produto atual
                                    echo single_term_title( '', false );
                                } 
                            ?>
                        </span>

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
                                <option value="5">Mais vendidos</option>
                                <option value="6">Melhores avaliados</option>
                            </select>
                        </div>
                    </div>
                <div class="new__products-list">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="product__card">
                            <div class="product__img">
                                <!-- Display the Product Image -->
                                <?php
                                    $product = wc_get_product(get_the_ID());
                                    $product_id = $product->get_id();
                                    $product_name = $product->get_name();
                                    $product_price = $product->get_regular_price();
                                    $product_sale_price = $product->get_sale_price();
                                    $product_img_id = $product->get_image_id();
                                ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="product__link1">
                                        <?php if($product_sale_price):?>
                                            <div class="product__discount">
                                                <?php echo round((1-($product_sale_price/$product_price))*100); ?>%
                                            </div>
                                        <?php endif?>
                                        <?php echo wp_get_attachment_image($product_img_id, 'woocommerce_single');?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="product__details">
                                <a href="<?php the_permalink(); ?>" class="product__link2">
                                    <span class="product__name"><?php the_title(); ?></span>
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
                                     <button class="product__btn info" id="infoProductModal" data-name="p-<?php the_ID();?>"><i class="material-icons">remove_red_eye</i></button>
                                     <button class="product__btn addtoWishlist"><i class="material-icons">favorite_border</i></button>
                                     <button class="product__btn addToCart"><i class="material-icons">shopping_cart</i></button>
                                 </div>
                            </div>
                            <div class="product_id" id="<?php the_ID(); ?>" ></div>
                        </div>
                    <?php endwhile; 
                    
                    // Função de paginação
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('&laquo; Anterior', 'text-domain'),
                        'next_text' => __('Próximo &raquo;', 'text-domain'),
                    ));
                    
                    else: ?>
                        <p style="font-size:var(--font-size15);">Sem resultados encontrados para: '<?php if ( is_tax( 'product_cat' ) ) {
                                    // Exibe o nome da categoria de produto atual
                                    echo single_term_title( '', false );
                                } ?>'</p>
                    <?php endif; ?>
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


<?php get_footer(); ?>