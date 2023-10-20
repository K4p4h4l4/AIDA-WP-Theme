
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

//Vector para armazenar os produtos do carrinho
var cartItemsArray = [];

//número da ordem
//var order_number;

//Function ready
function ready(){
    //remove Items From cart
    let removeCartButtons = document.getElementsByClassName('cart__close-btn');
    
    for(let i=0; i < removeCartButtons.length; i++){
        var removeItem = removeCartButtons[i];
        //let itemKey = removeCartButtons[i].getAttribute('data-product-id');
        removeItem.addEventListener('click', removeCartItem);
    }
    
    //Mudança das quantidades
    let quantityInputs = document.getElementsByClassName('product__quantity');
    for(let i=0; i < quantityInputs.length; i++){
        let input = quantityInputs[i];
        input.addEventListener('change', quantityChange);
    }
    
    //Adicionando ao carrinho
    let addCart = document.getElementsByClassName('addToCart');
    for(let i=0; i < addCart.length; i++){
        let button = addCart[i];
        button.addEventListener('click', addCartClicked);
    }
    
    //Adicionando ao carrinho no back
    //document.getElementsByClassName('ver__carrinho').addEventListener('click');
    
    //Adicionando produtos atravez da modal
    let modalAddCart = document.getElementsByClassName('modal__product-cart');
    for(let i=0; i < modalAddCart.length; i++){
        let button = modalAddCart[i];
        button.addEventListener('click', modalAddCartClicked);
    }
    
    document.getElementById('cart__view').addEventListener('click', callCart);
}

//Função para  remover items do carrinho
function removeCartItem(event){
    let buttonClicked = event.target;
    productCounter('remove');
    removeCartItemBack(buttonClicked.getAttribute('data-product-id'));
    buttonClicked.parentElement.remove();
    updateTotal();    
}

//Função para adicionar itens ao carrinho
function addCartClicked(event){
    let button = event.target;
    let shopProducts = button.parentElement.parentElement.parentElement.parentElement;
    let title = shopProducts.children[1].children[0].getElementsByClassName('product__name')[0].innerText;
    let price = shopProducts.children[1].children[0].children[2].getElementsByClassName('product__price')[0].innerText;
    let image = shopProducts.children[0].children[0].getElementsByClassName('attachment-thumbnail')[0].src;
    let id = shopProducts.children[2].id;
    let itemQuantity = 1;
    addProductToCart(title,price,image,id, itemQuantity);
    updateTotal();
}

//Função para adicionar produto através da modal
function modalAddCartClicked(event){
    let modalAddButton = event.target;
    let productInfo = modalAddButton.parentElement.parentElement.parentElement;
    let image = productInfo.children[0].getElementsByClassName('attachment-thumbnail')[0].src;
    let title = productInfo.children[1].children[0].getElementsByClassName('modal__title')[0].innerText;
    let price = productInfo.children[1].children[2].getElementsByClassName('modal__price')[0].innerText ;
    let id = productInfo.children[2].id;
    let itemQuantity = productInfo.children[1].children[4].getElementsByClassName('modal__quantity')[0].value;
    addProductToCart(title, price, image, id, itemQuantity);
    updateTotal();
    document.querySelector('.modal__container-info').classList.remove('modalactive');
    document.querySelector('.bg-modal').style.display='none';
}

//Adicionar os produtos na lista de produtos do carrinho
function addProductToCart(title,price,image,id, itemQuantity){
    let cartShopBox = document.createElement('div');
    cartShopBox.classList.add('cart__list-card');
    let cartItems = document.getElementsByClassName('cart__list-container')[0];
    let carItemsNames = cartItems.getElementsByClassName('item__name');
    price.toLocaleString("nl-NL", {
            style: "currency", 
            currency: "AKZ",                       
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });
    
    for(let i=0; i < carItemsNames.length; i++){
        if(carItemsNames[i].innerText == title){
            alert('Item já adicionado ao carrinho');
            return;
        }        
    }
    
    let cartBoxContent = `
        <div class="cart__list-img">
            <img width="150" height="150" src="${image}" alt="" class="attachment-thumbnail size-thumbnail" decoding="async">

        </div>
        <div class="cart__txt-container">
            <div class="cart__poduct-name">
                <span class="item__name">${title}</span>
                
            </div>
            <div class="cart__product-qtde">
                <input type="number" value="${itemQuantity}" min="1" class="product__quantity">
            </div>
            <div class="cart__product-price">                                        
                <span class="product__price">
                    ${price}
                </span>
            </div>   
        </div>
        
        <div class="cart__close-btn" data-product-id="${id}">
           +                         
        </div>
    `;
    
    //contador de produtos adicionados
    productCounter('add');
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);
    cartShopBox.getElementsByClassName('cart__close-btn')[0].addEventListener('click', removeCartItem);
    cartShopBox.getElementsByClassName('product__quantity')[0].addEventListener('change', quantityChange);
    
    //Adicionar produtos a base de dados do Wordpress
    rudrAddToCart(id, itemQuantity);
    //console.log(cartItemsArray);
    
    createOrderAndAddProduct(id, itemQuantity);
    updateTotal();
    
}


function quantityChange(event){
    let input = event.target;
    if(isNaN(input.value) || input.value <= 0){
       input.value = 1;
    }
    updateTotal();
}


function updateCartItemQuantity(cart_item_key, new_quantity) {
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'update_cart_item_quantity',
            cart_item_key: cart_item_key,
            new_quantity: new_quantity
        },
        success: function (response) {
            // Handle the response from the server, e.g., update the cart totals or display a success message.
            console.log(response.message);
        },
        error: function (error) {
            console.error('Error updating cart item quantity:', error);
        }
    });
}


//Actualiza o preço total em tempo real
function updateTotal(){
    let cartContent = document.getElementsByClassName('cart__list-container')[0];
    let cartBoxes = cartContent.getElementsByClassName('cart__list-card');
    let product_ids = document.getElementsByClassName('cart__close-btn');
    let total = 0;
    
    for(let i=0; i < cartBoxes.length; i++){
        let cartBox = cartBoxes[i];
        let priceElement = cartBox.getElementsByClassName('product__price')[0];
        let quantityElement = cartBox.getElementsByClassName('product__quantity')[0];
        let price = parseFloat(priceElement.innerText.replace("AKZ", "").replace(".", "").replace(".", "")); //para remover os pontos e o AKZ do preço
        let quantity = quantityElement.value;
        let product_id = product_ids[i].getAttribute('data-product-id');
        //console.log(product_id);
        let order_number = localStorage.getItem('orderID');
        
        //updateOrderItemQuantity(order_number, product_id, quantity)
        total = total + (price * quantity);
    }
        //arredondar o valor sem as casas decimais
        total = Math.round(total * 100) / 100;
        
        document.getElementsByClassName('cart__total-value')[0].innerText = /*'Kz ' +*/ total.toLocaleString("nl-NL", {
            style: "currency", 
            currency: "AKZ",                       
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });
    
}

//adicionar o produto no backend
function rudrAddToCart( product_id, quantity) {

	// let's check is add-to-cart.min.js is enqueued and parameters are presented
	if ( 'undefined' === typeof wc_add_to_cart_params ) {
		return false;
	}

	jQuery.post( 
		wc_add_to_cart_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'add_to_cart' ), 
		{
			product_id: product_id, 
			quantity: quantity, // quantity is hardcoced her
		}, 
		function( response ) {
			if ( ! response ) {
				return;
			}
			// redirect is optional and it depends on what is set in WooCommerce configuration
			if ( response.error && response.product_url ) {
				window.location = response.product_url;
				return;
			}
			if ( 'yes' === wc_add_to_cart_params.cart_redirect_after_add ) {
				window.location = wc_add_to_cart_params.cart_url;
				return;
			}
			// refresh cart fragments etc
			jQuery( document.body ).trigger( 'added_to_cart', [ response.fragments, response.cart_hash ] );
		}
	);
}

//remover o item do backend
function removeCartItemBack(chave){
    let cartItemKey = chave;
    let order_number = localStorage.getItem('orderID');
    //Função para remover o produto da encomenda
    //removeProductFromOrder(order_number, cartItemKey);
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
                //window.location.reload();
                console.log('Removido com sucesso');
            } else {
                // Handle error
                alert('Um erro ocorreu enquanto removia-se um produto do carrinho .');
            }
        }
    });
}

//Função para adicionar ou remover itens da contagem de produtos
function productCounter(operation){
    let productCountText = document.getElementsByClassName('wishes__count')[0].innerText;
    let productCount = parseInt(productCountText);
    
    if(operation == 'add'){
       productCount+=1;
    }else if(operation == 'remove'){
        productCount-=1;         
    }
    
    document.getElementsByClassName('wishes__count')[0].innerText = productCount;
}

//Javascript para chamar a função de criar uma encomenda e em seguida ir para a página do carrinho
function callCart(){
    let itemsList = document.getElementsByClassName('cart__list-card');
    
    if(itemsList.length > 0){
        
        for(let i = 0; i < itemsList.length; i++){
            let product_id = itemsList[i].children[2].getAttribute('data-product-id');
            let product_qtde = itemsList[i].children[1].children[1].children[0].value;
            
            let order_number = localStorage.getItem('orderID');
            //console.log(order_number, product_id, product_qtde);
            //actualizar as quantidades dos produtos do carrinho
            updateCartItemQuantity(product_id, product_qtde);
            setInterval(function (){},3000);
            //actualizar as quantidades dos produtos da encomenda
            updateOrderItemQuantity(order_number, product_id, product_qtde);
            setInterval(function (){},3000);
            //Actualizar as facturas
        }
        
        window.location.assign('http://localhost:81/wordpress/carrinho/');
        
    }
    
}

// JavaScript para criar uma encomenda e adicionar os produto a mesma
function createOrderAndAddProduct(productID, quantity) {
    //console.log(productID, quantity);
    jQuery.ajax({
      type: 'POST',
      url: wc_add_to_cart_params.ajax_url, // Replace with the correct server endpoint
      data: {
        action: 'create_order_and_add_product', // Action name defined in WordPress server
        product_id: productID,
        quantity: quantity
      },
      success: function (data) {
          // Handle the response from the server (e.g., success or error message)        
          let order_number = data.order_number;
          localStorage.setItem('orderID', order_number);
          console.log(order_number, data.message);
      },
      error: function (error) {
        // Handle errors (e.g., display an error message)
        console.error('Erro ao adicionar produtos ao carrinho:', error);
      },
    });
}


//Javascript para actualizar os produtos da encomenda
function updateOrderItemQuantity(orderId, productId, newQuantity) {
    console.log(orderId, productId, newQuantity);
    // Send the Ajax request to the server
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url, // WordPress-defined variable for the admin-ajax.php URL
        data: {
            action: 'update_order_item_quantity', // Custom action name on the server
            orderId: orderId,
            productId: productId,
            newQuantity: newQuantity
        },
        //dataType: 'json' ,
        success: function (data) {
            // Handle the server's response (e.g., success or error message)
            //let message = data.message;
            console.log(data.order_number, data.message);
        },
        error: function(error) {
            // Handle errors (e.g., display an error message)
            console.error('Erro ao actualizar as quantidades da encomenda:', error);
        }
    });
}

//Função para actulizar a factura
function updateInvoice(order_id) {
    $.ajax({
        type: 'POST',
        url: ajaxurl, // WordPress-defined variable for the admin-ajax.php URL
        data: {
            action: 'update_invoice', // Custom action name on the server
            order_id: order_id,
        },
        success: function (data) {
            // Handle the server's response (e.g., success or error message)
            console.log(data.message);
        },
        error: function (error) {
            // Handle errors (e.g., display an error message)
            console.error('Error updating the invoice:', error);
        }
    });
}


//Função para remover item da encomenda
function removeProductFromOrder(orderId, productId) {

    // Send the Ajax request to the server
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajaxurl, // WordPress-defined variable for the admin-ajax.php URL
        data: {
            action: 'remove_product_from_order', // Custom action name on the server
            order_id: orderId,
            product_id: productId
        },
        success: function(data) {
            // Handle the server's response (e.g., success or error message)
            
            console.log(data.message);
                
        },
        error: function(error) {
            // Handle errors (e.g., display an error message)
            console.error('Error removing the product:', error);
        }
    });
}


