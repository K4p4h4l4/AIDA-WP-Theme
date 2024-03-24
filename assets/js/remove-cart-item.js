
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

//Vector para armazenar os produtos do carrinho
var cartItemsArray = [];
//Vector para armazenar os produtos da lista de desejos
var wishlistArray = [];
const loader = document.getElementById('loader__container');

//Function ready
function ready(){
    //remove Items From cart
    let removeCartButtons = document.getElementsByClassName('cart__close-btn');
    
    for(let i=0; i < removeCartButtons.length; i++){
        var removeItem = removeCartButtons[i];
        removeItem.addEventListener('click', removeCartItem);
    }
    
    //remove Items From WISHLIST
    let removeWishButtons = document.getElementsByClassName('wish__close-btn');
    
    for(let i=0; i < removeWishButtons.length; i++){
        var removeWish = removeWishButtons[i];
        removeWish.addEventListener('click', removeWishItem);
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
    
    //Adicionando na lista de desejos
    let addtoWishlist = document.getElementsByClassName('addtoWishlist');
    for(let i=0; i< addtoWishlist.length; i++){
        let wishlist_btn = addtoWishlist[i];
        wishlist_btn.addEventListener('click', addWishlistClicked);
    }
    
    //Adicionando produtos atravez da modal
    let modalAddCart = document.getElementsByClassName('modal__product-cart');
    for(let i=0; i < modalAddCart.length; i++){
        let button = modalAddCart[i];
        button.addEventListener('click', modalAddCartClicked);
    }
    
    document.getElementById('cart__view').addEventListener('click', callCart);
    document.getElementById('checkout__view').addEventListener('click', callCheckout);
    document.getElementById('wish__view').addEventListener('click', addToCartFromWishItem);
    
    let logoutBtn = document.getElementById('logout');
    if(logoutBtn){
        logoutBtn.addEventListener('click', logoutUser); 
    }
    
    var searchTimer;
    $('#categorias, .search__text').on('change keyup', function() {
        clearTimeout(searchTimer);
        searchTimer = setTimeout(function() {
            var searchVal = $('.search__text').val();
            var categoryVal = $('#categorias').val();
            var nonce = ajax_object.nonce;// Nonce for security

            $.ajax({
                type: 'POST',
                url: ajax_object.ajaxurl,
                data: {
                    action: 'live_search',
                    search_keyword: searchVal,
                    category: categoryVal,
                    nonce: nonce
                },
                beforeSend: function() {
                    loader.classList.remove("loader__hidden");
                },
                success: function(response) {
                    $('#search-results').html(response);
                },
                complete: function(){
                    loader.classList.add("loader__hidden");
                }
            });
        }, 500); // Delay for 500 ms
    });
    
}

//Função para  remover items do carrinho
function removeCartItem(event){
    let buttonClicked = event.target;
    productCounter('remove');
    removeCartItemBack(buttonClicked.getAttribute('data-product-id'));
    buttonClicked.parentElement.remove();
    updateTotal();    
}

//Função para  remover items do carrinho
function removeWishItem(event){
    let removeClicked = event.target;
    wishCounter('remove');
    console.log('chegou');
    removeWishItemBack(removeClicked.getAttribute('data-product-id'));
    removeClicked.parentElement.remove();      
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
    let image = productInfo.children[0].getElementsByClassName('img')[0].src;
    let title = productInfo.children[1].children[0].getElementsByClassName('modal__title')[0].innerText;
    let price = productInfo.children[1].children[2].getElementsByClassName('modal__price')[0].innerText ;
    let id = productInfo.children[2].id;
    let itemQuantity = productInfo.children[1].children[4].getElementsByClassName('modal__quantity')[0].value;
    addProductToCart(title, price, image, id, itemQuantity);
    updateTotal();
    
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
    
    updateTotal();
    
    alert('Item adicionado com sucesso, veja o seu carrinho!');
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
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function (response) {
            // Handle the response from the server, e.g., update the cart totals or display a success message.
            
        },
        error: function (error) {
            console.error('Error updating cart item quantity:', error);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        },
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
        
        updateCartItemQuantity(product_id, quantity);
        total = total + (price * quantity);
        
    }
    
    //arredondar o valor sem as casas decimais
    total = Math.round(total * 100) / 100;

    document.getElementsByClassName('cart__total-value')[0].innerText = total.toLocaleString("nl-NL", {
        style: "currency", 
        currency: "AKZ",                       
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    });
    
}

//adicionar o produto ao carrinho no backend
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
    let tableItem = document.getElementsByClassName('action__remove');
    let remove;
    
    //Para eliminar item da tabela tbm caso for removido a partir da lista de itens no carrinho
    if(tableItem){
        
        for(let i = 0; i < tableItem.length; i++){
            remove = tableItem[i].getAttribute('data-item-id');
            
            if(cartItemKey == remove){
               tableItem[i].parentElement.parentElement.remove();
            }
        }
    }
    
    //Função para remover o produto da encomenda
    //removeProductFromOrder(order_number, cartItemKey);
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url, 
        data: {
            action: 'remove_cart_item', // Action hook for the AJAX handler
            cart_item_key: cartItemKey, // The key of the cart item to remove
            //orderID: order_number,
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function(response) {
            
            console.log(response.message);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        },
    });
}

//Função para adicionar ou remover itens da contagem de produtos
function productCounter(operation){
    let productCountText = document.getElementsByClassName('cart__count')[0].innerText;
    let productCount = parseInt(productCountText);
    
    if(operation == 'add'){
       productCount+=1;
    }else if(operation == 'remove'){
        productCount-=1;         
    }
    
    document.getElementsByClassName('cart__count')[0].innerText = productCount;
}

//Função para adicionar ou remover itens da contagem de produtos
function wishCounter(operation){
    let wishCountText = document.getElementsByClassName('wishes__count')[0].innerText;
    let wishCount = parseInt(wishCountText);
    
    if(operation == 'add'){
       wishCount+=1;
    }else if(operation == 'remove'){
        wishCount-=1;         
    }
    
    document.getElementsByClassName('wishes__count')[0].innerText = wishCount;
}

//Javascript para chamar a função de criar uma encomenda e em seguida ir para a página do carrinho
function callCart(){
    let itemsList = document.getElementsByClassName('cart__list-card');
    
    
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
                if(window.location.href.includes("/product/")){
                    window.location.href = '../../carrinho/';
                }else{
                    window.location.href = './carrinho/';
                }
            } else {
                loader.classList.add("loader__hidden");
                alert("Carrinho vazio!!!");
            }
        },
        error: function (error) {
            console.error('Error:', error);
        },
        /*complete: function(){
            loader.classList.add("loader__hidden");
        }*/
    });
    
}

//Função para verificar se há itens e se tiver ir para o checkout
function callCheckout(){
    let itemsList = document.getElementsByClassName('cart__list-card');
    
    // Select all elements with class "product__quantity"
    let quantityInputs = document.querySelectorAll('.product__quantity');
    
    // Create an array to store product data
    let productDataArray = [];
    
    // Iterate through each quantity input element and push its value and data-product-id to the array
    quantityInputs.forEach(input => {
      const id = input.closest('.cart__list-card').querySelector('.cart__close-btn').getAttribute('data-product-id');
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
                if(window.location.href.includes("/product/")){
                    window.location.href = '../../checkout/';
                }else{
                    window.location.href = './checkout/';
                } 
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
      beforeSend: function(){
          loader.classList.remove("loader__hidden");
      },
      success: function (data) {
          // Handle the response from the server (e.g., success or error message)        
          let order_number = data.order_number;
          //localStorage.setItem('orderID', order_number);
          //console.log(order_number, data.message);
      },
      error: function (error) {
        // Handle errors (e.g., display an error message)
        console.error('Erro ao adicionar produtos ao carrinho:', error);
      },
      complete: function(){
          loader.classList.add("loader__hidden");
      },
    });
}


//Javascript para actualizar os produtos da encomenda
function updateOrderItemQuantity(orderId, productId, newQuantity) {
    //console.log(orderId, productId, newQuantity);
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
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function (data) {
            // Handle the server's response (e.g., success or error message)
            //let message = data.message;
            //console.log(data.order_number, data.message);
        },
        error: function(error) {
            // Handle errors (e.g., display an error message)
            console.error('Erro ao actualizar as quantidades da encomenda:', error);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        },
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
            //console.log(data.message);
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
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function(data) {
            // Handle the server's response (e.g., success or error message)
            
            //console.log(data.message);
                
        },
        error: function(error) {
            // Handle errors (e.g., display an error message)
            console.error('Error removing the product:', error);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        }
    });
}

//Função para fazer o logout do user
function logoutUser(){
    
    // Perform an AJAX logout request
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'custom_logout', // Create a custom WordPress action
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function (response) {
            // Redirect the user to a specific page after logout (e.g., home page)
            window.location.href = './home/';
        },
        error: function (error) {
            console.error('Erro durante o logout:', error);
        },
        complete: function(){
            setTimeout(()=>{},2000);
            loader.classList.add("loader__hidden");
        }
    });
}

//Função para adicionar itens a lista de desejos
function addWishlistClicked(event){
    let button = event.target;
    let shopProducts = button.parentElement.parentElement.parentElement.parentElement;
    let title = shopProducts.children[1].children[0].getElementsByClassName('product__name')[0].innerText;
    let price = shopProducts.children[1].children[0].children[2].getElementsByClassName('product__price')[0].innerText;
    let image = shopProducts.children[0].children[0].getElementsByClassName('attachment-thumbnail')[0].src;
    let id = shopProducts.children[2].id;
    let itemQuantity = 1;
    let wishlistBox = document.createElement('div');
    wishlistBox.classList.add('wish__list-card');
    let wishItems = document.getElementsByClassName('wish__list-container')[0];
    let wishItemsNames = wishItems.getElementsByClassName('item__name');
    
    price.toLocaleString("nl-NL", {
            style: "currency", 
            currency: "AKZ",                       
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });
    
    for(let i=0; i < wishItemsNames.length; i++){
        if(wishItemsNames[i].innerText == title){
            alert('Item já adicionado a lista de desejos');
            return;
        }        
    }
    
    let wishBoxContent = `
        <div class="wish__list-img">
            <img width="150" height="150" src="${image}" alt="" class="attachment-thumbnail size-thumbnail" decoding="async">

        </div>
        <div class="wish__txt-container">
            <div class="wish__poduct-name">
                <span class="item__name">${title}</span>
                
            </div>
            <div class="wish__product-qtde">
                <input type="number" value="${itemQuantity}" min="1" class="product__quantity" disabled>
            </div>
            <div class="wish__product-price">                                        
                <span class="product__price">
                    ${price}
                </span>
            </div>   
        </div>
        
        <div class="wish__close-btn" data-product-id="${id}">
           +                         
        </div>
    `;
    
    //contador de produtos adicionados
    wishCounter('add');
    wishlistBox.innerHTML = wishBoxContent;
    wishItems.append(wishlistBox);
    wishlistBox.getElementsByClassName('wish__close-btn')[0].addEventListener('click', removeWishItem);
    console.log(id);
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'add_item_to_wishlist',
            productID: id
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function (response) {
                console.log(response.message);           
        },
        error: function (error) {
            console.error('Erro ao adicionar productos a lista de desejos:', error);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        },
    });
    
    
}

//Remover itens da lista de desejos back
function removeWishItemBack(chave){
    let wishItemKey = chave;
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url, 
        data: {
            action: 'remove_wish_item', // Action hook for the AJAX handler
            wish_item_key: wishItemKey            
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function(response) {
            
            console.log(response.message);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        },
    });
}

//Adicionar itens ao carrinho a partir da lista de desejos
function addToCartFromWishItem(){
    let wish__products = document.getElementsByClassName('wish__list-card');
    
    for(let i =0; i< wish__products.length; i++){
        let image = wish__products[i].children[0].getElementsByClassName('attachment-thumbnail')[0].src;
        let name = wish__products[i].children[1].children[0].getElementsByClassName('item__name')[0].innerText;
        let price = wish__products[i].children[1].children[2].getElementsByClassName('product__price')[0].innerText;
        let id = wish__products[i].children[2].getAttribute('data-product-id');
        addProductToCart(name,price,image,id, 1);
        wishCounter('remove');
        removeWishItemBack(id);
        wish__products[i].remove();
    }
    
}