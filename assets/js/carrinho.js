if(document.readyState == 'loading'){
    //loader.classList.remove("loader__hidden");
    document.addEventListener('DOMContentLoaded', ready);
}else{
    loader.classList.add("loader__hidden");
    ready();
}

//Function ready
function ready(){
    //remove Items From cart
    let removeTableButtons = document.getElementsByClassName('action__remove');
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
    let removeID = removeTableButtonClicked.parentElement.getAttribute('data-item-id');
    let removeItem = document.getElementsByClassName('cart__close-btn');
    let remove;
    for(let i = 0; i < removeItem.length; i++){
        remove = removeItem[i].getAttribute('data-product-id');
        console.log(removeID, remove);
        if(removeID == remove){
            console.log(remove);
            removeCartItemBack(remove);
            removeItem[i].parentElement.remove();
        }
    }
    removeTableButtonClicked.parentElement.parentElement.parentElement.remove();
    updateTableTotal();
    
}

function quantityChangeTable(event){
    let input = event.target;
    if(isNaN(input.value) || input.value <= 0){
       input.value = 1;
    }
    
    //Mudança das quantidades
    let quantityInputs = document.getElementsByClassName('qtde__number');
    let quantityCartInputs = document.getElementsByClassName('product__quantity');
    for(let i=0; i < quantityInputs.length; i++){
        quantityCartInputs[i].value = quantityInputs[i].value;
    }
    
    updateTotal();
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
    
    document.getElementsByClassName('cart__total-value')[0].innerText = total.toLocaleString("nl-NL", {
        style: "currency", 
        currency: "AKZ",                       
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    });
    
}

//Função para gerar a factura proforma
function getInvoice(event) {
    
    let invoicePageUrl = '../factura-proforma/';
    window.open(invoicePageUrl, '_blank');
    
}

//Função para verificar se há itens e se tiver ir para o checkout
function callCheckout2(){
    let itemsList = document.getElementsByClassName('product__cart-table');
    let productQuantities = document.querySelectorAll('.qtde__number');
    
    // Create an array to store product data
    let productDataArray = [];
    
    if(itemsList){
        productQuantities.forEach(input => {
          const id = input.closest('.product__cart-table').querySelector('.action__remove').getAttribute('data-item-id');
          const quantity = input.value;

          productDataArray.push({ id, quantity });
        });

        for(let i =0; i<productDataArray.length; i++){
            createOrderAndAddProduct(productDataArray[i]['id'], productDataArray[i]['quantity']);            
        }
        
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
                        window.location.href = '../checkout/'; 
                } else {
                    loader.classList.add("loader__hidden");
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
    }else{
        alert("Carrinho vazio!!!");
    }
    
    
    
    
}