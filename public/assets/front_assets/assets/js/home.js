$(document).ready(function () {
    // Function to handle the navbar's background color on scroll
    function handleNavbarBackgroundColor() {
        if ($(window).scrollTop() > $(".content-section").offset().top - 50) {
            // Adjust the 50px to when you want the background color to change
            $(".navbar").addClass("navbar-scrolling-bg");
            $(".navbar").removeClass("navbar-scrolling-bg-undo");
        } else {
            $(".navbar").removeClass("navbar-scrolling-bg");
            $(".navbar").addClass("navbar-scrolling-bg-undo");
        }
    }

    // Update navbar background color on scroll
    $(window).on("scroll", function () {
        handleNavbarBackgroundColor();
    });

    // Your existing code for scrolling to top on page refresh
    window.scrollTo(0, 0);

    // Your existing updateNavOnScroll function and related code here
    // Ensure you incorporate this snippet within your existing $(document).ready() block
});

// scrolling to specific div with css by supraa
$(document).ready(function () {
    function updateNavOnScroll() {
        var scrollPos = $(document).scrollTop();
        if (scrollPos < 100) {
            // Assuming "Home" is considered active within 100px from the top
            $(".navbar .nav-link").removeClass("active"); // Remove active from all nav-links
            $(".navbar .nav-link[href='#header']").addClass("active"); // Adjust the selector as needed
        } else {
            $(".navbar .nav-link").each(function () {
                var currLink = $(this);
                var refElementId = currLink.attr("href");
                // Skip processing for href="#" only to prevent errors
                if (refElementId !== "#" && refElementId.startsWith("#")) {
                    var refElement = $(refElementId);
                    if (refElement.length > 0) {
                        if (
                            refElement.offset().top - 125 <= scrollPos &&
                            refElement.offset().top + refElement.height() >
                                scrollPos
                        ) {
                            $(".navbar .nav-link").removeClass("active");
                            currLink.addClass("active");
                        } else {
                            currLink.removeClass("active");
                        }
                    }
                }
            });
        }
    }
    $(window).on("scroll", updateNavOnScroll);
});

document.addEventListener("DOMContentLoaded", function () {
    // Get all nav-link elements
    const navLinks = document.querySelectorAll(".navbar .nav-link");

    // Add click event listener to each nav-link
    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            // Remove active class from all nav-links
            navLinks.forEach((nav) => nav.classList.remove("active"));

            // Add active class to the clicked nav-link
            this.classList.add("active");
        });
    });
});
