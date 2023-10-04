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
            /*foreach ($product_categories as $category) {
                $category_link = get_term_link($category);

                if (!is_wp_error($category_link)) {
                    echo '<li><a href="' . esc_url($category_link) . '">' . $category->name . '</a></li>';
                }
            }*/
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
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
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
                                        <a href="<?php echo esc_url($category_link); ?>" class="product__type">
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
                        <a href="<?php echo esc_url($category_link); ?>" class="main__category">
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
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Pen Drive USB' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
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
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
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
                                <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                    Extensor de sinal<!--Extensor de sinal-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Router' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Router<!--Router-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Switch' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Switch<!--Switch-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Telefone' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Telefone<!--Telefone-->
                                            </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options tvbox">
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'TV box' ))  {
            ?>
            <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                <i class="material-icons">airplay</i>
                TV box<!--TV box--> 
            </a>
            <?php
                    }
                }
            ?>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-tvbox">
                <li class="main__category-holder tvbox-submenu">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Android Box' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Android Box<!--Android Box-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Android Box I' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Android box I <!--Android Box I-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Android Box II' ))  {
                                ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                    Android Box II<!--Android Box II-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Amazon' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Amazon<!--Amazon-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Fire Stick' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Fire Stick<!--Fire Stick-->
                                            </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options tablet">
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'Smartphones e Tablets' ))  {
            ?>
            <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                <i class="material-icons">stay_current_portrait</i>
                Smartphones e Tablets<!--Smartphones e Tablets-->
            </a>
            <?php
                    }
                }
            ?>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-tablet">
                <li class="main__category-holder tablet-submenu">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Smartphones' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Smartphones<!--Smartphones-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'iPhone' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                iPhone<!--iPhone-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Android' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Android <!--Android-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Smart Watches' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Smart Watches<!--Smart Watches-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Apple Watches' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Apple Watches<!--Apple Watch-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Android Watches' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Android Watches<!--Android Watches-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Tablets' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Tablets<!--Tablets-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'iPad' ))  {
                                ?>
                                        <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                            iPad <!-- iPad -->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Android tablets' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Android tablets<!--Android tablets -->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Microsoft tablets' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Microsoft tablets <!--Microsoft tablets -->
                                            </a>
                                <?php
                                        }
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options paper">
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'Consumíveis e Papel' ))  {
            ?>
                        <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                            <i class="material-icons">library_books</i>
                            Consumívies e Papel<!--Consumívies e Papel-->
                        </a>
            <?php
                    }
                }
            ?>

            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-paper">
                <li class="main__category-holder paper-submenu">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Tinteiros' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Tinteiros<!--Tinteiros-->
                                </a>
                    <?php
                            }
                        }
                    ?>
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
                    <a href="<?php echo $category_link; ?>" class="main__category">Papel<!--Papel--></a>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu"><a href="<?php echo esc_url($category_link); ?>" class="product__type">Papel A4<!--Papel A4--></a></li>
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
                            <li class="poduct__submenu"><a href="<?php echo esc_url($category_link); ?>" class="product__type">Impressoras HP<!--Impressoras HP--></a></li>
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
                            <li class="poduct__submenu"><a href="<?php echo esc_url($category_link); ?>" class="product__type">Fujitsu<!--Fujitsu--></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>