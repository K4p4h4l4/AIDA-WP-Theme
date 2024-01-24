
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
}

function ready(){
    //console.log('chegou2');
    const content1 = document.getElementById('content1');
    const content2 = document.getElementById('content2');
    const content3 = document.getElementById('content3');

    const btn1 = document.getElementById('btn1');
    const btn2 = document.getElementById('btn2');
    const btn3 = document.getElementById('btn3');

    let openReviewModalButton = document.getElementById('openReviewModal');
    if(openReviewModalButton){
       openReviewModalButton.addEventListener('click', openReviewModal);
    }
    
    let closeReviewModalButton = document.getElementById('closeReviewModal');
    
    if(closeReviewModalButton){
        closeReviewModalButton.addEventListener('click', closeReviewModal);
    }
    
    let submitReviewButton = document.getElementById('submitReview');
    if(submitReviewButton){
        submitReviewButton.addEventListener('click', submitReview);
    }

    const allStar = document.querySelectorAll('.rating2 i.material-icons');
    const ratingValue = document.querySelector('.rating2 input');
    
    allStar.forEach((item, idx)=>{
        item.addEventListener('click', function(){
            let click = 0;
            ratingValue.value = idx +1;
            
            allStar.forEach(i=>{
                i.innerText = 'star_outline';
                i.classList.remove('active2');
            });
            
            for(let i=0; i<allStar.length; i++){
                if(i<=idx){
                    allStar[i].innerText = 'star';
                    allStar[i].classList.add('active2');
                }else{
                    allStar[i].style.setProperty('--i', click);
                    click++;
                }

            }
        })
    });
}




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

//Função para abrir a modal de avaliação do produto
function openReviewModal(event){
    document.querySelector('.review__bg-modal').style.display='flex';
}

//Função para fechar a modal de avaliação de produto
function closeReviewModal(){
    document.querySelector('.review__bg-modal').style.display='none';
}

//função para submeter uma avaliação
function submitReview(){
    let reviewData = {};
    
    reviewData.productID = DOMPurify.sanitize(document.getElementById( "productID").value);
    reviewData.productRating = DOMPurify.sanitize(document.getElementById( "productRating").value);
    reviewData.productPost = DOMPurify.sanitize(document.getElementById( "productPost").value);
    console.log(reviewData);
    if(!reviewData.productRating || !reviewData.productPost){
        alert("Preencha os campos obrigatórios");
    }else{
        // Make an AJAX request to the server to submit the review
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'submit_product_review', // Action name defined in WordPress
                product_id: reviewData.productID,
                rating: reviewData.productRating,
                review: reviewData.productPost,
            },
            beforeSend: function () {
                // Display a loading indicator or disable the submit button
            },
            success: function (response) {
                if (response.success) {
                    // Review submitted successfully, display a success message
                    alert("Review submitted successfully!");
                    // Optionally, refresh the page or update the review section
                    location.reload();
                } else {
                    alert("Error: " + response.message);
                }
            },
            error: function (error) {
                console.error('Error:', error);
            },
            complete: function () {
                // Hide the loading indicator or enable the submit button
            },
        });
    }
}