if(document.readyState == 'loading'){
    loader.classList.remove("loader__hidden");
    document.addEventListener('DOMContentLoaded', ready);
}else{
    loader.classList.add("loader__hidden");
    ready();
}

function ready(){
    let login_btn = document.getElementById('login');
    login_btn.addEventListener('click', fazerLogin);
}

//Função para o cliente fazer o login na sua conta
function fazerLogin(){
    
    let userData = {};
    
    userData.email = DOMPurify.sanitize(document.getElementById("email").value);
    userData.senha = DOMPurify.sanitize(document.getElementById("senha").value);
    
    if(!userData.email || !userData.senha){
       alert("Preencha todos os campos!");
    }else{
       if(isValidEmail(userData.email)){
           // AJAX request to perform login
            jQuery.ajax({
                type: 'POST',
                url: login_params.ajaxurl,
                data: {
                    action: 'user_login', // Action name defined in the server-side function
                    userData: userData,
                    security: login_params.ajax_nonce,
                },
                beforeSend: function() {
                    // Show loader or perform any pre-request actions
                    loader.classList.remove("loader__hidden");
                },
                success: function(response) {
                    // Handle the server's response
                    // Hide loader or perform any post-request actions
                    loader.classList.add("loader__hidden");
                    if (response.success) {
                        console.log(response.message);
                        // Redirect or perform any action upon successful login
                        window.location.href = './home/';
                    } else {
                        alert(response.message);
                    }
                },
                error: function(error) {
                    // Hide loader or perform any post-request actions
                    loader.classList.add("loader__hidden");
                    console.error('Error:', error);
                },
                complete: function() {
                    //setInterval(()=>{}, 4000);
                    
                }
            });
       }else{
           alert(userData.email + " email inválido.");
       }
    }
}

//Verifica se o email é válido ou não
function isValidEmail(email) {
    // Regular expression for a basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}