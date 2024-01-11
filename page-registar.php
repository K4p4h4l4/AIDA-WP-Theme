<?php 
    //get header.php file
    get_header();
?>
    
    <!-- ***********************************\
        secção de formulário de registro
    \************************************/-->
    <section class="register__container">
        <div class="register__holder">
            <div class="register__section">
                <div class="register__container-header">
                    <h2 class="register__title">Criar na minha conta</h2>
                    <p>Preencha as informações abaixo:</p>
                </div>
                <form method="post" action="./registar/" name="usrAccount">
                    <div class="register__data">
                        <div class="register__usernames">
                            <div class="register__username-container">
                                <span class="input_icon">
                                    <i class="material-icons">person</i>
                                </span>
                                <input type="text" placeholder="Insira o seu nome" required class="register__user-data" id="nome" autocomplete="off">
                                <label for="nome" class="account__label">Nome</label>
                            </div>

                            <div class="register__username-container">
                                <span class="input_icon">
                                    <i class="material-icons">person</i>
                                </span>
                                <input type="text" placeholder="Insira o seu sobrenome" required class="register__user-data" id="sobrenome" autocomplete="off">
                                <label for="sobrenome" class="account__label">Sobrenome</label>
                            </div>
                        </div>

                        <div class="register__usernames">
                            <div class="register__address-container">
                                <span class="input_icon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input type="text" placeholder="Insira o seu e-mail" required class="register__address-data" id="email" autocomplete="off">
                                <label for="email" class="account__label">E-mail</label>
                            </div>
                        </div>

                        <div class="register__usernames">
                            <div class="register__username-container">
                                <span class="input_icon">
                                    <i class="material-icons">landscape</i>
                                </span>
                                <input type="text" placeholder="Insira a sua Província" required class="register__user-data" id="provincia" autocomplete="off">
                                <label for="provincia" class="account__label">Província</label>
                            </div>

                            <div class="register__username-container">
                                <span class="input_icon">
                                    <i class="material-icons">domain</i>
                                </span>
                                <input type="text" placeholder="Insira o seu Município" required class="register__user-data" id="municipio" autocomplete="off">
                                <label for="municipio" class="account__label">Município</label>
                            </div>
                        </div>

                        <div class="register__usernames">
                            <div class="register__address-container">
                                <span class="input_icon">
                                    <i class="material-icons">home</i>
                                </span>
                                <input type="text" placeholder="Insira o seu endereço" required class="register__address-data" id="endereco" autocomplete="off">
                                <label for="endereco" class="account__label">Endereço</label>
                            </div>
                        </div>

                        <div class="register__usernames">
                            <div class="register__username-container">
                                <span class="input_icon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <input type="password" placeholder="Crie uma nova senha" required class="register__user-data" id="senha" autocomplete="off">
                                <label for="senha" class="account__label">Senha</label>
                            </div>

                            <div class="register__username-container">
                                <!--span class="input_icon">
                                    <i class="material-icons">cellphone</i>
                                </span-->
                                <input type="number" placeholder="Insira o número de telefone" required class="register__user-data" id="telefone" autocomplete="off" min="910000000" value="910000000">
                                <label for="telefone" class="account__label">Telefone</label>
                            </div>
                        </div>

                    </div>
                </form>
                
                <div class="login__btn-container">
                    <button class="btn__login" id="new_account">Criar conta</button>
                </div>
                
                <div class="other__options">
                    <div class="other__option">
                        <p>Já tem conta? <a href="./login/">Entre aqui!</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
   <?php  
    get_footer();        
?>
