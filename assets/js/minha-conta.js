if(document.readyState == 'loading'){
    loader.classList.remove("loader__hidden");
    document.addEventListener('DOMContentLoaded', ready);
}else{
    loader.classList.add("loader__hidden");
    ready();
}

function ready(){
    const content1 = document.getElementById('content1');
    const content2 = document.getElementById('content2');
    const content3 = document.getElementById('content3');
    const content4 = document.getElementById('content4');
    const content5 = document.getElementById('content5');

    const btn1 = document.getElementById('btn1');
    const btn2 = document.getElementById('btn2');
    const btn3 = document.getElementById('btn3');
    const btn4 = document.getElementById('btn4');
    const btn5 = document.getElementById('btn5');
    
    //remove Items From cart
    let facturaButtons = document.getElementsByClassName('action__remove');
    //console.log(removeTableButtons);
    for(let i=0; i < facturaButtons.length; i++){
        let factura = facturaButtons[i];
        factura.addEventListener('click', imprimirFactura);
    }
}

function myaccountProfile(){
    content1.style.transform = "translateX(0)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-red)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-black)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = ".3s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "relative";
    content2.style.position = "absolute";
    content3.style.position = "absolute";
    content4.style.position = "absolute";
    content5.style.position = "absolute";
}

function myaccountAddress(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(0)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-red)";
    btn3.style.color = "var(--default-black)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = ".3s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "absolute";
    content2.style.position = "relative";
    content3.style.position = "absolute";
    content4.style.position = "absolute";
    content5.style.position = "absolute";
}

function myaccountOrders(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(0)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-red)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = ".3s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "absolute";
    content2.style.position = "absolute";
    content3.style.position = "relative";
    content4.style.position = "absolute";
    content5.style.position = "absolute";
}

function myaccountWishlist(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(0)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-balck)";
    btn4.style.color = "var(--default-red)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = ".3s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "absolute";
    content2.style.position = "absolute";
    content3.style.position = "absolute";
    content4.style.position = "relative";
    content5.style.position = "absolute";
}

function myaccountSecurity(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(0)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-balck)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-red)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = ".3s";
    
    content1.style.position = "absolute";
    content2.style.position = "absolute";
    content3.style.position = "absolute";
    content4.style.position = "absolute";
    content5.style.position = "relative";
}

//Função para donwload 
function imprimirFactura(event){
    let facturaClicked = event.target;
    
    let facturaId = facturaClicked.getAttribute('data-order-id');
    
    // Check if the order ID is valid
    if (facturaId) {
        // Send an AJAX request to generate the invoice
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'generate_invoice',
                orderId: facturaId
            },
            beforeSend: function(){
                loader.classList.remove("loader__hidden");
            },
            success: function (data) {
                // Check if the response contains the invoice URL
                if (data.invoice_url) {
                    // Open the generated invoice URL in a new tab
                    window.open(data.invoice_url, '_blank');
                } else {
                    console.error('Error: Invalid invoice URL', data.invoice_url);
                }
                //console.log(data.invoice_url);
            },
            error: function (error) {
                console.error('Error generating the invoice:', error);
            },
            complete: function(){
                loader.classList.add("loader__hidden");
            }
        });
    } else {
        console.error('Error: Invalid order ID');
    }
}