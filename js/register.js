function userCheck() {
    correctUname = /^[A-Za-z0-9]+$/;

    var unm = document.getElementById("uname").value;

    var pass = document.getElementById("pwd").value;
    var cpass = document.getElementById("cpwd").value;
    // UserName Validation

    if (unm.match(correctUname))
        true;
        else {
        document.getElementById("error_Message").innerHTML = "Username cannot have special characters!"
        return false;
    }

    if(pass==cpass)
        true;
        else {
        document.getElementById("error_Message").innerHTML = "Passwords do not match!"
        }

}
<<<<<<< Updated upstream
=======


function loginCheck(){

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if()
    document.getElementById("error_Message").innerHTML = "Username cannot have special characters!"
}
>>>>>>> Stashed changes
