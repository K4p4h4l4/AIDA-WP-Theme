if(document.readyState == 'loading'){
    loader.classList.remove("loader__hidden");
    document.addEventListener('DOMContentLoaded', ready);
}else{
    loader.classList.add("loader__hidden");
    ready();
}

function ready(){
    let passowordResetButton = document.getElementById('passowordReset');
    passowordResetButton.addEventListener('click', passowordReset);
}

function passowordReset(){
    let userData = {};
    
    userData.email = DOMPurify.sanitize(document.querySelector('input[name="user_email"]').value);
    userData.resetkey = DOMPurify.sanitize(document.querySelector('input[name="reset_key"]').value);
    userData.novasenha = DOMPurify.sanitize(document.getElementById("novasenha").value);
    userData.confirmarsenha = DOMPurify.sanitize(document.getElementById("confirmarsenha").value);
    
    if(!userData.novasenha || !userData.confirmarsenha){
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
    
    if(!userData.email || !userData.resetkey){
        alert('Dados em falta para reset da senha');
    }else if(!isValidEmail(userData.email)){
        alert(userData.email + " email inválido."); 
    }else{
        // Send data to the server for validation
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'reset_password',
                user_email: userData.email,
                reset_key: userData.resetkey,
                new_password: userData.novasenha
            },
            beforeSend: function(){
                loader.classList.remove("loader__hidden");
            },
            success: function (response) {
                // Handle the server's response
                if (response.success) {
                    alert("Senha actualizada com sucesso! Você agora pode logar com a sua nova senha");
                    window.location.href = './login/';
                } else {
                    alert(response.message);
                }
            },
            error: function (error) {
                console.error('Erro:', error);
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