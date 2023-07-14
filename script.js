const slides = document.querySelectorAll(".photo-slide");
let currentSlide = 0;

function showSlide() {
  slides[currentSlide].classList.remove("active");
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add("active");
}

setInterval(showSlide, 5000);

window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


// off canvas menu//

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function validateForm(event) {
  event.preventDefault(); // Prevent form submission

  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmPassword').value;
  var passwordError = document.getElementById('passwordError');

  // Check if the passwords match
  if (password !== confirmPassword) {
    passwordError.textContent = "Passwords do not match.";
    return;
  }

  // Check if the password is strong
  if (!isStrongPassword(password)) {
    passwordError.textContent = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.";
    return;
  }

  // If everything is valid, submit the form
  passwordError.textContent = ""; // Clear any previous error messages
  event.target.submit();
}

function isStrongPassword(password) {
  // Regular expression to match strong password criteria
  var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
  return passwordRegex.test(password);
}
