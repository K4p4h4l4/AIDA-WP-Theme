<?php
    /* Template Name: product category */
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


        <?php
                //Pegar as informações da categoria que está a ser passada
                $product_cat = get_queried_object();
                //print_r($product_cat);
                
                // To be sure that is a WP_Term Object to avoid errors
                if( is_a($product_cat, 'WP_Term') ) :

                    // Setup your custom query
                    $loop = new WP_Query( array(
                        'post_type'      => 'product',                    
                        'post_status'    => 'publish',
                        'tax_query'      => array( array(
                            'taxonomy' => 'product_cat', // The taxonomy name
                            'field'    => 'term_id', // Type of field ('term_id', 'slug', 'name' or 'term_taxonomy_id')
                            'terms'    => $product_cat->term_id, // can be an integer, a string or an array
                        ) ),
                    ) );
            
                //print_r($loop);
            ?>
        <div class="catgories__container">
            <div class="categories__container-header">
                <span class="categories__container-title"><?php echo $product_cat->name ?></span>

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
   // print_r($loop);
                            if ( $loop->have_posts() ) :
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    
                                    $product = wc_get_product( get_the_ID());
                                    
                                    ?>
                                    <div class="product__card">
                                        <div class="product__img">
                                            <?php if($product->get_sale_price()):?>
                                                <div class="product__discount">
                                                    <?php echo round((1-($product->get_sale_price()/$product->get_regular_price()))*100); ?>%
                                                </div>
                                            <?php endif?>
                                            <a href="<?php echo get_the_permalink() ?>">
                                                <?php the_post_thumbnail(); ?>
                                                <!--img src="./img/1-300x300.jpg" alt=""-->
                                            </a>
                                        </div>
                                        <div class="product__details">
                                            <a href="produto.php">
                                                <span><?php echo the_title(); ?></span>
                                                <div class="rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                </div>
                                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                                <div class="price__holder">
                                                    <?php if($product->get_sale_price()):?>
                                                        <div class="product__price">Kz <?php echo number_format($product->get_sale_price(), 2, ',', '.');?></div>
                                                        <div class="product__price-old"><del>Kz <?php echo number_format($product->get_regular_price(), 2, ',', '.'); ?></del></div>
                                                    <?php else:?>
                                                        <div class="product__price">Kz <?php echo number_format($product->get_regular_price(), 2, ',', '.');?></div>
                                                    <?php endif?>
                                                    <!--div class="product__price">AOA 90.000</div>
                                                    <div class="product__price-old"><del>AOA 100.000</del></div-->
                                                </div>
                                            </a>
                                            <div class="product__buttons">
                                                <button class="product__btn" id="infoProductModal"><i class="material-icons">remove_red_eye</i></button>
                                                <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                                <button class="product__btn"><i class="material-icons">shopping_cart</i></button>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            wp_reset_postdata(); // Remember to reset
                            endif; 
                        endif;
                        
                ?>

            </div>
        </div>

    </div>
</section>



<?php 
    //get footer.php file
    get_footer(); 
?>
