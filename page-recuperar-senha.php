<?php 
    get_header();
?>
    
    <!-- *****************************\
        secção de formulário de login
    \******************************/-->
    <section class="login__section">
        <div class="login__holder">
            <div class="login__container">
                <div class="login__container-header">
                    <h2 class="login__title">Recuperar a senha</h2>
                    <p>Digite o seu email</p>
                </div>
                <div class="login__data">
                    <div class="login__username-container">
                        <span class="input_icon">
                            <i class="material-icons">email</i>
                        </span>
                        <input type="email" placeholder="Insira o seu e-mail" required class="login__user-data">
                        <label for="email" class="account__label">E-mail</label>
                    </div>
                </div>
                <div class="login__btn-container">
                    <button class="btn__login">Recuperar</button>
                </div>
                <div class="other__options">
                    <div class="other__option">
                        <p>Lembra da senha? <a href="./login/">Voltar ao login</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
<?php   
    get_footer();
?>
