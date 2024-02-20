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
    let formData = {};
    
    let paymentOptions = document.getElementsByName('pagamento');
    formData.paymentMethod = getRadioValue(paymentOptions);
    
    if(formData.paymentMethod == null){
       alert('Escolha o método de pagamento!');
    }else{
        
        // AJAX request to trigger the download
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'download_invoice',
                form_data: JSON.stringify(formData),
                order_id: orderID,
                nonce: ajax_object.nonce,
            },
            beforeSend: function(){
                loader.classList.remove("loader__hidden");
            },
            success: function(response) {
               // Check if the response contains the invoice URL
                if (response.invoice_url) {
                    // Open the generated invoice URL in a new tab
                    window.open(response.invoice_url, '_blank');
                    alert('Encomenda feita com sucesso!');
                    window.location.href = './home/';
                } else {
                    console.error('Error: Invalid invoice URL', response.invoice_url);
                }

            },
            error: function(error) {
                console.error('Error:', error);
            },
            complete: function(){
                loader.classList.add("loader__hidden");
            }
        });
    }
    
}

//Verifica a escolha para o envio
function getRadioValue(radioOptions) {
    for (var i = 0; i < radioOptions.length; i++) {
        if (radioOptions[i].checked) {
            return radioOptions[i].value;
        }
    }
    return null; // No option selected
}