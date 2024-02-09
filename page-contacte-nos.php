<?php 
    /* Template Name: Contacte-nos */
    //get header.php file
    get_header();
?>
    
    
    <!-- *****************************\
             secção de contactos
    \******************************/-->
    <section class="contacts__section">
        <div class="contacts__holder">
           
            <!-- *****************************\
                         Contactos
            \******************************/-->
            <div class="contact__header-holder">
                <div class="contact__header-title">
                    <h2 class="contact__title">Contactos</h2>
                    <h3 class="contact__subtitle">Alguma dúvida sobre a compra de uma solução ou item na qual está interessado?</h3>
                    <p class="contact__p">Estamos disponíveis para ajudar</p>
                </div>
            </div>
            
            <div class="contacts__info-holder">
                <div class="contact__company-info">
                    <div class="contact__company-holder">
                        <div class="contact__company-icon">
                            <i class="material-icons">location_on</i>
                        </div>
                        <div class="contact__company-text">
                            <div class="company__text-title">Endereço</div>
                            <div class="contact__text-p">Viana, Zango 0, Vida Pacífica, Zona II, Bloco II, prd IV</div>
                        </div>
                    </div>
                    <div class="contact__company-holder">
                        <div class="contact__company-icon">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="contact__company-text">
                            <div class="company__text-title">Telefone</div>
                            <div class="contact__text-p">+244-923-695-077</div>
                        </div>
                    </div>
                    <div class="contact__company-holder">
                        <div class="contact__company-icon">
                            <i class="material-icons">mail</i>
                        </div>
                        <div class="contact__company-text">
                            <div class="company__text-title">E-mail</div>
                            <div class="contact__text-p">info@aida.ao</div>
                        </div>
                    </div>
                </div>
                
                <div class="contact__user-info">
                    <form action="./contacte-nos/" method="post">
                        <div class="contact__username-container">
                            <span class="input_icon">
                                <i class="material-icons">person</i>
                            </span>
                            <input type="text" placeholder="Insira o seu nome" required class="contact__user-data" id="nome" autocomplete="off">
                            <label for="nome" class="account__label">Nome</label>
                        </div>

                        <div class="contact__username-container">
                            <span class="input_icon">
                                <i class="material-icons">email</i>
                            </span>
                            <input type="email" placeholder="Insira o seu e-mail" required class="contact__user-data" id="email" autocomplete="off">
                            <label for="email" class="account__label">E-mail</label>
                        </div>
                        <div class="contact__username-container">
                            <span class="input_icon">
                                <i class="material-icons">border_color</i>
                            </span>
                            <input type="text" placeholder="Insira o assunto" required class="contact__user-data" id="assunto" autocomplete="off">
                            <label for="assunto" class="account__label">Assunto</label>
                        </div>
                        <div class="contact__username-container">
                            <textarea name="contact__comments" cols="5" rows="5" class="contact__comments" placeholder="Escreva suas dúvidas aqui" id="mensagem"></textarea>
                            <label for="mensagem" class="account__label">Mensagem</label>
                        </div>
                    </form>
                    
                    <div class="contact__sendsms-container">
                        <button class="button__shipping" id="enviar"><i class="material-icons">send</i> Enviar</button>
                    </div>
                </div>
            </div>
            
            <div class="contacts__map-holder">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.882811664862!2d13.391538379216447!3d-8.982929968068106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a5202fc604e3123%3A0x8444245e86a093d6!2sZango!5e0!3m2!1spt-PT!2sao!4v1694172325880!5m2!1spt-PT!2sao" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    
<?php 
    
    get_footer();
?>