<?php get_header(); ?>

<!-- *****************************\
        secção de formulário de login
    \******************************/-->
    <section class="login__section">
        <div class="login__holder">
            <div class="login__container">
                <div class="login__container-header">
                    <h1 class="login__title">Página não encontrada</h1>
                    <p>Parece que nada foi encontrado neste local. Tente procurar e talvez encontre?</p>
                </div>
                <div class="login__data">
                    <div class="login__username-container">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="other__options">
                    <div class="other__option">
                        <p>Ou, <a href="<?php echo home_url(); ?>"> retorne para a página principal</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>