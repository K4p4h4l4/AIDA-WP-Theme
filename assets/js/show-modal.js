 
let modal = document.querySelector('.bg-modal');
let infoPreview;
if(modal){
    infoPreview = modal.querySelectorAll('.modal__container-info');
}


document.querySelectorAll('.product__buttons .info').forEach(product =>{
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
});

let modal__close = document.querySelector('.modal__close-btn');
if(modal__close){
    modal__close.addEventListener('click', function(){
        document.querySelector('.modal__container-info').classList.remove('modalactive');
        document.querySelector('.bg-modal').style.display='none';
    });
}


/*document.querySelector('.bg-modal').addEventListener('click', function(){
   document.querySelector('.bg-modal').style.display='none'; 
});*/