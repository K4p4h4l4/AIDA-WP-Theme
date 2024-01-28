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
        
        if(is_page('login') || is_page('recuperar-senha') || is_page('recetar-senha')){
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
        
        //Biblioteca para sanitizar os inputs do form
        wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
        //get_theme_file_uri
        wp_enqueue_script('dompurify__js');

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
            //Pegamento js 
            wp_register_script('pagamento_js', get_template_directory_uri().'/assets/js/pagamento.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('pagamento_js');
        }
        
        if(is_page('carrinho')){
            //Carrinho js 
            wp_register_script('carrinho_js', get_template_directory_uri().'/assets/js/carrinho.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('carrinho_js');
        }
        
        if(is_page('checkout')){
            //Checkout js 
            wp_register_script('checkout__js', get_template_directory_uri().'/assets/js/checkout.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('checkout__js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('registar')){
            //Registar js 
            wp_register_script('registar_js', get_template_directory_uri().'/assets/js/registar.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('registar_js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('contacte-nos')){
            //contacte-nos js 
            wp_register_script('contacte-nos_js', get_template_directory_uri().'/assets/js/contacte-nos.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('contacte-nos_js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('login')){
            //Login js 
            wp_register_script('login_js', get_template_directory_uri().'/assets/js/login.js', array(), 1, 1, 1);
            wp_localize_script('login_js', 'login_params', array(
                'ajaxurl' => admin_url('admin-ajax.php'),
                'ajax_nonce' => wp_create_nonce('ajax_nonce'), // Create nonce here
            ));
            //get_theme_file_uri
            wp_enqueue_script('login_js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('minha-conta')){
            //Minha conta js 
            wp_register_script('minha-conta_js', get_template_directory_uri().'/assets/js/minha-conta.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('minha-conta_js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('recuperar-senha')){
            //Minha conta js 
            wp_register_script('recuperar-senha_js', get_template_directory_uri().'/assets/js/recuperar-senha.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('recuperar-senha_js');
            
            //Biblioteca para sanitizar os inputs do form
            wp_register_script('dompurify__js', 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js', array(), null, true);
            //get_theme_file_uri
            wp_enqueue_script('dompurify__js');
        }
        
        if(is_page('recetar-senha')){
            //Minha conta js 
            wp_register_script('recetar-senha_js', get_template_directory_uri().'/assets/js/recetar-senha.js', array(), 1, 1, 1); //get_theme_file_uri
            wp_enqueue_script('recetar-senha_js');
            
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
        if (isset($_POST['cart_item_key']) || isset($_SESSION['cart'])) {
            
            $product_cart_id = WC()->cart->generate_cart_id( $_POST['cart_item_key'] );
            $product_item_key = WC()->cart->find_product_in_cart($product_cart_id); 
            $cart_item_key = sanitize_text_field($product_item_key);
            
            // Remove the item from the cart
            WC()->cart->remove_cart_item($cart_item_key);
            
            if(isset($_SESSION['cart'])){
                //$order_id = $_POST['orderID'];
                $order = $_SESSION['cart']; // Retrieve the order object by ID
                
                if ($order) {
                    // Remove the item from the order
                    foreach ($order->get_items() as $item_id => $item) {
                        if ($item->get_id() === $cart_item_key) {
                            $order->remove_item($item_id);
                            break;
                        }
                    }
                    
                    // Calculate totals and save the order
                    $order->calculate_totals();
                    
                    // Save the updated order
                    $order->save();
                }
                
                $_SESSION['cart'] = $order;
            }
            
            wp_send_json(['success' => true, 'message' => ' Produto removido com sucesso']);
        } else {
            wp_send_json(['success' => false, 'message' => ' Erro ao remover produto']);
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
        
        // Check if the provided cart item key exists in the cart
        $cart_item = WC()->cart->get_cart_item($cart_item_key);

        if ($new_quantity > 0 && $cart_item) {
            // Update the cart item quantity
            WC()->cart->set_quantity($cart_item_key, $new_quantity);

            // Calculate totals and return the updated cart HTML
            $totals = WC()->cart->calculate_totals();
            $updated_cart_html = WC()->cart->get_cart_contents();
            
            // Check if an order (cart) exists in the session
            if (isset($_SESSION['cart'])) {
                $order = $_SESSION['cart'];

                // Check if the product already exists in the order
                $existing_items = $order->get_items();
                $product_exists = false;

                foreach ($existing_items as $item_id => $item) {
                    if ($item->get_product_id() == $product_id) {
                        // Update the quantity of the existing product

                        $item->set_quantity($new_quantity);
                        $product_exists = true;
                        break;
                    }
                }

                // Calculate totals and save the order
                $order->calculate_totals();
                $order->save();
            }
            
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
        
        // Check if the product already exists in the order
        $existing_items = $order->get_items();
        $product_exists = false;
        
        foreach ($existing_items as $item_id => $item) {
            if ($item->get_product_id() == $product_id) {
                // Update the quantity of the existing product
    
                $item->set_quantity($quantity);
                $product_exists = true;
                break;
            }
        }
        
        if (!$product_exists) {
            // Add the product to the order
            $order->add_product(wc_get_product($product_id), $quantity);
        }

        // Calculate totals and save the order
        $order->calculate_totals();
    } else {
        // If no cart exists, create a new one
        $order = wc_create_order();
        $_SESSION['cart'] = $order;
        
        // Add the product to the order
        $order->add_product(wc_get_product($product_id), $quantity);

        // Calculate totals and save the order
        $order->calculate_totals();
    }
    
    if(is_user_logged_in()){
        $user_id = get_current_user_id(); // Get the current logged-in user ID
        // Set the user ID for the order
        $order->set_customer_id($user_id);
        
    }
    
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
        $_SESSION['cart'] = $order;
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
        wp_send_json(array('success'=> true, 'message' => 'Mensagem enviada com sucesso.'));
    }else{
        wp_send_json(array('success'=> false, 'message' => 'Email inválido'));
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
        wp_send_json(array('success'=> false, 'message' => 'Este endereço de email já está em uso.'));
    }else{
        // Example: Use wp_create_user to create a new user
        $user_id = wc_create_new_customer(sanitize_text_field($user_data['email']), sanitize_text_field($user_data['email']), sanitize_text_field($user_data['senha']));//wp_hash_password()

        if (!is_wp_error($user_id)) {
            
            /*wc_update_new_customer_address(array('first_name' => sanitize_text_field($user_data['nome']), 'last_name' => sanitize_text_field($user_data['sobrenome'])), $user_id);*/


            // Endereço de facturação
            update_user_meta($user_id, 'first_name', sanitize_text_field($user_data['nome']));
            update_user_meta($user_id, 'last_name', sanitize_text_field($user_data['sobrenome']));
            update_user_meta($user_id, 'billing_first_name', sanitize_text_field($user_data['nome']));
            update_user_meta($user_id, 'billing_last_name', sanitize_text_field($user_data['sobrenome']));
            update_user_meta($user_id, 'billing_state', sanitize_text_field($user_data['provincia']));//
            update_user_meta($user_id, 'billing_city', sanitize_text_field($user_data['municipio']));
            update_user_meta($user_id, 'billing_address_1', sanitize_text_field($user_data['endereco']));
            update_user_meta($user_id, 'billing_phone', sanitize_text_field($user_data['telefone']));
            update_user_meta($user_id, 'billing_postcode', '1459');
            update_user_meta($user_id, 'billing_country', 'AO');

            // Shipping Address (if different from billing)
            update_user_meta($user_id, 'shipping_first_name', sanitize_text_field($user_data['nome']));
            update_user_meta($user_id, 'shipping_last_name', sanitize_text_field($user_data['sobrenome']));
            update_user_meta($user_id, 'shipping_address_1', sanitize_text_field($user_data['endereco']));
            update_user_meta($user_id, 'shipping_state', sanitize_text_field($user_data['provincia']));
            update_user_meta($user_id, 'shipping_city', sanitize_text_field($user_data['municipio']));
            update_user_meta($user_id, 'shipping_phone', sanitize_text_field($user_data['telefone']));
            update_user_meta($user_id, 'shipping_postcode', '1459');
            update_user_meta($user_id, 'shipping_country', 'AO');

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
            wp_send_json(array('success'=> true, 'message' => 'Usuário registado com sucesso.'));
        } else {
            // User registration failed
            wp_send_json(array('success'=> false, 'message' => 'Erro ao registar usuário'));
        }
    }

    // Don't forget to exit
    wp_die();
}

add_action('wp_ajax_user_login', 'user_login_callback');
add_action('wp_ajax_nopriv_user_login', 'user_login_callback');

function user_login_callback() {
    $user_data = isset($_POST['userData']) ? $_POST['userData'] : array();

    // Sanitize and validate user input
    $email = sanitize_email($user_data['email']);
    $password = sanitize_text_field($user_data['senha']);
    
    // Verify nonce
    if (isset($_POST['security']) && wp_verify_nonce($_POST['security'], 'ajax_nonce')) {
        // Authenticate user
        /*$creds = array(
            'user_login'    => $email,
            'user_password' => $password,
            'remember'      => true
        );

        $user = wp_signon($creds, false);*/
        //$user = wp_authenticate_username_password(null, $email, $password);
        $user = wp_authenticate($email, $password);
        if (!is_wp_error($user)) {
            // Login successful
            wp_set_current_user($user->ID, $user->user_login);
            wp_set_auth_cookie($user->ID);
            do_action('wp_login', $user->user_login, $_SERVER['HTTP_USER_AGENT']);

            wp_send_json(array('success'=> true, 'message' => 'Login bem-sucedido.'));
        } else {
            // Login failed
            wp_send_json(array('success'=> false, 'message' => 'Erro ao fazer login. Verifique as suas credenciais.'));
        }
    } else {
        wp_send_json(array('success'=> false, 'message' => 'Nonce verification failed.'));
    }    

    // Don't forget to exit
    wp_die();
}

// Add this function in your theme's functions.php or a custom plugin
function get_order_invoice_url($order_id) {
    $order = wc_get_order($order_id);
    $downloads = $order->get_downloadable_items();

    if (empty($downloads)) {
        return '';
    }

    $first_download = reset($downloads);

    return esc_url($first_download['download_url']);
}

// WordPress AJAX action to log out the user
add_action('wp_ajax_custom_logout', 'custom_logout');
add_action('wp_ajax_nopriv_custom_logout', 'custom_logout');

function custom_logout() {
    wp_logout(); // Log the user out
    
    //Unset your custom session variable cart
    unset($_SESSION['cart']);

    // Send a response to indicate a successful logout
    wp_send_json(['success' => true]);
    
    wp_die();
}

// Add AJAX action hook for updating user profile
add_action("wp_ajax_update_user_profile", "update_user_profile_callback");
add_action("wp_ajax_nopriv_update_user_profile", "update_user_profile_callback");

function update_user_profile_callback() {
    // Check if the user is logged in
    if (!is_user_logged_in()) {
        wp_send_json(["success" => false, "message" => "Usuário não autenticado"]);
    }else{
        // Get current user ID
        $user_id = get_current_user_id();

        // Get user data sent via AJAX
        $user_data = isset($_POST["user_data"]) ? $_POST["user_data"] : [];

        // Update user meta data (replace with your specific field names)
        update_user_meta($user_id, "first_name", sanitize_text_field($user_data["nome"]));
        update_user_meta($user_id, "last_name", sanitize_text_field($user_data["sobrenome"]));
        update_user_meta($user_id, "billing_phone", sanitize_text_field($user_data["telefone"]));
        
        update_user_meta($user_id, "shipping_first_name", sanitize_text_field($user_data["nome"]));
        update_user_meta($user_id, "shipping_last_name", sanitize_text_field($user_data["sobrenome"]));
        update_user_meta($user_id, "shipping_phone", sanitize_text_field($user_data["telefone"]));

        wp_send_json(["success" => true, "message" => "Perfil actualizado com sucesso"]);
    }

    
}

// Add AJAX action hook for updating user address
add_action("wp_ajax_update_user_address", "update_user_address_callback");
add_action("wp_ajax_nopriv_update_user_address", "update_user_address_callback");

function update_user_address_callback() {
    // Check if the user is logged in
    if (!is_user_logged_in()) {
        wp_send_json(["success" => false, "message" => "Usuário não autenticado"]);
    }else{
        // Get current user ID
        $user_id = get_current_user_id();

        // Get user data sent via AJAX
        $user_data = isset($_POST["user_data"]) ? $_POST["user_data"] : [];

        // Update user meta data (replace with your specific field names)
        update_user_meta($user_id, 'billing_state', sanitize_text_field($user_data['provincia']));
        update_user_meta($user_id, 'billing_city', sanitize_text_field($user_data['municipio']));
        update_user_meta($user_id, 'billing_address_1', sanitize_text_field($user_data['endereco']));
        
        update_user_meta($user_id, 'shipping_state', sanitize_text_field($user_data['provincia']));//
        update_user_meta($user_id, 'shipping_city', sanitize_text_field($user_data['municipio']));
        update_user_meta($user_id, 'shipping_address_1', sanitize_text_field($user_data['endereco']));

        wp_send_json(["success" => true, "message" => "Endereço actualizado com sucesso"]);
    }

    
}

// Add server-side action hooks for AJAX
add_action('wp_ajax_validate_and_update_password', 'validate_and_update_password_callback');
add_action('wp_ajax_nopriv_validate_and_update_password', 'validate_and_update_password_callback');

function validate_and_update_password_callback() {
    // Get user's current ID
    $current_user_id = get_current_user_id();

    // Get the entered current password, new password, and confirm password from AJAX request
    $current_password = sanitize_text_field($_POST['current_password']);
    $new_password = sanitize_text_field($_POST['new_password']);
    $confirm_password = sanitize_text_field($_POST['confirm_password']);

    // Verify if the entered current password matches the user's current password
    if (wp_check_password($current_password, wp_get_current_user()->user_pass, $current_user_id)) {
        // Current password matches, now check if new password and confirm password match
        if ($new_password === $confirm_password) {
            // Update the user's password
            wp_set_password($new_password, $current_user_id);
            wp_send_json(['success' => true, 'message' => 'Password actualizda com sucesso!']);
        } else {
            wp_send_json(['success' => false, 'message' => 'A nova senha e a confirmação da senha não conferem.']);
        }
    } else {
        wp_send_json(['success' => false, 'message' => 'Senha incorrecta.']);
    }

    wp_die();
}

add_action('wp_ajax_reset_password_request', 'reset_password_request_callback');
add_action('wp_ajax_nopriv_reset_password_request', 'reset_password_request_callback');

function reset_password_request_callback() {
    $user_email = sanitize_email($_POST['user_email']);

    if (empty($user_email)) {
        wp_send_json(['success' => false, 'message' => 'Please provide your email address.']);
    }

    // Check if the email address exists in the database
    $user = get_user_by('email', $user_email);

    if (!$user) {
        wp_send_json(['success' => false, 'message' => 'Email address not found in our records.']);
    }

    // Generate a unique reset key and store it in user's meta data
    $reset_key = wp_generate_password(20, false);
    $reset_key_expiration = current_time('timestamp') + 3600;
    update_user_meta($user->ID, 'password_reset_key', $reset_key);
    update_user_meta($user->ID, 'password_reset_key_expiration', $reset_key_expiration);

    // Send a password reset email to the user
    $reset_link = site_url("/recetar-senha?key=$reset_key&email=$user_email");
    $email_subject = 'Pedido de reset de senha';
    
    $email_message = '<html><body style="font-family: Arial, sans-serif; padding: 20px; color: #333; background-color: #f5f5f5;">';
    $email_message .= '<div style="max-width: 600px; margin: 0 auto;">';
    $email_message .= '<img src="https://www.aida.ao/img/logo/aid_logo.png" alt="Company Logo" style="max-width: 100%; margin-bottom: 20px;">';
    /*$email_message .= '<h2 style="color: #007bff;">Bem-vindo à nossa loja!</h2>';*/
    $email_message .= '<p>Olá,</p>';
    $email_message .= '<p>Recebemos uma solicitação para redefinir a senha da sua conta. Para criar uma nova senha, clique no link abaixo:</p>';
    $email_message .= "<p>Clique no seguinte link para recetar a sua senha: <a href=$reset_link>Clique aqui</a></p>";
    $email_message .= '<p>Se você não solicitou essa redefinição de senha, pode ignorar este email. Sua senha permanecerá a mesma.</p>';
    $email_message .= '<p>Lembre-se de escolher uma senha segura, com pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas, números e caracteres especiais, para manter sua conta protegida.</p>';
    $email_message .= '<p>Se você tiver algum problema ou dúvida, entre em contato connosco.</p>';
    

    $email_message .= '<br>';
    $email_message .= '<p>Atenciosamente,</p>';
    $email_message .= '<p style="font-weight: bold;">ADVANCED INTERNET DESIGN ANGOLA</p>';
    $email_message .= '<div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px; padding-bottom: 20px; margin-bottom: 20px; text-align: center; background-color:black; color:white;">';
    $email_message .= '<p>Siga-nos nas redes sociais:</p>';
    $email_message .= '<a href="https://www.facebook.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/bb194ecc-82ed-4c0b-a19d-2a7a27010865.png" alt="Facebook" style="width: 20px; height: 20px;"></a>';
    $email_message .= '<a href="https://www.linkdin.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/970bec08-616d-47fe-96ff-ebab859bb15b.png" alt="Linkdin" style="width: 20px; height: 20px;"></a>';
    $email_message .= '<a href="https://www.instagram.com" style="margin-right: 10px;"><img src="https://d3k81ch9hvuctc.cloudfront.net/company/PMgFnb/images/3d1d9040-b9a7-4fe5-bd48-6da093f22f12.png" alt="Instagram" style="width: 20px; height: 20px;"></a>';
    $email_message .= '<br>';
    $email_message .= '<p>Localização: Zango 0, Vila Chinesa</p>';
    $email_message .= '<p>&copy; ' . date('Y') . ' ADVANCED INTERNET DESIGN ANGOLA. Todos os direitos reservados.</p>';
    $email_message .= '</div>';
    $email_message .= '</div>';
    $email_message .= '</body></html>';
    
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    $sent = wp_mail($user_email, $email_subject, $email_message, $headers);

    if ($sent) {
        wp_send_json(['success' => true, 'message' => 'Password reset email sent. Please check your email.']);
    } else {
        wp_send_json(['success' => false, 'message' => 'Failed to send password reset email.']);
    }
    wp_die();
}


//Função para recetar a senha
add_action('wp_ajax_reset_password', 'reset_password_callback');
add_action('wp_ajax_nopriv_reset_password', 'reset_password_callback');

function reset_password_callback() {
    $user_email = sanitize_email($_POST['user_email']);
    $reset_key = sanitize_text_field($_POST['reset_key']);
    $new_password = sanitize_text_field($_POST['new_password']);
    
    // Check if the email address exists in the database
    $user = get_user_by('email', $user_email);
    // Check if the reset key matches the one stored in user's meta data
    $stored_reset_key = get_user_meta($user->ID, 'password_reset_key', true);
    $reset_key_expiration = get_user_meta($user->ID, 'password_reset_key_expiration', true);

    if (!$stored_reset_key || $reset_key !== $stored_reset_key || $reset_key_expiration < current_time('timestamp')) {
        wp_send_json(['success' => false, 'message' => 'Chave inválida.']);
    }else if($user){
        // Update the user's password
        
        wp_set_password($new_password, $user->ID);

        // Clear the reset key from user's meta data
        delete_user_meta($user->ID, 'password_reset_key');
        delete_user_meta($user->ID, 'password_reset_key_expiration');

        wp_send_json(['success' => true, 'message' => 'Senha recetada com sucesso.']);
    }else{
        wp_send_json(['success' => false, 'message' => 'Email inválido.']);
    } 
}

// Function to handle the review submission
add_action('wp_ajax_submit_product_review', 'submit_product_review_callback');
add_action('wp_ajax_nopriv_submit_product_review', 'submit_product_review_callback');

function submit_product_review_callback() {
    $product_id = sanitize_text_field($_POST['product_id']);
    $rating = intval($_POST['rating']);
    $review = sanitize_text_field($_POST['review']);

    // Validate the review data as needed

    // Check if WooCommerce is active
    if (class_exists('WooCommerce')) {
        // Check if the product exists
        if (wc_get_product($product_id)) {
            // Get the current user (assuming the user is logged in)
            $user = wp_get_current_user();

            // Check if the user is logged in
            if ($user->ID !== 0) {
                // Prepare the review data
                $review_data = array(
                    'comment_post_ID' => $product_id,
                    'comment_author' => $user->first_name.' '.$user->last_name,
                    'comment_content' => $review,
                    'comment_meta' => array('rating' => $rating),
                    'user_id' => $user->ID,
                );

                // Insert the review into WooCommerce
                $comment_id = wp_new_comment($review_data);

                if ($comment_id) {
                    // Update WooCommerce's product rating and count
                    update_comment_meta($comment_id, 'rating', $rating);

                    wp_send_json(['success' => true, 'message' => 'Avaliação submetida com sucesso.']);
                } else {
                    wp_send_json(['success' => false, 'message' => 'Erro ao submeter avaliação.']);
                }
            } else {
                wp_send_json(['success' => false, 'message' => 'Utilizador não está autenticado.']);
            }
        } else {
            wp_send_json(['success' => false, 'message' => 'Produto não encontrado.']);
        }
    } else {
        wp_send_json(['success' => false, 'message' => 'WooCommerce não está ativo.']);
    }

    wp_die();
}

function fetch_product_info() {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

    if ($product_id) {
        $product = wc_get_product($product_id);
        if ($product) {
            $response = array(
                'image' => wp_get_attachment_url($product->get_image_id()),
                'name' => $product->get_name(),
                'regular_price' => $product->get_regular_price(),
                'sales_price'=>$product->get_sale_price(),
                'rating' => $product->get_average_rating(),
                'review_count' => $product->get_review_count(),
                'stock_status' => $product->get_stock_status(),
                'description' => $product->get_description()
            );
            wp_send_json_success($response);
        }
    }

    wp_send_json_error('Product not found');
}

add_action('wp_ajax_fetch_product_info', 'fetch_product_info');
add_action('wp_ajax_nopriv_fetch_product_info', 'fetch_product_info');



add_action('wp_ajax_add_wishlist_item', 'add_wishlist_item_callback');
add_action('wp_ajax_nopriv_add_wishlist_item', 'add_wishlist_item_callback');

//Função para adicionar itens a lista dos favoritos
function add_wishlist_item_callback(){
    
    $product_id = isset($_POST['productID']) ? intval($_POST['productID']) : 0;
    // User ID for whom the product should be added to the wishlist
    $user_id = get_current_user_id(); // or specify the user ID directly

    if($user_id > 0 && $product_id > 0){
        // Check if the function exists
        if (function_exists('ti_woocommerce_add_to_wishlist')) {
            // Add the product to the wishlist
            ti_woocommerce_add_to_wishlist($product_id, $user_id);
            wp_send_json(array('success' => true, 'message' => 'Producto adicionado a lista de desejos'));
        } else {
            // Handle the case where the function doesn't exist
            //echo "Wishlist function not available.";
            wp_send_json(array('success' => false, 'message' => 'Função não existe'));
        }
    }else{
        wp_send_json(array('success' => false, 'message' => 'Erro ao adicionar a lista de desejos'));
    }
    
    wp_die();
}


?>