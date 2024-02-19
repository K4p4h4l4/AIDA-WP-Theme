if(document.readyState == 'loading'){
    
    document.addEventListener('DOMContentLoaded', ready);
}else{
    
    ready();
}

//Function ready
function ready(){
    let btn_createAccount = document.getElementById("new_account");
    btn_createAccount.addEventListener('click', criarConta);
    
}


//Função para criar conta d usuário
function criarConta(){
    
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
    }else if(!isValidEmail(userData.email)){
        alert(userData.email + " email inválido.");    
    }else if (!isPasswordValid(userData.senha)) {
        alert("A senha deve atender aos requisitos de complexidade.");
    }else{
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
                    //console.log(response.message);
                    alert(response.message);
                    window.location.href= './home/';
                } else {
                    loader.classList.add("loader__hidden");
                    alert("Erro ao registar os seus dados!!! " + response);
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
}

//Verifica se o email é válido ou não
function isValidEmail(email) {
    // Regular expression for a basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
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
