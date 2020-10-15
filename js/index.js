function slideshow() {

    let slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.querySelectorAll(".slide");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
}

slideshow();

function goToSecton(section){
        let el = document.getElementById(section);
        let elTop = el.offsetTop - 60;
        window.scroll({
            top: elTop,
            behavior: "smooth"
        })
}


function openReservation () {
    let el = document.querySelector('.modal');
    el.classList.add('show');

    document.body.style.overflow = 'hidden';
}

function closeReservation () {
    let el = document.querySelector('.modal');
    el.classList.remove('show');

    document.body.style.overflow = 'auto';
}