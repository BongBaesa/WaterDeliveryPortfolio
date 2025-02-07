function myFunction() {
    var Show = document.getElementById('password')
    if (Show.type == 'password') {
        Show.type = 'text';
    }
    else {
        Show.type = 'password';
    }
}

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

function toggleDropdown (id, isUserMenu = false) {
    const dropdown = document.getElementById(id);
    const overlay = document.querySelector('.overlay');
    const isCurrentlyOpen = dropdown.classList.contains("show");

    closeAllDropdowns();

    if (!isCurrentlyOpen) {
        dropdown.classList.add("show");
        
        if (isUserMenu) {
        overlay.classList.add("active");
        }
    }
}

function closeAllDropdowns() {
    document.querySelectorAll('.dropdown-content, .dropdown-content-inbox').forEach((el) => {
        el.classList.remove('show');
    });

    document.querySelector('.overlay').classList.remove("active");
}

document.querySelectorAll('.close-sidebar').forEach((btn) => {
    btn.addEventListener("click", closeAllDropdowns);
});


window.addEventListener('click', function(e) {
    if(!e.target.closest('.dropdown-user')) {
        closeAllDropdowns();
    }
});

function openModal(modalId) {
    var modal = new bootstrap.Modal(document.querySelector(modalId));
    modal.show();
}
