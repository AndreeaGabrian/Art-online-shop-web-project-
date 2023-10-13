$(document).ready(function() {
    // Set up variables
    var width = $(".carousel-images img").width();
    var count = $(".carousel-images img").length;
    var current = 1;

    // Set up events
    $(".carousel-prev").click(function() {
        if (current > 1) {
            current--;
            $(".carousel-images").css("transform", "translateX(-" + ((current - 1) * width) + "px)");
        }
    });

    $(".carousel-next").click(function() {
        if (current < count) {
            current++;
            $(".carousel-images").css("transform", "translateX(-" + ((current - 1) * width) + "px)");
        }
    });
});

function scrollToNextSection() {
    // Get the next section using the section's ID
    const nextSection = document.getElementById("next-section");

    // Scroll to the next section using the scrollTo() method
    nextSection.scrollIntoView({ behavior: "smooth" });
}