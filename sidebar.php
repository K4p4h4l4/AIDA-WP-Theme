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
        <li class="main__options streaming">
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'Streaming e Gift Cards' ))  {
                                      
            ?>
                <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                    <i class="material-icons">podcasts</i>
                    Streaming e Gift Cards<!--Streaming-->
                </a>
            <?php
                        
                    }
                }
            ?>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-streaming ">
                <li class="main__category-holder streaming-submenu">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Streaming' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Streaming<!--Streaming-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Netflix Streaming' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Netflix Streaming<!--Netflix Streaming-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Amazon' ))  {
                                ?>
                                        <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                             Amazon<!-- Amazon-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Disney' ))  {
                                ?>
                                        <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                             Disney<!--Disney-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Animes' ))  {
                                ?>
                                        <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                             Animes<!--Animes-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Gift Cards' ))  {
                    ?>
                        <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                            Gift Cards<!--Gift Cards--> 
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Netflix' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Netflix<!--Netflix--> 
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Apple Cards' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Apple Cards<!--Apple Cards-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'PlayStation Cards' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                PlayStation Cards<!--PlayStation Cards-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Android TV' ))  {
                                ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                    Android TV<!--Android TV-->
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
                            <li class="poduct__submenu">
                                <?php
                                    // Loop through product categories and display them as links
                                    foreach ($product_categories as $category) {
                                        $category_link = get_term_link($category);

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Tinteiros HP' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                HP<!--Tinteiros HP-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Tinteiros Cannon' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Cannon<!--Tinteiros Cannon-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Toners' ))  {
                    ?>
                    <a href="" class="main__category">Toner<!--Todos os Toners--></a>
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Toner HP' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                HP
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Toner Ricoh' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Ricoh<!--Ricoh-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Toner Kyocera' ))  {
                                ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                    Kyocera<!--Toner Kyocera-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Papel' ))  {
                    ?>
                    <a href="" class="main__category">Papel<!--Tudo relacionado com Papel--></a>
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Papel A4' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Papel A4<!--Papel A4-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Papel A3' ))  {
                                ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                    Papel A3<!--Papel A3-->
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
        <li class="main__options games">
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'Jogos e Consola' ))  {
            ?>
                        <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                            <i class="material-icons">sports_esports</i>
                            Jogos e Consola<!--Jogos e Consola-->
                        </a>
            <?php
                    }
                }
            ?>

            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-games">
                <li class="main__category-holder games-submenu">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Jogos' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Jogos<!--Todos os jogos-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Jogos PS5' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                PS5<!--Jogos PS5-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Jogos PS4' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                PS4<!--Jogos PS4-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Consolas' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Consolas<!--Todas as consolas-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Consola PS5' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                PS5<!--Consola PS5-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Consola XBOX' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                XBOX<!--Consola XBOX-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Consola PS4' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                PS4<!--Consola PS4-->
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
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'Impressoras e Scanners' ))  {
            ?>
                        <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                            <i class="material-icons">adf_scanner</i>
                            Impressoras e Scanners<!--Impressoras e Scanners-->
                        </a>
            <?php
                    }
                }
            ?>

            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-printer">
                <li class="main__category-holder printer-submenu">
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Impressoras' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Impressoras<!--Todas Impressoras-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Impressoras HP' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Impressoras HP<!--Impressoras HP-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Ricoh' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Ricoh<!--Ricoh-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Kyocera' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Kyocera<!--Kyocera-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Scanners' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Scanners<!--todas as Scanners-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'HP Scanners' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                HP<!--HP Scanners-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Brother' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Brother<!--Brother-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Fujitsu' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Fujitsu<!--Fujitsu-->
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
    </ul>
</div>