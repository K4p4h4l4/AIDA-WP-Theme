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
                              <form action="post" action="./envio/">
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
           <h1>TERMOS E CONDIÇÕES GERAIS DE VENDA E UTILIZAÇÃO DO SITIO DE COMÉRCIO ELECTRÓNICO</h1>
       </div>
       <div class="terms__modal-body">
           <div class="subject__body">
               <div class="terms__sudtitle">
                   <h2>A. Informação Geral sobre os produtos comercializados</h2>
                   <h2>B. Condições Gerais de Venda</h2>
               </div>
               <div class="body__text">
                   Estas condições gerais são acordadas entre a sociedade AIDA – Lda., sociedade comercial de direito angolano, com sede na Vila Chinesa, Luanda, matriculada na Conservatória do Registo Comercial de Luanda sob o número 1957.2255 com o capital social de cem mil Kwanzas e com o número de identificação fiscal 5000374458 (doravante designada por “AIDA”) e entre qualquer pessoa que deseje efectuar uma compra através do Sítio de comércio electrónico www.aida.ao (doravante designada por “Cliente”). As partes acordam que as suas relações serão reguladas exclusivamente pelas condições gerais aqui descritas.
               </div>
           </div>
           
           <div class="subject__body">
               <div class="terms__sudtitle">
                   <h2>A. Informação Geral sobre os produtos comercializados</h2>
               </div>
               <div class="body__text">
                   <h3>1. Fotografias</h3>
                   As fotografias apresentadas ou usadas são meramente ilustrativas dos produtos e não têm valor contratual, não podendo dar origem a qualquer tipo de compromisso por parte da AIDA.
               </div>
               <div class="body__text">
                   <h3>2. Descrições</h3>
                   A AIDA declina qualquer responsabilidade quanto à validade do conteúdo das descrições dos produtos. Esta informação é inteiramente da responsabilidade dos nossos fornecedores e/ou respectivos fabricantes.
               </div>
               
               <div class="body__text">
                   <h3>3. Fichas Técnicas</h3>
                   <p> A AIDA isenta-se de qualquer responsabilidade quanto à validade do conteúdo das fichas técnicas dos produtos as quais são elaboradas exclusivamente pelos fornecedores dos produtos.</p>
                   <br>
                   <p> A informação técnica dos produtos comercializados é fornecida pela Open Icecat.Biz, ao abrigo da OpenContent License (OPL) que pode ser consultada em http://opencontent.org/opl.shtml. A Open Icecat detém todos os direitos de copyright sobre a informação das fichas técnicas.</p>
               </div>
               
               <div class="body__text">
                   <h3>4. Manual de Utilizador</h3>
                   Os manuais de utilizador fornecidos com cada um dos produtos comercializados pela AIDA são elaborados pelo fabricante e da sua exclusiva responsabilidade. A AIDA não pode ser responsabilizada por qualquer incorrecção e/ou omissão constante nos referidos manuais.
               </div>
               <div class="terms__sudtitle">
                   <h3>B. Condições Gerais de Venda</h3>
               </div>
               <div class="body__text">
                   <h3>1. Finalidade e âmbito de aplicação</h3>
                    <p> As presentes condições e estipulações têm como finalidade regular o uso dos serviços fornecidos pela AIDA, que opera através da internet a partir do Sítio de comércio electrónico www.aida.ao vendendo aos seus Clientes produtos de electrónica de consumo, informática, electrodomésticos, sistemas de áudio e vídeo, aparelhos de gravação de som e imagem, telemóveis, entre outros.</p>
                    <br>
                    <p>Para os efeitos das presentes condições e estipulações, são consideradas vendas da AIDA, todas as compras realizadas através do Site de comércio electrónico www.aida.ao, cujo pagamento seja realizado por transferência bancária ou depósito ou pagamento via Entidade/ referência Multicaixa, em Dólares Norte-Americanos (USD) ou Kwanzas Angolanos (AKZ), para as contas bancárias da AIDA, domiciliadas em Angola.</p>
                    <br>
                    <p>As cláusulas que compõem estas Condições Gerais vinculam ambas as partes e formam parte integrante e inseparável do contrato de compra e venda cuja eficácia opera com a confirmação do Cliente, dada na sequência do aviso de recepção da encomenda por parte da AIDA, através dos mecanismos de contratação que posteriormente se especificarão.</p>
                    <br>
                    <p>A AIDA, pode rever as presentes condições de venda, a todo o tempo e com efeitos imediatos após a sua exposição no Site de comércio eletrónico www.aida.ao. O Cliente fica vinculado às condições de venda vigentes na data da aceitação da sua encomenda, devendo para o efeito consultá-las periodicamente.</p>
               </div>
               <div class="body__text">
                   <h3>2. Objecto</h3>
                   <p>As presentes Condições Gerais regulam a prestação dos serviços de vendas, contratação de produtos e serviços oferecidos pela AIDA e a publicidade da marca AIDA dirigida aos seus Clientes/utilizadores, através do de comércio eletrónico www.aida.ao, assim como os direitos e obrigações das partes que derivam das operações de compra e venda acordadas entre os mesmos.</p>
               </div>
               <div class="body__text">
                   <h3>3. Condições Legais de Venda e Responsabilidade</h3>
                   <br>
                   <h3>3.1. Transparência da informação</h3>
                   <p>A AIDA, através do Sítio de comércio eletrónico www.aida.ao e das presentes Condições Gerais, torna possível o acesso por meios electrónicos de forma permanente, fácil, directa e gratuita à informação relativa à sua razão social, endereço de comunicações, assim como os dados do Cliente, de acesso exclusivo ao mesmo, que estejam em poder da AIDA.</p>
                   <br>
                   <h3>3.2. Confidencialidade dos Dados e Informação facultada pelos Clientes e Utilizadores</h3>
                   <p>A AIDA compromete-se a não utilizar os dados pessoais dos seus Clientes ou utilizadores para fins distintos e alheios ao objecto da contratação dos serviços que presta, protegendo, mediante medidas apropriadas, a confidencialidade dos mesmos, a sua eliminação ou alteração e o acesso não autorizado à referida informação.</p>
                   <br>
                   <h3>3.3. Segurança no Tratamento, Processo Informático e Custódia de Dados</h3>
                   <p>A AIDA, envida todos os esforços e emprega as melhores tecnologias para garantir a segurança no tratamento dos dados dos Clientes.</p>
                   <br>
                   <h3>3.4 Publicidade e Ofertas Personalizadas ao Cliente</h3>
                   <p>A AIDA, mediante e-mail ou serviço de atendimento ao Cliente, poderá emitir ofertas, campanhas, informações sobre novidades, produtos e promoções, sempre que o Cliente, com carácter prévio, aceite esta modalidade de comunicação (Newsletter/Novidades AIDA Angola e/ou outras). A subscrição da newsletter AIDA Angolae/ou outras, pode suceder no processo de registo do Cliente, finalização de encomenda, através da definição de perfil de Cliente ou através da funcionalidade de subscrição de Newsletter.</p>
               </div>
               <div class="body__text">
                   <h3>4. Condições de acesso do utilizador/Cliente</h3>
                   <p>O utilizador do Sítio de comércio eletrónico www.aida.ao, através do qual a sociedade AIDA presta os seus serviços de venda, terá direito ao acesso livre e gratuito à informação pública disponibilizada no referido Sítio. No entanto, a AIDA reserva-se o direito de apenas disponibilizar o acesso a informações, promoções e ofertas especiais aos seus Clientes registados.</p>
                   <br>
                   <p>Qualquer utilizador que aceda ao Sítio www.aida.ao, através do qual a sociedade AIDA presta os seus serviços de venda, tem o direito de se registar Cliente, podendo assim beneficiar das informações, promoções e ofertas especiais destinadas aos Clientes de acordo com as condições da oferta que para cada produto se especifiquem.</p>
                   <br>
                   <p>A informação pública incluída no Sítio www.aida.ao, com referência tanto à AIDA, como a marcas, produtos e logótipos das empresas grossistas e fabricantes dos produtos e serviços oferecidos encontra-se protegida pelas disposições legislativas sobre direitos de protecção da propriedade intelectual e industrial, e portanto não está autorizada a cópia, transmissão, cessão, alienação ou utilização pelo Cliente alheias à finalidade publicitária da sua publicação virtual que não tenham o consentimento expresso da AIDA ou do fabricante do produto ou titular da marca e logótipo.</p>
               </div>
               <div class="body__text">
                   <h3>5. Registo do Cliente</h3>
                   <p>O Cliente, previamente à formalização da compra de qualquer dos produtos oferecidos pela AIDA, deverá indicar os seus dados e informações pessoais necessárias à formalização do contrato de compra e venda e a entrega da respectiva encomenda (nome e apelido ou denominação social, número de identificação fiscal, dados para envio e dados para facturação, caso sejam diferentes dos dados de envio, e-mail e contacto telefónico).</p>
                   <br>
                   <p>A AIDA poderá solicitar ao Cliente outros dados pessoais adicionais que lhe permitam conhecer, para efeitos estatísticos, o perfil do Cliente. O Cliente poderá omitir ou deixar de comunicar qualquer dado ou informação pessoal que não sejam absolutamente necessários para a realização da compra e entrega da respectiva encomenda.</p>
                   <br>
                   <p>A AIDA poderá oferecer ao Cliente um sistema de registo pessoal através de um endereço de e-mail válido e uma palavra-passe para facilitar ao Cliente futuras operações de compra. Neste caso, é o Cliente que terá de indicar ao seu critério, o endereço de e-mail e respectiva palavra-passe para acesso à sua conta de Cliente, sempre e quando estas estejam disponíveis ou não estejam atribuídas a outros Clientes. Não se admitirão nomes de utilizador ou palavras-chave injuriosos, insinuantes, discriminatórios ou que contradigam os termos das leis, nem aquelas com termos que prejudiquem as marcas, produtos ou denominações protegidas pelo Código de Propriedade Industrial ou sobre os direitos relativos à reserva sobre a intimidade da vida privada, a honra, bom-nome e/ou imagem.</p>
                   <br>
                   <p>O Cliente compromete-se a assegurar a protecção e confidencialidade do seu próprio endereço de e-mail de acesso e respectiva palavra-passe. A AIDA não se responsabilizará pelo uso doloso ou negligente do Cliente em relação à obrigação de confidencialidade dos seus códigos de acesso.</p>
               </div>
               <div class="body__text">
                   <h3>6. Processo de Oferta e Aceitação, Condições de Compra e Venda e respectiva Entrega do Produto</h3>
                   <br>
                   <h3>6.1. Política de Preço</h3>
                   <p>A AIDA reserva-se o direito de, em cada momento, unilateralmente e até à finalização da compra, modificar os preços dos produtos e serviços oferecidos através do Sítio www.aida.ao. O preço de cada produto comercializado é o preço indicado explicitamente em cada um dos artigos.</p>
                   <br>
                   <p>Os preços indicados são exclusivos para a compra através do Sítio www.aida.ao.</p>
                   <br>
                   <p>Os preços apresentados são os preços finais de venda ao consumidor. Já estão incluídos os custos de transporte, até à morada de envio, indicada pelo Cliente durante o processo de finalização da encomenda, incluindo o respectivo seguro. Estão também incluídos os impostos e taxas aduaneiras relativas à entrada da mercadoria em território Angolano. Estes pressupostos de composição do preço final de venda ao consumidor são sempre válidos, excepto nas situações em que seja explicitamente indicado o contrário.</p>
                   <br>
                   <p>O valor total final, a ser pago pelo Cliente, pelas compras realizadas, é a soma total apurada para os produtos escolhidos, nas quantidades indicadas. Este valor é calculado no carrinho de compras e apresentado no processo de finalização da compra.</p>
                   <br>
                   <p>Os preços podem ser apresentados em euros (EUR), dólares norte-americanos (USD) e Kwanzas angolanos (AKZ).</p>
                   <br>
                   <p>O Cliente deve selecionar a moeda em que pretende visualizar os produtos e efectuar a respectiva compra. Para o fazer existe uma ferramenta de selecção de moeda, no canto superior direito do Sítio www.aida.ao.</p>
                   <br>
                   <p>As moedas estão relacionadas com o meio de pagamento utilizado para realizar o pagamento da compra/encomenda, tal como indicado no ponto prévio “Finalidade e Âmbito de Aplicação” das presentes condições gerais de venda.</p>
                   <br>
                   <h3>6.2. Processo de Compra</h3>
                   <p>O processo interactivo de compra electrónica no Sítio www.aida.ao é constituído pelas seguintes fases:</p>
                   <br>
                   <h4>6.2.1. Consulta dos Produtos oferecidos ao Cliente</h4>
                   <p>O Cliente pode consultar os produtos disponíveis de diferentes formas. Pode navegar pelas categorias de produtos, realizar uma pesquisa, analisar os produtos em destaque ou consultar o Top de Vendas.</p>
                   <br>
                   <p>A apresentação dos produtos comercializados é realizada com a informação relevante para o Cliente, nomeadamente, nome do produto, marca, preço, descrição, características técnicas, ficha técnica (sempre que exista e esteja disponível) e fotografia ilustrativa do produto.</p>
                   <br>
                   <h4>6.2.2.Selecção dos Produtos pretendidos</h4>
                   <p>A escolha, por parte do Cliente, dos produtos pretendidos é realizada adicionando os produtos ao carrinho de compras. O Cliente pode adicionar, retirar e alterar as quantidades dos produtos existentes no seu carrinho de compras, em qualquer momento, desde que o faça antes da confirmação de compra/encomenda (etapa final do processo de finalização da compra).</p>
                   <br>
                   <h3>6.3. Finalização da Compra/Encomenda</h3>
                   <br>
                   <h4>6.3.1 Resumo do Carrinho de Compras</h4>
                   <p>A primeira etapa do processo de finalização da compra/encomenda consiste na apresentação do carrinho de compras e dos produtos selecionados para compra e suas quantidades.</p>
                   <br>
                   <p>Nesse momento é apresentado ao Cliente o valor total final a pagar pela compra/encomenda.</p>
                   <br>
                   <p>O Cliente tem de confirmar a moeda pretendida para realizar o pagamento, tendo em consideração o meio de pagamento que irá utilizar para pagar a sua compra.</p>
                   <br>
                   <h4>6.3.2 Identificação do Cliente</h4>
                   <p>São recolhidos os dados indispensáveis para identificar o Cliente - caso se trate de um novo Cliente (um Cliente que ainda não é Cliente registado), este tem obrigatoriamente de preencher a ficha de registo de Novo Cliente.</p>
                   <br>
                   <p>Caso se trate de um Cliente já registado, será solicitado que insira o seu nome de Cliente e a sua palavra passe para que seja identificada a sua conta de Cliente.</p>
                   <br>
                   <h4>6.3.3 Informação para o Envio da encomenda</h4>
                   <p>De seguida, para garantir o envio da encomenda são recolhidos os dados relativos à morada de entrega e um número de contacto telefónico fixo/móvel para coordenação do momento de entrega da encomenda.</p>
                   <br>
                   <h4>6.3.4 Informação para a Facturação</h4>
                   <p>Para garantir a facturação da encomenda são recolhidos os dados relevantes, nomeadamente a morada de facturação, que pode ser igual ou diferente da morada de envio e, no caso dos Clientes Empresa é indispensável o respectivo nº de identificação fiscal.</p>
                   <br>
                   <h4>6.3.5 Aceitação dos Termos e Condições</h4>
                   <p>É necessário confirmar a aceitação dos termos e condições de venda para prosseguir com o processo de finalização da encomenda. Os termos e condições devem ser consultados previamente pelo Cliente, acedendo ao respectivo link, o qual se encontra devidamente identificado na rodapé do sitio www.aida.ao</p>
                   <br>
                   <h4>6.3.6 Escolha do Meio de Pagamento</h4>
                   <p>O Cliente terá de escolher o meio de pagamento entre os meios disponíveis, de acordo com a moeda selecionada anteriormente. Nesta fase, caso o Cliente pretenda alterar a moeda, o processo terá de retroceder até à primeira etapa “Resumo do Carrinho de Compras”.</p>
                   <br>
                   <h4>6.3.7 Resumo final da Encomenda</h4>
                   <p>É apresentado um resumo final da encomenda e dos dados fornecidos, para validação e revisão do Cliente. Caso seja necessário, é possível realizar alterações à encomenda e aos respectivos dados fornecidos.</p>
                   <br>
                   <h4>6.3.8. Conclusão da Encomenda</h4>
                   <p>Ao selecionar a opção “encomendar”, é realizada a compra e processado o pagamento, dependendo do meio de pagamento escolhido. De seguida, é enviado ao Cliente um e-mail, para o endereço indicado, com a confirmação de encomenda. A partir deste momento, é assumida a aceitação por parte do Cliente da validade do contrato de compra e venda que obriga o Cliente e a AIDA.</p>
                   <br>
                   <h3>6.4. Disponibilidade dos Produtos</h3>
                   <br>
                   <p>O compromisso assumido pela AIDA pela venda e expedição dos produtos encomendados está limitada ao stock existente do produto anunciado e à disponibilidade do mesmo nos fornecedores. A AIDA, no seu compromisso de qualidade e serviço ao Cliente, fará o maior esforço para que em todo momento os produtos publicados estejam disponíveis.</p>
                   <br>
                   <p>No entanto, na falta de disponibilidade do produto, a encomenda e o contrato subscrito entre ambas as partes perdem efeito em virtude da presente cláusula resolutiva, comprometendo-se a AIDA a restituir ou reembolsar integralmente o Cliente a quantia eventualmente paga pelo mesmo no prazo de 20 dias a contar da data dessa indisponibilidade, sem que possa produzir a favor de nenhuma das partes indemnização em virtude de incumprimento contratual, dano emergente ou lucro cessante.</p>
                   <br>
                   <p>O produto adquirido poderá sofrer, por disposição do fabricante, modificações não substanciais nos seus componentes, características ou prestações do lote que integra, sempre e quando não suponham uma diminuição das qualidades e características publicadas, sem que isso possa acarretar qualquer responsabilidade para a AIDA.</p>
                   <br>
                   <h3>6.5. Formas de Pagamento</h3>
                   <br>
                   <p>A AIDA, disponibiliza as seguintes formas de pagamento:</p>
                   <br>
                   <h4>6.5.1. Transferência Bancária / Depósito / Pagamento Multicaixa</h4>
                   <p>a) Disponível para os Clientes que pretendam efectuar os pagamentos através de transferência bancária ou depósito nas contas da AIDA domiciliadas em Angola.</p>
                   <br>
                   <p>b) Os pagamentos são realizados em Kwanzas (AKZ) ou Dólares Norte-Americanos (USD);</p>
                   <br>
                   <p>c) A transferência ou depósito deverá ser realizado em favor da AIDA, de acordo com os dados de conta indicados no e-mail de confirmação da encomenda;</p>
                   <br>
                   <p>d) Os pagamentos são realizados num prazo máximo de dois dias úteis, se tal não acontecer a AIDA, considerará a encomenda anulada.</p>
                   <br>
                   <p>e) A encomenda só é considerada válida, após a confirmação, por parte da AIDA do respectivo pagamento. Para o efeito, o Cliente tem de enviar um comprovativo da transferência / depósito, indicando o respectivo nº de encomenda, para o endereço de e-mail encomendas.online@aida.ao. Caso o Cliente não consiga enviar o respectivo comprovativo, deverá contactar a AIDA, através do e-mail indicado ou da linha telefónica de suporte no prazo de 12 horas alertando para a realização do pagamento;</p>
                   <br>
                   <p>f) Se o pagamento não for confirmado, após um prazo de 3 dias úteis, da data de envio do e-mail de confirmação, a encomenda é cancelada. Nestes casos, se o Cliente desejar pode realizar uma nova encomenda;</p>
                   <br>
                   <p>g) Caso o pagamento seja confirmado, a encomenda é considerada válida pela AIDA e tem início o seu processamento logístico, para respectivo envio ao Cliente.</p>
                   <br>
                   <h3>6.6. Facturação</h3>
                   <br>
                   <p>Uma vez confirmado o pagamento, a AIDA, emitirá uma factura física que será enviada para a morada de facturação indicada. É também enviado um e-mail com os dados de facturação, para o endereço electrónico designado pelo Cliente. A AIDA adverte o Cliente que não poderá modificar posteriormente as facturas de venda em cumprimento da norma vigente. A factura será emitida em nome da pessoa física ou sociedade comercial cliente indicada no momento de recolha dos dados de facturação, pelo que o Cliente deve sempre assegurar que realizou a encomenda com os dados correctos. Pelo exposto, não será efectuada qualquer alteração.</p>
                   <br>
                   <h3>6.7. Prazo de Entrega</h3>
                   <br>
                   <p>O prazo de entrega depende da disponibilidade dos produtos encomendados, da localização da morada de entrega e do tipo de serviço de entrega escolhido pelo Cliente.</p>
                   <br>
                   <p>O prazo de entrega em moradas localizadas no Distritos Urbanos de Luanda é de três dias úteis e começa a ser contado a partir do momento em que a AIDA obtém uma confirmação de boa cobrança da encomenda.</p>
                   <br>
                   <p>As entregas são efectuadas na morada indicada pelo cliente nos dias úteis no período horário das 9h00 até às 17h00.</p>
                   <br>
                   <p>Em caso de atraso na entrega que seja superior a 20 dias sobre o prazo aproximado de entrega referido acima, quando o mesmo seja imputável à AIDA, o Cliente, mediante prévia reclamação escrita, poderá desistir unilateralmente da encomenda, reembolsando a AIDA as quantias eventualmente pagas em caso de pré-pagamento.</p>
                   <br>
                   <h3>6.8. Modos de Entrega</h3>
                   <br>
                   <p>A encomenda será entregue na morada indicada para envio, no momento de contratação. Não é possível alterar a morada de entrega indicada inicialmente a partir do momento em que a encomenda é confirmada, na conclusão do processo de encomenda no Sitio www.aida.ao. Assim que a encomenda é expedida pela AIDA, é enviada uma notificação para o e-mail do Cliente. Sempre que possível, serão fornecidas as indicações e os dados para seguimento online do percurso da encomenda (tracking online), para o Cliente monitorizar o estado do envio da sua encomenda.</p>
                   <br>
                   <p>Sempre que o Cliente ou o destinatário detecte erros no momento da entrega da mercadoria recebida ou quando esta se encontre visivelmente danificada, deve imediatamente alertar o estafeta da empresa de transportes e especificar a situação da encomenda na guia de transporte. É necessário comunicar o facto à AIDA no prazo de 24 horas, através do endereço de e-mail encomendas.online@aida.ao ou do serviço de Apoio ao Cliente, disponível no Sítio www.aida.ao. A mercadoria estará coberta por um seguro contra riscos de transporte, extravio e manipulação, desde a expedição até à sua entrega ao destinatário final. O Cliente ou destinatário da encomenda deve confirmar sempre que a mercadoria foi entregue em perfeito estado, assinando o respectivo comprovativo de entrega. As comunicações referidas no presente ponto, posteriores a 24 horas após a entrega não serão aceites. Caso o cliente recuse receber a encomenda a ele destinada, ou se mostre indisponível para efectuar o pagamento do respectivo preço, a AIDA, poderá exigir-lhe o reembolso das despesas e custos incorridos, incluindo os custos judiciais e extra-judiciais do seu ressarcimento. A AIDA, poderá também recusar novas encomendas ao cliente.</p>
               </div>
                <div class="body__text">
                   <h3>7. Garantia dos Produtos</h3>
                   <p>A AIDA garante a conformidade dos produtos comercializados nos termos que lhe são exigíveis por lei e sem prejuízo da garantia prestada obrigatoriamente pelo fabricante.</p>
                   <br>
                   <p>A assistência técnica é assegurada pelo fabricante dos produtos.</p>
                   <br>
                   <p>A garantia dos produtos vendidos por AIDA Angola – informática, Lda é assegurada apenas nas condições do correcto manuseamento, utilização e conservação e nos prazos especificados nos certificados de garantia que acompanham todos eles.</p>
                   <br>
                   <p>Em caso de haver qualquer defeito de fabrico e/ou funcionamento dos produtos comprados através da AIDA estabelece-se como único responsável o fabricante dos mesmos, sem prejuízo das disposições legalmente aplicáveis.</p>
                   <br>
                   <p>A AIDA compromete-se a fornecer aos seus clientes, os serviços de mediação necessários para o contacto com a empresa fabricante e/ou distribuidora, realizando-se desta forma efectiva a garantia ao Cliente dos termos da mesma.</p>
               </div>
               <div class="body__text">
                   <h3>8. Direitos do Cliente</h3>
                   <br>
                   <h4>8.1. Confidencialidade e Segurança</h4>
                   <p>Os Clientes da AIDA, usufruem da confidencialidade e segurança dos seus dados pessoais, nos termos previstos na legislação aplicável.</p>
                   <br>
                   <p>O Cliente autoriza a AIDA, a processar de modo automatizado os seus dados pessoais, incluindo todos os divulgados no momento do registo no Sitio, para os fins necessários à contratação com o cliente, gestão e execução das compras e respectivos registos.</p>
                   <br>
                   <p>A AIDA compromete-se a não difundir, transmitir ou publicar os dados dos clientes sem o seu consentimento expresso.</p>
                   <br>
                   <p>A AIDA não envia mensagens de correio electrónico de carácter promocional ou publicitário sem o consentimento expresso do cliente, através da subscrição da respectiva newsletter, ou o registo como Cliente AIDA Angola. A AIDA Angola possibilita aos seus Cliente a consulta e modificação dos dados pessoais que estejam armazenados nas suas bases de dados. Caso os Clientes pretendam, alterar  ou eliminar a sua informação pessoal da base de dados da AIDA deverão efectuar um pedido expresso à AIDA, através do endereço de e-mail apoio.cliente@aida.ao</p>
                   <br>
                   <p>Os Clientes têm também direito a aceder gratuitamente às secções abertas do Sítio www.aida.ao, onde a AIDA realiza o seu serviço de vendas e a conhecer em cada momento o estado em que se encontra o processo de tratamento da encomenda efectuada.</p>
                   <br>
                   <h3>8.2. Devolução</h3>
                   <p>O Cliente dispõe de um prazo de 7 dias para resolver o contrato sem pagamento de indemnização e sem necessidade de indicar o motivo, prazo que se conta a partir do dia da recepção da encomenda pelo Cliente.</p>
                   <br>
                   <p>Para tal deverá solicitar o número de devolução e as devidas instruções através do endereço de e-mail encomendas.online@aida.ao, ou através do serviço de Apoio ao Cliente (Chat) do Sítio www.aida.ao, ou através da linha telefónica de apoio +244 222638620</p>
                   <br>
                   <p>No caso de o Cliente pretender exercer o direito de resolução, deverá conservar os produtos de modo a restitui-los em perfeitas condições de utilização à AIDA no prazo indicado.</p>
                   <br>
                   <p>O pagamento das despesas de transporte originadas pela troca ou devolução ficará a cargo do Cliente no caso de insatisfação com o produto. Nos casos de avaria, envio errado do produto ou produto danificado no transporte, o Cliente deverá proceder à sua devolução. Após confirmação da avaria, erro de envio, ou dano, a AIDA, procederá ao reembolso das despesas de transporte.</p>
                   <br>
                   <p>A AIDA não fará qualquer devolução sobre produtos manipulados pelo Cliente, produtos sem a embalagem original da fábrica, ou mercadorias que sejam devolvidas incompletas, tanto nos seus elementos principais como acessórios. Não será válido o direito de resolução fora do prazo indicado, nem sobre produtos cujo preço dependa de flutuações de taxas do mercado financeiro não controladas pela AIDA, nem sobre objectos susceptíveis de se deteriorarem ou perecerem rapidamente, objectos que possam ser facilmente reproduzidos com carácter imediato ou que, pela sua natureza, não possam ser reenviados. Também não será válida a resolução sobre mercadorias ou encomendas confeccionadas de acordo com especificações do Cliente ou manifestamente personalizadas.</p>
                   <br>
                   <p>Excepções: pela sua natureza, excluem-se as devoluções dos seguintes produtos:</p>
                   <br>
                   <p>a) Todo o tipo de software e jogos para consolas cuja embalagem tenha sido aberta, incluindo a película plástica que sela a embalagem.</p>
                   <br>
                   <p>b) Todo o tipo de produtos que requeira uma instalação profissional e que tenham sido instalados posteriormente à compra por pessoa ou entidade que não seja a AIDA ou que tenha sido indicada pela AIDA (exaustores, fornos, aparelhos áudio para automóvel, entre outros)</p>
                   <br>
                   <p>c) Todo o tipo de portáteis e computadores que não se devolvam nas mesmas condições da entrega.</p>
                   <br>
                   <h4>8.3. Condições de devolução</h4>
                   <p>A AIDA apenas aceita a devolução de produtos, no prazo de 30 dias a contar da data de recepção dos produtos pelo Cliente sem qualquer uso ou desgaste perceptível.</p>
                   <br>
                   <p>A utilização dos produtos deve ser exclusivamente para a sua prova e para que o Cliente possa decidir correctamente sobre a sua aquisição definitiva e sem alterar as condições do produto no momento da entrega. Em casos de uso do bem para além dos termos referidos na frase anterior a AIDA não aceitará a sua devolução. As Partes reconhecem que um produto que tenha sido usado e/ou manipulado perde valor no mercado, mesmo que esteja em perfeitas condições, pelo que o respectivo valor de reembolso não poderá ser o da compra inicial.</p>
                   <br>
                   <p>A AIDA, só aceita devoluções que tenham sido previamente comunicadas e coordenadas com a AIDA, através do endereço de email encomendas.online@aida.ao, ou através do serviço de Apoio ao Cliente (Chat) do Sítio www.aida.ao, ou através da linha de apoio: +244 222638620</p>
                   <br>
                   <p>A AIDA não se responsabiliza por devoluções de produtos manipulados pelo Cliente, ou mercadorias que se devolvam incompletas tanto nos seus elementos principais como acessórios. Não se processará o direito de livre resolução fora do prazo indicado, nem sobre produtos sujeitos a flutuações de um mercado não controlado pela AIDA. Não serão considerados consumidores e Clientes finais aqueles que adquiram, armazenem, utilizem ou consumam bens e/ou serviços, com o fim de integrar os mesmos em processos de produção, transformação, comercialização ou prestação a terceiros, pelo que não beneficiam dos direitos outorgados aos consumidores</p>
               </div>
               <div class="body__text">
                   <h3>9. Obrigações do Cliente</h3>
                   <p>O Cliente tem a obrigação de conservar os seus dados pessoais de acesso ao Sítio www.aida.ao. Apenas o Cliente pode utilizar a informação publicada pela AIDA e estritamente dentro da relação comercial pessoal pretendida. O Cliente não pode reproduzir, alienar ou dispor da informação publicada por AIDA em todos os seus conteúdos sem permissão expressa da AIDA.</p>
                   <br>
                   <p>O Cliente tem a obrigação de utilizar fielmente o serviço de compras facilitado pela AIDA através do Sítio www.aida.ao, abstendo-se de manipular os conteúdos do Sítio, ou interferir nos seus meios informáticos através de vírus, ou qualquer outro meio, ou outras condutas proibidas em Direito.</p>
                   <br>
                   <p>O Cliente tem a obrigação de respeitar o acordo de compra, confirmada e aceite a encomenda.</p>
               </div>
               <div class="body__text">
                   <h3>10. Direitos da AIDA</h3>
                   <p>A AIDA tem o direito de conservar, modificar ou suspender os seus serviços de venda através do Sítio www.aida.ao sem qualquer aviso prévio.</p>
                   <br>
                   <p>A AIDA reserva-se o direito de modificar o preço da sua oferta, em qualquer momento, até à finalização da encomenda pelo Cliente.</p>
                   <br>
                   <p>A AIDA possui o direito de recusar e/ou cancelar encomendas por falta de existência ou falta de pagamento do Cliente.</p>
                   <br>
                   <p>A AIDA tem o direito a receber o pagamento das compras realizadas pelo Cliente depois de aceite e confirmada a encomenda.</p>
               </div>
               <div class="body__text">
                   <h3>11. Propriedade e transferência de risco</h3>
                   <p>A propriedade dos produtos transfere-se para o cliente com o pagamento integral do respectivo preço e demais quantias devidas. O risco de perda ou dano dos produtos transfere-se para o cliente com a respectiva entrega.</p>
               </div>
               <div class="body__text">
                   <h3>12. Utilização da Internet</h3>
                   <p>A AIDA, não será responsável pelos prejuízos e inconvenientes decorrentes da utilização da Internet, incluindo, por exemplo, em consequência da ruptura ou deficiência do serviço e acesso, da intrusão exterior ou da presença de vírus informáticos, ou de qualquer caso de força maior.</p>
               </div>
               <div class="body__text">
                   <h3>13. Propriedade dos Conteúdos e Sinais Distintivos</h3>
                   <p>Todos os dados e conteúdos do Sítio, incluindo sinais distintivos do comércio, são propriedade exclusiva da AIDA, ou de terceiros e como tal protegidos por lei.</p>
               </div>
               <div class="body__text">
                   <h3>14. Duração</h3>
                   <p>As presentes condições aplicam-se durante toda a duração dos serviços oferecidos pela AIDA.</p>
               </div>
               <div class="body__text">
                   <h3>15. Acordo Total</h3>
                   <p>As presentes condições gerais de venda constituem o acordo total entre as partes. Caso uma das cláusulas das presentes condições se torne nula e sem valor, em virtude de uma alteração legislativa, normativa ou por sentença, isso não deverá afetar em caso algum, a sua validade e respeito.</p>
               </div>
               <div class="body__text">
                   <h3>16. Jurisdição e resolução de litígios</h3>
                   <p>As presentes Condições Gerais regem-se pela Lei Angolana. Para a resolução de todo e qualquer litígio decorrente da interpretação ou da execução das presentes Condições Gerais será competente o Tribunal Judicial de Luanda, com renúncia expressa das partes a qualquer outro.</p>
               </div>
           </div>     
       </div>
    </dialog>

    
<?php 
    //get footer.php file
    get_footer();        
?>
