let header = document.querySelector("header");
let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  header.classList.toggle("shadow", window.scrollY > 0);


menu.onclick = () => {
  navbar.classList.toggle("active");
};
window.onscroll = () => {
  navbar.classList.remove("active");
};

// Dark Mode / light mode
let darkmode = document.querySelector("#darkmode");

darkmode.onclick = () => {
  if (darkmode.classList.contains("bx-moon")) {
    darkmode.classList.replace("bx-moon", "bx-sun");
    document.body.classList.add("active");
  } else {
    darkmode.classList.replace("bx-sun", "bx-moon");
    document.body.classList.remove("active");
  }
};
});

      var nameInput = document.getElementById('name');
      var emailInput = document.getElementById('email');
      var messageInput = document.getElementById('message');
      
      // Perform validation checks on the input fields
      if (nameInput.value.trim() === '') {
          alert('Please enter your name.');
          return;
      }
      
      if (emailInput.value.trim() === '') {
          alert('Please enter your email.');
          return;
      }
      
      if (messageInput.value.trim() === '') {
          alert('Please enter a message.');
          return;
      }
      
      // Submit the form
      contactForm.submit();

// Example - Fade in elements on page load
const fadeElems = document.querySelectorAll('.fade-in');
const options = {
  threshold: 0,
  rootMargin: "0px 0px -100px 0px"
};
const fadeInOnScroll = new IntersectionObserver(function(entries,
  fadeInOnScroll) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add('appear');
      fadeInOnScroll.unobserve(entry.target);
    }
  });
}, options);
fadeElems.forEach(fadeElem => {
  fadeInOnScroll.observe(fadeElem);
});