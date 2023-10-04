<?php
            
            //$orderby = 'name';
            //$order = 'asc';
            //$hide_empty = false ;
            $args = array(
                //'orderby'    => 'name',
                //'order'      => 'DESC',
                'taxonomy'    => 'product_cat'
            );

            $product_categories = get_terms( $args );
           
            //print_r($product_categories);
        
            // Loop through product categories and display them as links
            foreach ($product_categories as $category) {
                $category_link = get_term_link($category);

                if (!is_wp_error($category_link)) {
                    echo '<li><a href="' . esc_url($category_link) . '">' . $category->name . '</a></li>';
                }
            }
        ?>
   

   <div class="main__menu">
    <ul class="menu__options">
        <li class="main__options informatic">
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'Informática' ))  {
                                      
            ?>
                <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                    <i class="material-icons">computer</i>
                    Informática<!--Informática-->
                </a>
            <?php
                        
                    }
                }
            ?>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-informatic ">
                <li class="main__category-holder informatic-submenu">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Computadores' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Computadores<!--Computadores-->
                                </a>
                    <?php
                            }
                        }
                    ?>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">
                                <?php
                                    // Loop through product categories and display them as links
                                    foreach ($product_categories as $category) {
                                        $category_link = get_term_link($category);

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Computadores de mesa' ))  {
                                ?>
                                            <a href="<?php echo $category_link; ?>" class="product__type">
                                                Computadores de Mesa<!--Computadores de Mesa-->
                                            </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>
                            <li class="poduct__submenu">
                                <?php
                                    // Loop through product categories and display them as links
                                    foreach ($product_categories as $category) {
                                        $category_link = get_term_link($category);

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Computadores portáteis' ))  {
                                ?>
                                        <a href="<?php echo $category_link; ?>" class="product__type">
                                            Computadores Portáteis<!--Computadores Portáteis-->
                                        </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Armazenamento' ))  {
                    ?>
                        <a href="<?php echo $category_link; ?>" class="main__category">
                            Armazenamento<!--Armazenamento--> 
                        </a>
                    <?php
                            }
                        }
                    ?>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">
                                <?php
                                    // Loop through product categories and display them as links
                                    foreach ($product_categories as $category) {
                                        $category_link = get_term_link($category);

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Disco externo' ))  {
                                ?>
                                            <a href="<?php echo $category_link; ?>" class="product__type">
                                                Disco Externo
                                            </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>
                            <li class="poduct__submenu">
                                <?php
                                    // Loop through product categories and display them as links
                                    foreach ($product_categories as $category) {
                                        $category_link = get_term_link($category);

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Disco externo' ))  {
                                ?>
                                            <a href="<?php echo $category_link; ?>" class="product__type">
                                                Pen Drive USB<!--Pen Drive USB-->
                                            </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Rede' ))  {
                    ?>
                                <a href="<?php echo $category_link; ?>" class="main__category">
                                    Rede<!--Todos os equipamentos de Rede-->
                                </a>
                    <?php
                            }
                        }
                    ?>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">
                                <?php
                                    // Loop through product categories and display them as links
                                    foreach ($product_categories as $category) {
                                        $category_link = get_term_link($category);

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Extensor de sinal' ))  {
                                ?>
                                <a href="<?php echo $category_link; ?>" class="product__type">
                                    Extensor de sinal<!--Extensor de sinal-->
                                </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>
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