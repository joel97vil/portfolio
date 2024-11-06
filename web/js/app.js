$ = jQuery;
(function () {
    [...document.querySelectorAll(".control")].forEach(button => {
        button.addEventListener("click", function() {
            document.querySelector(".active-btn").classList.remove("active-btn");
            this.classList.add("active-btn");
            document.querySelector(".active").classList.remove("active");
            document.getElementById(button.dataset.id).classList.add("active");
        })
    });

    document.querySelector(".theme-btn").addEventListener("click", () => {
        document.body.classList.toggle("light-mode");
        $("#btn-close-modal").toggleClass('btn-close-white');
    });
})();

$( window ).on( "load", function() {
    $(".language-btn").on("click", function(e) {
        e.preventDefault();
        $("#languages-modal").modal('show');
    });

    $(".blog").on("click", function(e) {
        e.preventDefault();
        $("#blog-modal").modal('show');
        //TODO: Ajax call to render clicked blog content
    });

    $('#submit-form').on('click', function(e) {
        e.preventDefault();
        $('#contact-form').submit();
    });

});

setTimeout(function() {
    $('.alert').fadeOut('slow');
}, 8000); // 8 seconds