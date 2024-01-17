<?php 
    //get header.php file
    get_header();
?>

    <!-- ***********************************\
        secção da minha conta
    \************************************/-->
    
    <section class="myaccount__container">
        <div class="myaccount__holder">
            <div class="myaccount__header">
                <span class="myaccount__header-title">Minha conta</span>
            </div>
            
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
                    
                    // Get orders for the current user
                    // Get orders for the current user
                    $customer_orders = wc_get_orders(array(
                        'customer' => $user_id,
                        'limit'    => -1, // Set to -1 to retrieve all orders
                    ));
                }
            
            ?>
            <div class="myaccount__info">
                <div class="tabs">
                    <div class="tab__header">
                        <button class="tab__button" id="btn1" onclick="myaccountProfile()"><i class="material-icons">account_circle</i> Perfil</button>
                        <button class="tab__button" id="btn2" onclick="myaccountAddress()"><i class="material-icons">map</i> Endereço</button>
                        <button class="tab__button" id="btn3" onclick="myaccountOrders()"><i class="material-icons">shopping_bag</i> Encomendas</button>
                        <button class="tab__button" id="btn4" onclick="myaccountWishlist()"><i class="material-icons">favorite_border</i> Lista de desejos</button>
                        <button class="tab__button" id="btn5" onclick="myaccountSecurity()"><i class="material-icons">key</i> Segurança</button>
                    </div>
                    <div class="myaccount__details-tab" id="content1">
                        <div class="myaccount__details-title">
                            <h3>Informação Pessoal</h3>
                        </div>
                        <div class="myaccount__details-body">
                            <form method="post" action="./minha-conta/" name="usrAccount">
                                <div class="register__data">
                                    <div class="register__usernames">
                                        <div class="register__username-container">
                                            <span class="input_icon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <input type="text" placeholder="Insira o seu nome" required class="register__user-data" id="nome" autocomplete="off" value="<?php if(isset($nome)){ echo $nome; }?>">
                                            <label for="nome" class="account__label">Nome</label>
                                        </div>

                                        <div class="register__username-container">
                                            <span class="input_icon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <input type="text" placeholder="Insira o seu sobrenome" required class="register__user-data" id="sobrenome" autocomplete="off" value="<?php if(isset($sobrenome)){ echo $sobrenome;}?>">
                                            <label for="sobrenome" class="account__label">Sobrenome</label>
                                        </div>
                                    </div>

                                    <div class="register__usernames">
                                        <div class="register__username-container">
                                            <span class="input_icon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <input type="text" placeholder="Insira o seu e-mail" required class="register__user-data" id="email" autocomplete="off" value="<?php if(isset($email)){echo $email;}?>">
                                            <label for="email" class="account__label">E-mail</label>
                                        </div>
                                        <div class="register__username-container">
                                            <!--span class="input_icon">
                                                <i class="material-icons">cellphone</i>
                                            </span-->
                                            <input type="number" placeholder="Insira o número de telefone" required class="register__user-data" id="telefone" autocomplete="off" min="910000000" value="<?php if(isset($telefone)){echo $telefone;} ?>">
                                            <label for="telefone" class="account__label">Telefone</label>
                                        </div>
                                    </div>
                                    

                                </div>
                            </form>
                        </div>
                        <div class="myaccount__btn-holder">
                            <button class="update__btn">Actualizar</button>
                        </div>
                    </div>
                    <div class="myaccount__details-tab" id="content2">
                        <div class="myaccount__details-title">
                            <h3>Endereço de Entrega</h3>
                        </div>
                        <div class="myaccount__details-body">
                            <form method="post" action="./registar/" name="usrAccount">
                                <div class="register__data">

                                    <div class="register__usernames">
                                        <div class="register__username-container">
                                            <span class="input_icon">
                                                <i class="material-icons">landscape</i>
                                            </span>
                                            <input type="text" placeholder="Insira a sua Província" required class="register__user-data" id="provincia" autocomplete="off" value="<?php if(isset($provincia)){echo $provincia;}?>">
                                            <label for="provincia" class="account__label">Província</label>
                                        </div>

                                        <div class="register__username-container">
                                            <span class="input_icon">
                                                <i class="material-icons">domain</i>
                                            </span>
                                            <input type="text" placeholder="Insira o seu Município" required class="register__user-data" id="municipio" autocomplete="off" value="<?php if(isset($municipio)){echo $municipio;}?>">
                                            <label for="municipio" class="account__label">Município</label>
                                        </div>
                                    </div>

                                    <div class="register__usernames">
                                        <div class="register__address-container">
                                            <span class="input_icon">
                                                <i class="material-icons">home</i>
                                            </span>
                                            <input type="text" placeholder="Insira o seu endereço" required class="register__address-data" id="endereco" autocomplete="off" value="<?php if(isset($endereco)){echo $endereco;}?>">
                                            <label for="endereco" class="account__label">Endereço</label>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="myaccount__btn-holder">
                            <button class="update__btn">Actualizar</button>
                        </div>
                    </div>
                    <div class="myaccount__details-tab" id="content3">
                         <?php
                            global $woocommerce;
                            $products = $woocommerce->cart->get_cart();
                            $total =0;
                            //print_r($products);
                        ?>
                        <div class="myaccount__details-title">
                            <h3>Encomendas feitas</h3>
                        </div>
                        <div class="myaccount__details-body">
                            <div class="table__order-holder">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>
                                                Encomenda ID
                                            </th>
                                            <th>
                                                Data
                                            </th>
                                            <th>
                                                Preço total
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Factura
                                            </th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody class="cart__table-body">
                                        <?php 
                                            //print_r($customer_orders);
                                            if(isset($customer_orders)){
                                               
                                                foreach($customer_orders as $order){
                                                    $order_id = $order->get_id();
                                                    $order_status = $order->get_status();
                                                    $order_date = $order->get_date_created()->format('d-m-Y H:i:s');
                                                    $order_total = wc_price($order->get_total());
                                                    $order_invoice_link = $order->get_view_order_url(); // Link to view the order*/
                                        ?>
                                        <tr class="product__cart-table">
                                            <td data-label="Produto">                                                
                                                <?php echo $order_id;?>                     
                                            </td>
                                            <td data-label="Nome">
                                                <?php echo $order_date; ?>
                                            </td>
                                            <td data-label="Preço" class="cart__table-price">
                                                
                                                <?php echo $order_total;//number_format( $order_total, 2, ',', '.'); ?>                            
                                            </td>
                                            <td data-label="Qtde">
                                                <?php echo $order_status; ?>
                                            </td>
                                            <td data-label="Subtotal" class="cart__table-subtotal">
                                                <?php echo '<a href="' . esc_url($order_invoice_link) . '">Factura</a>';?>   
                                            </td>
                                            
                                        </tr>
                                        <?php
                                                }
                                            }
                                        ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="myaccount__details-tab" id="content4">
                        <div class="myaccount__details-title">
                            <h3>Minha lista de desejos</h3>
                        </div>
                        <div class="myaccount__details-body">
                            <div class="table__order-holder">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>
                                                Produto
                                            </th>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Preço
                                            </th>
                                            <th>
                                                Qtde
                                            </th>
                                            <th>
                                                Subtotal
                                            </th>
                                            <th>
                                                <div class="cart__action">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="cart__table-body">
                                        <?php 
                                            foreach($products as $product => $values){
                                                $_product = wc_get_product($values['data']->get_id());
                                        ?>
                                        <tr class="product__cart-table">
                                            <td data-label="Produto">
                                                <a href="<?php echo get_permalink($_product->get_ID()); ?>">
                                                    <?php echo wp_get_attachment_image($_product->get_image_id());?>
                                                </a>
                                            </td>
                                            <td data-label="Nome">
                                                <?php echo $_product->get_name(); ?>
                                            </td>
                                            <td data-label="Preço" class="cart__table-price">
                                                AKZ
                                                <?php 
                                                    if($_product->get_sale_price()):
                                                        echo number_format($_product->get_sale_price(), 2, ',', '.');
                                                    else:
                                                        echo number_format($_product->get_regular_price(), 2, ',', '.');
                                                    endif
                                                ?>                            
                                            </td>
                                            <td data-label="Qtde">
                                                <input type="number" min="1" value="<?php echo $values['quantity']; ?>" class="qtde__number">
                                            </td>
                                            <td data-label="Subtotal" class="cart__table-subtotal">
                                                AKZ
                                                <?php 
                                                    echo number_format($values['line_subtotal'],  2, ',', '.');
                                                    $total+=$values['line_subtotal'];
                                                ?>
                                            </td>
                                            <td>
                                                <a class="action__remove" >
                                                    <i class="material-icons" data-item-id="<?php echo $_product->get_ID();?>">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                                
                                            }
                                        ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="myaccount__details-tab" id="content5">
                        <div class="myaccount__details-title">
                            <h3>Minha segurança</h3>
                        </div>
                        <div class="myaccount__details-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    
    get_footer();
?>