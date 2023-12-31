let seconds = 10;

$(window).on("load", function() {
    //Capture any key pressed on the keyboard to write its value before the caret. 2 seconds later, redirect to home
    $(this).keypress(function(e){
        //TODO: En cas de que sigui el de borrar o suprimir, borrar caracter que toca
        $("#cursor").before(String.fromCharCode(e.which));
        window.setTimeout(redirect, 2000);
    });
    
    //TODO: Veure com capturar events de pantalla de mòbil

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