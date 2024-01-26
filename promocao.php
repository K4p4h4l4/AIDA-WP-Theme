<?php 
    /* Template Name: produto */
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
                                <div class="product__discount">10%</div>
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
                                    <div class="product__price-old" ><del>AOA 100.000</del></div>
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
                                <div class="product__discount" >10%</div>
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
                                    <div class="product__price-old" ><del>AOA 100.000</del></div>
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
                                <div class="product__discount">10%</div>
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
                                    <div class="product__price-old" ><del>AOA 100.000</del></div>
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
                                <div class="product__discount">10%</div>
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
                                    <div class="product__price-old" ><del>AOA 100.000</del></div>
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
                                <div class="product__discount" >10%</div>
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
                                    <div class="product__price-old"><del>AOA 100.000</del></div>
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
                                <div class="product__discount" >10%</div>
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
                                    <div class="product__price-old" ><del>AOA 100.000</del></div>
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
    
    
    
    <!-- *****************************\
             Footer
    \******************************/-->
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Categorias</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Informática</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">TV Box</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Smarthphones e Tablets</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Consumíveis e Papel</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Informação</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Sobre nós</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Contacte-nos</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Política de Privacidade</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Termos & Condições</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Serviços</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Minha conta</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Carrinho</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Lista de desejos</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Contacte-nos</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                       
                        <a href="#" class="option"><i class="material-icons">phone</i> +244-923-695-077</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">email</i> geral@aida.ao</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">room</i> Zango 0, Vila Chinesa</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    <!-- *****************************\
             Footer bottom
    \******************************/-->
    <div class="footer__bottom">
        <div class="footer__bottom-details">
            <span>© 2023 AIDA - Advanced Internet Design Angola™ . Todos os Direitos Reservados</span>
        </div>
    </div>
    
    <div class="bg-modal">
        <div class="modal__content">
            <div class="modal__close">
                <div class="modal__close-btn">+</div>
            </div>
            <div class="modal__container-info">
                <div class="modal__product-img">
                    <img src="./img/8.jpg" alt="">
                </div>
                <div class="modal__product-info">
                    <div class="modal__product-title">
                        <h3>New Apple Watch SE (GPS, 44mm)</h3>
                    </div>
                    <div class="modal__product-rating">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star_half</i>
                        
                        <span class="modal__rating-value">4.4</span>
                        <span class="modal__rating-total"> 75 Avaliações</span>
                    </div>
                    <div class="modal__product-price">
                        <h3>AOA 300.000</h3>
                    </div>
                    <div class="modal__product-stock">
                        <span class="modal__stock-txt">Em Estoque</span>
                    </div>
                    <div class="modal__product-qtde">
                        <label for="Quantidade">Qtde:</label>
                        <input type="number" min="0" value="1" max="100">
                        <button class="modal__product-cart">
                            Adicionar ao carrinho
                        </button>
                    </div>
                    <div class="modal__product-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ex iure fugit minus nihil recusandae, beatae perspiciatis aut quibusdam architecto sapiente sed harum! Quae, consectetur?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/home.js"></script>
    <script src="js/default.js"></script>
</body>

</html>
