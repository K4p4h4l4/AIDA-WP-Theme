<?php
            
            
            $args = array(
                
                'taxonomy'    => 'product_cat'
            );

            $product_categories = get_terms( $args );
           
        ?>
   

   <div class="main__menu">
    <ul class="menu__options">
        <li class="main__options streaming">            
            <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Streaming e Gift Cards', 'product_cat'))); ?>" class="main__category-link">
                <i class="material-icons">podcasts</i>
                Streaming e Gift Cards<!--Streaming-->
            </a>            
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-streaming ">
                <li class="main__category-holder streaming-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Streaming', 'product_cat'))); ?>" class="main__category">
                        Streaming<!--Streaming-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Disney', 'product_cat'))); ?>" class="product__type">
                                     Disney<!--Disney-->
                                </a>
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'HBO', 'product_cat'))); ?>" class="product__type">
                                     HBO<!--HBO-->
                                </a>
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'IPTV', 'product_cat'))); ?>" class="product__type">
                                     IPTV<!--IPTV-->
                                </a>
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'My family cinema', 'product_cat'))); ?>" class="product__type">
                                     My family cinema<!--My family cinema-->
                                </a>
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Netflix Streaming', 'product_cat'))); ?>" class="product__type">
                                     Netflix Streaming<!--Animes-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Gift Cards', 'product_cat'))); ?>" class="main__category">
                            Gift Cards<!--Gift Cards--> 
                        </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Netflix', 'product_cat'))); ?>" class="product__type">
                                    Netflix<!--Netflix--> 
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Apple Cards', 'product_cat'))); ?>" class="product__type">
                                    Apple Cards<!--Apple Cards-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'PlayStation Cards', 'product_cat'))); ?>" class="product__type">
                                    PlayStation Cards<!--PlayStation Cards-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        
        <li class="main__options informatic">
                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Informática', 'product_cat'))); ?>" class="main__category-link">
                    <i class="material-icons">computer</i>
                    Informática<!--Informática-->
                </a>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-informatic ">
                <li class="main__category-holder informatic-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Computadores', 'product_cat'))); ?>" class="main__category">
                        Computadores<!--Computadores-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Computadores de mesa', 'product_cat'))); ?>" class="product__type">
                                    Computadores de Mesa<!--Computadores de Mesa-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Computadores portáteis', 'product_cat'))); ?>" class="product__type">
                                    Computadores Portáteis<!--Computadores Portáteis-->
                                </a>                    
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Armazenamento', 'product_cat'))); ?>" class="main__category">
                        Armazenamento<!--Armazenamento--> 
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Discos externos', 'product_cat'))); ?>" class="product__type">
                                    Discos Externos<!--Discos Externos-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Discos internos', 'product_cat'))); ?>" class="product__type">
                                    Discos Internos<!--Discos Internos-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Pen Drive USB', 'product_cat'))); ?>" class="product__type">
                                    Pen Drive USB<!--Pen Drive USB-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Monitores e Projectores', 'product_cat'))); ?>" class="main__category">
                        Monitores e Projectores<!--Monitores e Projectores-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Monitores', 'product_cat'))); ?>" class="product__type">
                                    Monitores<!--Monitores-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Projectores', 'product_cat'))); ?>" class="product__type">
                                    Projectores<!--Projectores-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Rede', 'product_cat'))); ?>" class="main__category">
                        Rede<!--Todos os equipamentos de Rede-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Extensor de sinal', 'product_cat'))); ?>" class="product__type">
                                    Extensor de sinal<!--Extensor de sinal-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Router', 'product_cat'))); ?>" class="product__type">
                                    Router<!--Router-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Switch', 'product_cat'))); ?>" class="product__type">
                                    Switch<!--Switch-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Telefone', 'product_cat'))); ?>" class="product__type">
                                    Telefone<!--Telefone-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options tvbox">
            <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'TV box', 'product_cat'))); ?>" class="main__category-link">
                <i class="material-icons">airplay</i>
                TV box<!--TV box--> 
            </a>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-tvbox">
                <li class="main__category-holder tvbox-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Android Box', 'product_cat'))); ?>" class="main__category">
                        Android Box<!--Android Box-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            
                            <li class="poduct__submenu">
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Android TV', 'product_cat'))); ?>" class="product__type">
                                    Android TV<!--Android TV-->
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Amazon', 'product_cat'))); ?>" class="main__category">
                        Amazon<!--Amazon-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                            
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Fire Stick', 'product_cat'))); ?>" class="product__type">
                                    Fire Stick<!--Fire Stick-->
                                </a>                                
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options tablet">
            <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Smartphones e Tablets', 'product_cat'))); ?>" class="main__category-link">
                <i class="material-icons">stay_current_portrait</i>
                Smartphones e Tablets<!--Smartphones e Tablets-->
            </a>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-tablet">
                <li class="main__category-holder tablet-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Smartphones', 'product_cat'))); ?>" class="main__category">
                        Smartphones<!--Smartphones-->
                    </a>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">                            
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'iPhone', 'product_cat'))); ?>" class="product__type">
                                    iPhone<!--iPhone-->
                                </a>                               
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Android', 'product_cat'))); ?>" class="product__type">
                                    Android <!--Android-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Smart Watches', 'product_cat'))); ?>" class="main__category">
                        Smart Watches<!--Smart Watches-->
                    </a>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Apple Watches', 'product_cat'))); ?>" class="product__type">
                                    Apple Watches<!--Apple Watch-->
                                </a>
                            </li>
                            <li class="poduct__submenu">
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Android Watches', 'product_cat'))); ?>" class="product__type">
                                    Android Watches<!--Android Watches-->
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Tablets', 'product_cat'))); ?>" class="main__category">
                        Tablets<!--Tablets-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'iPad', 'product_cat'))); ?>" class="product__type">
                                    iPad <!-- iPad -->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Android tablets', 'product_cat'))); ?>" class="product__type">
                                    Android tablets<!--Android tablets -->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Microsoft tablets', 'product_cat'))); ?>" class="product__type">
                                    Microsoft tablets <!--Microsoft tablets -->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options paper">            
            <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Consumíveis e Papel', 'product_cat'))); ?>" class="main__category-link">
                <i class="material-icons">library_books</i>
                Consumívies e Papel<!--Consumívies e Papel-->
            </a>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-paper">
                <li class="main__category-holder paper-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Tinteiros', 'product_cat'))); ?>" class="main__category">
                        Tinteiros<!--Tinteiros-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Tinteiros HP', 'product_cat'))); ?>" class="product__type">
                                    HP<!--Tinteiros HP-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Tinteiros Cannon', 'product_cat'))); ?>" class="product__type">
                                    Cannon<!--Tinteiros Cannon-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Toners', 'product_cat'))); ?>" class="main__category">
                        Toner<!--Todos os Toners-->
                    </a>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Toner HP', 'product_cat'))); ?>" class="product__type">
                                    HP
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Toner Ricoh', 'product_cat'))); ?>" class="product__type">
                                    Ricoh<!--Ricoh-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Toner Kyocera', 'product_cat'))); ?>" class="product__type">
                                    Kyocera<!--Toner Kyocera-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Papel', 'product_cat'))); ?>" class="main__category">
                        Papel<!--Tudo relacionado com Papel-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Papel A4', 'product_cat'))); ?>" class="product__type">
                                    Papel A4<!--Papel A4-->
                                </a>
                            </li>
                            <li class="poduct__submenu">
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Papel A3', 'product_cat'))); ?>" class="product__type">
                                    Papel A3<!--Papel A3-->
                                </a>
                            </li>
                            <li class="poduct__submenu">
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Rolo de papel térmico', 'product_cat'))); ?>" class="product__type">
                                    Rolo de papel térmico<!--Rolo de papel térmico-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Cartões', 'product_cat'))); ?>" class="main__category">
                        Cartões<!--Tudo relacionado com cartões-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Cartões PVC', 'product_cat'))); ?>" class="product__type">
                                    PVC<!--PVC-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Cartões Magnéticos', 'product_cat'))); ?>" class="product__type">
                                    Magnéticos<!--Magnéticos-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Cartões RFID', 'product_cat'))); ?>" class="product__type">
                                    RFID<!--RFID-->
                                </a>
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
                    <?php
                        // Loop through product categories and display them as links
                        foreach ($product_categories as $category) {
                            $category_link = get_term_link($category);

                            if ((!is_wp_error($category_link)) && ($category->name == 'Acessórios' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Acessórios<!--Acessórios-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Headphones' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Headphones<!--Headphones-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Capas PS5' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Capas PS5<!--Capas PS5-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Capas PS4' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Capas PS4<!--Capas PS4-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Comandos PS5' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Comandos PS5<!--Comandos PS5-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Comandos PS4' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Comandos PS4<!--Comandos PS4-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Brinquedos' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Brinquedos<!--Brinquedos-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Lego' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                LEGO<!--Lego-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Drones' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Drones<!--Drones-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Canon' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Canon<!--Canon-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Epson' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Epson<!--Epson-->
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
        <li class="main__options printer">
            <?php
                // Loop through product categories and display them as links
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);

                    if ((!is_wp_error($category_link)) && ($category->name == 'Imagem e Som' ))  {
            ?>
                        <a href="<?php echo esc_url($category_link); ?>" class="main__category-link">
                            <i class="material-icons">settings_voice</i>
                            Imagem e Som<!--Imagem e Som-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Colunas' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Colunas<!--Colunas-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Colunas JBL' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Colunas JBL<!--Colunas JBL-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Colunas XIAOMI' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Colunas XIAOMI<!--Colunas XIAOMI-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Segurança Electrónica' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Segurança Electrónica<!--Segurança Electrónica-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Gravadores DVR e NVR' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Gravadores DVR e NVR<!--Gravadores DVR e NVR-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'Câmaras de Vigilância' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                Câmaras de Vigilância<!--Câmaras de Vigilância-->
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

                            if ((!is_wp_error($category_link)) && ($category->name == 'Televisões' ))  {
                    ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="main__category">
                                    Televisões<!--Televisões-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'TCL' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                TCL<!--TCL-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'INOVIA' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                INOVIA<!--INOVIA-->
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

                                        if ((!is_wp_error($category_link)) && ($category->name == 'LG' ))  {
                                ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="product__type">
                                                LG<!--LG-->
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