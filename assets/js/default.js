document.addEventListener('DOMContentLoaded', function () {
    const loader = document.querySelector(".loader__container");
    loader.classList.add("loader__hidden");
    
    loader.addEventListener("transitionend", () =>{
        //document.body.removeChild(loader);
        loader.classList.add("loader__hidden");
    });
    
    document.getElementById('products__cart').addEventListener('click', function () {
        document.querySelector('.cart__list-holder').classList.toggle("cart__list-active");
    } );

    document.getElementById('products__wish').addEventListener('click', function () {
        document.querySelector('.wish__list-holder').classList.toggle("wish__list-active");
    });

    let user__profile = document.getElementById('user__profile')
    if(user__profile){
        user__profile.addEventListener('click', function () {
            document.querySelector('.user__profile-holder').classList.toggle("user__menu-active");
        });
    }
    
    const menuOptions = document.querySelectorAll('.main__options'); // Seleciona todos os elementos principais que têm submenus
    menuOptions.forEach(option => {
        const expandIcon = option.querySelector('.expand'); // O ícone que expande o submenu
        const submenu = option.querySelector('.main__options-streaming, .main__options-informatic, .main__options-tvbox, .main__options-tablet, .main__options-paper, .main__options-games, .main__options-printer'); // Submenu específico

        expandIcon.addEventListener('click', function (e) {
            e.preventDefault(); // Previne ação padrão, se houver alguma (não essencial, mas pode ajudar em certos casos)
            e.stopPropagation(); // Evita que o evento se propague para elementos acima
            submenu.classList.toggle('submenu__active'); // Ativa ou desativa a visibilidade do submenu

            // Alterna o ícone de expansão para indicar o estado aberto/fechado
            if (submenu.classList.contains('submenu__active')) {
                this.innerHTML = 'expand_less'; // Mudar ícone para "expand_less" quando aberto
            } else {
                this.innerHTML = 'expand_more'; // Mudar ícone para "expand_more" quando fechado
            }
        });
    });

    // Tratamento do botão de menu em telas menores
    const menuButton = document.querySelector('.menu__button');
    if (menuButton) {
        menuButton.addEventListener('click', function () {
            document.querySelector('.main__menu').classList.toggle('show__menu');
            this.classList.toggle('is-active'); // Adiciona uma classe para mudar o ícone/menu visualmente se necessário
        });
    }
});
