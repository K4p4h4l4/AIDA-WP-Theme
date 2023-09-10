const terms_modal = document.querySelector('.terms__modal');
const open_modal = document.querySelector('.open__terms-modal');
const close_modal = document.querySelector('.close__terms-modal');

open_modal.addEventListener('click', function (){
    terms_modal.showModal();
});

close_modal.addEventListener('click', function (){
    terms_modal.close();
});