const mobileMenu = document.querySelector(".mobileMenu");
const barIcon = document.querySelector(".hoverImobile");
const crossIcon = document.querySelector(".mobileMenu .fa-xmark");
const mobileOverlay = document.querySelector(".mobileOverlay");

// for PC menu
const pcBarIcon = document.querySelector(".hoverI");
const pcCrossIcon = document.querySelector(".pcMenuclick .fa-xmark");
const pcMenuOuter = document.querySelector(".pcMenuOuter");
const MainMemuDiv = document.querySelector("nav aside:nth-child(2)");
const effectDIv = document.querySelector(".effectDIv");

// Open mobile menu
barIcon.onclick = () => {
    mobileMenu.classList.add("activeMenu");
    mobileOverlay.style.zIndex = "999";
};

// Close mobile menu
crossIcon.onclick = () => {
    mobileMenu.classList.remove("activeMenu");
    mobileOverlay.style.zIndex = "-999";
};


mobileOverlay.onclick = (event) => {
    if (!mobileMenu.contains(event.target) && !barIcon.contains(event.target)) {
        mobileMenu.classList.remove("activeMenu");
        mobileOverlay.style.zIndex = "-999";
    }
};

// for PC menu
pcBarIcon.onclick = () => {
    MainMemuDiv.style.transform = "scaleX(1.3)";
    pcMenuOuter.style.opacity = "1";
    pcMenuOuter.style.visibility = "visible";
    effectDIv.classList.add("activeDiv");
};

pcCrossIcon.onclick = () => {
    MainMemuDiv.style.transform = "scaleX(1)";
    pcMenuOuter.style.opacity = "0";
    pcMenuOuter.style.visibility = "hidden";
    effectDIv.classList.remove("activeDiv");
};

// Sticky header 
window.addEventListener("scroll", function () {
    const header = document.querySelector("header");

    if (window.scrollY > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

// FAQ 
const allFaq = document.querySelectorAll(".mobileMenu > ul > li > i");

allFaq.forEach((icon, i) => {
    icon.addEventListener("click", (event) => {
        event.stopPropagation();

        allFaq.forEach((otherIcon, index) => {
            if (i !== index) {
                const otherSubmenu = otherIcon.parentElement.querySelector("ul");
                if (otherSubmenu) {
                    otherSubmenu.classList.remove("activeFaq");
                    otherIcon.classList.add("fa-angle-down");
                    otherIcon.classList.remove("fa-angle-up");
                }
            }
        });

        const submenu = icon.parentElement.querySelector("ul");
        if (submenu) {
            submenu.classList.toggle("activeFaq");
            icon.classList.toggle("fa-angle-down");
            icon.classList.toggle("fa-angle-up");
        }
    });
});


// key heightlight
document.getElementById('prev').addEventListener('click', function() {
    var carousel = new bootstrap.Carousel(document.getElementById('carouselExample'));
    carousel.prev();
});

document.getElementById('next').addEventListener('click', function() {
    var carousel = new bootstrap.Carousel(document.getElementById('carouselExample'));
    carousel.next();
});