const caroussel__imgs = document.querySelectorAll('.caroussel__imgs'),
    dot = document.querySelectorAll('.dot');

let counter = 1;
slidefun(counter);

let timer = setInterval(autoslide, 8000);

function autoslide(){
    counter += 1;
    slidefun(counter);
}

function plusSlides(n){
    counter += n;
    slidefun(counter);
    resetTimer();
}

function currentSlide(n){
    counter = n;
    slidefun(counter);
    resetTimer();
}

function resetTimer(){
    clearInterval(timer);
    timer = setInterval(autoslide, 8000);
}

function slidefun(n){
    let i;
    for(i = 0;i<caroussel__imgs.length;i++){
        caroussel__imgs[i].style.display = "none";
    }
    
    for(i = 0;i<dot.length;i++){
        dot[i].classList.remove('dotactive');
    }
    if(n > caroussel__imgs.length){
        counter = 1;
    }
    if(n<1){
        counter = caroussel__imgs.length;
    }
    caroussel__imgs[counter - 1].style.display = "block";
    dot[counter - 1].classList.add('dotactive');
}