<?php 
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
                                   Envio
                               </div>
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="netflix" class="radio">
                                            <input type="radio" id="netflix" class="information__radio" name="envio" value="1">
                                            <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Serviço de streaming (Netflix, Disney+, HBO)</h4>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>Grátis</h4>                                       
                                   </div>
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       <label for="kilamba" class="radio">
                                           <input type="radio" id="kilamba" class="information__radio" name="envio" value="2">
                                           <div class="radio__radio"></div>
                                       </label>
                                       
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Centralidade Vida Pacífica (Zango 0)</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AKZ 1.500</h4>                                       
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
                                       <h4>Luanda - Fora da Cidade (Benfica/Camama/Morro Bento/Centralidade do Kilamba e KK5000/Talatona/Gamek/ Patriota/Golf .)</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AKZ 2.000</h4>                                       
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
                                       <h4>Luanda - Dentro da Cidade de Luanda (Maianga, Ingombotas, Rangel,etc.)</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AKZ 2.500</h4>                                       
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
                                       <h4>Luanda - Fora da Cidade (Viana / Luanda Sul/Cacuaco)</h4>
                                       <p>Tempo de envio: Entrega até 24/48h após pagamento - Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AKZ 2.800</h4>
                                       <p></p>
                                   </div>
                               </div>
                               
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="dhl" class="radio">
                                           <input type="radio" id="dhl" class="information__radio" value="6" name="envio">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Outras Províncias de Angola (DHL)</h4>
                                       <p>Tempo de envio: Entrega até 72h após pagamento </p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>AKZ 11.500</h4>
                                       <p></p>
                                   </div>
                               </div>
                               <div class="contact__deliver">
                                   <div class="deliver__radio-holder">
                                       
                                       <label for="levantamento_local" class="radio">
                                           <input type="radio" id="levantamento_local" class="information__radio" value="7" name="envio">
                                           <div class="radio__radio"></div>
                                       </label>
                                   </div>
                                   <div class="deliver__text-holder">
                                       <h4>Levantamento no local</h4>
                                       <p>Período para o levantamento: Dias úteis das 8h às 16h30 e Sábados das 9h às 13h</p>
                                   </div>
                                   <div class="deliver__price-holder">
                                       <h4>Grátis</h4>
                                       <p></p>
                                   </div>
                               </div>
                               
                               <?php 
                                   /* function list_shipping_zones() {
    // Get all shipping zones
    $shipping_zones = WC_Shipping_Zones::get_zones();

    foreach ($shipping_zones as $zone) {
        
        echo '<h2>' . esc_html($zone['zone_name']) . '</h2>';

        // Loop through zone methods esc_html($method->get_cost()).
        foreach ($zone['shipping_methods'] as $method) {
            echo '<p>' . esc_html($method->get_title()) . ' : '. esc_html($method->get_instance_id()) . '</p>';
        }
    }
    print_r($shipping_zones);
}

// Call the function to list shipping zones
list_shipping_zones();*/

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
                                    AKZ
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
                        <div class="subtotal__price-holder subtotal__price">
                            AKZ
                            <?php echo number_format($total, 2, ',', '.'); ?>
                        </div>
                    </div>
                    <div class="checkout__subtotal-holder">
                        <div class="subtotal__text-holder">
                            Envio
                        </div>
                        <div class="subtotal__price-holder" id="shippingValue">
                            AKZ 0,00
                        </div>
                    </div>
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
                    <button class="button__shipping" type="submit" id="usr_shipp_pay" data-order="<?php
                                    if (isset($order)) {
                                        echo $order->get_id();
                                    }
                                     ?>"><i class="material-icons">attach_money</i> Prosseguir para pagamento</button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- *****************************\
             Terms modal
    \******************************/-->
    <dialog class="terms__modal" id="terms__modal" >
       <div class="close__button-holder">
           <div class="close__terms-modal">+</div>
       </div>
       <div class="terms__modal-title">
           <h2>TERMOS E CONDIÇÕES GERAIS DE VENDA E UTILIZAÇÃO DO SITIO DE COMÉRCIO ELECTRÓNICO</h2>
       </div>
       <div class="terms__modal-body">
           <div class="subject__body">
               <div class="terms__sudtitle">
                   <h3>A. Informação Geral sobre os produtos comercializados</h3>
                   <h3>B. Condições Gerais de Venda</h3>
               </div>
               <div class="body__text">
                   Estas condições gerais são acordadas entre a sociedade AIDA – Lda., sociedade comercial de direito angolano, com sede na Vila Chinesa, Luanda, matriculada na Conservatória do Registo Comercial de Luanda sob o número 1957.2255 com o capital social de cem mil Kwanzas e com o número de identificação fiscal 5000374458 (doravante designada por “AIDA”) e entre qualquer pessoa que deseje efectuar uma compra através do Sítio de comércio electrónico www.aida.ao (doravante designada por “Cliente”). As partes acordam que as suas relações serão reguladas exclusivamente pelas condições gerais aqui descritas.
               </div>
           </div>
           
           <div class="subject__body">
               <div class="terms__sudtitle">
                   <h3>A. Informação Geral sobre os produtos comercializados</h3>
               </div>
               <div class="body__text">
                   <h4>1. Fotografias</h4>
                   As fotografias apresentadas ou usadas são meramente ilustrativas dos produtos e não têm valor contratual, não podendo dar origem a qualquer tipo de compromisso por parte da AIDA.
               </div>
               <div class="body__text">
                   <h4>2. Descrições</h4>
                   A AIDA declina qualquer responsabilidade quanto à validade do conteúdo das descrições dos produtos. Esta informação é inteiramente da responsabilidade dos nossos fornecedores e/ou respectivos fabricantes.
               </div>
               
               <div class="body__text">
                   <h4>3. Fichas Técnicas</h4>
                   <p> A AIDA isenta-se de qualquer responsabilidade quanto à validade do conteúdo das fichas técnicas dos produtos as quais são elaboradas exclusivamente pelos fornecedores dos produtos.</p>
                   <br>
                   <p> A informação técnica dos produtos comercializados é fornecida pela Open Icecat.Biz, ao abrigo da OpenContent License (OPL) que pode ser consultada em http://opencontent.org/opl.shtml. A Open Icecat detém todos os direitos de copyright sobre a informação das fichas técnicas.</p>
               </div>
               
               <div class="body__text">
                   <h4>4. Manual de Utilizador</h4>
                   Os manuais de utilizador fornecidos com cada um dos produtos comercializados pela AIDA são elaborados pelo fabricante e da sua exclusiva responsabilidade. A AIDA não pode ser responsabilizada por qualquer incorrecção e/ou omissão constante nos referidos manuais.
               </div>
               <div class="terms__sudtitle">
                   <h3>B. Condições Gerais de Venda</h3>
               </div>
               <div class="body__text">
                   <h4>1. Finalidade e âmbito de aplicação</h4>
                    <p> As presentes condições e estipulações têm como finalidade regular o uso dos serviços fornecidos pela AIDA, que opera através da internet a partir do Sítio de comércio electrónico www.aida.ao vendendo aos seus Clientes produtos de electrónica de consumo, informática, electrodomésticos, sistemas de áudio e vídeo, aparelhos de gravação de som e imagem, telemóveis, entre outros.</p>
                    <br>
                    <p>Para os efeitos das presentes condições e estipulações, são consideradas vendas da AIDA, todas as compras realizadas através do Site de comércio electrónico www.aida.ao, cujo pagamento seja realizado por transferência bancária ou depósito ou pagamento via Entidade/ referência Multicaixa, em Dólares Norte-Americanos (USD) ou Kwanzas Angolanos (AKZ), para as contas bancárias da AIDA, domiciliadas em Angola.</p>
                    <br>
                    <p>As cláusulas que compõem estas Condições Gerais vinculam ambas as partes e formam parte integrante e inseparável do contrato de compra e venda cuja eficácia opera com a confirmação do Cliente, dada na sequência do aviso de recepção da encomenda por parte da AIDA, através dos mecanismos de contratação que posteriormente se especificarão.</p>
                    <br>
                    <p>A AIDA, pode rever as presentes condições de venda, a todo o tempo e com efeitos imediatos após a sua exposição no Site de comércio eletrónico www.aida.ao. O Cliente fica vinculado às condições de venda vigentes na data da aceitação da sua encomenda, devendo para o efeito consultá-las periodicamente.</p>
               </div>
               <div class="body__text">
                   <h4>2. Objecto</h4>
                   As presentes Condições Gerais regulam a prestação dos serviços de vendas, contratação de produtos e serviços oferecidos pela AIDA e a publicidade da marca AIDA dirigida aos seus Clientes/utilizadores, através do de comércio eletrónico www.aida.ao, assim como os direitos e obrigações das partes que derivam das operações de compra e venda acordadas entre os mesmos.
               </div>
           </div>

      
      
       </div>

    </dialog>
    
<?php 
    //get footer.php file
    get_footer();        
?>
