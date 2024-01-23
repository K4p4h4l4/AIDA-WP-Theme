<?php 
    //get header.php file
    get_header();
?>
    
    <!-- *****************************\
        secção de formulário de login
    \******************************/-->
    <section class="login__section">
        <div class="login__holder">
            <div class="login__container">
                <div class="login__container-header">
                    <h2 class="login__title">Entrar na minha conta</h2>
                    <p>Digite o seu email e senha</p>
                </div>
                <div class="login__data">
                    <div class="login__username-container">
                        <span class="input_icon">
                            <i class="material-icons">email</i>
                        </span>
                        <input type="email" placeholder="Insira o seu e-mail" required class="login__user-data" id="email" autocomplete="off">
                        <label for="email" class="account__label">E-mail</label>
                    </div>
                    <div class="login__username-container">
                        <span class="input_icon">
                            <i class="material-icons">lock</i>
                        </span>
                        <input type="password" placeholder="Insira a sua senha" required class="login__user-data" id="senha" autocomplete="off">
                        <label for="password" class="account__label">Senha</label>
                    </div>
                </div>
                <div class="login__btn-container">
                    <button class="btn__login" id="login">Login</button>
                </div>
                <div class="other__options">
                    <div class="other__option">
                        <p>Novo Cliente? <a href="./registar/">Crie a sua conta</a></p>
                    </div>
                    <div class="other__option">
                        <p>Esqueceu a senha? <a href="./recuperar-senha/">Recupere sua senha</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
 <?php 
    
    get_footer();        
?>
