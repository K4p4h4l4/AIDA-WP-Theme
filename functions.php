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
        
        //css da animação de carregar a página
         wp_register_style('loader_css', get_template_directory_uri().'/assets/css/loader.css', array(), 1, 'all');
         wp_enqueue_style('loader_css');
        
         
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
        
        if(is_page('pagamento')){
            //css da página de envio
            wp_register_style('pagamento_css', get_template_directory_uri().'/assets/css/pagamento.css', array(), 1, 'all');
            wp_enqueue_style('pagamento_css');
        }
        
        if(is_page('registar')){
            //css da página de envio
            wp_register_style('registar_css', get_template_directory_uri().'/assets/css/registar.css', array(), 1, 'all');
            wp_enqueue_style('registar_css');
        }
        
        if(is_page('login')){
            //css da página de envio
            wp_register_style('login_css', get_template_directory_uri().'/assets/css/login.css', array(), 1, 'all');
            wp_enqueue_style('login_css');
        }
            
        if(is_page('minha-conta')){
            //css da página de envio
            wp_register_style('minha-conta_css', get_template_directory_uri().'/assets/css/minha-conta.css', array(), 1, 'all');
            wp_enqueue_style('minha-conta_css');
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
        
        if(is_page('pagamento')){
            //Envio js 
            wp_register_script('pagamento_js', get_template_directory_uri().'/assets/js/pagamento.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('pagamento_js');
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
        
        if(is_page('registar')){
            //Envio js 
            wp_register_script('registar_js', get_template_directory_uri().'/assets/js/registar.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('registar_js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('contacte-nos')){
            //Envio js 
            wp_register_script('contacte-nos_js', get_template_directory_uri().'/assets/js/contacte-nos.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('contacte-nos_js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('minha-conta')){
            //Envio js 
            wp_register_script('minha-conta_js', get_template_directory_uri().'/assets/js/minha-conta.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('minha-conta_js');
            
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
        $order_id = $_POST['order_id'];
        // Retrieve the order number
        $order = wc_get_order($order_id);
        // Validate the new quantity, e.g., check if it's a positive integer.

        if ($new_quantity > 0) {
            // Update the cart item quantity
            WC()->cart->set_quantity($cart_item_key, $new_quantity);

            // Calculate totals and return the updated cart HTML
            $totals = WC()->cart->calculate_totals();
            $updated_cart_html = WC()->cart->get_cart_contents();
            //Calcular os totais com a alteração das quantidades dos produtos
            $order->calculate_totals();
            // Save the order to apply the changes
            $order->save();
            wp_send_json(['success' => true, 'message' => ' Quantidade de produto actualizada com sucesso: '.$totals]);
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
                
                

                // Optionally, you can add order notes to record the quantity change
                //$order->add_order_note(
                //    sprintf(__('Quantity of product updated to %s', 'your-text-domain'), $new_quantity)
                //);

                // Optionally, you can trigger any necessary actions or hooks here
                break; // Exit the loop after updating the item
            }
            //Calcular os totais com a alteração das quantidades dos produtos
            $order->calculate_totals();
            // Save the order to apply the changes
            $order->save();
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
    
    // Get all shipping zones
    $shipping_zones = WC_Shipping_Zones::get_zones();
    
    if($order){
        
        $order->set_shipping_total(0);
        // Calculate totals and save changes to the order
        $order->calculate_totals();
        $order->save();
        
        // Add a shipping method to the order based on the selected shipping zone
        $method_title = add_shipping_method_to_order($order, $shipping_zone);
        
        // Get a new instance of the WC_Order_Item_Shipping Object
        $item = new WC_Order_Item_Shipping();
        
        $item->set_method_title( $method_title );
        
        
        foreach ($shipping_zones as $zone) {        

            // Loop through zone methods esc_html($method->get_cost()).
            foreach ($zone['shipping_methods'] as $method) {
                if($method->get_title()==$method_title){
                    $item->set_total($method->get_option('cost'));
                    $item->set_instance_id($method->get_instance_id());
                }
            }
        }
        
        $order->add_item( $item );
        
        // Calculate totals and save changes to the order
        $order->calculate_totals();
        
        // You can send a response back to the JavaScript if needed
        wp_send_json(['success' => true, 'message' => $order->get_formatted_billing_address() ]); //$order->get_taxes()
        
        // Save changes to the order
        $order->save();
    }
    
    wp_die();
}

// Function to add a shipping method to the order based on the shipping zone
function add_shipping_method_to_order($order, $shipping_zone) {
    // Assuming each shipping zone has a specific shipping method title
    $shipping_method_title = get_shipping_method_title_by_zone($shipping_zone);

    // Get all available shipping methods for the order
    $available_methods = $order->get_shipping_methods();

    // Check if the shipping method is already added
    foreach ($available_methods as $method) {
        if ($method->get_method_title() === $shipping_method_title) {
            return; // Shipping method is already added
        }
    }

    // Add the shipping method to the order
    //$order->add_shipping_method($shipping_method_title);
    return $shipping_method_title;

    // You can customize this further based on your specific requirements
}

// Function to get the shipping method title based on the shipping zone
function get_shipping_method_title_by_zone($shipping_zone) {
    // Customize this function based on how you associate shipping zones with method titles
    // You might want to have a mapping of zone IDs to method titles
    switch ($shipping_zone) {
        case '1':
            return 'Serviço de streaming (Netflix, Disney+, HBO)';
        case '2':
            return 'Centralidade Vida Pacífica (Zango 0)';
        case '3':
            return 'Luanda - Fora da Cidade (Benfica/Camama/Morro Bento/Centralidade do Kilamba e KK5000/Talatona/Gamek/ Patriota/Golf .)';
        case '4':
            return 'Luanda - Dentro da Cidade de Luanda (Maianga, Ingombotas, Rangel,etc.)';
        case '5':
            return 'Luanda - Fora da Cidade (Viana / Luanda Sul/Cacuaco)';
        case '6':
            return 'Outras Províncias de Angola (DHL)';
        case '7':
            return 'Levantamento no local';
        // Add more cases as needed
        default:
            return 'Default Shipping Method';
    }
}

// Add an action hook to handle the download request
add_action('wp_ajax_download_invoice', 'download_invoice_callback');
add_action('wp_ajax_nopriv_download_invoice', 'download_invoice_callback');

// Function to initiate the download
function download_invoice_callback() {
    // Get the order ID from the AJAX request
    $order_id = isset($_POST['order_id']) ? $_POST['order_id'] : 0;
    $order = wc_get_order($order_id);
    $paymentMethod = $form_data['paymentMethod'];
    // Check if the order is valid
    if ($order) {
        
        if(($paymentMethod == 1) || ($paymentMethod == 3) || ($paymentMethod == 4)){
            $order->set_payment_method('bacs');
        }else if($paymentMethod == 2){
            $order->set_payment_method('cod');
        }
        
        if($paymentMethod == 1){
            $note_title = __('TPA - Terminal de Pagamento Automático');
            $note_body = __('Use o seu cartão multicaixa para pagar nos nossos TPAs no local, ou no acto da entrega da mercadoria.');
            $order->add_order_note($note_title . ': '. $note_body);
        }else if($paymentMethod == 2){
            $note_title = __('CASH | DINHEIRO VIVO');
            $note_body = __('Pague a cash no nosso local ou no acto de entrega do produto.');
            $order->add_order_note($note_title . ': '. $note_body);
        }else if($paymentMethod == 3){
            $note_title = __('Transferência Bancária');
            $note_body = __('Faça a transferência ou deposito para a Conta da ADVANCED INTERNET DESIGN ANGOLA (AIDA).');
            $order->add_order_note($note_title . ': '. $note_body);
        }else if($paymentMethod == 4){
            $note_title = __('Multicaixa Express (Recomendado)');
            $note_body = __('Pagamento direto pelo aplicativo Multicaixa Express (sem precisar fazer transferência).');
            $order->add_order_note($note_title . ': '. $note_body);
        }
        
        WC()->mailer()->emails['WC_Email_New_Order']->trigger($order_id, $order);
        WC()->mailer()->emails['WC_Email_Customer_Completed_Order']->trigger($order_id, $order);
        
        $invoice = wcpdf_get_invoice( $order, true );
        
        $invoice_url = add_query_arg( array(
            'action'        => 'generate_wpo_wcpdf',
            'document_type' => 'invoice',
            'order_ids'     => $order->get_id(),
            'order_key'     => $order->get_order_key(),
        ), admin_url( 'admin-ajax.php' ) );
        
        // Clear WooCommerce cart
        WC()->cart->empty_cart();
        
        // Unset your custom session variable cart
        unset($_SESSION['cart']);
        
        wp_send_json(['invoice_url' => $invoice_url ]);
    }

    wp_die();
}

// PHP function to check if an order exists
function check_order_exists_callback() {
  // Get the order ID from the AJAX request
  /*$order = isset($_SESSION['cart']) ? absint($_SESSION['cart']) : 0;
    
  $check_cart = $_POST['check_cart'];

  // Check if the order exists
  $order_exists = wc_get_order($order->get_id()) ? true : false;*/
  $itens = $_POST['check_cart'];
  if($itens > 0){
      $order_exists = true;
  }else{
      $order_exists = false;
  }
  //$order_exists = isset($_SESSION['cart'])? true : false;

  // Send response back to JavaScript
  wp_send_json(['exists' => $order_exists]);//
}

// Action hook to handle the AJAX request
add_action('wp_ajax_check_order_exists', 'check_order_exists_callback');
add_action('wp_ajax_nopriv_check_order_exists', 'check_order_exists_callback');


// AJAX action to talk to us
add_action('wp_ajax_talk_to_us', 'talk_to_us_callback');
add_action('wp_ajax_nopriv_talk_to_us', 'talk_to_us_callback');

//Função para recolher interesses e dúvidas que o cliente possa ter em relação aos produtos
function talk_to_us_callback(){
    // Get the data from the AJAX request
    $user_data = isset($_POST['userData']) ? $_POST['userData'] : array();
    
    $nome = sanitize_text_field($user_data['nome']);
    $email = sanitize_text_field($user_data['email']);
    $assunto = sanitize_text_field($user_data['assunto']);
    $mensagem = sanitize_text_field($user_data['mensagem']);
    
    $valid_email = is_email($email);
    if($valid_email){
        
        
        $message = '<html><body style="font-family: Arial, sans-serif; padding: 20px; color: #333; background-color: #f5f5f5;">';
        $message .= '<div style="max-width: 600px; margin: 0 auto;">';
        $message .= '<img src="https://www.aida.ao/img/logo/aid_logo.png" alt="Company Logo" style="max-width: 100%; margin-bottom: 20px;">';
        $message .= '<h2 style="color: #007bff;">Mensagem do Formulário de Contacto</h2>';
        $message .= '<p>Olá Time,</p>';
        $message .= '<p>Recebemos uma nova mensagem do formulário de contato:</p>';
        $message .= '<strong>Nome: </strong>'.$nome;
        $message .= '<br>';
        $message .= '<strong>Email: </strong>'.$email;
        $message .= '<br>';
        $message .= '<strong>Assunto: </strong>'.$assunto;
        $message .= '<br>';
        $message .= '<strong>Mensagem: </strong>'.$mensagem;
        $message .= '<br>';

        $message .= '<br>';
        $message .= '<p>Por favor, responda ao remetente o mais breve possível.</p>';
        $message .= '<p>Obrigado!</p>';
        $message .= '<div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px; padding-bottom: 20px; margin-bottom: 20px; text-align: center; background-color:black; color:white;">';
        $message .= '<p>Siga-nos nas redes sociais:</p>';
        $message .= '<a href="https://www.facebook.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/bb194ecc-82ed-4c0b-a19d-2a7a27010865.png" alt="Facebook" style="width: 20px; height: 20px;"></a>';
        $message .= '<a href="https://www.linkdin.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/970bec08-616d-47fe-96ff-ebab859bb15b.png" alt="Linkdin" style="width: 20px; height: 20px;"></a>';
        $message .= '<a href="https://www.instagram.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/3d1d9040-b9a7-4fe5-bd48-6da093f22f12.png" alt="Instagram" style="width: 20px; height: 20px;"></a>';
        $message .= '<br>';
        $message .= '<p>Localização: Zango 0, Vila Chinesa</p>';
        $message .= '<p>&copy; ' . date('Y') . ' ADVANCED INTERNET DESIGN ANGOLA. Todos os direitos reservados.</p>';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</body></html>';
        
        $headers = array('Content-Type: text/html; charset=UTF-8');
        // Send custom mail
        wp_mail( 'info@aida.ao', 'Mensagem do Formulário de Contacto', $message, $headers );
        
        $message2 = '<html><body style="font-family: Arial, sans-serif; padding: 20px; color: #333; background-color: #f5f5f5;">';
        $message2 .= '<div style="max-width: 600px; margin: 0 auto;">';
        $message2 .= '<img src="https://www.aida.ao/img/logo/aid_logo.png" alt="Company Logo" style="max-width: 100%; margin-bottom: 20px;">';
        $message2 .= '<h2 style="color: #007bff;">Mensagem do Formulário de Contacto</h2>';
        $message2 .= '<p>Prezado(a) '.$nome. ',</p>';
        $message2 .= '<p>Agradecemos por entrar em contato connosco através da nossa página "Contacte-nos". Valorizamos a sua opinião e estaremos felizes em ajudar.</p>';
        $message2 .= '<p>Detalhes da sua mensagem:</p>';
        $message2 .= '<strong>Nome: </strong>'.$nome;
        $message2 .= '<br>';
        $message2 .= '<strong>Email: </strong>'.$email;
        $message2 .= '<br>';
        $message2 .= '<strong>Assunto: </strong>'.$assunto;
        $message2 .= '<br>';
        $message2 .= '<strong>Mensagem: </strong>'.$mensagem;
        $message2 .= '<br>';

        $message2 .= '<br>';
        $message2 .= '<p>Responderemos à sua mensagem o mais breve possível. Caso sua consulta seja urgente, recomendamos que entre em contato conosco diretamente pelo telefone 923695077.</p>';
        $message2 .= '<p>Agradecemos por escolher ADVANCED INTERNET DESIGN ANGOLA!</p>';
        $message2 .= '<br>';
        $message2 .= '<p>Atenciosamente,</p>';
        $message2 .= '<p>ADVANCED INTERNET DESIGN ANGOLA</p>';
        $message2 .= '<p>info@aida.ao</p>';
        $message2 .= '<div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px; padding-bottom: 20px; margin-bottom: 20px; text-align: center; background-color:black; color:white;">';
        $message2 .= '<p>Siga-nos nas redes sociais:</p>';
        $message2 .= '<a href="https://www.facebook.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/bb194ecc-82ed-4c0b-a19d-2a7a27010865.png" alt="Facebook" style="width: 20px; height: 20px;"></a>';
        $message2 .= '<a href="https://www.linkdin.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/970bec08-616d-47fe-96ff-ebab859bb15b.png" alt="Linkdin" style="width: 20px; height: 20px;"></a>';
        $message2 .= '<a href="https://www.instagram.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/3d1d9040-b9a7-4fe5-bd48-6da093f22f12.png" alt="Instagram" style="width: 20px; height: 20px;"></a>';
        $message2 .= '<br>';
        $message2 .= '<p>Localização: Zango 0, Vila Chinesa</p>';
        $message2 .= '<p>&copy; ' . date('Y') . ' ADVANCED INTERNET DESIGN ANGOLA. Todos os direitos reservados.</p>';
        $message2 .= '</div>';
        $message2 .= '</div>';
        $message2 .= '</body></html>';
        
        // Send custom mail
        wp_mail( $email, 'Agradecemos pelo seu contato', $message2, $headers );
        
        // Return a response to the JavaScript
        wp_send_json(array('success'=> 'true', 'message' => 'Mensagem enviada com sucesso.'));
    }else{
        wp_send_json(array('success'=> 'false', 'message' => 'Email inválido'));
    }
}

// AJAX action to register user
add_action('wp_ajax_register_user', 'register_user_callback');
add_action('wp_ajax_nopriv_register_user', 'register_user_callback');

//funcção para registar um novo usuário
function register_user_callback() {
    // Get the data from the AJAX request
    $user_data = isset($_POST['userData']) ? $_POST['userData'] : array();
    

    // Check if the user with the provided email already exists
    $user_exists = email_exists(sanitize_text_field($user_data['email']));
    $valid_email = is_email(sanitize_text_field($user_data['email']));
    if ($user_exists && $valid_email) {
        wp_send_json(array('success'=> 'false', 'message' => 'Este endereço de email já está em uso.'));
    }else{
        // Example: Use wp_create_user to create a new user
        $user_id = wc_create_new_customer(sanitize_text_field($user_data['email']), sanitize_text_field($user_data['nome']).' '. sanitize_text_field($user_data['sobrenome']), wp_hash_password(sanitize_text_field($user_data['senha'])));

        if (!is_wp_error($user_id)) {

            // Endereço de facturação
            update_user_meta($user_id, '_first_name', sanitize_text_field($user_data['nome']));
            update_user_meta($user_id, '_last_name', sanitize_text_field($user_data['sobrenome']));
            update_user_meta($user_id, '_billing_first_name', sanitize_text_field($user_data['nome']));
            update_user_meta($user_id, '_billing_last_name', sanitize_text_field($user_data['sobrenome']));
            update_user_meta($user_id, '_billing_state', sanitize_text_field($user_data['provincia']));
            update_user_meta($user_id, '_billing_city', sanitize_text_field($user_data['municipio']));
            update_user_meta($user_id, '_billing_address_1', sanitize_text_field($user_data['endereco']));
            update_user_meta($user_id, '_billing_phone', sanitize_text_field($user_data['telefone']));
            update_user_meta($user_id, '_billing_postcode', '1459');
            update_user_meta($user_id, '_billing_country', 'AO');

            // Shipping Address (if different from billing)
            update_user_meta($user_id, '_shipping_address_1', sanitize_text_field($user_data['endereco']));
            update_user_meta($user_id, '_shipping_city', sanitize_text_field($user_data['municipio']));
            update_user_meta($user_id, '_shipping_postcode', '1459');
            update_user_meta($user_id, '_shipping_country', 'AO ');

            // Send custom mail with welcome message
            // Send custom mail with welcome message<img src="./img/logo/aid_logo.png" alt="AIDA">
            $subject = 'Bem-vindo à nossa loja!';
            $message = '<html><body style="font-family: Arial, sans-serif; padding: 20px; color: #333; background-color: #f5f5f5;">';
            $message .= '<div style="max-width: 600px; margin: 0 auto;">';
            $message .= '<img src="https://www.aida.ao/img/logo/aid_logo.png" alt="Company Logo" style="max-width: 100%; margin-bottom: 20px;">';
            $message .= '<h2 style="color: #007bff;">Bem-vindo à nossa loja!</h2>';
            $message .= '<p>Olá ' . sanitize_text_field($user_data['nome']) . ' ' . sanitize_text_field($user_data['sobrenome']) . ',</p>';
            $message .= '<p>Agradecemos por se registrar na nossa loja online. Sua conta foi criada com sucesso!</p>';
            $message .= '<p>Agora você pode fazer login e começar a explorar nossa seleção de produtos.</p>';
            $message .= '<br>';
            $message .= '<p style="text-align: center;"><a href="https://www.aida.ao" style="background-color: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Ir para a Loja</a></p>';

            $message .= '<br>';
            $message .= '<p>Atenciosamente,</p>';
            $message .= '<p style="font-weight: bold;">ADVANCED INTERNET DESIGN ANGOLA</p>';
            $message .= '<div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px; padding-bottom: 20px; margin-bottom: 20px; text-align: center; background-color:black; color:white;">';
            $message .= '<p>Siga-nos nas redes sociais:</p>';
            $message .= '<a href="https://www.facebook.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/bb194ecc-82ed-4c0b-a19d-2a7a27010865.png" alt="Facebook" style="width: 20px; height: 20px;"></a>';
            $message .= '<a href="https://www.linkdin.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/970bec08-616d-47fe-96ff-ebab859bb15b.png" alt="Linkdin" style="width: 20px; height: 20px;"></a>';
            $message .= '<a href="https://www.instagram.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/3d1d9040-b9a7-4fe5-bd48-6da093f22f12.png" alt="Instagram" style="width: 20px; height: 20px;"></a>';
            $message .= '<br>';
            $message .= '<p>Localização: Zango 0, Vila Chinesa</p>';
            $message .= '<p>&copy; ' . date('Y') . ' ADVANCED INTERNET DESIGN ANGOLA. Todos os direitos reservados.</p>';
            $message .= '</div>';
            $message .= '</div>';
            $message .= '</body></html>';

            
            $headers = array('Content-Type: text/html; charset=UTF-8');
            // Send custom mail
            wp_mail( sanitize_text_field($user_data['email']), $subject, $message, $headers );

            // Return a response to the JavaScript
            wp_send_json(array('success'=> 'true', 'message' => 'Usuário registado com sucesso.'));
        } else {
            // User registration failed
            wp_send_json(array('success'=> 'false', 'message' => 'Erro ao registar usuário'));
        }
    }

    

    // Don't forget to exit
    wp_die();
}


?>