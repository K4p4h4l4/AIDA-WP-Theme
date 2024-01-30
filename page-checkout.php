<?php 
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
            <?php 
                // Check if the user is logged in
                if (is_user_logged_in()) {
                    $current_user = wp_get_current_user();
                    $nome = get_user_meta($current_user->ID, 'first_name', true);
                    $sobrenome = get_user_meta($current_user->ID, 'last_name', true);
                    $email = $current_user->user_email;
                    $telefone = get_user_meta($current_user->ID, 'billing_phone', true);
                    $provincia = get_user_meta($current_user->ID, 'billing_state', true);
                    $municipio = get_user_meta($current_user->ID, 'billing_city', true);
                    $endereco = get_user_meta($current_user->ID, 'billing_address_1', true);
                    
                    // Get the current user ID
                    $user_id = get_current_user_id();
                    
                }
            
            ?>
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
                       <form name="usrform" method="post" action="./envio/">
                       <div class="information__links">
                           <div class="information__link-holder">
                               <a href="./carrinho/" class="information__link">Carrinho <i class="material-icons">chevron_right</i></a>
                           </div>
                           <div class="information__link-holder">
                               <a href="#" class="information__link">Informações <i class="material-icons">chevron_right</i></a>
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
                               <div class="contact__header">
                                   Email *
                               </div>
                               <div class="contact__email-holder">
                                   <input type="email" placeholder="Email" class="information__email" required name="user_email" id="usr_email" value="<?php if(isset($email)){echo $email;}?>">
                               </div>
                           </div>
                           <div class="information__contact-holder">
                               <div class="contact__header">
                                   Método de entrega *
                               </div>
                               <div class="contact__deliver">
                                   <input type="radio" class="information__radio" name="encomenda" value="Entrega">
                                   <div class="deliver__text-holder">
                                       <i class="material-icons">local_shipping</i>
                                       <p>Enviar</p>
                                   </div>
                               </div>
                               <!--div class="contact__deliver">
                                   <input type="radio" class="information__radio" name="encomenda" value="Recolha">
                                   <div class="deliver__text-holder">
                                       <i class="material-icons">home</i>
                                       <p>Recolha</p>
                                   </div>
                               </div-->
                           </div>
                           <div class="information__contact-holder">
                               <div class="contact__header">
                                   Endereço de envio *
                               </div>
                               <div class="address__country-holder">
                                   <select name="Pais" id="usr_country" class="address__country">
                                       <option value="Angola">Angola</option>
                                   </select>
                               </div>
                               <div class="owner__details">
                                   <input type="text" class="owner__names" placeholder="Nome" required name="usr_name" id="usr_name" value="<?php if(isset($nome)){ echo $nome; }?>">
                                   <input type="text" class="owner__names" placeholder="Sobrenome" required name="usr_surname" id="usr_surname" value="<?php if(isset($sobrenome)){ echo $sobrenome; }?>">
                               </div>
                               
                               <div class="owner__address">
                                   <input type="text" placeholder="Endereço" required name="usr_address" class="owner__address-details" id="usr_address" value="<?php if(isset($endereco)){echo $endereco;}?>">
                               </div>
                               
                               <div class="owner__address">
                                   <input type="text" placeholder="Cidade" class="owner__address-details" required name="usr_city" id="usr_city" value="<?php if(isset($provincia)){echo $provincia;}?>">
                               </div>
                               
                               <div class="owner__address">
                                   <input type="number" placeholder="Telefone" class="owner__address-details" min="910000000" value="<?php if(isset($telefone)){echo $telefone;}else{echo '910000000';}?>" required name="usr_phone" id="usr_phone">
                               </div>
                            
                           </div>
                           <div class="information__contact-holder">
                               <div class="contact__header">
                                   Informações adicionais
                               </div>
                               <div class="contact__comment-holder">
                                   <textarea name="contact__comments"  cols="5" rows="5" class="contact__comments" placeholder="Notas adicionais ao pedido (opcional)" name="usr_details" id="usr_details"></textarea>
                               </div>
                           </div>
                       </div>
                        </form>
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
                            AKZ
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
                    <button class="button__shipping" type="submit" form="usrform" id="usr_buttonInfo" data-order="<?php
                                    if (isset($order)) {
                                        echo $order->get_id();
                                    }
                                     ?>"><i class="material-icons">send</i> Continuar para envio</button>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    
<?php 
    get_footer();        
?>