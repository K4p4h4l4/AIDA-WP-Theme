<?php 
    get_header();
?>
    
    <!-- ***********************************************\
        secção de formulário de recuperção de senha
    \************************************************/-->
    <section class="login__section">
        <div class="login__holder">
            <div class="login__container">
                <div class="login__container-header">
                    <h2 class="login__title">Recetar senha</h2>
                    <p>Digite a sua senha</p>
                </div>
                <form id="password-reset-form" action="" method="post">
                    <div class="login__data">
                        <div class="login__username-container">                        
                            <span class="input_icon">
                                <i class="material-icons">lock</i>
                            </span>
                            <input type="password" placeholder="Insira a sua nova senha" required class="login__user-data" id="novasenha" autocomplete="off">
                            <label for="password" class="account__label">Nova Senha</label>                    
                        </div>
                        <div class="login__username-container">                        
                            <span class="input_icon">
                                <i class="material-icons">lock</i>
                            </span>
                            <input type="password" placeholder="Confirme a sua nova senha" required class="login__user-data" id="confirmarsenha" autocomplete="off">
                            <label for="password" class="account__label">Confirmar Senha</label>                    
                        </div>
                    </div>
                    <input type="hidden" name="action" value="reset-password">
                    <input type="hidden" name="user_email" value="<?php echo esc_attr( $_GET['email'] ); ?>">
                    <input type="hidden" name="reset_key" value="<?php echo esc_attr( $_GET['key'] ); ?>">
                    
                </form>
                <div class="login__btn-container">
                    <button  class="btn__login" id="passowordReset">Redefinir senha</button>
                </div>
            </div>
        </div>
    </section>
    
    
<?php   
    get_footer();
?>
