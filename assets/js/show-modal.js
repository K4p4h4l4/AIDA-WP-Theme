 
let modal = document.querySelector('.bg-modal');
let infoPreview;
if(modal){
    infoPreview = modal.querySelectorAll('.modal__container-info');
}


/*document.querySelectorAll('.product__buttons .info').forEach(product =>{
    product.onclick = () =>{
        modal.style.display = 'flex';
        
        //document.querySelectorAll('.new__products-list .product__card').forEach(product_card =>{
            let name = product.getAttribute('data-name');
            
            infoPreview.forEach(preview =>{
                let target = preview.getAttribute('data-target');
                if(name == target){
                    preview.classList.add('modalactive');
                }else{
                    preview.classList.remove('modalactive');
                }
            });
        //});
    }
});*/

document.addEventListener('DOMContentLoaded', function() {
    var infoButtons = document.querySelectorAll('.product__btn.info');

    infoButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var productId = this.closest('.product__card').querySelector('.product_id').id;
            
            fetchProductInfo(productId);
        });
    });
});

function fetchProductInfo(productId) {
    console.log(productId);
    let infoPreview = modal.querySelectorAll('.modal__container-info');
    let productInfoModal = document.querySelector('.bg-modal');
    let productImage = document.querySelector('.img');
    let productName = document.querySelector('.modal__title');
    let productPrice = document.querySelector('.modal__product-price');
    let productStarsRating = document.querySelector('.modal__product-rating');
    let productStockStatus = document.querySelector('.modal__stock-txt');
    let productDesciption = document.querySelector('.modal__product-description');
    let productID = document.querySelector('.modal__product-id');
    
    jQuery.ajax({
        url: wc_add_to_cart_params.ajax_url,
        type: 'POST',
        data: {
            'action': 'fetch_product_info',
            'product_id': productId
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function(response) {            
            productInfoModal.style.display='flex';
            productImage.src = response.data.image;
            productName.innerText = response.data.name;
            
            if(response.data.stock_status == "instock"){
                productStockStatus.innerText = "Em Estoque"; 
            }else if(response.data.stock_status == "outofstock"){
                productStockStatus.innerText = "Esgotado"; 
            }else if(response.data.stock_status == "onbackorder"){
                productStockStatus.innerText = "Por Encomenda"; 
            }
            
            if(response.data.sales_price){
                
                productPrice.innerHTML = ` <h3 class="modal__price">AKZ ${Intl.NumberFormat('de-DE', { style: 'currency', currency: 'AKZ', minimumFractionDigits: 2 }).format(response.data.sales_price).replace("AKZ", "")} </h3>
                                    <del>AKZ ${Intl.NumberFormat('de-DE', { style: 'currency', currency: 'AKZ', minimumFractionDigits: 2 }).format(response.data.regular_price).replace("AKZ", "")}</del>`; 
            }else{
                productPrice.innerHTML = ` <h3 class="modal__price">AKZ ${Intl.NumberFormat('de-DE', { style: 'currency', currency: 'AKZ', minimumFractionDigits: 2 }).format(response.data.regular_price).replace("AKZ", "")} </h3>`;
            }
            
            if(response.data.rating == 5){
               productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;
            }else if(response.data.rating > 4 &&  response.data.rating < 5){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating == 4){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating > 3 &&  response.data.rating < 4){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating == 3){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating > 2 &&  response.data.rating < 3){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating == 2){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating > 1 &&  response.data.rating < 2){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating == 1){
                productStarsRating.innerHTML = `<i class="material-icons">star</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating > 0 &&  response.data.rating < 1){
                productStarsRating.innerHTML = `<i class="material-icons">star_half</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }else if(response.data.rating == 0){
                productStarsRating.innerHTML = `<i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i> 
                                    <span class="modal__rating-value"></span>
                                    <span class="modal__rating-total"></span>`;    
            }
            
            let productAverageRating = document.querySelector('.modal__rating-value');
            let productTotalReviews = document.querySelector('.modal__rating-total');
            productAverageRating.innerText = response.data.rating;  
            productTotalReviews.innerText=`(${response.data.review_count}) - Avaliações`;
            productDesciption.innerHTML = `${response.data.description}`;
            productID.setAttribute('id', productId);
            
        }
    });
}

let modal__close = document.querySelector('.modal__close-btn');
if(modal__close){
    modal__close.addEventListener('click', function(){
        document.querySelector('.modal__container-info').classList.remove('modalactive');
        document.querySelector('.bg-modal').style.display='none';
    });
}