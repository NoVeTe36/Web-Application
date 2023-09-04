function checkPassword(){
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    if(password != confirm_password){
        alert("Password and Confirm Password are not the same");
        return false;
    }
    return true;
}

$(document).ready(function(){
    $("input[type='submit']").click(function(){
        if(checkPassword()){
            alert("Sign Up Successfully");
        }
    });
    $("input[type='reset']").click(function(){
        $("#username").val("");
        $("#password").val("");
        $("#confirm_password").val("");
    });
});