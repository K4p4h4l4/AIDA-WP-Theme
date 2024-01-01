<?php 

    /* **********************************************************************\
             Template Name: functions.php
             Description: Adiciona funcionalidades ao Tema Wordpress     
    \************************************************************************/

    function fn_theme_style(){
        /******************************************\
                 Inclui os ficheiros de style    
        \******************************************/
        

        //google fonts
        wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap');


         //google material icons
         wp_enqueue_style('google_material_icons', '//fonts.googleapis.com/icon?family=Material+Icons');
        
        //google material symbols
         wp_enqueue_style('google_material_symbols', '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');

         //custom stylesheet
         wp_enqueue_style('custom-style',get_stylesheet_uri());

         // @media responsividade dos ficheiros css
         wp_register_style('media_responsive', get_template_directory_uri().'/assets/css/_media.css', array(), 1, 'all');
         wp_enqueue_style('media_responsive');

         //css do resto da página home
         wp_register_style('media_home', get_template_directory_uri().'/assets/css/_home.css', array(), 1, 'all');
         wp_enqueue_style('media_home');
        
         
        if(is_page('em-promocao')){
             //css do resto da página home
             wp_register_style('promocao_css', get_template_directory_uri().'/assets/css/promocao.css', array(), 1, 'all');
             wp_enqueue_style('promocao_css');
        }
         
        if(is_page('sobre-nos')){
            //css do resto da página sobre nós
            wp_register_style('sobrenos_css', get_template_directory_uri().'/assets/css/sobrenos.css', array(), 1, 'all');
            wp_enqueue_style('sobrenos_css');
        }
        
        if(is_page('contacte-nos')){
            //css do resto da página contacte-nos
            wp_register_style('contactos_css', get_template_directory_uri().'/assets/css/contactos.css', array(), 1, 'all');
            wp_enqueue_style('contactos_css');
        }
         
        //if(is_page('product')){
        //css do resto da página produto
        wp_register_style('produto_css', get_template_directory_uri().'/assets/css/produto.css', array(), 1, 'all');
        wp_enqueue_style('produto_css');
        //}
        
         //css do resto da página produto
         wp_register_style('categorias_css', get_template_directory_uri().'/assets/css/categorias.css', array(), 1, 'all');
         wp_enqueue_style('categorias_css');
        
        if(is_page('carrinho')){
            //css da página do carrinho
            wp_register_style('carrinho_css', get_template_directory_uri().'/assets/css/carrinho.css', array(), 1, 'all');
            wp_enqueue_style('carrinho_css');
        }
        
        if(is_page('checkout')){
            //css da página para finalizar a compra
            wp_register_style('checkout_css', get_template_directory_uri().'/assets/css/checkout.css', array(), 1, 'all');
            wp_enqueue_style('checkout_css');
        }
        
        if(is_page('envio')){
            //css da página de envio
            wp_register_style('envio_css', get_template_directory_uri().'/assets/css/envio.css', array(), 1, 'all');
            wp_enqueue_style('envio_css');
        }
    }

    add_action('wp_enqueue_scripts', 'fn_theme_style');

    function fn_theme_scripts(){
        
        if(is_page('home')){
            //home js 
            wp_register_script('carousel_js', get_template_directory_uri().'/assets/js/carousel.js', array(), 1, 1, 1); 
            //get_theme_file_uri
            wp_enqueue_script('carousel_js');
        }

        //Show modal js 
        wp_register_script('show_modal_js', get_template_directory_uri().'/assets/js/show-modal.js', array(), 1, 1, 1); 
        //get_theme_file_uri
        wp_enqueue_script('show_modal_js');

        //produto js 
        wp_register_script('produto_js', get_template_directory_uri().'/assets/js/product.js', array(), 1, 1, 1); //get_theme_file_uri
        wp_enqueue_script('produto_js');

        //default js
        wp_register_script('default_js', get_template_directory_uri().'/assets/js/default.js', array(), 1, 1, 1);
        //get_theme_file_uri
        wp_enqueue_script('default_js');

        //add to cart js 
        wp_register_script('add_to_cart_js', get_template_directory_uri().'/assets/js/add-to-cart.js', array(), 1, 1, 1); //get_theme_file_uri
        wp_enqueue_script('add_to_cart_js');

        //remove cart item js 
        wp_register_script('remove_cart_item_js', get_template_directory_uri().'/assets/js/remove-cart-item.js', array(), 1, 1, 1); //get_theme_file_uri
        wp_enqueue_script('remove_cart_item_js');
        
        if(is_page('envio')){
            //Envio js 
            wp_register_script('envio_js', get_template_directory_uri().'/assets/js/envio.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('envio_js');
        }
        
        if(is_page('carrinho')){
            //Envio js 
            wp_register_script('carrinho_js', get_template_directory_uri().'/assets/js/carrinho.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('carrinho_js');
        }
        
        if(is_page('checkout')){
            //Envio js 
            wp_register_script('checkout__js', get_template_directory_uri().'/assets/js/checkout.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('checkout__js');
            
            //Biblioteca para sanitizar os inputs do form
             wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
    }

    add_action('wp_enqueue_scripts', 'fn_theme_scripts');

    //adicionando novas funcionalidades ao tema do wordpress
    function fn_theme_supports(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form'));
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'fn_theme_supports');


    //register navigation menus
    /*function fn_nav_menu(){
        register_nav_menus(array(
            'top_menu'=>__('Top Menu', 'text_domain'),
            
        ));
    }

    add_action('init','fn_nav_menu');*/


    //custom images
    add_image_size('product_image_small', 300, 300, false);
    add_image_size('product_image_small', 700, 700, false);

    
    //Suporte de Menus
    add_theme_support('menus');

    //Registo de menus
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'theme'),
        )
    );

    function add_additional_class_on_li($classes, $item, $args){
        if(isset($args->add_li_class)){
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }

    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

    function add_link_atts($atts){
        $atts['class']='menu__btn';
        return $atts; 
    }

    add_filter('nav_menu_link_attributes', 'add_link_atts');

    //Woocommerce Support
    add_theme_support('woocommerce');

    //Remover item da lista de produtos
    function remove_cart_item_callback() {
        if (isset($_POST['cart_item_key'])) {
            $product_cart_id = WC()->cart->generate_cart_id( $_POST['cart_item_key'] );
            $product_item_key = WC()->cart->find_product_in_cart($product_cart_id); 
            $cart_item_key = sanitize_text_field($product_item_key); 
            WC()->cart->remove_cart_item($cart_item_key);
            echo 'success';
        } else {
            echo 'error';
        }
        die();
    }

    add_action('wp_ajax_remove_cart_item', 'remove_cart_item_callback'); // For logged-in users
    add_action('wp_ajax_nopriv_remove_cart_item', 'remove_cart_item_callback'); // For non-logged-in users

    add_action('wp_ajax_update_cart_item_quantity', 'update_cart_item_quantity_callback');
    add_action('wp_ajax_nopriv_update_cart_item_quantity', 'update_cart_item_quantity_callback');

    function update_cart_item_quantity_callback() {
        $product_cart_id = WC()->cart->generate_cart_id( $_POST['cart_item_key'] );
        $product_item_key = WC()->cart->find_product_in_cart($product_cart_id); 
        $cart_item_key = sanitize_text_field($product_item_key);
        $new_quantity = (int) $_POST['new_quantity'];

        // Validate the new quantity, e.g., check if it's a positive integer.

        if ($new_quantity > 0) {
            // Update the cart item quantity
            WC()->cart->set_quantity($cart_item_key, $new_quantity);

            // Calculate totals and return the updated cart HTML
            WC()->cart->calculate_totals();
            $updated_cart_html = WC()->cart->get_cart_contents();
            wp_send_json(['success' => true, 'message' => ' Quantidade de produto actualizada com sucesso']);
        } else {
            wp_send_json(['success' => false, 'message' => ' Erro ao actualizar a quantidade de produto']);
        }

        wp_die();
    }



function register_custom_sidebar() {
    register_sidebar(array(
        'name' => 'Custom Sidebar',
        'id' => 'custom-sidebar',
        'description' => 'This is a custom sidebar widget area.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'register_custom_sidebar');

// Your server-side endpoint (e.g., a WordPress custom endpoint)
add_action('wp_ajax_create_order_and_add_product', 'create_order_and_add_product_callback');
add_action('wp_ajax_nopriv_create_order_and_add_product', 'create_order_and_add_product_callback');

//Função para criar uma encomenda e adicionar produtos a ela
function create_order_and_add_product_callback() {
    // Start or resume the session
    if (!session_id()) {
        session_start();
    }
    
    // Get product details from the request
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

     // Check if an order (cart) exists in the session
    if (isset($_SESSION['cart'])) {
        $order = $_SESSION['cart'];
    } else {
        // If no cart exists, create a new one
        $order = wc_create_order();
        $_SESSION['cart'] = $order;
    }
    
    // Add the product to the order
    $order->add_product(wc_get_product($product_id), $quantity);

    // Calculate totals and save the order
    $order->calculate_totals();
    // Update the order status
    $order->set_status('pending');
    $order->save();

    // Respond with a success or error message
    if ($order) {
        wp_send_json(['success' => true, 'message' => ' Encomenda criada e produtos adicionados com sucesso', 'order_number' => $order->get_order_number()  ]);//$order->get_order_number()
    } else {
        wp_send_json(['success' => false, 'message' => 'Erro ao criar a encomenda e ao adicionar produtos á mesma ']);
    }

    wp_die();
}

add_action('wp_ajax_update_order_item_quantity', 'update_order_item_quantity_callback');
add_action('wp_ajax_nopriv_update_order_item_quantity', 'update_order_item_quantity_callback');


//Função para actualizar a quantidade de produtos na encomenda
function update_order_item_quantity_callback() {
    
    // Get the data sent from the client
    $order_id = $_POST['orderId'];
    $product_id = $_POST['productId'];
    $new_quantity = $_POST['newQuantity'];

    // Update the order item's quantity (you need to implement this logic)
    // Example: $updated = your_update_quantity_function($order_id, $product_id, $new_quantity);

    // Retrieve the order number
    $order = wc_get_order($order_id);
    
    $order_number = $order->get_order_number();    
        
    if($order){
        // Loop through order items to find the specific product
        foreach ($order->get_items() as $item_id => $item) {
            

            // Check if the product in the order matches the product you want to update
            if ($item->get_product_id() == $product_id) {                
                
                // Set the new quantity for this item
                $item->set_quantity($new_quantity);
                
                //Calcular os totais com a alteração das quantidades dos produtos
                $order->calculate_totals();
                // Save the order to apply the changes
                $order->save();

                // Optionally, you can add order notes to record the quantity change
                //$order->add_order_note(
                //    sprintf(__('Quantity of product updated to %s', 'your-text-domain'), $new_quantity)
                //);

                // Optionally, you can trigger any necessary actions or hooks here
                break; // Exit the loop after updating the item
            }
        }
    }

    if($order){
        
        // Send the response data back to the client
         wp_send_json(['success' => true, 'message' => 'Itens da encomenda actualizados com sucesso', 'order_number' => $order_number] );// Include the order number in the response
    }else{
        
        // Send the response data back to the client
        wp_send_json([
            'success' => false,
            'message' => 'Erro ao actualizar a quantidade',
            'order_number' => $order_number // Include the order number in the response
        ]);
    }
    
    wp_die();
}


add_action('wp_ajax_remove_product_from_order', 'remove_product_from_order_callback');
add_action('wp_ajax_nopriv_remove_product_from_order', 'remove_product_from_order_callback');

//Função para remover um produto de uma encomenda
function remove_product_from_order_callback() {
    // Get the data sent from the client
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];

    // Get the order object
    $order = wc_get_order($order_id);
    
     // Find the order item to remove
    $order_item_id = null;
    foreach ($order->get_items() as $item_id => $item) {
        if ($item->get_product_id() == $product_id) {
            $order_item_id = $item_id;
            break;
        }
    }

    // Respond with a success or error message
    if ($order_item_id) {
        // Remove the order item from the order
        $order->remove_item($order_item_id);

        // Calculate totals and save the order
        $order->calculate_totals();
        $order->save();
        
        wp_send_json(['success' => true, 'message' => 'Produto removido da encomenda']);
    } else {
        wp_send_json(['success' => false, 'message' => 'Erro ao remover produto da encomenda']);
    }

    wp_die();
}

add_action('wp_ajax_update_invoice', 'update_invoice_callback');
add_action('wp_ajax_nopriv_update_invoice', 'update_invoice_callback');

//Função para actulizar a factura
function update_invoice_callback() {
    $order_id = intval($_POST['order_id']);

    if ($order_id > 0) {
        // Get the order by order ID
        $order = wc_get_order($order_id);

        if ($order) {
            // Generate or update the invoice based on the order
            // In this example, we're creating a simple invoice as a PDF file.

            // Example: Include a library or function to generate PDF invoices (e.g., using mPDF or TCPDF)
            require_once('.\wp-content\plugins\wt-woocommerce-packing-list-mpdf.php');

            // Create a new PDF instance
            $pdf = new PDF();

            // Set the content for the invoice (you'll customize this based on your needs)
            $invoice_content = 'Invoice for Order #' . $order_id . "\n";
            $invoice_content .= 'Order Date: ' . $order->get_date_created() . "\n";
            $invoice_content .= 'Billing Address: ' . $order->get_formatted_billing_address() . "\n";

            // Add the invoice content to the PDF
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 16);
            $pdf->MultiCell(0, 10, $invoice_content, 0, 'L');

            // Output the PDF (you can save it to a file, send it by email, etc.)
            $pdf->Output('invoice_' . $order_id . '.pdf', 'I');

            // Optionally, you can add order notes to record the invoice update
            $order->add_order_note(
                sprintf(__('Invoice updated on %s', 'your-text-domain'), current_time('mysql'))
            );

            wp_send_json(['success' => true, 'message' => 'Invoice updated successfully']);
        } else {
            wp_send_json(['success' => false, 'message' => 'Order not found']);
        }
    } else {
        wp_send_json(['success' => false, 'message' => 'Invalid order ID']);
    }
    wp_die();
}

//Função para gerar a factura
// Your server-side endpoint
add_action('wp_ajax_generate_invoice', 'generate_invoice_callback');
add_action('wp_ajax_nopriv_generate_invoice', 'generate_invoice_callback');

function generate_invoice_callback() {
     // Check if the WooCommerce PDF Invoices plugin is active
    if (class_exists('WooCommerce_PDF_Invoices')) {
        // Get the order object
        $order_id = $_POST['orderId'];
        $order = wc_get_order($order_id);

        // Check if the order exists
        if ($order) {
            // Generate the invoice
            //do_action('wpo_wcpdf_before_pdf', $order);
            //$invoice = new WooCommerce_PDF_Invoices($order);
            //$invoice = wcpdf_get_document( 'invoice', $order, true );
            $invoice = wcpdf_get_invoice( $order, true );
            $invoice_url = add_query_arg( array(
                'action'        => 'generate_wpo_wcpdf',
                'document_type' => 'invoice',
                'order_ids'     => $order->get_id(),
                'order_key'     => $order->get_order_key(),
            ), admin_url( 'admin-ajax.php' ) );
            $link_text = 'Download a printable invoice / payment confirmation (PDF format)';
            $text .= sprintf( '<p><a href="%s">%s</a></p>', esc_attr( $invoice_url ), esc_html( $link_text ) );
            //$invoicePDF = wcpdf_get_document("PDF", $order, false);
            //do_action('wpo_wcpdf_after_pdf', $order);
            // Generate the invoice URL using the WooCommerce PDF Invoices plugin
            //$invoice_url = wpo_wcpdf_get_invoice_url($order->get_id());
            //error_log(print_r($order_id, true));
            // Send the invoice URL back to the client
            //wp_send_json(['invoice_url' => $invoice ]);//$invoice->get_invoice_url()

            // Optionally, you can send the invoice to the customer via email
            // Replace 'customer@example.com' with the customer's email address
            //$invoice->email_invoice('customer@example.com');
            wp_send_json(['invoice_url' => $invoice_url ]); //
        } else {
            // If the order ID is not valid, send an error response
            wp_send_json(['error' => 'Invalid order ID']);
        }
        
    }
    
    
    // Always use wp_die() at the end of your AJAX functions to terminate the script
    wp_die();    
}

//Função para adicionar os dados do cliente
add_action('wp_ajax_register_user_order', 'register_user_order_callback');
add_action('wp_ajax_nopriv_register_user_order', 'register_user_order_callback');

function register_user_order_callback() {
    // Get the form data from the AJAX request
     $form_data = isset($_POST['form_data']) ? $_POST['form_data'] : [];
    // Get the order object
    $order_id = isset($_POST['orderId']) ? $_POST['orderId'] : 0;
    $order = wc_get_order($order_id);

    if($order_id > 0){
    // You can now use $form_data to register the user details to the order
        
        // Update billing email
        update_post_meta($order_id, '_billing_email', sanitize_email($form_data['email']));

        // Update shipping details
        update_post_meta($order_id, '_shipping_country', sanitize_text_field($form_data['country']));
        update_post_meta($order_id, '_shipping_first_name', sanitize_text_field($form_data['name']));
        update_post_meta($order_id, '_shipping_last_name', sanitize_text_field($form_data['surname']));
        update_post_meta($order_id, '_shipping_address_1', sanitize_text_field($form_data['address']));
        update_post_meta($order_id, '_shipping_city', sanitize_text_field($form_data['city']));

        // Update billing details
        update_post_meta($order_id, '_billing_first_name', sanitize_text_field($form_data['name']));
        update_post_meta($order_id, '_billing_last_name', sanitize_text_field($form_data['surname']));
        update_post_meta($order_id, '_billing_address_1', sanitize_text_field($form_data['address']));
        update_post_meta($order_id, '_billing_city', sanitize_text_field($form_data['city']));
        update_post_meta($order_id, '_billing_phone', sanitize_text_field($form_data['phone']));

        // Update order notes with additional details
        $order_notes = "Detalhes Adicionais: " . sanitize_textarea_field($form_data['details']);
        $order_notes .= "\nMétodo de Entrega: " . sanitize_text_field($form_data['deliveryMethod']);
        $order_notes .= "\n\nDetalhes acrescentados durante o checkout.";
        $order->add_order_note($order_notes);
    }
    // You can send a response back to the JavaScript if needed
    wp_send_json(['success' => true, 'message' => 'Ordem criada com sucesso']);
    wp_die();
}

//Função para adicionar os dados do cliente
add_action('wp_ajax_assign_shipping_zone_to_order', 'assign_shipping_zone_to_order_callback');
add_action('wp_ajax_nopriv_assign_shipping_zone_to_order', 'assign_shipping_zone_to_order_callback');

function assign_shipping_zone_to_order_callback(){
    // Get the form data from the AJAX request
     $form_data = isset($_POST['form_data']) ? $_POST['form_data'] : [];
    // Get the order object
    $order_id = isset($_POST['orderId']) ? $_POST['orderId'] : 0;
    $order = wc_get_order($order_id);
    $shipping_zone = $form_data['shippZone'];
    
    if($order){
        
        
        // Assign the shipping zone to the order
        $order->add_shipping_method('Centralidade Vida Pacífica (Zango 0)');

        // Get the tax rate ID based on the shipping zone
        //$tax_rate_id = get_tax_rate_id_by_shipping_zone($form_data['shippZone']);

        // Apply the tax rate to the order
        //$order->set_customer_tax_class($tax_rate_id);
        
        // Calculate totals and save changes to the order
        $order->calculate_totals();
        
        // You can send a response back to the JavaScript if needed
        wp_send_json(['success' => true, 'message' => $order->get_formatted_billing_address() ]); //$order->get_taxes()
        
        // Save changes to the order
        $order->save();
    }
    
    wp_die();
}

// Function to get the tax rate ID based on the shipping zone
function get_tax_rate_id_by_shipping_zone($shipping_zone_id) {
    // Get all tax rates for the given shipping zone
    $tax_rates = WC_Tax::get_rates_for_tax_class('', $shipping_zone_id);

    // If there are tax rates associated with the shipping zone
    if (!empty($tax_rates)) {
        // Assume the first tax rate found is the one you want
        $first_tax_rate = reset($tax_rates);
        
        // Return the tax rate ID
        return $first_tax_rate->tax_rate_id;
    }

    // Return 0 or another default value if no tax rate is found
    return 0;
    
}


?>