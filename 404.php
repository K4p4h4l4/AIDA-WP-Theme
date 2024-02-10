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
                        <p>Or, <a href="<?php echo home_url(); ?>">return to the homepage</a>.</p>
                        <span class="input_icon">
                            <i class="material-icons">email</i>
                        </span>
                        <input type="email" placeholder="Insira o seu e-mail" required class="login__user-data" id="email" autocomplete="off">
                        <label for="email" class="account__label">E-mail</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
<main>
    <section>
        
        
    </section>
</main>

<?php get_footer(); ?>