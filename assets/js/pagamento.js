if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

function ready(){
    let usr_pay = document.getElementById('usr_pay');
    let payment_methods_btns = document.getElementsByClassName('information__radio');
    
    usr_pay.addEventListener('click', finishOrder);
}

function finishOrder(event){
    let clicked_btn = event.target;
    let orderID = clicked_btn.getAttribute('data-order');
    
    console.log(orderID);
    
    let paymentOptions = document.getElementsByName('pagamento');
    
    // AJAX request to trigger the download
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'download_invoice',
            order_id: orderID
        },
        success: function(response) {
            // Handle the server's response if needed
            console.log(response);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
}