//jQuery(document).ready(function($) {
    document.querySelectorAll('.cart__close-btn').forEach(remove_product_btn => {
        remove_product_btn.onclick = ()=>{
            var cartItemKey = remove_product_btn.getAttribute('data-product-id');
            jQuery.ajax({
                type: 'POST',
                url: wc_add_to_cart_params.ajax_url, //'http://localhost/wordpress/wp-admin/admin-ajax.php' ajaxurl WordPress AJAX URL (automatically defined)
                data: {
                    action: 'remove_cart_item', // Action hook for the AJAX handler
                    cart_item_key: cartItemKey // The key of the cart item to remove
                },
                success: function(response) {
                    if (response === 'success') {
                        // Handle success - you can update the cart display or perform other actions
                        window.location.reload();
                    } else {
                        // Handle error
                        alert('An error occurred while removing the product from the cart.');
                    }
                }
            });
        }
    });
//});
