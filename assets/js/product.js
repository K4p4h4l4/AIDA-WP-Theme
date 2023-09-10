const content1 = document.getElementById('content1');
const content2 = document.getElementById('content2');
const content3 = document.getElementById('content3');

const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');

function openProductDetails(){
    content1.style.transform = "translateX(0)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-red)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = ".3s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = "0s";
    
    content1.style.position = "relative";
    content2.style.position = "absolute";
    content3.style.position = "absolute";
}

function openProductSpecs(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(0)";
    content3.style.transform = "translateX(100%)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-red)";
    btn3.style.color = "var(--default-black)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = ".3s";
    content3.style.transitionDelay = "0s";
    
    content1.style.position = "absolute";
    content2.style.position = "relative";
    content3.style.position = "absolute";
}

function openProductReviews(){
    content1.style.transform = "translateX(100%)";
    content2.style.transform = "translateX(100%)";
    content3.style.transform = "translateX(0)";
    
    btn1.style.color = "var(--default-black)";
    btn2.style.color = "var(--default-black)";
    btn3.style.color = "var(--default-red)";
    
    content1.style.transitionDelay = "0s";
    content2.style.transitionDelay = "0s";
    content3.style.transitionDelay = ".3s";
    
    content1.style.position = "absolute";
    content2.style.position = "absolute";
    content3.style.position = "relative";
}

