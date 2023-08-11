const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    navLinks.forEach(link => {
      link.classList.remove('active');
    });
    event.target.classList.add('active');
  });
});





// Function to collapse the navigation menu
function collapseNavbar() {
    var navbar = document.querySelector('.navbar-collapse');
    if (navbar.classList.contains('show')) {
      navbar.classList.remove('show');
    }
  }




  function updateNavColorOnScroll() {
    const sections = document.querySelectorAll("section"); // Get all sections

    // Loop through each section and check if it's in the viewport
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const navLink = document.querySelector(`[href="#${section.id}"]`);

        // Check if the section is in the viewport
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            // Set the color for the active section
            navLink.style.color = "red"; // Change this to your desired color
        } else {
            // Set the color for inactive sections
            navLink.style.color = "black"; // Change this to your default color
        }
    });
}

// Call the function when the page loads and on scroll
window.addEventListener("load", updateNavColorOnScroll);
window.addEventListener("scroll", updateNavColorOnScroll);





// Function to toggle mobile navigation menu
function toggleMobileMenu() {
    var navbar = document.getElementById("navbarNav");
    if (navbar.style.display === "block") {
      navbar.style.display = "none";
    } else {
      navbar.style.display = "block";
    }
  }
  
  // Attach click event to menu bar icon
  var menuIcon = document.querySelector(".navbar-toggler");
  menuIcon.addEventListener("click", toggleMobileMenu);
  