if(document.readyState == 'loading'){
    
    document.addEventListener('DOMContentLoaded', ready);
}else{
    
    ready();
}

//Function ready
function ready(){
    //remove Items From cart
    let removeTableButtons = document.getElementsByClassName('action__remove');
    //console.log(removeTableButtons);
    for(let i=0; i < removeTableButtons.length; i++){
        var removeItemTable = removeTableButtons[i];
        removeItemTable.addEventListener('click', removeTableItem);
    }
    
    //Mudança das quantidades
    let quantityInputs = document.getElementsByClassName('qtde__number');
    for(let i=0; i < quantityInputs.length; i++){
        let input = quantityInputs[i];
        input.addEventListener('change', quantityChangeTable);
    }
    
    //Ver factura proforma
    let invoiceButton = document.getElementById('invoice-btn');
    
    //Verifica se tem itens no carrinho e se sim tenta gerar a factura
    if(quantityInputs.length > 0){
        invoiceButton.addEventListener('click', getInvoice);
    }
    
    document.getElementById('checkout').addEventListener('click', callCheckout2);
    
}

//Função para  remover items do carrinho
function removeTableItem(event){
    let removeTableButtonClicked = event.target;
    productCounter('remove');
    removeCartItemBack(removeTableButtonClicked.getAttribute('data-item-id'));    
    removeTableButtonClicked.parentElement.parentElement.parentElement.remove();
    updateTableTotal();
    
}

function quantityChangeTable(event){
    let input = event.target;
    if(isNaN(input.value) || input.value <= 0){
       input.value = 1;
    }
    updateTableTotal();
}

function updateTableTotal(){
    let cartContent = document.getElementsByClassName('cart__table-body')[0];
    let cartBoxes = cartContent.getElementsByClassName('product__cart-table');
    let total = 0;
    let subtotal = 0;
    
    for(let i=0; i < cartBoxes.length; i++){
        let cartBox = cartBoxes[i];
        let priceElement = cartBox.getElementsByClassName('cart__table-price')[0];
        let quantityElement = cartBox.getElementsByClassName('qtde__number')[0];
        //let priceSubtotal = cartBox.getElementsByClassName('cart__table-subtotal')[0];
        let price = parseFloat(priceElement.innerText.replace("AKZ", "").replace(".", "").replace(".", "")); //para remover os pontos e o AKZ do preço
        let quantity = quantityElement.value;
        subtotal = price * quantity;
        total = total + (price * quantity);
        
        document.getElementsByClassName('cart__table-subtotal')[i].innerText = subtotal.toLocaleString("nl-NL", {
            style: "currency", 
            currency: "AKZ",                       
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });
    
        
    }
    //arredondar o valor sem as casas decimais
    total = Math.round(total * 100) / 100;

    document.getElementsByClassName('subtotals__number')[0].innerText = total.toLocaleString("nl-NL", {
        style: "currency", 
        currency: "AKZ",                       
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    });

    document.getElementsByClassName('totals__number')[0].innerText = total.toLocaleString("nl-NL", {
        style: "currency", 
        currency: "AKZ",                       
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    });
    
    console.log(total);
    
}

//Função para gerar a factura proforma
function getInvoice(event) {
    // Assuming you have an attribute 'data-order' on the clicked element
    let invoiceClicked = event.target;
    let invoiceId = invoiceClicked.getAttribute('data-order');
    
    // Check if the order ID is valid
    if (invoiceId) {
        // Send an AJAX request to generate the invoice
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'generate_invoice',
                orderId: invoiceId
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

//Função para verificar se há itens e se tiver ir para o checkout
function callCheckout2(){
    let itemsList = document.getElementsByClassName('product__cart-table');
    
    let check_cart = 1;
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'check_order_exists', // Action name defined in the server-side function
            check_cart: itemsList.length
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function (response) {
            // Handle the server's response
            if (response.exists) {
                    window.location.href = './checkout/'; 
            } else {
                alert("Carrinho vazio!!!");
            }
        },
        error: function (error) {
            console.error('Error:', error);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        }
    });
}

//Função para adicionar ou remover itens da contagem de produtos
/*function productCounter(operation){
    let productCountText = document.getElementsByClassName('wishes__count')[0].innerText;
    let productCount = parseInt(productCountText);
    
    if(operation == 'add'){
       productCount+=1;
    }else if(operation == 'remove'){
        productCount-=1;         
    }
    
    document.getElementsByClassName('wishes__count')[0].innerText = productCount;
}*/