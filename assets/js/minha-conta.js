if(document.readyState == 'loading'){
    
    document.addEventListener('DOMContentLoaded', ready);
}else{
    
    ready();
}

function ready(){
    const content1 = document.getElementById('content1');
    const content2 = document.getElementById('content2');
    const content3 = document.getElementById('content3');
    const content4 = document.getElementById('content4');
    const content5 = document.getElementById('content5');

    const btn1 = document.getElementById('btn1');
    const btn2 = document.getElementById('btn2');
    const btn3 = document.getElementById('btn3');
    const btn4 = document.getElementById('btn4');
    const btn5 = document.getElementById('btn5');
    
    //remove Items From cart
    let facturaButtons = document.getElementsByClassName('factura');
    for(let i=0; i < facturaButtons.length; i++){
        let factura = facturaButtons[i];
        factura.addEventListener('click', imprimirFactura);
    }
    
    //remover itens da lista de desejos
    let wishButtons = document.getElementsByClassName('wish__item');
    
    for(let i=0; i<wishButtons.length; i++){
        let wish = wishButtons[i];
        wish.addEventListener('click', removeWishItemFromProfile);
    }
    
    console.log(wishButtons);
    
    //Actualizar o perfil
    let updateProfileButton = document.getElementById('updateProfile');
    updateProfileButton.addEventListener('click', updateProfile);
    
    //Actualizar o endereço
    let updateAddressButton = document.getElementById('updateAddress');
    updateAddressButton.addEventListener('click', updateAddress);
    
    //Actualizar Password
    let updatePasswordButton = document.getElementById('updatePassword');
    updatePasswordButton.addEventListener('click', updatePassword)
}

function myaccountProfile(){
    content1.style.transform = "translateX(0)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-red)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-black)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = ".3s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "relative";
    content2.style.position = "absolute";
    content3.style.position = "absolute";
    content4.style.position = "absolute";
    content5.style.position = "absolute";
}

function myaccountAddress(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(0)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-red)";
    btn3.style.color = "var(--default-black)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = ".3s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "absolute";
    content2.style.position = "relative";
    content3.style.position = "absolute";
    content4.style.position = "absolute";
    content5.style.position = "absolute";
}

function myaccountOrders(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(0)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-red)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = ".3s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "absolute";
    content2.style.position = "absolute";
    content3.style.position = "relative";
    content4.style.position = "absolute";
    content5.style.position = "absolute";
}

function myaccountWishlist(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(0)";
    content5.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-balck)";
    btn4.style.color = "var(--default-red)";
    btn5.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = ".3s";
    content5.style.transitionDelay = "0s";
    
    content1.style.position = "absolute";
    content2.style.position = "absolute";
    content3.style.position = "absolute";
    content4.style.position = "relative";
    content5.style.position = "absolute";
}

function myaccountSecurity(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(100%)";
    content4.style.transform = "translateX(100%)";
    content5.style.transform = "translateX(0)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-balck)";
    btn4.style.color = "var(--default-black)";
    btn5.style.color = "var(--default-red)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = "0s";
    content4.style.transitionDelay = "0s";
    content5.style.transitionDelay = ".3s";
    
    content1.style.position = "absolute";
    content2.style.position = "absolute";
    content3.style.position = "absolute";
    content4.style.position = "absolute";
    content5.style.position = "relative";
}

//Função para donwload 
function imprimirFactura(event){
    let facturaClicked = event.target;
    
    let facturaId = facturaClicked.getAttribute('data-order-id');
    
    // Check if the order ID is valid
    if (facturaId) {
        // Send an AJAX request to generate the invoice
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'generate_invoice',
                orderId: facturaId
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

//Função para actulizar os dados do perfil
function updateProfile(){
    let userData = {};
    
    userData.nome = DOMPurify.sanitize(document.getElementById("nome").value);
    userData.sobrenome = DOMPurify.sanitize(document.getElementById("sobrenome").value);
    userData.telefone = DOMPurify.sanitize(document.getElementById("telefone").value);
    
    if(!userData.nome || !userData.sobrenome || !userData.telefone ){
        alert("Preencha todos os campos!");
    }else{
        // AJAX request
        jQuery.ajax({
            type: "POST",
            url: wc_add_to_cart_params.ajax_url, // The AJAX endpoint defined in WordPress
            data: {
                action: "update_user_profile", // Action name for the server-side function
                user_data: userData // Data to send to the server
            },
            beforeSend: function(){
                loader.classList.remove("loader__hidden");
            },
            success: function (response) {
                // Handle the server's response (e.g., display a success message)
                alert(response.message);
                window.location.href = './minha-conta/';
            },
            error: function (error) {
                console.error("Error updating profile:", error);
            },
            complete: function(){
                loader.classList.add("loader__hidden");
            }
        });
    }
}

//Função para actualizar o endereço do usuário
function updateAddress(){
    let userData = {};
    
    userData.provincia = DOMPurify.sanitize(document.getElementById("provincia").value);
    userData.municipio = DOMPurify.sanitize(document.getElementById("municipio").value);
    userData.endereco = DOMPurify.sanitize(document.getElementById("endereco").value);
    
    if(!userData.provincia || !userData.municipio || !userData.endereco){
        alert("Preencha todos os campos!");
    }else{
        // AJAX request
        jQuery.ajax({
            type: "POST",
            url: wc_add_to_cart_params.ajax_url, // The AJAX endpoint defined in WordPress
            data: {
                action: "update_user_address", // Action name for the server-side function
                user_data: userData // Data to send to the server
            },
            beforeSend: function(){
                loader.classList.remove("loader__hidden");
            },
            success: function (response) {
                // Handle the server's response (e.g., display a success message)
                alert(response.message);
                window.location.href = './minha-conta/';
            },
            error: function (error) {
                console.error("Erro ao actualizar endereço:", error);
            },
            complete: function(){
                loader.classList.add("loader__hidden");
            }
        });
    }
}

//Função para actualizar a senha
function updatePassword(){
    let userData = {};
    
    userData.senha = DOMPurify.sanitize(document.getElementById("senha").value);
    userData.novasenha = DOMPurify.sanitize(document.getElementById("novasenha").value);
    userData.confirmarsenha = DOMPurify.sanitize(document.getElementById("confirmarsenha").value);
    
    if(!userData.senha || !userData.novasenha || !userData.confirmarsenha){
        alert("Preencha todos os campos!");
    }else if (!isPasswordValid(userData.novasenha)) {
        alert("A senha deve atender aos requisitos de complexidade.");
    }else {
        // Validate the current password and update if valid
        validateAndUpdatePassword(userData);
    }
}

// Function to check if the password meets complexity requirements
function isPasswordValid(password) {
    // Define your complexity requirements here using regular expressions
    const minLength = 8; // Minimum length requirement
    const hasUpperCase = /[A-Z]/.test(password); // At least one uppercase letter
    const hasLowerCase = /[a-z]/.test(password); // At least one lowercase letter
    const hasDigit = /\d/.test(password); // At least one digit

    // You can add more requirements as needed

    // Check if the password meets all requirements
    return (
        password.length >= minLength &&
        hasUpperCase &&
        hasLowerCase &&
        hasDigit
        // Add more conditions for additional requirements if necessary
    );
}

// Function to validate the current password and update if valid
function validateAndUpdatePassword(userData) {
    // Send data to the server for validation
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'validate_and_update_password',
            current_password: userData.senha,
            new_password: userData.novasenha,
            confirm_password: userData.confirmarsenha
        },
        beforeSend: function(){
            loader.classList.remove("loader__hidden");
        },
        success: function (response) {
            // Handle the server's response
            if (response.success) {
                alert("Senha actualizada com sucesso!");
                window.location.href = './home/';
            } else {
                alert(response.message);
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

//Função para remover item no front
function removeWishItemFromProfile(event){
    let removeClicked = event.target;
    wishCounter('remove');
    removeWishItemFromProfileBack(removeClicked.getAttribute('data-product-id'));
    removeClicked.parentElement.parentElement.parentElement.remove();      
}

//Remover itens da lista de desejos back
function removeWishItemFromProfileBack(chave){
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