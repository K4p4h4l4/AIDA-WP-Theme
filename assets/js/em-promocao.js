if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

function ready(){
    let listarPor = document.querySelector('.orderBy');
    
    if(listarPor){
        listarPor.addEventListener('change',listarProdutosPor);
    }
}

function listarProdutosPor(event){
    let ordenacao = event.target.value;
    
    jQuery.ajax({
        url: wc_add_to_cart_params.ajax_url,
        type: 'POST',
        data: {
            'action': 'filtrar_produtos',
            'ordenacao': ordenacao
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function(response) {
            // Atualiza a lista de produtos com o HTML retornado
            document.querySelector('.new__products-list').innerHTML=response;
        },
        error: function (error) {
            console.error('Error updating cart item quantity:', error);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        },
    });
}

/*$('.orderBy').change(function() {
    var ordenacao = $(this).val();

    JQuery.ajax({
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        type: 'POST',
        data: {
            'action': 'filtrar_produtos',
            'ordenacao': ordenacao
        },
        success: function(response) {
            // Atualiza a lista de produtos com o HTML retornado
            $('.new__products-list').html(response);
        }
    });
});*/