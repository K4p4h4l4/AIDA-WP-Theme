<!-- *****************************\
             Footer
    \******************************/-->
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Categorias</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Streaming e Gift Cards', 'product_cat'))); ?>" class="option">Streaming e Gift Cards</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Informática', 'product_cat'))); ?>" class="option">Informática</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'TV Box', 'product_cat'))); ?>" class="option">TV Box</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Smartphones e Tablets', 'product_cat'))); ?>" class="option">Smarthphones e Tablets</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Consumíveis e Papel', 'product_cat'))); ?>" class="option">Consumíveis e Papel</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Jogos e Consola', 'product_cat'))); ?>" class="option">Jogos e Consola</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Impressoras e Scanners', 'product_cat'))); ?>" class="option">Impressoras e Scanners</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo esc_url(get_term_link(get_term_by('name', 'Imagem e Som', 'product_cat'))); ?>" class="option">Imagem e Som</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Informação</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="<?php echo get_permalink( get_page_by_path( 'sobre-nos' ) ); ?>" class="option">Sobre nós</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo get_permalink( get_page_by_path( 'contacte-nos' ) ); ?>" class="option">Contacte-nos</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo get_permalink( get_page_by_path( 'politica-de-privacidade' ) ); ?>" class="option">Política de Privacidade</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo get_permalink( get_page_by_path( 'termos-e-condicoes' ) ); ?>" class="option">Termos & Condições</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Serviços</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Minha conta</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo get_permalink( get_page_by_path( 'carrinho' ) ); ?>" class="option">Carrinho</a>
                    </div>
                    <div class="footer__options">
                        <a href="<?php echo get_permalink( get_page_by_path( 'favoritos' ) ); ?>" class="option">Lista de desejos</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Contacte-nos</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                       
                        <a href="#" class="option"><i class="material-icons">phone</i> +244-923-695-077</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">email</i> geral@aida.ao</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">room</i> Viana, Zango 0, Vida Pacífica, Zona II</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    <!-- *****************************\
             Footer bottom
    \******************************/-->
    <div class="footer__bottom">
        <div class="footer__bottom-details">
            <span>© <?php echo date('Y'); ?> AIDA - Advanced Internet Design Angola™ . Todos os Direitos Reservados</span>
        </div>
    </div>
    <?php wp_footer(); ?>
    
</body>

</html>