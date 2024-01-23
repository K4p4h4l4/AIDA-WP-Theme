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
    // Send data to the server for validation
    jQuery.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: 'reset_password_request',
            new_password: userData.novasenha,
            confirm_password: userData.confirmarsenha
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
            console.error('Erro:', error);
        }
    });
}