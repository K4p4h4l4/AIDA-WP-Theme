if(document.readyState == 'loading'){
    loader.classList.remove("loader__hidden");
    document.addEventListener('DOMContentLoaded', ready);
}else{
    loader.classList.add("loader__hidden");
    ready();
}


function ready(){
    let passowordRecoveryButton = document.getElementById('passowordRecovery');
    passowordRecoveryButton.addEventListener('click', passowordRecovery);
}


//Função para recuperar senha de email
function passowordRecovery(){
    let userEmail = DOMPurify.sanitize(document.getElementById("user_email").value);
    
    if (!userEmail) {
        alert("Por favor insira o seu email.");
    }else if(!isValidEmail(userEmail)){
        alert(userEmail + " email inválido.");   
    }else {
        // Make an AJAX request to the server to initiate the password reset
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url, // Replace with your server endpoint
            data: {
                action: 'reset_password_request', // Action name defined in WordPress
                user_email: userEmail,
            },
            beforeSend: function () {
                loader.classList.remove("loader__hidden");
            },
            success: function (response) {
                if (response.success) {
                    alert("Email de reset de senha. Por favor verifique o seu email.");
                    window.location.href = './home/';
                } else {
                    alert("Erro: " + response.message);
                }
            },
            error: function (error) {
                alert("Erro: " + error);
            },
            complete: function () {
                loader.classList.add("loader__hidden");
            },
        });
    }
}

//Verifica se o email é válido ou não
function isValidEmail(email) {
    // Regular expression for a basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}