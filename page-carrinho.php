<?php 
    //get header.php file
    get_header();
?>
    
    <!-- *****************************\
        Secção de lista de carrinho
    \******************************/-->
    <?php
        global $woocommerce;
        $products = $woocommerce->cart->get_cart();
        $total =0;
        //print_r($products);
    ?>
    <section class="cart__container">
        <div class="cart__table-holder">
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
                        <td data-label="Nome" id="<?php echo $_product->get_ID();?>">
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
                            <a class="action__remove" data-item-id="<?php echo $_product->get_ID();?>">
                                <i class="material-icons" >delete</i>
                            </a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                    
                </tbody>
                
            </table>
        </div>
        
        <div class="cart__totals">
            <div class="cart__totals-table">
                <div class="totals__resume-title">
                    Resumo
                </div>
                <div class="subtotals__holder">
                    <div class="subtotals__title">
                        Subtotal
                    </div>
                    <div class="subtotals__number">
                        AKZ
                        <?php echo number_format($total, 2, ',', '.'); ?>
                    </div>
                </div>
                
                <div class="totals__holder">
                    <div class="totals__title">
                        Total
                    </div>
                    <div class="totals__number">
                        AKZ
                        <?php echo number_format($total, 2, ',', '.'); ?>
                    </div>
                </div>
                <div class="cart__buttons-holder">
                    <button class="button__actions" onclick="location.href='./home/'"> <i class="material-icons">arrow_back</i> Continuar a comprar</button>
                    
                    <button class="button__actions" id="invoice-btn" data-order=""> <i class="material-icons">article</i> Consultar preço</button>
                    <button class="button__actions" id="checkout"> <i class="material-icons">done</i> Finalizar compra</button> 
                </div>
            </div>
        </div>
    </section>
    
    
    
<?php 
    
    get_footer(); 

?>
