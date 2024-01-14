if(document.readyState == 'loading'){
    loader.classList.remove("loader__hidden");
    document.addEventListener('DOMContentLoaded', ready);
}else{
    loader.classList.add("loader__hidden");
    ready();
}

function ready(){
    let enviar = document.getElementById("enviar");
    enviar.addEventListener('click', faleConnosco);
}

//Função 
function faleConnosco(){
    
    let userData = {};
    
    userData.nome = DOMPurify.sanitize(document.getElementById('nome').value);
    userData.email = DOMPurify.sanitize(document.getElementById("email").value);
    userData.assunto = DOMPurify.sanitize(document.getElementById("assunto").value);
    userData.mensagem = DOMPurify.sanitize(document.getElementById("mensagem").value);
    
    if(!userData.nome || !userData.email || !userData.assunto || !userData.mensagem ){
       alert("Preencha todos os campos!");
    }
    
        if(isValidEmail(userData.email)){
            //console.log(userData);
            // AJAX request para enviar uma mensagem para a AIDA
            jQuery.ajax({
                type: 'POST',
                url: wc_add_to_cart_params.ajax_url,
                data: {
                    action: 'talk_to_us',
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
                        //window.location.href= './home/';
                        document.getElementById('nome').value = '';
                        document.getElementById('email').value = '';
                        document.getElementById('assunto').value = '';
                        document.getElementById('mensagem').value = '';
                    } else {
                        loader.classList.add("loader__hidden");
                        alert("Erro ao enviar a sua mensagem !!! " + response);
                    }
                },
                error: function (error) {
                    console.error('Erro:', error);
                },
                /*complete: function(){
                    loader.classList.add("loader__hidden");
                }*/
            });
        }else{
            alert(userData.email + " email inválido.");
        }
    
}

//Verifica se o email é válido ou não
function isValidEmail(email) {
    // Regular expression for a basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
