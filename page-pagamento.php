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
                               <a href="./carrinho/" class="information__link">Carrinho <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="./checkout/" class="information__link">Informações <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="./envio/" class="information__link">Envio <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="#" class="information__link">Pagamento</a>
                           </div>
                       </div>
                       <div class="information__details-holder">
                           
                           <div class="information__contact-holder">
                              <form action="post" action="./pagamento/">
                               <div class="contact__header">
                                   Pagamento
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="tpa" class="radio">
                                           <input type="radio" id="tpa" class="information__radio" name="pagamento" value="1">
                                           <div class="radio__radio"></div>
                                       </label>
                                       
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>TPA - Terminal de Pagamento Automático</h4>
                                       <p>Use o seu cartão multicaixa para pagar nos nossos TPAs no local, ou no acto da entrega da mercadoria.</p>
                                   </div>
                                   
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="cash" class="radio">
                                           <input type="radio" id="cash" class="information__radio" value="2" name="pagamento">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>CASH | DINHEIRO VIVO</h4>
                                       <p>Pague a cash no nosso local ou no acto de entrega do produto.</p>
                                   </div>
                                   
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="transfer" class="radio">
                                           <input type="radio" id="transfer" class="information__radio" value="3" name="pagamento">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Transferência Bancária</h4>
                                       <p>Faça a transferência ou deposito para a Conta da ADVANCED INTERNET DESIGN ANGOLA (AIDA) - NIF 50001000 Game Shop Comércio e Serviços, Lda.</p>
                                       <br>
                                        <p>Banco BFA IBAN: AO06 0055 0000 8838 4866 1016 2 </p><br>
                                        <p>Banco Atlântico IBAN: AO06 0034 0000 0500 8373 3585 8 </p><br>
                                        <p>Banco BAI IBAN: AO06 0040 0000 6277 3928 1014 8</p><br>
                                        <p>No final da transação, na app MulticaixaExpress, deve escolher a opção “Enviar por email” e inserir o nosso email “geral@aida.ao” E ao mesmo tempo enviar o comprovativo para o nosso WhatsApp 923695077</p>
                                   </div>
                                   
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="express" class="radio">
                                           <input type="radio" id="express" class="information__radio" value="4" name="pagamento">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Multicaixa Express (Recomendado)</h4>
                                       <p>Método mais adequado e recomendado porque reduz significativamente o tempo de espera para validação do pagamento. Pagamento direto pelo aplicativo Multicaixa Express (sem precisar fazer transferência).</p>
                                   </div>
                                   
                               </div>
                               
                               </form>
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
                            AKZ
                            <?php echo number_format($total, 2, ',', '.'); ?>
                        </div>
                    </div>
                    <div class="checkout__subtotal-holder">
                        <div class="subtotal__text-holder">
                            Envio
                        </div>
                        <div class="subtotal__price-holder">
                            <?php
                                // Check if an order (cart) exists in the session
                                if (isset($_SESSION['cart'])) {
                                    $order = $_SESSION['cart'];
                                }
                                echo number_format($order->get_shipping_total() , 2, ',', '.');
                            ?>
                            
                        </div>
                    </div>
                    <div class="checkout__total-container">
                        <div class="total__text-holder">
                            Total
                        </div>
                        <div class="total__price-holder">
                            AKZ
                            <?php echo number_format($order->get_total() , 2, ',', '.'); ?>
                        </div>
                    </div>
                </div>
                
                <div class="button__shipping-holder">
                    
                    <!--?php
                        // Check if an order (cart) exists in the session
                        if (isset($_SESSION['cart'])) {
                            $order = $_SESSION['cart'];
                        }
                    ?-->
                    <button class="button__shipping" type="submit" id="usr_pay" data-order="<?php
                                    if (isset($order)) {
                                        echo $order->get_id();
                                    }
                                     ?>"><i class="material-icons">local_shipping</i> Prosseguir com encomenda</button>
                </div>
            </div>
        </div>
    </section>

<?php 
    //get footer.php file
    get_footer();        
?>