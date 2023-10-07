
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

//Vector para armazenar os produtos do carrinho
var cartItemsArray = [];

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
    
    /*let items = {
        title: title,
        price: price,
        image: image,
        id: id,
        itemQuantity: itemQuantity
    };
    
    cartItems.push(items);*/
    //setCartItemsToStorage(title,price,image,id, itemQuantity)
    //Convertendo os itens que estão no vector para um string JSON
    //let cartItemsJSON = JSON.stringify(cartItems);
    //Armazenzando a string JSON no localStorage sob uma chave específica
    //localStorage.setItem('cartData', cartItemsJSON);
    
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
    updateTotal();
}


function quantityChange(event){
    let input = event.target;
    if(isNaN(input.value) || input.value <= 0){
       input.value = 1;
    }
    updateTotal();
}

function updateTotal(){
    let cartContent = document.getElementsByClassName('cart__list-container')[0];
    let cartBoxes = cartContent.getElementsByClassName('cart__list-card');
    let total = 0;
    
    for(let i=0; i < cartBoxes.length; i++){
        let cartBox = cartBoxes[i];
        let priceElement = cartBox.getElementsByClassName('product__price')[0];
        let quantityElement = cartBox.getElementsByClassName('product__quantity')[0];
        let price = parseFloat(priceElement.innerText.replace("AKZ", "").replace(".", "").replace(".", "")); //para remover os pontos e o AKZ do preço
        let quantity = quantityElement.value;
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
function rudrAddToCart( product_id, quantity = 1 ) {

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
                alert('An error occurred while removing the product from the cart.');
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

// Function to get the cart items from localStorage
function getCartItemsFromStorage() {
    let storedCartData = localStorage.getItem('cartData');
    if (storedCartData) {
        return JSON.parse(storedCartData);
    } else {
        return [];
    }
}

// Function to add a product to the cartItems array
function setCartItemsToStorage(title,price,image,id, itemQuantity) {
    cartItemsArray = getCartItemsFromStorage();
    let product = {
        title: title,
        price: price,
        image: image,
        id: id,
        itemQuantity: itemQuantity
    };
    cartItemsArray.push(product);
    localStorage.setItem('cartData', JSON.stringify(cartItemsArray));
}

