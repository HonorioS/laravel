function showPassword() {
    var password = document.getElementById('pwd');
    if (password.type === 'password') {
        password.type = "text";
    } else {
        password.type = "password";
    }
}


$(document).ready(function() {

    $(".btn-showPasswordn").click(function() {
        showPassword()
    })

})