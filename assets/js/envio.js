if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

function ready(){
    const terms_modal = document.querySelector('.terms__modal');
    const open_modal = document.querySelector('.open__terms-modal');
    const close_modal = document.querySelector('.close__terms-modal');
    let usr_shipp_pay = document.getElementById('usr_shipp_pay');
    let radio_btns = document.getElementsByClassName('information__radio');
    
    //mudanças nos métdodos de entrega
    for(let i=0; i < radio_btns.length; i++){
        let input = radio_btns[i];
        input.addEventListener('change', shippingMethodChange);
    }

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
                    
                    window.location.href = './pagamento/';
                } else {
                    alert("Erro na taxa de envio!!!");
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });
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

//Verifica as mudanças no método de entregada encomenda
function shippingMethodChange(){
    let selected = document.querySelector("input[name='envio']:checked").value;
    let subtotalPrice = document.getElementsByClassName('subtotal__price')[0];
    let shippingPice = 0;
    let total = 0;
    if((selected == 1) || (selected == 7)){
        shippingPice = 0;
    }else if (selected == 2){
        shippingPice = 1500;      
    }else if (selected == 3){
        shippingPice = 2000;      
    }else if (selected == 4){
        shippingPice = 2500;      
    }else if (selected == 5){
        shippingPice = 2800;      
    }else if (selected == 6){
        shippingPice = 11500;      
    }
    
    if(shippingPice == 0){
       document.getElementById('shippingValue').innerText = "Grátis"; 
    }else{
        document.getElementById('shippingValue').innerText = shippingPice.toLocaleString("nl-NL", {
            style: "currency", 
            currency: "AKZ",                       
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });
    }
    
    let price = parseFloat(subtotalPrice.innerText.replace("AKZ", "").replace(".", "").replace(".", ""));
    
    
    total = price + shippingPice;
    
    document.getElementsByClassName('total__price-holder')[0].innerText = /*'Kz ' +*/ total.toLocaleString("nl-NL", {
        style: "currency", 
        currency: "AKZ",                       
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    });
}