//jQuery(document).ready(function($) {
   /* document.querySelectorAll('.cart__close-btn').forEach(remove_product_btn => {
        remove_product_btn.onclick = ()=>{
            var cartItemKey = remove_product_btn.getAttribute('data-product-id');
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
                        window.location.reload();
                    } else {
                        // Handle error
                        alert('An error occurred while removing the product from the cart.');
                    }
                }
            });
        }
    });*/
//});
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

//Function ready
function ready(){
    //remove Items From cart
    var removeCartButtons = document.getElementsByClassName('cart__close-btn')
    console.log(removeCartButtons)
    for(let i=0; i < removeCartButtons.length; i++){
        let removeItem = removeCartButtons[i];
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
    
}

//Função para  remover items do carrinho
function removeCartItem(event){
    let buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updateTotal();
}

//Função para adicionar itens ao carrinho
function addCartClicked(event){
    let button = event.target;
    let shopProducts = button.parentElement.parentNode;
    //let title = shopProducts.getElementsByClassName('product__name')[0].innerText;
    console.log(shopProducts);
    //console.log(title);
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
        let price = parseFloat(priceElement.innerText.replace("AKZ", ""));
        let quantity = quantityElement.value;
        total = total + (price * quantity);
        //arredondar o valor sem as casas decimais
        total = Math.round(total * 100) / 100;
        
        document.getElementsByClassName('cart__total-value')[0].innerText = /*'Kz ' +*/ total.toLocaleString("nl-NL", {
            style: "currency", 
            currency: "AKZ",                       
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });
    }
}