const terms_modal = document.querySelector('.terms__modal');
const open_modal = document.querySelector('.open__terms-modal');
const close_modal = document.querySelector('.close__terms-modal');
let usr_shipp_pay = document.getElementById('usr_shipp_pay');

open_modal.addEventListener('click', function (){
    terms_modal.showModal();
});

close_modal.addEventListener('click', function (){
    terms_modal.close();
});


//Colectar a zona de envio do cliente
usr_shipp_pay.addEventListener('click', function(event){
    let usrShippClicked = event.target;
    let shippId = usrShippClicked.getAttribute('data-order');
    let formData = {};
    
    
    let shippmentOptions = document.getElementsByName('envio');
    formData.shippZone = getRadioValue(shippmentOptions);

    
    // AJAX request
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'assign_shipping_zone_to_order', // Action name defined in the server-side function
            form_data: formData,
            orderId: shippId
        },
        success: function (response) {
            // Handle the server's response
            if (response.success) {
                console.log(response.message);
                
            } else {
                alert("Erro na taxa de envio!!!");
            }
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});

//Verifica a escolha para o envio
function getRadioValue(radioOptions) {
    for (var i = 0; i < radioOptions.length; i++) {
        if (radioOptions[i].checked) {
            return radioOptions[i].value;
        }
    }
    return null; // No option selected
}