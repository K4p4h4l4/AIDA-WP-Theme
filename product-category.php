<?php
    /* Template Name: categorias */
    defined( 'ABSPATH' ) || exit;
    //get header.php file
    get_header();
    do_action( 'woocommerce_before_main_content' );
?>
    
    <!-- *****************************\
             Main header
    \******************************/-->
    <section class="main__header-container">
        <div class="header__container">
            <!-- *****************************\
                     Menu Principal
            \******************************/-->
            <div class="main__menu">
                <ul class="menu__options">
                    <li class="main__options informatic">
                        <i class="material-icons">computer</i> 
                        Informática
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-informatic ">
                            <li class="main__category-holder informatic-submenu">
                                <a href="" class="main__category">Computadores</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Computadores Portáteis</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Computadores de Mesa</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Armazenamento</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Disco Externo</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Pen USB</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Rede</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Extensor de Sinal</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Router</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Switch</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Telefone</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options tvbox">
                        <i class="material-icons">airplay</i>
                        TV Box
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-tvbox">
                            <li class="main__category-holder tvbox-submenu">
                                <a href="" class="main__category">Android Box</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Android box 1</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Android box 2</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Amazon</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Fire Stick</a></li>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options tablet">
                        <i class="material-icons">stay_current_portrait</i>
                        Smartphones e Tablets
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
                                <a href="" class="main__category">Smart Wathes</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Apple</a></li>
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
                        <i class="material-icons">library_books</i>
                        Consumívies e Papel
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
                                <a href="" class="main__category">Papel</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">Papel A4</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Papel A3</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="main__options games">
                        <i class="material-icons">sports_esports</i>
                        Jogos e Consola
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-games">
                            <li class="main__category-holder games-submenu">
                                <a href="" class="main__category">Jogos</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">PS5</a></li>
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
                        <i class="material-icons">adf_scanner</i>
                        Impressoras e Scaners
                        <i class="material-icons expand">expand_more</i>
                        <ul class="main__options-printer">
                            <li class="main__category-holder printer-submenu">
                                <a href="" class="main__category">Impressoras</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">HP</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Ricoh</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Kyocera</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main__category-holder">
                                <a href="" class="main__category">Scanners</a>
                                <div class="main__category-submenu">
                                    <ul class="category__submenu-product">
                                        <li class="poduct__submenu"><a href="" class="product__type">HP</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Brother</a></li>
                                        <li class="poduct__submenu"><a href="" class="product__type">Fujitsu</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            
            <?php 
                //$category = get_category(get_query_var('product_cat'));
                //print_r($category);
                $terms = get_the_terms();
                //echo get_query_var('cat'));
                 print_r( get_terms(['taxonomy'=>'product_cat']) ); 
            ?>
            <div class="catgories__container">
                <div class="categories__container-header">
                    <span class="categories__container-title">Computadores</span>
                    
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
                        <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">10%</div>
                                <a href="produto.php">
                                    <img src="./img/1-300x300.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__details">
                                <a href="produto.php">
                                    <span>Canon Canonet</span>
                                    <div class="rating">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                    </div>
                                    <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                    <div class="price__holder">
                                        <div class="product__price">AOA 90.000</div>
                                        <div class="product__price-old"><del>AOA 100.000</del></div>
                                    </div>
                                </a>
                                <div class="product__buttons">
                                    <button class="product__btn" id="infoProductModal"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/7.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>ASUS Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 495.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/12-300x300.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Samsung A3</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 220.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/26.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Gaming Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 1.090.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">33%</div>
                                <img src="./img/Left-banner-1-1.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Best Beats</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 110.000</div>
                                    <div class="product__price-old"><del>AOA 180.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">15%</div>
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Good Tablet</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 100.000</div>
                                    <div class="product__price-old"><del>AOA 120.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/7.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>ASUS Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 495.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/12-300x300.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Samsung A3</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 220.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount" style="display:none">10%</div>
                                <img src="./img/26.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Gaming Laptop</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 1.090.000</div>
                                    <div class="product__price-old" style="display:none"><del>AOA 100.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">33%</div>
                                <img src="./img/Left-banner-1-1.jpg" alt="">
                            </div>
                            <div class="product__details">
                                <span>Best Beats</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 110.000</div>
                                    <div class="product__price-old"><del>AOA 180.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                         <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">15%</div>
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Good Tablet</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 100.000</div>
                                    <div class="product__price-old"><del>AOA 120.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="product__card">
                            <div class="product__img">
                                <div class="product__discount">15%</div>
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product__details">
                                <span>Good Tablet</span>
                                <div class="rating">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, sit.</p-->
                                <div class="price__holder">
                                    <div class="product__price">AOA 100.000</div>
                                    <div class="product__price-old"><del>AOA 120.000</del></div>
                                </div>
                                
                                <div class="product__buttons">
                                    <button class="product__btn"><i class="material-icons">remove_red_eye</i></button>
                                    <button class="product__btn"><i class="material-icons">favorite_border</i></button>
                                    <button class="product__btn"><i class="material-icons">shopping_cart</i></button>
                                    
                                </div>
                            </div>
                        </div>                      
                         
                    </div>
            </div>
            
        </div>
    </section>
    
    
    
 <?php 
    //get footer.php file
    get_footer();                         
?>
