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
                                <a href="< ?php echo esc_url(get_term_link(get_term_by('name', 'Cartões PVC', 'product_cat'))); ?>" class="product__type">
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
            <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Jogos e Consola', 'product_cat'))); ?>" class="main__category-link">
                <i class="material-icons">sports_esports</i>
                Jogos e Consola<!--Jogos e Consola-->
            </a>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-games">
                <li class="main__category-holder games-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Jogos', 'product_cat'))); ?>" class="main__category">
                        Jogos<!--Todos os jogos-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Jogos PS5', 'product_cat'))); ?>" class="product__type">
                                    PS5<!--Jogos PS5-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Consolas', 'product_cat'))); ?>" class="main__category">
                        Consolas<!--Todas as consolas-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Consola PS5', 'product_cat'))); ?>" class="product__type">
                                    PS5<!--Consola PS5-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Consola XBOX', 'product_cat'))); ?>" class="product__type">
                                    XBOX<!--Consola XBOX-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Acessórios', 'product_cat'))); ?>" class="main__category">
                        Acessórios<!--Acessórios-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Headphones', 'product_cat'))); ?>" class="product__type">
                                    Headphones<!--Headphones-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Brinquedos', 'product_cat'))); ?>" class="main__category">
                        Brinquedos<!--Brinquedos-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Lego', 'product_cat'))); ?>" class="product__type">
                                    LEGO<!--Lego-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options printer">            
            <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Impressoras e Scanners', 'product_cat'))); ?>" class="main__category-link">
                <i class="material-icons">adf_scanner</i>
                Impressoras e Scanners<!--Impressoras e Scanners-->
            </a>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-printer">
                <li class="main__category-holder printer-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Impressoras', 'product_cat'))); ?>" class="main__category">
                        Impressoras<!--Todas Impressoras-->
                    </a>
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Impressoras HP', 'product_cat'))); ?>" class="product__type">
                                    Impressoras HP<!--Impressoras HP-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Ricoh', 'product_cat'))); ?>" class="product__type">
                                    Ricoh<!--Ricoh-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Canon', 'product_cat'))); ?>" class="product__type">
                                    Canon<!--Canon-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Epson', 'product_cat'))); ?>" class="product__type">
                                    Epson<!--Epson-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Kyocera', 'product_cat'))); ?>" class="product__type">
                                    Kyocera<!--Kyocera-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Scanners', 'product_cat'))); ?>" class="main__category">
                            Scanners<!--todas as Scanners-->
                        </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'HP Scanners', 'product_cat'))); ?>" class="product__type">
                                    HP<!--HP Scanners-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                               
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Brother', 'product_cat'))); ?>" class="product__type">
                                    Brother<!--Brother-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Fujitsu', 'product_cat'))); ?>" class="product__type">
                                    Fujitsu<!--Fujitsu-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="main__options printer">            
            <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Imagem e Som', 'product_cat'))); ?>" class="main__category-link">
                <i class="material-icons">settings_voice</i>
                Imagem e Som<!--Imagem e Som-->
            </a>
            <i class="material-icons expand">expand_more</i>
            <ul class="main__options-printer">
                <li class="main__category-holder printer-submenu">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Colunas', 'product_cat'))); ?>" class="main__category">
                        Colunas<!--Colunas-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Colunas JBL', 'product_cat'))); ?>" class="product__type">
                                    Colunas JBL<!--Colunas JBL-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Colunas XIAOMI', 'product_cat'))); ?>" class="product__type">
                                    Colunas XIAOMI<!--Colunas XIAOMI-->
                                </a>                                
                            </li>                            
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Televisões', 'product_cat'))); ?>" class="main__category">
                        Televisões<!--Televisões-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'TCL', 'product_cat'))); ?>" class="product__type">
                                    TCL<!--TCL-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'INOVIA', 'product_cat'))); ?>" class="product__type">
                                    INOVIA<!--INOVIA-->
                                </a>                                
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'LG', 'product_cat'))); ?>" class="product__type">
                                    LG<!--LG-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="main__category-holder">                    
                    <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Segurança Electrónica', 'product_cat'))); ?>" class="main__category">
                        Segurança Electrónica<!--Segurança Electrónica-->
                    </a>                    
                    <div class="main__category-submenu">
                        <ul class="category__submenu-product">
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Gravadores DVR e NVR', 'product_cat'))); ?>" class="product__type">
                                    Gravadores DVR e NVR<!--Gravadores DVR e NVR-->
                                </a>
                            </li>
                            <li class="poduct__submenu">                                
                                <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Câmaras de Vigilância', 'product_cat'))); ?>" class="product__type">
                                    Câmaras de Vigilância<!--Câmaras de Vigilância-->
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>