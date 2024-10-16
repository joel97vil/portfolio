let seconds = 10;
let custom_event = $.support.touch ? "tap" : "click";


$(window).on("load", function() {
    //Capture any key pressed on the keyboard to write its value before the caret. 2 seconds later, redirect to home
    $(this).keypress(function(e){
        //TODO: En cas de que sigui el de borrar o suprimir, borrar caracter que toca
        $("#cursor").before(String.fromCharCode(e.which));
        window.setTimeout(redirect, 2000);
    });

    //Catch tap or click event. 2 seconds later, redirect to home
    $(this).on(custom_event, this, function () {
        window.setTimeout(redirect, 2000);
    });

    //Every second lapsed, update the countdown on the screen. If the seconds arrive to 0, redirect to home
    var x = setInterval(function() {
        updateCount();
    
        //If the seconds arrive
        if (seconds == 0) {
            clearInterval(x);
            redirect();
        }
    }, 1000);
});

//Home redirection
function redirect(){
    window.location.href = "/home";
}

//Update count logic
function updateCount(){
    seconds--;
    $("#seconds").text(seconds);
}