if(document.readyState == 'loading'){
    loader.classList.remove("loader__hidden");
    document.addEventListener('DOMContentLoaded', ready);
}else{
    loader.classList.add("loader__hidden");
    ready();
}

//Function ready
function ready(){
    let btn_createAccount = document.getElementById("new_account");
    btn_createAccount.addEventListener('click', criarConta);
    
}


//Função para criar conta d usuário
function criarConta(){
    console.log("chegou");
    let userData = {};
    
    userData.nome = DOMPurify.sanitize(document.getElementById("nome").value);
    userData.sobrenome = DOMPurify.sanitize(document.getElementById("sobrenome").value);
    userData.email = DOMPurify.sanitize(document.getElementById("email").value);
    userData.provincia = DOMPurify.sanitize(document.getElementById("provincia").value);
    userData.municipio = DOMPurify.sanitize(document.getElementById("municipio").value);
    userData.endereco = DOMPurify.sanitize(document.getElementById("endereco").value);
    userData.senha = DOMPurify.sanitize(document.getElementById("senha").value);
    userData.telefone = DOMPurify.sanitize(document.getElementById("telefone").value);
    
    if(!userData.nome || !userData.sobrenome || !userData.email || !userData.provincia || !userData.municipio || !userData.endereco || !userData.senha || !userData.telefone ){
        alert("Preencha todos os campos!");
    }
    
    if(isValidEmail(userData.email)){
        
    }else{
        alert(userData.email + " email inválido.");
    }
    
    // AJAX request para registar usuário
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'register_user', // Action name defined in the server-side function
            userData: userData
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
                loader.classList.add("loader__hidden");
                alert("Erro registar o seu pedido!!!");
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

//Verifica se o email é válido ou não
function isValidEmail(email) {
    // Regular expression for a basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

