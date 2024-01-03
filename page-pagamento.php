<?php 
    /* Template Name: Sobre Nós */
    //get header.php file
    get_header();
?>

    <!-- *****************************\
             checkout container
    \******************************/-->
    <section class="checkout__holder">
        <div class="checkout__container">
            
            <!-- *****************************\
                Informações sobre o checkout
            \******************************/-->
            <div class="checkout__information-holder">
                <div class="checkout__information">
                    <div class="checkout__information-header">
                        <div class="checkout__information-logo">
                            <a href="index.php">
                                <img src="<?php echo get_theme_file_uri('assets/img/logo/logo.jpg'); ?>" alt="Logo" class="checkout__logo">
                            </a>                            
                        </div>
                    </div>
                    <div class="checkout__information-details">
                       <div class="information__links">
                           <div class="information__link-holder">
                               <a href="carrinho.php" class="information__link">Carrinho <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="checkout.php" class="information__link">Informações <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="#" class="information__link">Envio <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="#" class="information__link">Pagamento</a>
                           </div>
                       </div>
                       <div class="information__details-holder">
                           
                           <div class="information__contact-holder">
                              <form action="post" action="http://localhost:81/wordpress/pagamento/">
                               <div class="contact__header">
                                   Pagamento
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="kilamba" class="radio">
                                           <input type="radio" id="kilamba" class="information__radio" name="envio" value="2">
                                           <div class="radio__radio"></div>
                                       </label>
                                       
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>TPA - Terminal de Pagamento Automatico</h4>
                                       <p>Use o seu cartão multicaixa para pagar nos nossos TPAs no local, ou no acto da entrega da mercadoria</p>
                                   </div>
                                   
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="luanda_Ben_Cam_MorrB" class="radio">
                                           <input type="radio" id="luanda_Ben_Cam_MorrB" class="information__radio" value="3" name="envio">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>CASH | DINHEIRO VIVO</h4>
                                       <p>Pague a cash no nosso local ou no acto de entrega do produto</p>
                                   </div>
                                   
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="luanda_cidade" class="radio">
                                           <input type="radio" id="luanda_cidade" class="information__radio" value="4" name="envio">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Transferência Bancaria</h4>
                                       <p>Faça a transferência ou deposito para a Conta da GameShop - NIF 50001000 Game Shop Comércio e Serviços, Lda.
Banco Sol IBAN: AO06 0044 0000 0498 0385 101 85
Banco BFA IBAN: AO06 0006 0000 8927 9787 301 56
Banco Atlântico IBAN: AO06 0055 0000 6990 8792 1016 9
Banco BAI IBAN: AO06 0040 0000 4492 4828 1011 1
No final da transação, na app MulticaixaExpress, deve escolher a opção “Enviar por email” e inserir o nosso email “geral@gameshopangola.com” E ao mesmo tempo enviar o comprovativo para o nosso WhatsApp 923955004</p>
                                   </div>
                                   
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="luanda_Vi_ladS_Cac" class="radio">
                                           <input type="radio" id="luanda_Vi_ladS_Cac" class="information__radio" value="5" name="envio">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Multicaixa Express (Recomendado)</h4>
                                       <p>Método mais adequado e recomendado porque reduz significativamente o tempo de espera para validação do pagamento. Pagamento direto pelo aplicativo Multicaixa Express (sem precisar fazer transferência).</p>
                                   </div>
                                   
                               </div>
                               
                               
                               
                               
                               <?php 
                                   

                                ?>
                               </form>
                           </div>
                           
                           <div class="information__contact-holder">
                               <div class="contact__header">
                                   Termos de serviço
                               </div>
                               <div class="service__terms">
                                   <div class="deliver__radio-holder">
                                       <input type="checkbox" id="terms" class="information__checkbox">
                                   </div>
                                   <div class="service__terms-text">
                                       <p>Eu concordo e aceito incondicionalmente os termos de serviço. <a href="#" class="open__terms-modal">(ver termos de serviço)</a></p> 
                                   </div>
                                   
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
                
            </div>
            
            <!-- *****************************\
                    Produtos do checkout
            \******************************/-->
            <?php
                global $woocommerce;
                $products = $woocommerce->cart->get_cart();
                $total =0;
                //print_r($products);
            ?>
            <div class="checkout__products-holder">
                <div class="checkout__products-list">
                    <?php 
                        foreach($products as $product => $values){
                            $_product = wc_get_product($values['data']->get_id());
                    ?>
                            <div class="checkout__product-card">
                                <div class="product__card-img">
                                    <?php echo wp_get_attachment_image($_product->get_image_id());?>
                                    <div class="checkout__product-qtde">
                                        <span><?php echo $values['quantity']; ?></span>
                                    </div>                            
                                </div>
                                <div class="product__card-name">
                                    <?php echo $_product->get_name(); ?>
                                </div>
                                <div class="product__card-price">
                                    Kz
                                    <?php  
                                        echo number_format($values['line_subtotal'],  2, ',', '.');
                                        $total+=$values['line_subtotal'];                        
                                    ?>
                                </div>
                            </div>
                    <?php 
                        }
                    ?>
                    
                </div>
                
                <div class="checkout__total-holder">
                    <div class="checkout__subtotal-holder">
                        <div class="subtotal__text-holder">
                            Subtotal
                        </div>
                        <div class="subtotal__price-holder">
                            Kz
                            <?php echo number_format($total, 2, ',', '.'); ?>
                        </div>
                    </div>
                    <!--div class="checkout__subtotal-holder">
                        <div class="subtotal__text-holder">
                            Envio
                        </div>
                        <div class="subtotal__price-holder">
                            AOA 3.000,00
                        </div>
                    </div-->
                    <div class="checkout__total-container">
                        <div class="total__text-holder">
                            Total
                        </div>
                        <div class="total__price-holder">
                            Kz
                            <?php echo number_format($total, 2, ',', '.'); ?>
                        </div>
                    </div>
                </div>
                
                <div class="button__shipping-holder">
                    <?php
                        // Check if an order (cart) exists in the session
                        if (isset($_SESSION['cart'])) {
                            $order = $_SESSION['cart'];
                        }
                    ?>
                    <button class="button__shipping" type="submit" id="usr_shipp_pay" data-order="<?php
                                    if (isset($order)) {
                                        echo $order->get_id();
                                    }
                                     ?>"><i class="material-icons">attach_money</i> Prosseguir com encomenda</button>
                </div>
            </div>
        </div>
    </section>

<?php 
    //get footer.php file
    get_footer();        
?>