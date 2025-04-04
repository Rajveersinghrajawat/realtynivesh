window.addEventListener("scroll", function () {
  var header = document.querySelector(".header-bar");
  var logo = document.getElementById("logo-img");

  header.style.transition = "background 0.3s ease-in-out";
  logo.style.transition = "width 0.7s ease-in-out";

  if (window.scrollY > 50) {
    header.style.background = "black";
    logo.style.width = "80%";
  } else {
    header.style.background = "transparent";
    logo.style.width = "100%";
  }
});



function toggleContent() {
    var moreContent = document.getElementById("moreContent");
    var toggleButton = document.getElementById("toggleButton");
    
    if (moreContent.style.display === "none") {
        moreContent.style.display = "block";
        toggleButton.textContent = "READ LESS";
    } else {
        moreContent.style.display = "none";
        toggleButton.textContent = "READ MORE";
    }
}


document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");
  
    const options = {
      root: null,
      threshold: 0.5, // Starts animation when 50% of element is visible
    };
  
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = parseFloat(counter.getAttribute("data-target"));
          let current = 0;
          const increment = target / 100; // Controls speed
  
          const updateCounter = () => {
            current += increment;
            if (current >= target) {
              counter.textContent = target; // Ensure final value matches
            } else {
              counter.textContent = current.toFixed(1); // Keep one decimal
              requestAnimationFrame(updateCounter);
            }
          };
  
          updateCounter();
          observer.unobserve(counter); // Stop observing after animation
        }
      });
    }, options);
  
    counters.forEach((counter) => observer.observe(counter));
  });
  

  // slider

  const panels = document.querySelectorAll('.panel');
  let currentIndex = 0;
  let interval;
  
  const activatePanel = (index) => {
    panels.forEach(panel => panel.classList.remove('active'));
    panels[index].classList.add('active');
  };
  
  // Function to check if the device is mobile
  const isMobile = () => window.innerWidth <= 768;
  
  // Auto-play function for mobile
  const startAutoPlay = () => {
    if (!isMobile()) return; // Run only on mobile
    clearInterval(interval);
    interval = setInterval(() => {
      activatePanel(currentIndex = (currentIndex + 1) % panels.length);
    }, 3000);
  };
  
  // Initialize autoplay if mobile
  if (isMobile()) {
    startAutoPlay();
  }
  
  // Click event for manual selection
  panels.forEach((panel, index) => {
    panel.addEventListener('click', () => {
      activatePanel(currentIndex = index);
      startAutoPlay();
    });
  });
  
  // Reapply autoplay on window resize (switching between mobile and desktop)
  window.addEventListener('resize', () => {
    if (isMobile()) {
      startAutoPlay();
    } else {
      clearInterval(interval); // Stop autoplay on larger screens
    }
  });
  

  // Testimonial

  const testimonials = [
    {text: "We were impressed by the thoughtful design of the apartments at Medallion Aurum. The layout is perfect for our family, with plenty of natural light and ventilation. It truly feels like a home.", author: "Mrs. Neha Arora"},
    {text: "The location and amenities of this project exceeded our expectations. The planning and security features make it a perfect place to live.", author: "Mr. Siddharth Mehta"},
    {text: "A truly premium experience with excellent facilities and great connectivity. The team ensured a seamless process from booking to possession.", author: "Ms. Kaur"},
    {text: "Our family found the perfect home with Medallion Aurum. Spacious rooms, beautiful surroundings, and a peaceful atmosphere.", author: "The Gupta Family"}
];

function showTestimonial(index) {
    document.getElementById("testimonial-text").style.opacity = 0;
    document.getElementById("testimonial-author").style.opacity = 0;
    setTimeout(() => {
        document.getElementById("testimonial-text").innerText = testimonials[index].text;
        document.getElementById("testimonial-author").innerText = testimonials[index].author;
        document.getElementById("testimonial-text").style.opacity = 1;
        document.getElementById("testimonial-author").style.opacity = 1;
    }, 300);
    
    document.querySelectorAll('.client-list button').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.client-list button')[index].classList.add('active');
}
document.addEventListener("DOMContentLoaded", function () {
  const element = document.querySelector(".mobileOverlay");
  const urls = ['/webrealtynivesh/', '/realtynivesh/amenities.php', '/realtynivesh/gallery.php', 
    '/realtynivesh/plan.php', '/realtynivesh/location.php','/realtynivesh/price.php']; 

  if (element && urls.includes(window.location.pathname)) {
      element.classList.remove("mobileOverlay");
  }
});

// tab

$(document).ready(function () {
  $(".tab ul li").click(function () {
      var target = $(this).attr("data-target");

      // Remove active class from all tabs and hide all sections
      $(".tab ul li").removeClass("active");
      $(".content-section").hide();

      // Add active class to clicked tab and show the corresponding section
      $(this).addClass("active");
      $(target).fadeIn();
  });
});


// Lightbox Gallery

// query selectors
const lightboxEnabled = document.querySelectorAll('.lightbox-enabled');
const lightboxArray = Array.from(lightboxEnabled);
const lastImage = lightboxArray.length-1;
const lightboxContainer = document.querySelector('.lightbox-container');
const lightboxImage = document.querySelector('.lightbox-image');
const lightboxBtns = document.querySelectorAll('.lightbox-btn');
const lightboxBtnRight = document.querySelector('#right');
const lightboxBtnLeft = document.querySelector('#left');
const close = document.querySelector('#close');
let activeImage;
// Functions
const showLightBox = () => {lightboxContainer.classList.add('active')}

const hideLightBox = () => {lightboxContainer.classList.remove('active')}

const setActiveImage = (image) => {
lightboxImage.src = image.dataset.imgsrc;
activeImage= lightboxArray.indexOf(image);
}

const transitionSlidesLeft = () => {
  lightboxBtnLeft.focus();
  $('.lightbox-image').addClass('slideright'); 
   setTimeout(function() {
  activeImage === 0 ? setActiveImage(lightboxArray[lastImage]) : setActiveImage(lightboxArray[activeImage-1]);
}, 250); 


  setTimeout(function() {
    $('.lightbox-image').removeClass('slideright');
}, 500);   
}

const transitionSlidesRight = () => {
 lightboxBtnRight.focus();
$('.lightbox-image').addClass('slideleft');  
  setTimeout(function() {
   activeImage === lastImage ? setActiveImage(lightboxArray[0]) : setActiveImage(lightboxArray[activeImage+1]);
}, 250); 
  setTimeout(function() {
    $('.lightbox-image').removeClass('slideleft');
}, 500);  
}

const transitionSlideHandler = (moveItem) => {
  moveItem.includes('left') ? transitionSlidesLeft() : transitionSlidesRight();
}

// Event Listeners
lightboxEnabled.forEach(image => {
   image.addEventListener('click', (e) => {
    showLightBox();
    setActiveImage(image);
    })                     
    })
lightboxContainer.addEventListener('click', () => {hideLightBox()})
close.addEventListener('click', () => {hideLightBox()})
lightboxBtns.forEach(btn => {
btn.addEventListener('click', (e) => {
e.stopPropagation();
  transitionSlideHandler(e.currentTarget.id);
})
})

lightboxImage.addEventListener('click', (e) => {
e.stopPropagation();

})

