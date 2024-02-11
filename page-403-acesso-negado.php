<?php 
    
    /**
     * Template Name: 403 Acesso negado
     */
    get_header(); 
?>

<!-- *****************************\
        secção de formulário de login
    \******************************/-->
    <section class="login__section">
        <div class="login__holder">
            <div class="login__container">
                <div class="login__container-header">
                    <h1 class="login__title">403 Acesso Negado</h1>
                    <p>Desculpa, mas você não tem permissão para acessar essa página.</p>
                </div>
                <div class="other__options">
                    <div class="other__option">
                        <p><a href="<?php echo home_url(); ?>">Retorne para a página principal</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>