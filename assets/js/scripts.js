window.addEventListener("DOMContentLoaded", (event) => {
  // Navbar shrink function
  var navbarShrink = function () {
    const navbarCollapsible = document.body.querySelector("#mainNav");
    if (!navbarCollapsible) {
      return;
    }
    if (window.scrollY === 0) {
      navbarCollapsible.classList.remove("navbar-shrink");
    } else {
      navbarCollapsible.classList.add("navbar-shrink");
    }
  };

  // Shrink the navbar
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener("scroll", navbarShrink);

  // Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector("#mainNav");
  if (mainNav) {
    new bootstrap.ScrollSpy(document.body, {
      target: "#mainNav",
      rootMargin: "0px 0px -40%",
    });
  }

  // Collapse responsive navbar when toggler is visible
  const navbarToggler = document.body.querySelector(".navbar-toggler");
  const responsiveNavItems = [].slice.call(
    document.querySelectorAll("#navbarResponsive .nav-link")
  );
  responsiveNavItems.map(function (responsiveNavItem) {
    responsiveNavItem.addEventListener("click", () => {
      if (window.getComputedStyle(navbarToggler).display !== "none") {
        navbarToggler.click();
      }
    });
  });

  // Activate SimpleLightbox plugin for portfolio items
  new SimpleLightbox({
    elements: "#portfolio a.portfolio-box",
  });

  /**
   * Modal
   */

  var myModal = new bootstrap.Modal(document.getElementById("myModal"));
  if (myModal) {
    myModal.show();
    var closeButton = document.querySelector(".modal .close");
    closeButton.addEventListener("click", function () {
      myModal.hide();
    });
  }
});

/**
 * Dashboard Form Steps
 */

document.addEventListener("DOMContentLoaded", function () {
  const steps = Array.from(document.querySelectorAll(".step"));
  const nextBtn = document.querySelectorAll("form.dashboard .next");
  const prevBtn = document.querySelectorAll("form.dashboard .prev");
  const navItem = document.querySelectorAll("form.dashboard .nav-item");
  const form = document.querySelector("form.dashboard");

  if (form) {
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current

    // function changeStep(btn) {
    //   let index = 0;
    //   const active = document.querySelector(".active");
    //   index = steps.indexOf(active);
    //   steps[index].classList.remove("active");
    //   if (btn === "next") {
    //     index++;
    //   } else if (btn === "prev") {
    //     index--;
    //   }
    //   steps[index].classList.add("active");
    // }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i,
        x = document.getElementsByClassName("tab");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
        x[i].addEventListener("click", clickHandler(i));
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";

      function clickHandler(index) {
        return function () {
          if (index !== currentTab) {
            nextPrev(index - currentTab);
          }
        };
      }
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("step");
      // Exit the function if any field in the current tab is invalid:
      // if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("dashboard").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("step");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      document.getElementById("submit").style.display = "none";
      if (n == 0) {
        document.getElementById("prev").style.display = "none";
      } else {
        document.getElementById("prev").style.display = "inline";
      }
      if (n == x.length - 1) {
        document.getElementById("next").style.display = "none";
        document.getElementById("submit").style.display = "inline";
      } else {
        document.getElementById("next").style.display = "inline";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n);
    }

    nextBtn.forEach((button) => {
      button.addEventListener("click", () => {
        nextPrev(1);
      });
    });
    prevBtn.forEach((button) => {
      button.addEventListener("click", () => {
        nextPrev(-1);
      });
    });

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const inputs = [];
      form.querySelectorAll("input").forEach((input) => {
        const { name, value } = input;
        inputs.push({ name, value });
      });
      console.log(inputs);
      form.reset();
    });
  }
});
