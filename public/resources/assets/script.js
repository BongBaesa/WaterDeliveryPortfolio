document.querySelectorAll(".read-more-link-feedback").forEach(function (link) {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        const hiddenDescription = this.previousElementSibling;
        hiddenDescription.classList.toggle("visible");

        if(hiddenDescription.classList.contains("visible")){
            this.textContent = "Read Less";
        } else {
            this.textContent = "Read More"
        }
    });
});


document.querySelectorAll(".read-more-link").forEach(function (link) {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        const hiddenDescription = this.previousElementSibling;
        hiddenDescription.classList.toggle("visible");
        
        if(hiddenDescription.classList.contains("visible")){
            this.textContent = "Read Less";
        } else {
            this.textContent = "Read More"
        }
    });
});


window.addEventListener('load', () => {
    const slides = document.querySelectorAll('.home-content, .home2-content');
    let currentIndex = 0;

    const showSlide = (index) => {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    };

    showSlide(currentIndex);

    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }, 20000);
});
