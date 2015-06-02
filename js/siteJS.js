function pageLoad() {
    $( ".signUp" ).hide();
    $( ".logIn" ).hide();        
}
function signUpClick() {
    pageLoad();
    $( ".signUp" ).fadeIn();        
};
function logInClick() {
    pageLoad();
    $( ".logIn" ).fadeIn();
        
}