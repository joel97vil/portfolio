$ = jQuery;

function setCookie(name, value, days) {
    var expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/';
}

function getCookie(name) {
    return document.cookie.split('; ').reduce(function(r, v) {
        var parts = v.split('=');
        return parts[0] === name ? decodeURIComponent(parts[1]) : r;
    }, null);
}

(function () {
    // Restore saved color mode before first paint
    if (getCookie('colorMode') === 'light') {
        document.body.classList.add('light-mode');
        var closeBtn = document.getElementById('btn-close-modal');
        if (closeBtn) closeBtn.classList.remove('btn-close-white');
    }

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
        var isLight = document.body.classList.contains("light-mode");
        setCookie('colorMode', isLight ? 'light' : 'dark', 365);
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
