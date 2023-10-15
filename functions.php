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
        wp_send_json(['success' => false, 'message' => 'Erro ao criar a encomenda e a adicionar produtos á mesma ']);
    }

    wp_die();
}

add_action('wp_ajax_update_order_item_quantity', 'update_order_item_quantity_callback');
add_action('wp_ajax_nopriv_update_order_item_quantity', 'update_order_item_quantity_callback');


//Função para actualizar a quantidade de produtos na encomenda
function update_order_item_quantity_callback() {
    // Get the data sent from the client
    $order_id = $_POST['order_id_update'];
    $product_id = $_POST['product_id_update'];
    $new_quantity = $_POST['quantity_update'];

    // Update the order item's quantity (you need to implement this logic)
    // Example: $updated = your_update_quantity_function($order_id, $product_id, $new_quantity);

    // Retrieve the order number
    //$order = wc_get_order($order_id);
    $order = $_SESSION['cart'];
    $order_number = $order->get_order_number();
    //print_r($order);//$order_id;
    
    if($order){
        // Loop through order items to find the specific product
        foreach ($order->get_items() as $item_id => $item) {
            // Replace $product_id with the actual product ID you want to update
            //$product_id = YOUR_PRODUCT_ID;

            // Check if the product in the order matches the product you want to update
            if ($item->get_product_id() == $product_id) {
                // Set the new quantity (replace with the desired quantity)
                //$new_quantity = YOUR_NEW_QUANTITY;
                //var_dump($item_id);
                // Update the quantity for this item
                wc_update_order_item($item_id, ['qty' => $new_quantity]);
                
                //Calcular os totais com a alteração das quantidades dos produtos
                $order->calculate_totals();
                // Save the order to apply the changes
                $order->save();

                // Optionally, you can add order notes to record the quantity change
                /*$order->add_order_note(
                    sprintf(__('Quantity of product updated to %s', 'your-text-domain'), $new_quantity)
                );*/

                // Optionally, you can trigger any necessary actions or hooks here
                break; // Exit the loop after updating the item
            }
        }
    }

    if($order){
        // Prepare the response data including the order number
        /*$response_data = [
            'success' => true,
            'message' => 'Quantidade actualizada com sucesso',
            'order_number' => $order_number, // Include the order number in the response
        ];*/
        // Send the response data back to the client
        wp_send_json([
            'success' => true,
            'message' => 'Quantidade actualizada com sucesso',
            'order_number' => $order_number // Include the order number in the response
        ]);
    }else{
        // Prepare the response data including the order number
        /*$response_data = [
            'success' => false,
            'message' => 'Erro ao actualizar a quantidade',
            'order_number' => $order_number // Include the order number in the response
        ];*/
        // Send the response data back to the client
        wp_send_json([
            'success' => false,
            'message' => 'Erro ao actualizar a quantidade',
            'order_number' => $order_number // Include the order number in the response
        ]);
    }
    error_log($order);
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


?>