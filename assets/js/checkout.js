let usr_buttonInfo = document.getElementById('usr_buttonInfo');

//Ao clicar colectar os dados e endereço do cliente 
usr_buttonInfo.addEventListener('click', function (event){
    // Assuming you have an attribute 'data-order' on the clicked element
    let checkoutClicked = event.target;
    let checkoutId = checkoutClicked.getAttribute('data-order');
    let formData = {};
    formData.email = DOMPurify.sanitize(document.getElementById('usr_email').value);
    if (isValidEmail(formData.email)) {
        
    } else {
        alert(formData.email + " email inválido.");
    }
    
    let deliveryOptions = document.getElementsByName('encomenda');
    formData.deliveryMethod = getRadioValue(deliveryOptions);
    
    formData.country = DOMPurify.sanitize(document.getElementById('usr_country').value);
    formData.name = DOMPurify.sanitize(document.getElementById('usr_name').value);
    formData.surname = DOMPurify.sanitize(document.getElementById('usr_surname').value);
    formData.address = DOMPurify.sanitize(document.getElementById('usr_address').value);
    formData.city = DOMPurify.sanitize(document.getElementById('usr_city').value);
    formData.phone = DOMPurify.sanitize(document.getElementById('usr_phone').value);
    formData.details = DOMPurify.sanitize(document.getElementById('usr_details').value);
    
    if (!formData.email || !formData.country || !formData.name || !formData.surname || !formData.address || !formData.city || !formData.phone || !formData.deliveryMethod) {
        alert("Preencha os campos obrigatórios");
        return; // Stop further processing
    }
    
    if(!formData.details){
       formData.details="";
    }
    
    // AJAX request
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'register_user_order', // Action name defined in the server-side function
            form_data: formData,
            orderId: checkoutId
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function (response) {
            // Handle the server's response
            if (response.success) {
                console.log(response.message);
                //window.location.assign('http://localhost:81/wordpress/envio/');
                window.location.href= './envio/';
            } else {
                alert("Erro registar o seu pedido!!!");
            }
        },
        error: function (error) {
            console.error('Error:', error);
        },
        complete: function(){
            loader.classList.add("loader__hidden");
        }
    });
    
});


//Verifica se o email é válido ou não
function isValidEmail(email) {
    // Regular expression for a basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

//Verifica a escolha para o envio
function getRadioValue(radioOptions) {
    for (var i = 0; i < radioOptions.length; i++) {
        if (radioOptions[i].checked) {
            return radioOptions[i].value;
        }
    }
    return null; // No option selected
}



